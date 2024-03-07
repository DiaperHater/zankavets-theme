<?php

$args = wp_parse_args($args, array(
  'book_id_list' => array(),
  'max_two_per_row' => true
))

?>

<!-- Items -->
<div class="flex flex-col items-center md:max-w-3xl md:mx-auto md:gap-12 md:grid md:grid-cols-2 md:place-items-center md:items-start relative  <?= $args['max_two_per_row'] ? '' : 'xl:max-w-full xl:grid-cols-3' ?> ">

  <?php
  foreach ($args['book_id_list'] as $id) {

    $title = get_the_title($id);
    $excerption = get_the_excerpt($id);
    $cover = get_the_post_thumbnail_url($id, 'medium');
  ?>
    <!-- Item -->
    <div class="bg-white px-4 py-12 mt-44 w-96 max-w-full border-2 border-yellow-300 rounded-xl shadow-lg md:mt-20 ">
      <!-- Image -->
      <div class="h-32 overflow-visible flex items-end justify-center mb-6">
        <img src="<?= $cover ?>" alt="<?= $title . ' book cover' ?>" class="w-[200px]">
      </div>
      <div class="text-neutral-900">
        <h3 class="text-3xl font-bold mb-4 text-center">
          <?= $title ?>
        </h3>
        <p class="mb-8 text-center">
          <?= $excerption ?>
        </p>
        <div class="">
          <a href="<?= get_permalink($id) ?>" class="button button--yellow mb-6 w-full">
            more info
          </a>
          <a href="#form" class="button w-full">
            Get book
          </a>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

</div>