<?php get_header() ?>

<?php

$background = get_field('background')

?>

<section class="">
  <!-- Hero -->
  <div class="relative py-32">
    <!-- VideBG -->
    <video autoplay muted loop playsinline class="absolute inset-0 object-cover object-center w-full h-full">
      <source src="<?= $background['video_url'] ?>" />
      <img src="<?= $background['image']['sizes']['large'] ?>">
    </video>
    <!-- BgOverlay -->
    <div class="absolute inset-0 duration-300 bg-neutral-900 bg-opacity-70 group-hover:backdrop-blur-sm"></div>
    <!-- Inner -->
    <div class="wrapper">
      <div class="relative box">
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
</section>

<section class="pt-24 bg-white">


  <div class="wrapper">

    <div class="box">
      <!-- BlogPostCards -->
      <?php

      $post_id_list = get_posts(array(
        'post_type' => 'book',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'fields' => 'ids',
      ));
      get_template_part('template-parts/components/component', 'book-card-list', array(
        'book_id_list' => $post_id_list,
        'max_two_per_row' => false
      ));
      ?>
    </div>
  </div>
</section>


<?php

get_template_part('template-parts/content/section', 'testimonials', array(
  'heading' => 'Reader reviews',
  'terms' => 'book-reader'
))
?>

<?php get_template_part('template-parts/content/section', 'get-book-form') ?>

<?php get_footer() ?>