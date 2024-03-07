<?php

$args = wp_parse_args($args, array(
  'heading' => 'Testimonials',
  'terms' => array()
));

$params = array(
  'post_type' => 'testimonial',
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'fields' => 'ids'
);

if (!empty($args['terms'])) {
  $params['tax_query'] = array(
    array(
      'taxonomy' => 'testimonial-category',
      'field'    => 'slug',
      'terms'    => $args['terms']
    )
  );
}

$testimonials_posts_ids = get_posts($params);


function print_testimonial($id)
{
  $ava = get_field('image', $id);
  $name = get_field('name', $id);
  $position = get_field('position', $id);
  $text = get_field('text', $id);
?>
  <!-- Slide -->
  <div class="px-4 pt-4 pb-8 border-2 border-yellow-300 shadow-xl swiper-slide rounded-xl">
    <!-- Head -->
    <div class="flex relative pt-16 mb-8 sm:pt-0 sm:pl-[160px]">
      <!-- Ava -->
      <img src="<?= $ava['sizes']['thumbnail'] ?>" alt="<?= $ava['alt'] ?>" class="shadow-xl w-[120px] rounded-full absolute top-0 left-1/2 -translate-y-2/3 -translate-x-1/2 bg-white sm:-translate-y-[57%] sm:left-0 sm:translate-x-0 sm:w-[140px]">
      <!-- Info -->
      <div class="">
        <p class="text-2xl mb-1.5 text-neutral-900">
          <?= $name ?>
        </p>
        <p class="text-neutral-400">
          <?= $position ?>
        </p>
      </div>
    </div>
    <!-- Body -->
    <p class="text-2xl italic font-light text-neutral-900">
      "<?= $text ?>"
    </p>
  </div>
<?php
}
?>



<!-- Testimonials -->
<section class="py-24 overflow-hidden bg-white">
  <div class="wrapper">
    <div class="box">
      <!-- Inner -->
      <div class="">
        <h2 class="mb-32 text-center heading text-neutral-900">
          <?= $args['heading'] ?: 'Testimonials' ?>
        </h2>
        <!-- Slider -->
        <div class="swiper-testimonials">
          <div class="swiper-wrapper">
            <?php
            foreach ($testimonials_posts_ids as $id) {
              print_testimonial($id);
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>