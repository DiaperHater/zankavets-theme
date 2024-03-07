<?php

$image = get_sub_field('image');
$heading = get_sub_field('heading');
$link = get_sub_field('link');
?>

<!-- CTA -->
<section class="py-24 bg-neutral-900 relative">

  <!-- BgImage -->
  <picture>
    <source media="(min-width:640px )" srcset="<?= $image['sizes']['large'] ?>">
    <img src="<?= $image['sizes']['medium_large'] ?>" alt="<?= $image['alt'] ?>" class="absolute top-0 left-0 w-full h-full object-cover object-center">
  </picture>
  <!-- BgOverlay -->
  <div class="absolute top-0 left-0 w-full h-full bg-neutral-900 bg-opacity-70 backdrop-blur-sm"></div>

  <div class="wrapper">
    <div class="box">
      <!-- Inner -->
      <div class="grid place-items-center relative">
        <h2 class="heading mb-12 text-center text-yellow-300 leading-normal">
          <?= $heading ?>
        </h2>
        <a href="<?= $link['url'] ?>" class="button"><?= $link['title'] ?></a>
      </div>
    </div>
  </div>
</section>