<?php get_header() ?>

<section class="py-24 bg-white">
  <div class="wrapper">
    <div class="box">
      <!-- Head -->
      <div class="mb-24">
        <!-- Heading -->
        <h2 class="heading text-neutral-900 text-center pb-12">
          <?= get_the_title() ?>
        </h2>
        <!-- Subheading -->
        <p class="subheading text-neutral-900 text-center max-w-2xl mx-auto">
          <?= get_the_excerpt() ?>
        </p>
      </div>
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