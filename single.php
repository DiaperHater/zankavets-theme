<?php get_header() ?>

<?php

$content = get_the_content();
$blocks = parse_blocks($content);
?>


<section class="pb-24 <?= $post->post_type == 'book' || $post->post_type == 'service' ? 'pt-24' : '' ?> bg-white text-neutral-900">

  <?php
  if (
    $post->post_type != 'book'
    && $post->post_type != 'service'
  ) {
  ?>
    <!-- Hero -->
    <div class="relative pt-24 pb-12 mb-24">
      <!-- BG -->
      <img src="<?= the_post_thumbnail_url('medium_large') ?>" alt="" class="absolute top-0 left-0 object-cover object-center w-full h-full">
      <!-- BViewverlay -->
      <div class="absolute top-0 left-0 w-full h-full duration-300 bg-neutral-900 bg-opacity-70 group-hover:backdrop-blur-sm"></div>
      <!-- Inner -->
      <div class="wrapper">
        <div class="relative box">
          <!-- Preheading -->
          <p class="mb-4 font-bold text-right text-white text-lxl">
            <?= get_the_date() ?>
          </p>
          <p class="mb-6 text-2xl text-right text-white">
            <a href="/about">by: Vlady Zankavets</a>
          </p>
          <!-- Heading -->
          <h2 class="max-w-xl pb-12 mx-auto text-center text-yellow-300 heading">
            <?= get_the_title() ?>
          </h2>
          <!-- Subheading -->
          <p class="max-w-2xl mx-auto text-2xl tracking-wide text-center text-yellow-300">
            <?= has_excerpt() ? get_the_excerpt() : '&nbsp;' ?>
          </p>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <div class="wrapper">
    <div class="box-sm">

      <!-- Content -->
      <div class="mx-auto prose prose-2xl">
        <?php
        foreach ($blocks as $block) {
          if ("core/shortcode" == $block['blockName']) {
            echo do_shortcode('[socials]');
          } elseif ("core/embed" == $block['blockName']) {

            $url =  $block['attrs']['url'];
            $rendered_block = render_block($block);
            $out = str_replace($url, wp_oembed_get($url), $rendered_block);

            echo $out;
          } else {
            echo render_block($block);
          }
        }
        ?>
      </div>
    </div>
  </div>
</section>

<?php
if (have_rows('content')) {
  while (have_rows('content')) {

    the_row();

    if (get_row_layout() == 'homeHero') {

      get_template_part('template-parts/content/section', 'home-hero');
    } elseif (get_row_layout() == 'socials') {

      get_template_part('template-parts/content/section', 'socials');
    } elseif (get_row_layout() == 'menu') {

      get_template_part('template-parts/content/section', 'menu');
    } elseif (get_row_layout() == 'textAndMedia') {

      get_template_part('template-parts/content/section', 'text-and-media');
    } elseif (get_row_layout() == 'certificates') {

      get_template_part('template-parts/content/section', 'certificates');
    } elseif (get_row_layout() == 'clients') {

      get_template_part('template-parts/content/section', 'clients');
    } elseif (get_row_layout() == 'numbers') {

      get_template_part('template-parts/content/section', 'numbers');
    } elseif (get_row_layout() == 'testimonials') {

      get_template_part('template-parts/content/section', 'testimonials');
    } elseif (get_row_layout() == 'cta') {

      get_template_part('template-parts/content/section', 'cta');
    } elseif (get_row_layout() == 'books') {

      get_template_part('template-parts/content/section', 'books');
    } elseif (get_row_layout() == 'selectedPublications') {

      get_template_part('template-parts/content/section', 'selected-publications');
    } elseif (get_row_layout() == 'contactForm') {

      get_template_part('template-parts/content/section', 'contact-form');
    }
  }
}

if ($post->post_type == 'book') {

  get_template_part('template-parts/content/section', 'testimonials', array(
    'heading' => 'Testimonials',
    'terms' => 'book-reader'
  ));

  // GetBookForm
  get_template_part('template-parts/content/section', 'get-book-form');
} elseif ($post->post_type == 'service') {

  // Testimonials
  // Disabled until have no customer testimonials

  // get_template_part('template-parts/content/section', 'testimonials', array(
  //   'heading' => 'Customer Reviews',
  //   'terms' => 'service-consumer'
  // ));
  // GetServiceForm
  get_template_part('template-parts/content/section', 'get-service-form');
} else {

  get_template_part('template-parts/content/section', 'contact-form');
}
?>

<?php get_footer() ?>