<?php
$services = get_sub_field('services');
$books = get_sub_field('books');
$blog = get_sub_field('blog');
$articles = get_sub_field('articles');
?>
<!-- Menu -->
<section class="">
  <!-- Cards -->
  <div class="sm:grid sm:grid-cols-2">
    <!-- Card 1 -->
    <div class="bg-yellow-300 p-8 relative group overflow-hidden">
      <picture>
        <source srcset="<?= $services['image']['sizes']['large'] ?>" media="(min-width: 1024px)" />
        <img src="<?= $services['image']['sizes']['medium_large'] ?>" alt="" class="absolute top-0 left-0 w-full h-full object-cover object-center duration-300 group-hover:scale-110">
      </picture>
      <!-- BViewverlay -->
      <div class="absolute top-0 left-0 w-full h-full bg-neutral-900 bg-opacity-70 duration-300 group-hover:backdrop-blur-sm"></div>
      <!-- Body -->
      <div class="text-yellow-300 flex flex-col items-center justify-center h-[220px] relative lg:h-[300px]">
        <!-- Title -->
        <h3 class="text-4xl font-bold mb-4">Services</h3>
        <!-- Description -->
        <p class="text-center text-xl font-light max-w-[500px] mb-6">
          <?= $services['description'] ?>
        </p>
        <a href="/services" class="button">View</a>
      </div>
    </div>
    <!-- Card 2 -->
    <div class="bg-yellow-300 p-8 relative group overflow-hidden">
      <picture>
        <source srcset="<?= $books['image']['sizes']['large'] ?>" media="(min-width: 1024px)" />
        <img src="<?= $books['image']['sizes']['medium_large'] ?>" alt="" class="absolute top-0 left-0 w-full h-full object-cover object-center duration-300 group-hover:scale-110">
      </picture>
      <!-- BViewverlay -->
      <div class="absolute top-0 left-0 w-full h-full bg-neutral-900 bg-opacity-70 duration-300 group-hover:backdrop-blur-sm"></div>
      <!-- Body -->
      <div class="text-yellow-300 flex flex-col items-center justify-center h-[220px] relative lg:h-[300px]">
        <!-- Title -->
        <h3 class="text-4xl font-bold mb-4">Books</h3>
        <!-- Description -->
        <p class="text-center text-xl font-light max-w-[500px] mb-6">
          <?= $books['description'] ?>
        </p>
        <a href="/books" class="button">View</a>
      </div>
    </div>
    <!-- Card 3 -->
    <div class="bg-yellow-300 p-8 relative group overflow-hidden">
      <picture>
        <source srcset="<?= $blog['image']['sizes']['large'] ?>" media="(min-width: 1024px)" />
        <img src="<?= $blog['image']['sizes']['medium_large'] ?>" alt="" class="absolute top-0 left-0 w-full h-full object-cover object-center duration-300 group-hover:scale-110">
      </picture>
      <!-- BViewverlay -->
      <div class="absolute top-0 left-0 w-full h-full bg-neutral-900 bg-opacity-70 duration-300 group-hover:backdrop-blur-sm"></div>
      <!-- Body -->
      <div class="text-yellow-300 flex flex-col items-center justify-center h-[220px] relative lg:h-[300px]">
        <!-- Title -->
        <h3 class="text-4xl font-bold mb-4">Blog</h3>
        <!-- Description -->
        <p class="text-center text-xl font-light max-w-[500px] mb-6">
          <?= $blog['description'] ?>
        </p>
        <a href="/blog" class="button">View</a>
      </div>
    </div>
    <!-- Card 4 -->
    <div class="bg-yellow-300 p-8 relative group overflow-hidden">
      <picture>
        <source srcset="<?= $articles['image']['sizes']['large'] ?>" media="(min-width: 1024px)" />
        <img src="<?= $articles['image']['sizes']['medium_large'] ?>" alt="" class="absolute top-0 left-0 w-full h-full object-cover object-center duration-300 group-hover:scale-110">
      </picture>
      <!-- BViewverlay -->
      <div class="absolute top-0 left-0 w-full h-full bg-neutral-900 bg-opacity-70 duration-300 group-hover:backdrop-blur-sm"></div>
      <!-- Body -->
      <div class="text-yellow-300 flex flex-col items-center justify-center h-[220px] relative lg:h-[300px]">
        <!-- Title -->
        <h3 class="text-4xl font-bold mb-4">Scientific Articles</h3>
        <!-- Description -->
        <p class="text-center text-xl font-light max-w-[500px] mb-6">
          <?= $articles['description'] ?>
        </p>
        <a href="/articles" class="button">View</a>
      </div>
    </div>
  </div>
</section>