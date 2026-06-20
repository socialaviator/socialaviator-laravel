<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @php
        $settings = app(\App\Repositories\SettingRepository::class);
        $themeData = app(\App\Repositories\Frontend\PageRepository::class);
        $layoutsData = $themeData->getHomePageData();
        $customize_settings = $settings->getSiteSettings();
        $fav_icon = \App\Models\Setting::pull('site_favicon');
        $is_rtl = \App\Models\Setting::pull('enable_rtl') == "1";
        $primary_font = \App\Models\Setting::pull('primary_font');
        $secondary_font = \App\Models\Setting::pull('secondary_font');
        $meta_title = \App\Models\Setting::pull('meta_title');
        $meta_description = \App\Models\Setting::pull('meta_description');
        $meta_image = asset(\App\Models\Setting::pull('meta_image'));
        $meta_tags = \App\Models\Setting::pull('meta_tags');

        // ---- Server-side SEO resolution from the Inertia $page payload ----
        // (Option B: no Node SSR daemon — durable on Hostinger shared hosting.)
        $__c     = $page['component'] ?? '';
        $__props = $page['props'] ?? [];
        $__entity = null;
        $__ogType = 'website';
        if (str_starts_with($__c, 'Page/')) {
            $__entity = $__props['about'] ?? $__props['faq'] ?? $__props['contact'] ?? $__props['page'] ?? null;
        } elseif ($__c === 'Services/ServiceDetailsPage') {
            $__entity = $__props['service'] ?? null;
        } elseif ($__c === 'Blogs/BlogDetails') {
            $__entity = $__props['blog'] ?? null;
            $__ogType = 'article';
        }
        $__eget = function ($e, $k) {
            if (is_array($e)) return $e[$k] ?? null;
            if (is_object($e)) return $e->{$k} ?? null;
            return null;
        };
        $seoTitle = $meta_title ?: config('app.name', 'Laravel');
        $seoDesc  = $meta_description ?: '';
        $seoImage = $meta_image ?: '';
        $seoH1    = $meta_title ?: config('app.name', 'Laravel');
        $__bodyContent = '';
        if ($__entity) {
            $seoTitle = $__eget($__entity,'meta_title') ?: $__eget($__entity,'title') ?: $seoTitle;
            $seoDesc  = $__eget($__entity,'meta_description') ?: $seoDesc;
            $seoH1    = $__eget($__entity,'title') ?: $seoH1;
            $__img    = $__eget($__entity,'meta_image_url') ?: $__eget($__entity,'thumbnail_image_url') ?: '';
            if ($__img) $seoImage = $__img;
            $__bodyContent = (string) ($__eget($__entity,'content') ?: '');
        }
        $seoDescClean = trim(preg_replace('/\s+/', ' ', strip_tags((string) $seoDesc)));
        if (mb_strlen($seoDescClean) > 300) $seoDescClean = mb_substr($seoDescClean, 0, 297).'...';
    @endphp

    <title inertia>{{ $seoTitle }}</title>

    <meta name="robots" content="index, follow">
    <meta name="keywords" content="{{$meta_tags}}">

    {{-- SEO: self-referencing canonical on the final non-www HTTPS host. --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- SEO: per-page meta description / Open Graph / Twitter / schema rendered
         server-side from the Inertia payload. React's <Head> overrides these on
         hydration via the `inertia` head-key, so no duplicate tags result. --}}
    @include('seo._meta')

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family={{$primary_font}}:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family={{$secondary_font}}:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ mix('css/frontend/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ mix('css/frontend/globals.css') }}">
    <script src="{{ mix('js/frontend/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ route('custom.css') }}" />

    <link rel="icon" type="image/x-icon" href="{{$fav_icon}}">

    <script>
        window.menus = {
            main_menu: {!! \App\Models\Setting::pull("main_menu") !!},
            services_menu: {!! \App\Models\Setting::pull("services_menu") !!},
            footer_menu: {!! \App\Models\Setting::pull("footer_menu") !!},
        };
        window.tagline = "{{ \App\Models\Setting::pull('tagline') }}";
        window.layoutsData = {!! json_encode($layoutsData, JSON_PRETTY_PRINT) !!};
        window.blogs = {!! json_encode(\App\Models\Post::where('status', '1')->latest()->limit(10)->get(), JSON_PRETTY_PRINT) !!};
        window.teams = {!! json_encode(\App\Models\Team::latest()->get(), JSON_PRETTY_PRINT) !!}
        window.testimonials = {!! json_encode(\App\Models\Testimonial::latest()->get(), JSON_PRETTY_PRINT) !!}
        window.customize_settings = {!! json_encode($customize_settings, JSON_PRETTY_PRINT) !!}

        window.seo = {
            meta_title: "{{ $meta_title }}",
            meta_description: "{{ $meta_description }}",
            meta_image: "{{ $meta_image }}",
            meta_tags: "{{ $meta_tags }}",
            og_url: "{{ url('/') }}",
    }
    </script>

    @routes
</head>
<body class="font-sans antialiased {{$is_rtl ? "rtl" : ""}}">
{{--
    Inertia mounts React into #app and REPLACES its children on load, so the
    server-rendered fallback below is visible only to non-JS crawlers (Ahrefs /
    bots that don't execute JS). It provides a real <h1>, descriptive copy and
    internal links so the first HTML response is not an empty SPA shell
    (fixes "H1 missing", "Low word count", "Page has no outgoing links").
    data-page is the exact same $page array the @inertia directive serialises,
    so the React app boots identically.
--}}
<div id="app" data-page="{{ json_encode($page) }}"><div class="seo-ssr-fallback">
    <h1>{{ $seoH1 }}</h1>
    @if($seoDescClean)<p>{{ $seoDescClean }}</p>@endif
    @if($__bodyContent)<div>{!! strip_tags($__bodyContent, '<p><h2><h3><ul><ol><li><strong><em><a>') !!}</div>@endif
    <nav aria-label="Site">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/blog') }}">Blog</a>
        <a href="{{ url('/faq') }}">FAQ</a>
        <a href="{{ url('/contact') }}">Contact</a>
        @foreach(\App\Models\Service::all() as $__svc)
            <a href="{{ url('/service/'.$__svc->slug) }}">{{ $__svc->title }}</a>
        @endforeach
    </nav>
</div></div>

{!! \App\Models\Setting::pull('html_embed_code') !!}
</body>
</html>
