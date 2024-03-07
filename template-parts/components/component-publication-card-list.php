<?php

$args = wp_parse_args($args, array(
  'publication_id_list' => array(),
  'text_color_light' => true
));

?>
<!-- Publication Cards -->
<div class="grid gap-y-20 md:grid-cols-2 md:gap-x-6 xl:grid-cols-10 xl:gap-x-20">
  <?php
  foreach ($args['publication_id_list'] as $id) {
  ?>
    <!-- Card -->
    <a href="<?= get_permalink($id) ?>" class="group xl:col-span-5 first:xl:col-span-6 first:xl:row-span-2 xl:[&:nth-child(2)]:col-span-4 xl:[&:nth-child(3)]:col-span-4 md:flex md:flex-col">
      <!-- Image -->
      <figure class="relative aspect-video overflow-hidden mb-6">
        <img src="<?= get_the_post_thumbnail_url($id, 'medium_large') ?>" alt="" class="w-full h-full object-cover object-center duration-300 group-hover:scale-110 xl:group-first:aspect-[4/3]">
        <div class="absolute top-0 left-0 w-full h-full duration-300 group-hover:backdrop-blur-sm"></div>
      </figure>

      <!-- Title -->
      <h3 class="text-2xl <?= $args['text_color_light'] ? 'text-yellow-300 group-hover:text-yellow-500' : 'text-neutral-900 group-hover:text-yellow-500' ?> font-bold mb-8 md:text-4xl">
        <?= get_the_title($id) ?>
      </h3>
      <!-- Decor -->
      <div class="h-2 <?= $args['text_color_light'] ? 'bg-yellow-300 group-hover:bg-yellow-500' : 'bg-neutral-900 group-hover:bg-yellow-500' ?> md:mt-auto"></div>
    </a>
  <?php
  }
  ?>
</div>