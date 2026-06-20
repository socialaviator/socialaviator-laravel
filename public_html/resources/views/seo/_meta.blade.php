{{--
    Server-side SEO output for the Inertia SPA (Option B: no Node SSR process).

    WHY: The frontend is Laravel + Inertia + React. Inertia injects per-page
    <Head> tags only AFTER client-side hydration, so crawlers / curl that read
    the first HTML response saw no meta description, OG, Twitter, H1 or schema
    ("missing meta description / OG / Twitter" Ahrefs warnings). Hostinger shared
    hosting can't reliably keep the inertia:start-ssr Node daemon alive, so true
    SSR is not durable here. Instead we resolve the SAME meta fields server-side
    from the Inertia $page payload (Inertia shares 'component' + 'props' with the
    root Blade view) and Eloquent models, and emit them in the initial HTML.

    NO DUPLICATES: every managed tag carries the `inertia` attribute (head-key),
    matching the existing `<title inertia>`. On hydration Inertia's <Head> replaces
    any tag with a matching key, so React's client tags overwrite these rather than
    stacking. Tags React doesn't manage (JSON-LD, server H1 fallback) are inert.

    Fields verified against the live data-page payload:
      Page (about/faq/contact): props.{about|faq|contact}.{title,meta_title,meta_description,meta_image_url}
      Service: props.service.{title,meta_title,meta_description,meta_image_url}
      Blog detail: props.blog.{title,meta_title,meta_description,thumbnail_image_url,content,created_at,user_name,category_name}
      Home / blog index: fall back to global Setting meta_* (already loaded above).
--}}
@php
    // $page is the Inertia payload array shared with the root view.
    $__c     = $page['component'] ?? '';
    $__props = $page['props'] ?? [];

    // Global fallbacks (already pulled above in frontend.blade.php).
    $seoTitle = $meta_title ?: config('app.name');
    $seoDesc  = $meta_description ?: '';
    $seoImage = $meta_image ?: '';
    $seoType  = 'website';
    $seoH1    = $meta_title ?: config('app.name');
    $schemaBlocks = [];

    // Resolve the per-page entity for the current component.
    $entity = null;
    if (str_starts_with($__c, 'Page/')) {
        $entity = $__props['about'] ?? $__props['faq'] ?? $__props['contact'] ?? $__props['page'] ?? null;
    } elseif ($__c === 'Services/ServiceDetailsPage') {
        $entity = $__props['service'] ?? null;
    } elseif ($__c === 'Blogs/BlogDetails') {
        $entity = $__props['blog'] ?? null;
        $seoType = 'article';
    }

    $eget = function ($e, $k) {
        if (is_array($e)) return $e[$k] ?? null;
        if (is_object($e)) return $e->{$k} ?? null;
        return null;
    };

    if ($entity) {
        $seoTitle = $eget($entity,'meta_title') ?: $eget($entity,'title') ?: $seoTitle;
        $seoDesc  = $eget($entity,'meta_description') ?: $seoDesc;
        $seoH1    = $eget($entity,'title') ?: $seoH1;
        $img      = $eget($entity,'meta_image_url') ?: $eget($entity,'thumbnail_image_url') ?: '';
        if ($img) $seoImage = $img;
    }

    // Strip tags / collapse whitespace for safe meta description.
    $seoDescClean = trim(preg_replace('/\s+/', ' ', strip_tags((string) $seoDesc)));
    if (mb_strlen($seoDescClean) > 300) $seoDescClean = mb_substr($seoDescClean, 0, 297).'...';

    $currentUrl = url()->current();

    // BlogPosting schema for blog detail pages.
    if ($__c === 'Blogs/BlogDetails' && $entity) {
        $schemaBlocks[] = [
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            'headline' => (string) ($eget($entity,'title') ?: $seoTitle),
            'description' => $seoDescClean,
            'image' => $seoImage ?: null,
            'datePublished' => (string) ($eget($entity,'created_at') ?: ''),
            'author' => ['@type' => 'Person', 'name' => (string) ($eget($entity,'user_name') ?: 'Social Aviator')],
            'publisher' => [
                '@type' => 'Organization',
                'name' => config('app.name'),
                'logo' => ['@type' => 'ImageObject', 'url' => asset(\App\Models\Setting::pull('site_logo') ?: '')],
            ],
            'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $currentUrl],
        ];
    }
@endphp

{{-- Per-page meta description (Ahrefs: "Meta description missing"). React overrides on hydrate via head-key. --}}
@if($seoDescClean)
    <meta inertia="description" name="description" content="{{ $seoDescClean }}">
@endif

{{-- Open Graph (Ahrefs: "Open Graph tags missing") --}}
<meta inertia="og:type" property="og:type" content="{{ $seoType }}">
<meta inertia="og:title" property="og:title" content="{{ $seoTitle }}">
@if($seoDescClean)<meta inertia="og:description" property="og:description" content="{{ $seoDescClean }}">@endif
<meta inertia="og:url" property="og:url" content="{{ $currentUrl }}">
<meta inertia="og:site_name" property="og:site_name" content="{{ config('app.name') }}">
@if($seoImage)<meta inertia="og:image" property="og:image" content="{{ $seoImage }}">@endif

{{-- Twitter Card (Ahrefs: "X (Twitter) card missing") --}}
<meta inertia="twitter:card" name="twitter:card" content="{{ $seoImage ? 'summary_large_image' : 'summary' }}">
<meta inertia="twitter:title" name="twitter:title" content="{{ $seoTitle }}">
@if($seoDescClean)<meta inertia="twitter:description" name="twitter:description" content="{{ $seoDescClean }}">@endif
@if($seoImage)<meta inertia="twitter:image" name="twitter:image" content="{{ $seoImage }}">@endif

{{-- BlogPosting / Article schema (Phase 4) --}}
@foreach($schemaBlocks as $__schema)
    <script type="application/ld+json">{!! json_encode(array_filter($__schema, fn($v) => $v !== null && $v !== ''), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endforeach
