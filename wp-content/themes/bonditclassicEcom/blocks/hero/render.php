<?php
$heading = get_field('heading');
$text = get_field('text');
?>

<section class="hero" data-hero>
  <div class="hero_inner_version" data-hero-audience="trade">
    <div class="hero_background">
      <video playsinline="true" autoplay="autoplay" muted="muted" loop="loop" class="hero__background-video" preload="metadata">
        <source src="//bonditgroup.com/cdn/shop/videos/c/vp/896103d2e19c4b79baf82927b4f07150/896103d2e19c4b79baf82927b4f07150.HD-720p-4.5Mbps-78050843.mp4?v=0" type="video/mp4">
        <img src="//bonditgroup.com/cdn/shop/files/preview_images/896103d2e19c4b79baf82927b4f07150.thumbnail.0000000000_2000x.jpg?v=1773743761">
      </video>
      <div class="hero_overlay">
      </div>
    </div>
    <div class="hero_container">
      <div class="hero_content">
        <h1 class="hero_title"><?= esc_html($heading); ?></h1>
        <a href="https://bonditgroup.com/account" class="btn btn--primary btn--with-icon hero__cta">
          <span class="btn__text">Login to your account</span>
          <span class="btn__icon btn__icon--right">
            <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <g clip-path="url(#clip0_14329_581)">
                <path d="M5 12H19" stroke="#162E50" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M13 18L19 12" stroke="#162E50" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M13 6L19 12" stroke="#162E50" stroke-linecap="round" stroke-linejoin="round"></path>
              </g>
              <defs>
                <clipPath id="clip0_14329_581">
                  <rect width="24" height="24" fill="white"></rect>
                </clipPath>
              </defs>
            </svg>
          </span>
        </a>
        <div class="hero_stats">

          <div class="hero_stat">
            <span class="hero_stat-number">700+</span>
            <span class="hero_stat-label">Products</span>
          </div>
          <div cass="hero_stat">
            <span class="hero_stat-number">2500+</span>
            <span class="hero_stat-label">Stockists Nationwide</span>
          </div>
        </div>
      </div>
    </div>

    <p><?= esc_html($text); ?></p>
  </div>
</section>