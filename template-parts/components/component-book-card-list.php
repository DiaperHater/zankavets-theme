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
    <div class="max-w-full px-4 py-12 bg-white border-2 border-yellow-300 shadow-lg mt-44 w-96 rounded-xl md:mt-20 ">
      <!-- Image -->
      <div class="flex items-end justify-center h-32 mb-6 overflow-visible">
        <img src="<?= $cover ?>" alt="<?= $title . ' book cover' ?>" class="w-[200px]">
      </div>
      <div class="text-neutral-900">
        <h3 class="mb-4 text-3xl font-bold text-center">
          <?= $title ?>
        </h3>
        <p class="mb-8 text-center">
          <?= $excerption ?>
        </p>
        <div class="">
          <a href="<?= get_permalink($id) ?>" class="w-full mb-6 button button--yellow">
            more info
          </a>
          <a href="<?= get_permalink($id) ?>#form" class="w-full button">
            Get book
          </a>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

</div>