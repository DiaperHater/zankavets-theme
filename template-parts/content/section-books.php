<?php

$heading = get_sub_field('heading');
$subheading = get_sub_field('subheading');
$books_sub_field = get_sub_field('books');
$book_id_list = array_map(fn ($value) => $value['book'], $books_sub_field);
?>

<!-- Books -->
<section class="py-24 bg-white">
  <div class="wrapper">
    <div class="box">
      <!-- Heading -->
      <h2 class="relative mx-auto mb-8 text-center heading text-neutral-900">
        <svg viewBox="0 0 420 177" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-1/2 -translate-x-1/2 w-[150%] max-w-[80vw]">
          <mask id="mask0_847268_611" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="50" width="420" height="127">
            <rect x="420" y="177" width="420" height="127" transform="rotate(-180 420 177)" fill="#D9D9D9" />
          </mask>
          <g mask="url(#mask0_847268_611)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M-53.1825 51.75L210 177L473.183 51.75H420.652L210 152L-0.651001 51.75L-53.1825 51.75Z" class="fill-yellow-300" />
          </g>
          <mask id="mask1_847268_611" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="420" height="127">
            <rect x="420" y="127" width="420" height="127" transform="rotate(-180 420 127)" fill="#D9D9D9" />
          </mask>
          <g mask="url(#mask1_847268_611)">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M-53.1825 1.75L210 127L473.183 1.75H420.652L210 102L-0.651001 1.75L-53.1825 1.75Z" class="fill-yellow-300" />
          </g>
        </svg>
        <span class="relative"><?= $heading ?></span>
      </h2>
      <!-- Subheading -->
      <p class="relative mb-8 text-center subheading text-neutral-900">
        <?= $subheading ?>
      </p>
      <!-- BookCardList -->
      <?php get_template_part('template-parts/components/component', 'book-card-list', array('book_id_list' => $book_id_list)) ?>
    </div>
  </div>
</section>