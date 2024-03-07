<?php

$items = get_sub_field('items');

function print_item($itm)
{
?>
  <!-- Item -->
  <div class="w-full px-3 min-[480px]:w-1/2 md:w-1/3">
    <!-- Pennant -->
    <div class="w-[200px] aspect-[240/224] mx-auto relative">
      <!-- PennantBG -->
      <svg width="260" height="245" viewBox="0 0 260 245" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-0 left-0 w-full h-auto">
        <g filter="url(#filter0_d_847275_658)">
          <mask id="path-1-outside-1_847275_658" maskUnits="userSpaceOnUse" x="8" y="4" width="244" height="229" fill="black">
            <rect fill="white" x="8" y="4" width="244" height="229" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C10 11.3726 15.3726 6 22 6H238C244.627 6 250 11.3726 250 18V90H249.834C249.943 90.6504 250 91.3186 250 92V164L130 230L10 164V92C10 91.3186 10.0568 90.6504 10.1659 90H10V18Z" />
          </mask>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M10 18C10 11.3726 15.3726 6 22 6H238C244.627 6 250 11.3726 250 18V90H249.834C249.943 90.6504 250 91.3186 250 92V164L130 230L10 164V92C10 91.3186 10.0568 90.6504 10.1659 90H10V18Z" fill="#E5E5E5" />
          <path d="M250 90V92H252V90H250ZM249.834 90V88H247.471L247.862 90.3309L249.834 90ZM250 164L250.964 165.752L252 165.183V164H250ZM130 230L129.036 231.752L130 232.283L130.964 231.752L130 230ZM10 164H8V165.183L9.03616 165.752L10 164ZM10.1659 90L12.1384 90.3309L12.5294 88H10.1659V90ZM10 90H8V92H10V90ZM22 4C14.268 4 8 10.268 8 18H12C12 12.4772 16.4772 8 22 8V4ZM238 4H22V8H238V4ZM252 18C252 10.268 245.732 4 238 4V8C243.523 8 248 12.4772 248 18H252ZM252 90V18H248V90H252ZM249.834 92H250V88H249.834V92ZM247.862 90.3309C247.952 90.8724 248 91.4299 248 92H252C252 91.2072 251.934 90.4284 251.807 89.6691L247.862 90.3309ZM248 92V164H252V92H248ZM130.964 231.752L250.964 165.752L249.036 162.248L129.036 228.248L130.964 231.752ZM9.03616 165.752L129.036 231.752L130.964 228.248L10.9638 162.248L9.03616 165.752ZM12 164V92H8V164H12ZM12 92C12 91.4299 12.0475 90.8724 12.1384 90.3309L8.19348 89.6691C8.06609 90.4284 8 91.2072 8 92H12ZM10 92H10.1659V88H10V92ZM8 18V90H12V18H8Z" fill="#FACC15" mask="url(#path-1-outside-1_847275_658)" />
          <mask id="path-3-outside-2_847275_658" maskUnits="userSpaceOnUse" x="8" y="87" width="244" height="38" fill="black">
            <rect fill="white" x="8" y="87" width="244" height="38" />
            <path d="M10 101C10 94.3726 15.3726 89 22 89H238C244.627 89 250 94.3726 250 101V125H10V101Z" />
          </mask>
          <path d="M8 101C8 93.268 14.268 87 22 87H238C245.732 87 252 93.268 252 101H248C248 95.4772 243.523 91 238 91H22C16.4772 91 12 95.4772 12 101H8ZM250 125H10H250ZM8 125V101C8 93.268 14.268 87 22 87V91C16.4772 91 12 95.4772 12 101V125H8ZM238 87C245.732 87 252 93.268 252 101V125H248V101C248 95.4772 243.523 91 238 91V87Z" fill="#FACC15" mask="url(#path-3-outside-2_847275_658)" />
        </g>
        <defs>
          <filter id="filter0_d_847275_658" x="0" y="0" width="260" height="244.283" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
            <feOffset dy="4" />
            <feGaussianBlur stdDeviation="4" />
            <feComposite in2="hardAlpha" operator="out" />
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.28 0" />
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_847275_658" />
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_847275_658" result="shape" />
          </filter>
        </defs>
      </svg>

      <div class="relative text-neutral-900">
        <p class="h-[67px] flex items-center justify-center text-xl font-semibold text-center uppercase">
          <?= $itm['text'] ?>
        </p>
        <p class="p-2 pb-0 mt-2 text-6xl font-semibold text-center uppercase">
          <?= $itm['number'] ?>
        </p>
      </div>

    </div>
  </div>
<?php
}
?>

<!-- Numbers -->
<section class="relative py-24 overflow-hidden bg-neutral-900 numbers-section">
  <div class="wrapper">
    <div class="box-sm">
      <!-- Items -->
      <div class="flex flex-wrap justify-center gap-y-16">
        <?php
        foreach ($items as $item) {
          print_item($item);
        }
        ?>
      </div>
    </div>
  </div>
</section>