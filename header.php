<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- START Fonts -->
  <link rel="preload" href="<?= get_template_directory_uri() ?>/assets/fonts/Roboto_Condenced/RobotoCondensed-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin>
  <link rel="preload" href="<?= get_template_directory_uri() ?>/assets/fonts/Roboto_Condenced/RobotoCondensed-Italic-VariableFont_wght.ttf" as="font" type="font/ttf" crossorigin>
  <!-- END Fonts -->

  <?php wp_head() ?>

  <title><?= get_the_title() ?></title>
</head>

<body>

  <!-- Header -->
  <header class="bg-neutral-900 text-white fixed top-0 left-0 w-full z-50 group/header">
    <div class="wrapper">
      <div class="box">
        <!-- Inner -->
        <nav class="py-6 flex items-center duration-200 group-[.narrow]/header:py-3">
          <!-- Logo -->
          <a href="<?= home_url() ?>" class="text-2xl text-yellow-300 leading-none font-bold uppercase duration-200 hover:text-yellow-500 mr-12">
            Zankavets
          </a>
          <!-- ArrowDecor -->
          <svg viewBox="0 0 177 420" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute left-[160px] h-full xl:left-[240px]">
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
          <!-- Links -->
          <ul class="hidden lg:flex lg:items-center lg:gap-x-4 lg:ml-auto">
            <a href="/about" class="text-base text-yellow-300 uppercase duration-200  decoration-4 underline-offset-4 hover:text-yellow-500">
              About
            </a>
            <a href="/services" class="text-base text-yellow-300 uppercase duration-200  decoration-4 underline-offset-4 hover:text-yellow-500">
              Services
            </a>
            <a href="/blog" class="text-base text-yellow-300 uppercase duration-200  decoration-4 underline-offset-4 hover:text-yellow-500">
              Blog
            </a>
            <a href="/articles" class="text-base text-yellow-300 uppercase duration-200  decoration-4 underline-offset-4 hover:text-yellow-500">
              Scientific Articles
            </a>
            <a href="/books" class="text-base text-yellow-300 uppercase duration-200  decoration-4 underline-offset-4 hover:text-yellow-500">
              Books
            </a>
          </ul>
          <!-- Buttons -->
          <div class="flex gap-x-4 items-center ml-auto lg:ml-12">
            <!-- Burger  -->
            <button class="burger w-[36px] flex flex-col gap-y-2 group group-[.narrow]/header:gap-y-1.5 group-[.narrow]/header:w-[30px] lg:hidden" onclick="burgerOnClick()">
              <div class="w-full h-1 bg-yellow-300 duration-200 origin-top-right group-hover:bg-yellow-500 group-[.active]:-rotate-45"></div>
              <div class="w-full h-1 bg-yellow-300 duration-200 group-hover:bg-yellow-500 group-[.active]:-translate-x-full group-[.active]:opacity-0 group-[.active]:invisible"></div>
              <div class="w-full h-1 bg-yellow-300 duration-200 origin-bottom-right group-hover:bg-yellow-500 group-[.active]:rotate-45"></div>
            </button>
            <a href="/contacts" class="hidden lg:block lg:button lg:button--yellow">
              contact
            </a>
            <!-- LangSwitch -->
            <!-- <a href="#" class="group">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 duration-200 text-yellow-300 group-hover:text-yellow-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
              </svg>
            </a> -->
          </div>
        </nav>
      </div>
    </div>
    <!-- MobileMenu -->
    <nav class="mobile-menu absolute top-full left-full w-full h-[100vh] overflow-auto bg-neutral-900 bg-opacity-90 duration-200 lg:hidden">
      <div class="wrapper">
        <div class="box">
          <!-- Inner -->
          <div class="flex flex-col gap-y-16 pt-14 pb-40">
            <!-- Links -->
            <ul class="flex flex-col gap-y-4">
              <a href="/about" class="text-lg text-yellow-300 uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
                About
              </a>
              <a href="/services" class="text-lg text-yellow-300 uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
                Services
              </a>
              <a href="/blog" class="text-lg text-yellow-300 uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
                Blog
              </a>
              <a href="/articles" class="text-lg text-yellow-300 uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
                Scientific Articles
              </a>
              <a href="/books" class="text-lg text-yellow-300 uppercase duration-200 hover:text-yellow-500  decoration-4 underline-offset-4 hover:underline">
                Books
              </a>
            </ul>
            <!-- Socials -->
            <div class="flex items-center gap-x-8 self-center">
              <?php get_template_part('template-parts/components/social-icons', null) ?>
            </div>
            <!-- Contact -->
            <a href="/contacts" class="button self-center">
              contact
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main class="mt-[76px] lg:mt-[88px]">