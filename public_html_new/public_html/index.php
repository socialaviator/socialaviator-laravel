<!DOCTYPE html>
<html class="no-js" lang="en">
  
<head>
    <!-- Meta Tags -->

    <!-- Favicon Icon -->
    <!-- Site Title -->
    <title>Social Aviator | Home</title>
    <?php include 'header.php'; ?>
  </head>
  <style>
    /* Container and Title */
      .container {
          max-width: 1200px;
          margin: 0 auto;
          padding: 20px;
      }

      .partner-title {
          font-size: 2rem; /* Adjust font size */
          text-align: center;
          margin-bottom: 20px;
      }

      /* Logo Styles */
      .cs-partner_logo img {
          width: 200px; /* Increase logo size */
          height: auto; /* Maintain aspect ratio */
          display: block;
          margin: 0 auto; /* Center images */
      }

      /* Swiper Container */
      .swiper-container {
          width: 100%;
          height: auto;
          position: relative; /* Position for arrows */
      }

      /* Navigation Arrows */
      .swiper-button-next,
      .swiper-button-prev {
          color: white; /* Change arrow color to white */
          width: 40px; /* Size of the arrows */
          height: 40px;
      }

      .swiper-button-next::after,
      .swiper-button-prev::after {
          font-size: 20px; /* Adjust arrow icon size */
      }

      /* Pagination Dots */
      .swiper-pagination-bullet {
          background: white; /* Change pagination dot color to white */
      }

      .swiper-pagination-bullet-active {
          background: #ccc; /* Optionally change active dot color */
      }

      /* Center Swiper Slide */
      .swiper-slide {
          display: flex;
          justify-content: center; /* Center logos */
          align-items: center;
      }
    /*mobile view*/


  @media (max-width: 768px) {
    .cs-hero_title {
      font-size: 70px; /* Set font size to 70px for mobile view */
    }
  }
  </style>
  <body>
    <div class="cs-preloader cs-center">
      <div class="cs-preloader_in"></div>
    </div>
    <!-- Start Header Section -->
    <?php include 'navbar.php'; ?>
    <!-- End Header Section -->
    <!-- Start Hero -->
    <div
      class="cs-hero cs-style1 cs-bg cs-fixed_bg cs-shape_wrap_1"
      data-src="assets/img/hero_bg.jpg"
      id="home"
    >
      <div class="cs-shape_1"></div>
      <div class="cs-shape_1"></div>
      <div class="cs-shape_1"></div>
      <div class="container">
        <div class="cs-hero_text">
          <h1
            class="cs-hero_title wow fadeInRight"
            data-wow-duration="0.8s"
            data-wow-delay="0.2s" style="font-size:80px;"
          >
           Innovative <span style="color:#ff734c">Digital<br> Solutions</span> Empowerment
          </h1>
          <div class="cs-hero_info">
            <div>
              <a href="contact.php" class="cs-text_btn">
                <span>Get a Free Consultation</span>
                <svg
                  width="26"
                  height="12"
                  viewBox="0 0 26 12"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z"
                    fill="currentColor"
                  />
                </svg>
              </a>
            </div>
            <div>
              <div class="cs-hero_subtitle">
                We craft compelling digital experiences that drive results. From strategy to execution, we bring your brand’s vision to life.
              </div>
            </div>
          </div>
        </div>
      </div>

      <a href="#service" class="cs-down_btn"></a>
    </div>
    <!-- End Hero -->
    <!-- Start FunFact -->
    <section>
      <div class="container-img">
        <div class="cs-funfact_wrap cs-type1">
          <div class="cs-funfact_shape" data-src="assets/img/funfact_shape_bg.svg" style="background-image: url(&quot;assets/img/funfact_shape_bg.svg&quot;);"></div>
          <div class="cs-funfact_left">
            <div class="cs-funfact_heading">
              <h3>Our fun fact</h3>
              <p> We turn ideas into reality, delivering impactful results that speak for themselves. (Our fun fact) Our Achievements</p>
            </div>
          </div>
          <div class="cs-funfact_right">
            <div class="cs-funfacts">
              <div class="cs-funfact cs-style1">
                <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                  <span data-count-to="400" class="odometer odometer-auto-theme"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">00</span></span></span></span></span></div></span>
                </div>
                <div class="cs-funfact_text">
                  <span class="cs-accent_color">+</span>
                  <p>Global Happy Clients</p>
                </div>
              </div>
              <div class="cs-funfact cs-style1">
                <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                  <span data-count-to="50" class="odometer odometer-auto-theme"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>
                </div>
                <div class="cs-funfact_text">
                  <span class="cs-accent_color">+</span>
                  <p>Project Completed</p>
                </div>
              </div>
              <div class="cs-funfact cs-style1">
                <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                  <span data-count-to="24" class="odometer odometer-auto-theme"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">2</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">4</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"></span></span></span></span></div></span>
                </div>
                <div class="cs-funfact_text">
                  <span class="cs-accent_color">+</span>
                  <p>Team Members</p>
                </div>
              </div>
              <div class="cs-funfact cs-style1">
                <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                  <span data-count-to="550" class="odometer odometer-auto-theme"><div class="odometer-inside"><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">5</span></span></span></span></span><span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span class="odometer-ribbon"><span class="odometer-ribbon-inner"><span class="odometer-value">0</span></span></span></span></span></div></span>
                </div>
                <div class="cs-funfact_text">
                  <span class="cs-accent_color">+</span>
                  <p>Digital products</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End FunFact -->
    <!-- Start Service Section -->
       <section>
      <div class="cs-height_145 cs-height_lg_75"></div>
      <div class="container">
        <div class="cs-section_heading cs-style1 text-center">
          <h3 class="cs-section_subtitle">Services</h3>
          <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">
            Our Core Services
          </h2>
        </div>
      </div>
      <div class="cs-height_90 cs-height_lg_45"></div>
      <div class="container">
        <div class="cs-iconbox_3_list cs-style2">
          <div class="cs-hover_tab active">
            <a href="service-details1.php" class="cs-iconbox cs-style3">
              <div class="cs-image_layer cs-style1 cs-size_md">
                <div class="cs-image_layer_in">
                  <img src="assets/images/service1.png" alt="Image" class="w-100 cs-radius_15">
                </div>
              </div>
              <span class="cs-iconbox_icon cs-center">
                <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M29.3803 3.05172C29.4089 1.94752 28.537 1.02921 27.4328 1.00062L9.43879 0.534749C8.33459 0.506159 7.41628 1.37811 7.38769 2.48231C7.35911 3.58651 8.23106 4.50482 9.33526 4.53341L25.3299 4.94752L24.9158 20.9422C24.8872 22.0464 25.7592 22.9647 26.8634 22.9933C27.9676 23.0218 28.8859 22.1499 28.9144 21.0457L29.3803 3.05172ZM3.37714 28.5502L28.7581 4.4503L26.0039 1.54961L0.622863 25.6495L3.37714 28.5502Z" fill="currentColor"></path>
                </svg>
              </span>
              <div class="cs-iconbox_in">
                <h2 class="cs-iconbox_title">Digital Marketing</h2>
                <div class="cs-iconbox_subtitle">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium lorema doloremque laudantium, totam rem.
                </div>
              </div>
            </a>
          </div>
          <div class="cs-hover_tab">
            <a href="service-details2.php" class="cs-iconbox cs-style3">
              <div class="cs-image_layer cs-style1 cs-size_md">
                <div class="cs-image_layer_in">
                  <img src="assets/images/service2.png" alt="Image" class="w-100 cs-radius_15">
                </div>
              </div>
              <span class="cs-iconbox_icon cs-center">
                <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M29.3803 3.05172C29.4089 1.94752 28.537 1.02921 27.4328 1.00062L9.43879 0.534749C8.33459 0.506159 7.41628 1.37811 7.38769 2.48231C7.35911 3.58651 8.23106 4.50482 9.33526 4.53341L25.3299 4.94752L24.9158 20.9422C24.8872 22.0464 25.7592 22.9647 26.8634 22.9933C27.9676 23.0218 28.8859 22.1499 28.9144 21.0457L29.3803 3.05172ZM3.37714 28.5502L28.7581 4.4503L26.0039 1.54961L0.622863 25.6495L3.37714 28.5502Z" fill="currentColor"></path>
                </svg>
              </span>
              <div class="cs-iconbox_in">
                <h2 class="cs-iconbox_title">PR Branding</h2>
                <div class="cs-iconbox_subtitle">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium lorema doloremque laudantium, totam rem.
                </div>
              </div>
            </a>
          </div>
          <div class="cs-hover_tab">
            <a href="service-details3.php" class="cs-iconbox cs-style3">
              <div class="cs-image_layer cs-style1 cs-size_md">
                <div class="cs-image_layer_in">
                  <img src="assets/images/service3.png" alt="Image" class="w-100 cs-radius_15">
                </div>
              </div>
              <span class="cs-iconbox_icon cs-center">
                <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M29.3803 3.05172C29.4089 1.94752 28.537 1.02921 27.4328 1.00062L9.43879 0.534749C8.33459 0.506159 7.41628 1.37811 7.38769 2.48231C7.35911 3.58651 8.23106 4.50482 9.33526 4.53341L25.3299 4.94752L24.9158 20.9422C24.8872 22.0464 25.7592 22.9647 26.8634 22.9933C27.9676 23.0218 28.8859 22.1499 28.9144 21.0457L29.3803 3.05172ZM3.37714 28.5502L28.7581 4.4503L26.0039 1.54961L0.622863 25.6495L3.37714 28.5502Z" fill="currentColor"></path>
                </svg>
              </span>
              <div class="cs-iconbox_in">
                <h2 class="cs-iconbox_title">Political Campaigns</h2>
                <div class="cs-iconbox_subtitle">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium lorema doloremque laudantium, totam rem.
                </div>
              </div>
            </a>
          </div>
          <div class="cs-hover_tab">
            <a href="service-details4.php" class="cs-iconbox cs-style3">
              <div class="cs-image_layer cs-style1 cs-size_md">
                <div class="cs-image_layer_in">
                  <img src="assets/images/service4.png" alt="Image" class="w-100 cs-radius_15">
                </div>
              </div>
              <span class="cs-iconbox_icon cs-center">
                <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M29.3803 3.05172C29.4089 1.94752 28.537 1.02921 27.4328 1.00062L9.43879 0.534749C8.33459 0.506159 7.41628 1.37811 7.38769 2.48231C7.35911 3.58651 8.23106 4.50482 9.33526 4.53341L25.3299 4.94752L24.9158 20.9422C24.8872 22.0464 25.7592 22.9647 26.8634 22.9933C27.9676 23.0218 28.8859 22.1499 28.9144 21.0457L29.3803 3.05172ZM3.37714 28.5502L28.7581 4.4503L26.0039 1.54961L0.622863 25.6495L3.37714 28.5502Z" fill="currentColor"></path>
                </svg>
              </span>
              <div class="cs-iconbox_in">
                <h2 class="cs-iconbox_title">Web Development</h2>
                <div class="cs-iconbox_subtitle">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  accusantium lorema doloremque laudantium, totam rem.
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="cs-height_120 cs-height_lg_50"></div>
      </div>
    </section>
    <!-- End Service Section -->
    <!-- Start Latest Project -->
    
    <!-- End Latest Project -->
    <!-- Start Awards Text -->
    
    <!-- End Awards Text -->
    <!-- Start General Text -->
    
    <!-- End General Text -->
    <div class="container">
      <h2 class="cs-font_50 cs-m0 text-center cs-line_height_4 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;"> Our agile process empowers us to adapt and respond to changes swiftly. In an ever-evolving landscape, we see change as an opportunity, not a challenge.</h2>
    </div>
    <div class="cs-height_70 cs-height_lg_70"></div>
    <!-- Start Video Block -->
        <div class="container">
      <a href="https://www.youtube.com/watch?v=JUe4_bhltuA" class="cs-video_block cs-style1 cs-video_open cs-bg" data-src="assets/images/thumbnail.png" style="background-image: url(&quot;assets/img/video_bg.jpg&quot;);">
        <span class="cs-player_btn cs-accent_color">
          <span></span>
        </span>
      </a>
    </div>
    <!-- End Video Block -->
    <!-- Start Team Section -->
    
    <!-- End Team Section -->
    <div class="cs-height_130 cs-height_lg_80"></div>
    <!-- Start Testimonial Section -->
       <section class="cs-gradient_bg_1 cs-shape_wrap_3 cs-parallax">
      <div class="cs-shape_3 cs-to_up">
        <svg
          width="162"
          height="181"
          viewBox="0 0 162 181"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M156.833 178.434C156.833 177.053 157.954 175.932 159.335 175.932C160.716 175.932 161.837 177.053 161.837 178.434C161.837 179.814 160.716 180.935 159.335 180.935C157.954 180.935 156.833 179.814 156.833 178.434Z"
            fill="#FF4A17"
          />
          <path
            d="M117.65 178.434C117.65 177.053 118.771 175.932 120.152 175.932C121.533 175.932 122.653 177.053 122.653 178.434C122.653 179.814 121.533 180.935 120.152 180.935C118.771 180.935 117.65 179.814 117.65 178.434Z"
            fill="#FF4A17"
          />
          <path
            d="M78.4694 178.434C78.4694 177.053 79.5902 175.932 80.971 175.932C82.3517 175.932 83.4726 177.053 83.4726 178.434C83.4726 179.814 82.3517 180.935 80.971 180.935C79.5876 180.935 78.4694 179.814 78.4694 178.434Z"
            fill="#FF4A17"
          />
          <path
            d="M39.286 178.434C39.286 177.053 40.4069 175.932 41.7876 175.932C43.1684 175.932 44.2893 177.053 44.2893 178.434C44.2893 179.814 43.1684 180.935 41.7876 180.935C40.4069 180.935 39.286 179.814 39.286 178.434Z"
            fill="#FF4A17"
          />
          <path
            d="M0.102661 178.434C0.102661 177.053 1.22354 175.932 2.60429 175.932C3.98504 175.932 5.10591 177.053 5.10591 178.434C5.10591 179.814 3.98504 180.935 2.60429 180.935C1.22091 180.935 0.102661 179.814 0.102661 178.434Z"
            fill="#FF4A17"
          />
          <path
            d="M156.833 143.419C156.833 142.038 157.954 140.917 159.335 140.917C160.716 140.917 161.837 142.038 161.837 143.419C161.837 144.799 160.716 145.92 159.335 145.92C157.954 145.92 156.833 144.799 156.833 143.419Z"
            fill="#FF4A17"
          />
          <path
            d="M117.65 143.419C117.65 142.038 118.771 140.917 120.152 140.917C121.533 140.917 122.653 142.038 122.653 143.419C122.653 144.799 121.533 145.92 120.152 145.92C118.771 145.92 117.65 144.799 117.65 143.419Z"
            fill="#FF4A17"
          />
          <path
            d="M78.4694 143.419C78.4694 142.038 79.5902 140.917 80.971 140.917C82.3517 140.917 83.4726 142.038 83.4726 143.419C83.4726 144.799 82.3517 145.92 80.971 145.92C79.5876 145.92 78.4694 144.799 78.4694 143.419Z"
            fill="#FF4A17"
          />
          <path
            d="M39.286 143.419C39.286 142.038 40.4069 140.917 41.7876 140.917C43.1684 140.917 44.2893 142.038 44.2893 143.419C44.2893 144.799 43.1684 145.92 41.7876 145.92C40.4069 145.92 39.286 144.799 39.286 143.419Z"
            fill="#FF4A17"
          />
          <path
            d="M0.102661 143.419C0.102661 142.038 1.22354 140.917 2.60429 140.917C3.98504 140.917 5.10591 142.038 5.10591 143.419C5.10591 144.799 3.98504 145.92 2.60429 145.92C1.22091 145.92 0.102661 144.799 0.102661 143.419Z"
            fill="#FF4A17"
          />
          <path
            d="M156.833 108.404C156.833 107.023 157.954 105.902 159.335 105.902C160.716 105.902 161.837 107.023 161.837 108.404C161.837 109.785 160.716 110.906 159.335 110.906C157.954 110.906 156.833 109.787 156.833 108.404Z"
            fill="#FF4A17"
          />
          <path
            d="M120.152 110.906C121.533 110.906 122.653 109.786 122.653 108.404C122.653 107.022 121.533 105.902 120.152 105.902C118.77 105.902 117.65 107.022 117.65 108.404C117.65 109.786 118.77 110.906 120.152 110.906Z"
            fill="#FF4A17"
          />
          <path
            d="M80.9684 110.906C82.35 110.906 83.47 109.786 83.47 108.404C83.47 107.022 82.35 105.902 80.9684 105.902C79.5868 105.902 78.4668 107.022 78.4668 108.404C78.4668 109.786 79.5868 110.906 80.9684 110.906Z"
            fill="#FF4A17"
          />
          <path
            d="M39.286 108.404C39.286 107.023 40.4069 105.902 41.7876 105.902C43.1684 105.902 44.2893 107.023 44.2893 108.404C44.2893 109.785 43.1684 110.906 41.7876 110.906C40.4069 110.906 39.286 109.787 39.286 108.404Z"
            fill="#FF4A17"
          />
          <path
            d="M0.102661 108.404C0.102661 107.023 1.22354 105.902 2.60429 105.902C3.98504 105.902 5.10591 107.023 5.10591 108.404C5.10591 109.785 3.98504 110.906 2.60429 110.906C1.22091 110.906 0.102661 109.787 0.102661 108.404Z"
            fill="#FF4A17"
          />
          <path
            d="M156.833 73.3918C156.833 72.011 157.954 70.8901 159.335 70.8901C160.716 70.8901 161.837 72.011 161.837 73.3918C161.837 74.7725 160.716 75.8934 159.335 75.8934C157.954 75.8908 156.833 74.7725 156.833 73.3918Z"
            fill="#FF4A17"
          />
          <path
            d="M120.152 75.8934C121.533 75.8934 122.653 74.7734 122.653 73.3918C122.653 72.0102 121.533 70.8901 120.152 70.8901C118.77 70.8901 117.65 72.0102 117.65 73.3918C117.65 74.7734 118.77 75.8934 120.152 75.8934Z"
            fill="#FF4A17"
          />
          <path
            d="M80.9684 75.8934C82.35 75.8934 83.47 74.7734 83.47 73.3918C83.47 72.0102 82.35 70.8901 80.9684 70.8901C79.5868 70.8901 78.4668 72.0102 78.4668 73.3918C78.4668 74.7734 79.5868 75.8934 80.9684 75.8934Z"
            fill="#FF4A17"
          />
          <path
            d="M39.286 73.3918C39.286 72.011 40.4069 70.8901 41.7876 70.8901C43.1684 70.8901 44.2893 72.011 44.2893 73.3918C44.2893 74.7725 43.1684 75.8934 41.7876 75.8934C40.4069 75.8934 39.286 74.7725 39.286 73.3918Z"
            fill="#FF4A17"
          />
          <path
            d="M0.102661 73.3918C0.102661 72.011 1.22354 70.8901 2.60429 70.8901C3.98504 70.8901 5.10591 72.011 5.10591 73.3918C5.10591 74.7725 3.98504 75.8934 2.60429 75.8934C1.22091 75.8908 0.102661 74.7725 0.102661 73.3918Z"
            fill="#FF4A17"
          />
          <path
            d="M156.833 38.3766C156.833 36.9959 157.954 35.875 159.335 35.875C160.716 35.875 161.837 36.9959 161.837 38.3766C161.837 39.7574 160.716 40.8782 159.335 40.8782C157.954 40.8756 156.833 39.7574 156.833 38.3766Z"
            fill="#FF4A17"
          />
          <path
            d="M120.152 40.8782C121.533 40.8782 122.653 39.7582 122.653 38.3766C122.653 36.995 121.533 35.875 120.152 35.875C118.77 35.875 117.65 36.995 117.65 38.3766C117.65 39.7582 118.77 40.8782 120.152 40.8782Z"
            fill="#FF4A17"
          />
          <path
            d="M80.9684 40.8782C82.35 40.8782 83.47 39.7582 83.47 38.3766C83.47 36.995 82.35 35.875 80.9684 35.875C79.5868 35.875 78.4668 36.995 78.4668 38.3766C78.4668 39.7582 79.5868 40.8782 80.9684 40.8782Z"
            fill="#FF4A17"
          />
          <path
            d="M39.286 38.3766C39.286 36.9959 40.4069 35.875 41.7876 35.875C43.1684 35.875 44.2893 36.9959 44.2893 38.3766C44.2893 39.7574 43.1684 40.8782 41.7876 40.8782C40.4069 40.8782 39.286 39.7574 39.286 38.3766Z"
            fill="#FF4A17"
          />
          <path
            d="M0.102661 38.3766C0.102661 36.9959 1.22354 35.875 2.60429 35.875C3.98504 35.875 5.10591 36.9959 5.10591 38.3766C5.10591 39.7574 3.98504 40.8782 2.60429 40.8782C1.22091 40.8756 0.102661 39.7574 0.102661 38.3766Z"
            fill="#FF4A17"
          />
          <path
            d="M156.833 3.36198C156.833 1.98123 157.954 0.860352 159.335 0.860352C160.716 0.860352 161.837 1.98123 161.837 3.36198C161.837 4.74273 160.716 5.8636 159.335 5.8636C157.954 5.8636 156.833 4.74273 156.833 3.36198Z"
            fill="#FF4A17"
          />
          <path
            d="M117.65 3.36198C117.65 1.98123 118.771 0.860352 120.152 0.860352C121.533 0.860352 122.653 1.98123 122.653 3.36198C122.653 4.74273 121.533 5.8636 120.152 5.8636C118.771 5.8636 117.65 4.74273 117.65 3.36198Z"
            fill="#FF4A17"
          />
          <path
            d="M78.4694 3.36198C78.4694 1.98123 79.5902 0.860352 80.971 0.860352C82.3517 0.860352 83.4726 1.98123 83.4726 3.36198C83.4726 4.74273 82.3517 5.8636 80.971 5.8636C79.5876 5.8636 78.4694 4.74273 78.4694 3.36198Z"
            fill="#FF4A17"
          />
          <path
            d="M39.286 3.36198C39.286 1.98123 40.4069 0.860352 41.7876 0.860352C43.1684 0.860352 44.2893 1.98123 44.2893 3.36198C44.2893 4.74273 43.1684 5.8636 41.7876 5.8636C40.4069 5.8636 39.286 4.74273 39.286 3.36198Z"
            fill="#FF4A17"
          />
          <path
            d="M0.102661 3.36198C0.102661 1.98123 1.22354 0.860352 2.60429 0.860352C3.98504 0.860352 5.10591 1.98123 5.10591 3.36198C5.10591 4.74273 3.98504 5.8636 2.60429 5.8636C1.22091 5.8636 0.102661 4.74273 0.102661 3.36198Z"
            fill="#FF4A17"
          />
        </svg>
      </div>
      <div class="cs-height_130 cs-height_lg_80"></div>
      <div class="container">
        <div class="cs-testimonial_slider">
          <div class="cs-testimonial_slider_left">
            <div class="slider-nav cs-style1">
              <div class="slider-for_item item-nav">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img
                        src="assets/images/Dr_Mohit_Patel.png"
                        alt="Nav Image"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="slider-for_item item-nav">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img
                        src="assets/images/Veeraj_Shah.png"
                        alt="Nav Image"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="slider-for_item item-nav">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img
                        src="assets/images/Dr_Mona.png"
                        alt="Nav Image"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cs-testimonial_slider_right">
            <div class="slider-for cs-style1">
              <div class="slider-for_item">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg
                      width="42"
                      height="38"
                      viewBox="0 0 42 38"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z"
                        fill="white"
                      />
                    </svg>
                  </div>
                  <div class="cs-testimonial_text">
                    Social Aviator has transformed my online presence as a gynecologist. Their targeted social media strategies have significantly increased patient engagement and trust. I highly recommend their expertise to any medical professional looking to grow their practice digitally.
                  </div>
                  <div class="cs-rating" data-rating="4">
                    <div
                      class="cs-rating_bg"
                      data-src="assets/img/rating.svg"
                    ></div>
                    <div
                      class="cs-rating_percentage"
                      data-src="assets/img/rating.svg"
                    ></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Dr. Mohil Patel</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase">
                    MD, Ankur Maternity
                  </div>
                </div>
              </div>
              <div class="slider-for_item">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg
                      width="42"
                      height="38"
                      viewBox="0 0 42 38"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z"
                        fill="white"
                      />
                    </svg>
                  </div>
                  <div class="cs-testimonial_text">
                    As Chairperson of Veeraj Group, I've been consistently impressed with Social Aviator's digital marketing services. Their strategic expertise has elevated all four of our brands, delivering exceptional results and measurable growth. Their innovative approach and dedication make them a key partner in our success.
                  </div>
                  <div class="cs-rating" data-rating="4">
                    <div
                      class="cs-rating_bg"
                      data-src="assets/img/rating.svg"
                    ></div>
                    <div
                      class="cs-rating_percentage"
                      data-src="assets/img/rating.svg"
                    ></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Veeraj Shah</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase">
                    Chairperson Veeraj Group
                  </div>
                </div>
              </div>
              <div class="slider-for_item">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg
                      width="42"
                      height="38"
                      viewBox="0 0 42 38"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z"
                        fill="white"
                      />
                    </svg>
                  </div>
                  <div class="cs-testimonial_text">
                  Working with Social Aviator has been transformative for my practice. Their digital marketing expertise has significantly enhanced our online presence and patient engagement. Their professionalism and innovative strategies make them an invaluable asset to any healthcare provider.
                  </div>
                  <div class="cs-rating" data-rating="4">
                    <div
                      class="cs-rating_bg"
                      data-src="assets/img/rating.svg"
                    ></div>
                    <div
                      class="cs-rating_percentage"
                      data-src="assets/img/rating.svg"
                    ></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Dr. Mona Shah</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase">
                    Gynec Oncosurgeon
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs-height_130 cs-height_lg_80"></div>
    </section>
    <!-- End Testimonial Section -->
    <!-- Start Blog Section -->
    
    <!-- End Blog Section -->
    <!-- End Moving Text -->
    <div class="cs-height_100 cs-height_lg_70"></div>
    <!-- Start Partner Logo -->
    <div class="container">
      <h2 class="partner-title">Our Partners</h2> <!-- Title for the slider -->
      <div class="swiper-container">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <div class="cs-partner_logo">
                      <img src="assets/images/client1.png" alt="Partner">
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="cs-partner_logo">
                      <img src="assets/images/client2.png" alt="Partner">
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="cs-partner_logo">
                      <img src="assets/images/client3.png" alt="Partner">
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="cs-partner_logo">
                      <img src="assets/images/client4.png" alt="Partner">
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="cs-partner_logo">
                      <img src="assets/images/client5.png" alt="Partner">
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="cs-partner_logo">
                      <img src="assets/images/client6.png" alt="Partner">
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="cs-partner_logo">
                      <img src="assets/images/client7.png" alt="Partner">
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="cs-partner_logo">
                      <img src="assets/images/client8.png" alt="Partner">
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="cs-partner_logo">
                      <img src="assets/images/client9.png" alt="Partner">
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="cs-partner_logo">
                      <img src="assets/images/client10.png" alt="Partner">
                  </div>
              </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Navigation -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
      </div>
  </div>

    <!-- End Partner Logo -->
    <!-- Start CTA -->
    <!-- End CTA -->
    <!-- Start Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Video Popup -->
    <!-- Script -->
    <?php include 'foot.php'; ?>
  </body>
  <script>
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 3, // Number of logos to show
        spaceBetween: 30, // Space between logos
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 3000, // Delay between slides in milliseconds
            disableOnInteraction: false, // Continue autoplay after interactions
        },
        responsive: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
</script>

</html>
