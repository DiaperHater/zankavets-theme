<?php get_header() ?>

<section class="py-24 bg-white">
  <div class="wrapper">
    <div class="box">
      <!-- Head -->
      <div class="">
        <!-- Heading -->
        <h2 class="heading text-neutral-900 text-center pb-12">
          <?= get_the_title() ?>
        </h2>
        <!-- Subheading -->
        <p class="subheading text-neutral-900 text-center max-w-2xl mx-auto">
          <?= get_the_excerpt() ?>
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ServiceList -->
<?php

$post_id_list = get_posts(array(
  'post_type' => 'service',
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'fields' => 'ids',
));

foreach ($post_id_list as  $id) {

  get_template_part('template-parts/components/component', 'section-text-and-media', array(
    'heading' => get_the_title($id),
    'text' => get_the_excerpt($id),
    'link' => array(
      'url' => get_permalink($id),
      'title' => 'More Info'
    ),
    'video' => get_field('video', $id),
    'image' => get_the_post_thumbnail_url($id, 'medium_large')
  ));
}
?>



<?php

get_template_part('template-parts/content/section', 'testimonials', array(
  'heading' => 'Customer Reviews',
  'terms' => 'service-consumer'
))
?>

<?php get_template_part('template-parts/content/section', 'get-service-form') ?>

<?php get_footer() ?>