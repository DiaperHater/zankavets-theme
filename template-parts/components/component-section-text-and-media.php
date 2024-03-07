<?php

$args = wp_parse_args($args, array(
  'heading' => 'Undefined heading',
  'text' => 'Undefined text',
  'link' => array('url' => '#', 'title' => 'Undefined'),
  'video' => false,
  'image' => false
));

$heading = $args['heading'];
$text = $args['text'];
$link = $args['link'];
$video = $args['video'];
$image = $args['image'] ? $args['image']['sizes']['medium_large'] : false;
?>

<!-- TextAndMedia -->
<section class="py-16 bg-white border-y-[64px] border-yellow-300 relative overflow-hidden group">
  <!-- ArrowDecor -->
  <svg viewBox="0 0 177 420" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 h-[calc(100%+1px)] group-even:left-[160px] group-even:xl:left-[240px] group-odd:rotate-180 group-odd:right-[160px] group-odd:xl:right-[240px]">
    <mask id="mask0_847268_633" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="49" y="0" width="128" height="420">
      <rect x="177" y="3.05176e-05" width="420" height="127" transform="rotate(90 177 3.05176e-05)" fill="#D9D9D9" />
    </mask>
    <g mask="url(#mask0_847268_633)">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M51.7495 473.183L177 210L51.7495 -53.1828L51.7495 -0.651279L152 210L51.7495 420.651L51.7495 473.183Z" class="fill-yellow-300" />
    </g>
    <mask id="mask1_847268_633" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-1" y="0" width="128" height="420">
      <rect x="127" y="3.05176e-05" width="420" height="127" transform="rotate(90 127 3.05176e-05)" fill="#D9D9D9" />
    </mask>
    <g mask="url(#mask1_847268_633)">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M1.74951 473.183L127 210L1.74951 -53.1828L1.74951 -0.651279L102 210L1.74951 420.651L1.74951 473.183Z" class="fill-yellow-300" />
    </g>
  </svg>
  <div class="relative wrapper">
    <div class="box">
      <!-- Inner -->
      <div class="lg:grid lg:grid-cols-12 lg:gap-x-6">
        <!-- Heading (mobile only) -->
        <h2 class="mb-8 heading text-neutral-900 lg:hidden">
          <?= $heading ?>
        </h2>
        <!-- Media -->
        <?php

        if ($video) {
        ?>
          <figure class="relative mb-8 overflow-hidden border-2 border-yellow-300 shadow-lg cursor-pointer rounded-xl group h-fit lg:mb-0 lg:col-span-6 group-even:lg:col-start-7" onclick="playPauseVideo(this)">
            <video src="<?= $video ?>" muted loop playsinline class="object-cover object-center" poster="<?= $image ?>"></video>
            <button class="absolute duration-200 -translate-x-1/2 -translate-y-1/2 play-button top-1/2 left-1/2 group-hover:text-yellow-500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
              </svg>
            </button>
          </figure>
        <?php

        } else {
        ?>
          <figure class="mb-8 overflow-hidden border-2 border-yellow-300 shadow-lg rounded-xl aspect-video lg:mb-0 lg:col-span-6 group-even:lg:col-start-7">
            <img src="<?= $image ?>" alt="<?= $heading ?>" class="object-cover object-center w-full h-full">
          </figure>
        <?php
        }
        ?>
        <!-- TextContent -->
        <div class="lg:col-span-6 group-odd:col-start-7 lg:row-start-1">
          <!-- Heading (desktop only) -->
          <h2 class="hidden mb-8 heading text-neutral-900 lg:block">
            <?= $heading ?>
          </h2>
          <!-- Text -->
          <p class="mb-6 text-xl text-neutral-900">
            <?= $text ?>
          </p>
          <!-- Button -->
          <a href="<?= $link['url'] ?>" class="button"><?= $link['title'] ?></a>
        </div>
      </div>
    </div>
  </div>
</section>