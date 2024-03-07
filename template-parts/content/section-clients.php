<?php

$heading = get_sub_field('heading');
$text = get_sub_field('text');
$cards = get_sub_field('cards');
?>

<?php
function print_card($card)
{
  if (!$card) {
    return;
  }

  $img = $card['image']['sizes']['medium_large'];
  $title = $card['title'];
?>
  <!-- Card -->
  <div class="relative flex flex-col items-start justify-end p-4 aspect-square">
    <!-- Image -->
    <img src="<?= $img ?>" alt="" class="w-full h-full object-cover object-center absolute top-0 left-0">
    <!-- Overlay -->
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-neutral-900 from-0% to-25%"></div>
    <!-- Title -->
    <h4 class="relative text-2xl text-yellow-300 lg:text-3xl">
      <?= $title ?>
    </h4>
  </div>
<?php
}
?>

<!-- Clients -->
<section class="py-16 bg-white border-y-[64px] border-yellow-300 overflow-hidden relative">
  <!-- ArrowDecor -->
  <svg viewBox="0 0 177 420" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 h-[calc(100%+1px)] left-[160px] xl:left-[240px]">
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
  <div class="wrapper">
    <div class="box">
      <!-- Carousel -->
      <div class="swiper-clients relative">
        <div class="swiper-wrapper">
          <!-- Slide -->
          <div class="swiper-slide grid gap-3 sm:gap-6 h-full">
            <!-- Text -->
            <div class="text-black aspect-square">
              <h2 class="text-3xl font-bold mb-5 md:heading sm:mb-8">
                <?= $heading ?>
              </h2>
              <p class="mb-5 text-xl">
                <?= $text ?>
              </p>
            </div>
            <!-- Card -->
            <?php print_card($cards[0]) ?>
          </div>

          <?php

          // Slice rest of the cards
          $rest_of_cards = array_slice($cards, 1);
          // Now make 2card chunks
          $chunks = array_chunk($rest_of_cards, 2);
          // Foreach chunk print a slide
          foreach ($chunks as $chunk) {
          ?>
            <!-- Slide -->
            <div class="swiper-slide grid gap-3 sm:gap-6">
              <?php
              foreach ($chunk as $item) {
                print_card($item);
              }
              ?>
            </div>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
</section>