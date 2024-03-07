<?php get_header() ?>

<?php

$row_layout = get_row_layout();
?>

<?php if (have_rows('content')) : ?>
  <?php while (have_rows('content')) : the_row(); ?>
    <?php if (get_row_layout() == 'homeHero') : ?>
      <?php get_template_part('template-parts/content/section', 'home-hero') ?>
    <?php elseif (get_row_layout() == 'socials') : ?>
      <?php get_template_part('template-parts/content/section', 'socials') ?>
    <?php elseif (get_row_layout() == 'menu') : ?>
      <?php get_template_part('template-parts/content/section', 'menu') ?>
    <?php elseif (get_row_layout() == 'textAndMedia') : ?>
      <?php get_template_part('template-parts/content/section', 'text-and-media') ?>
    <?php elseif (get_row_layout() == 'certificates') : ?>
      <?php get_template_part('template-parts/content/section', 'certificates') ?>
    <?php elseif (get_row_layout() == 'clients') : ?>
      <?php get_template_part('template-parts/content/section', 'clients') ?>
    <?php elseif (get_row_layout() == 'numbers') : ?>
      <?php get_template_part('template-parts/content/section', 'numbers') ?>
    <?php elseif (get_row_layout() == 'testimonials') : ?>
      <?php get_template_part('template-parts/content/section', 'testimonials') ?>
    <?php elseif (get_row_layout() == 'cta') : ?>
      <?php get_template_part('template-parts/content/section', 'cta') ?>
    <?php elseif (get_row_layout() == 'books') : ?>
      <?php get_template_part('template-parts/content/section', 'books') ?>
    <?php elseif (get_row_layout() == 'lastPublications') : ?>
      <?php get_template_part('template-parts/content/section', 'last-publications') ?>
    <?php elseif (get_row_layout() == 'contactForm') : ?>
      <?php get_template_part('template-parts/content/section', 'contact-form') ?>
    <?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>




<?php get_footer() ?>