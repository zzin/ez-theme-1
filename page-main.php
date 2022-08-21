<?php
get_header();
?>
<main id="primary" class="site-main">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="hero">
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="swiper-slide-bg absolute inset-0 -z-1">
              <div class="h-full w-full inset-0 relative">
                <picture>
                  <source srcset="<?= get_stylesheet_directory_uri()?>/assets/images/hero/hero-2-pc.jpg" media="(min-width:768px)">
                  <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/hero/hero-2-mo.jpg" alt="hero">
                </picture>
              </div>
            </div>
            <div class="swiper-slide-text flex flex-col justify-center w-full h-full text-center md:text-left text-red-600 md:text-black absolute z-10">
              <div class="container mx-auto px-5 md:px-6 lg:px-8">
                <h2 class="text-8xl font-semibold">title1</h2>
                <p class="max-w-full md:max-w-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet sem a risus dapibus mollis. Donec velit eros, mattis ut varius nec, lobortis ac qua</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="swiper-slide-bg absolute inset-0 -z-1">
              <div class="h-full w-full inset-0 relative">
                <picture>
                  <source srcset="<?= get_stylesheet_directory_uri()?>/assets/images/hero/hero-1-pc.jpg" media="(min-width:768px)">
                  <img src="<?= get_stylesheet_directory_uri() ?>/assets/images/hero/hero-1-mo.jpg" alt="hero">
                </picture>
              </div>
            </div>
            <div class="swiper-slide-text flex flex-col justify-center w-full h-full text-center md:text-left text-red-600 md:text-black absolute z-10">
              <div class="container mx-auto px-5 md:px-6 lg:px-8">
                <h2 class="text-8xl font-semibold">title2</h2>
                <p class="max-w-full md:max-w-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet sem a risus dapibus mollis. Donec velit eros, mattis ut varius nec, lobortis ac qua</p>
              </div>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </section>
  </article>
</main>
<?php
get_footer();
?>