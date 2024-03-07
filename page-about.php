<?php get_header() ?>

<?php

$content = get_the_content();
$blocks = parse_blocks($content);
?>


<section class="py-24 bg-white text-neutral-900">
  <div class="wrapper">
    <div class="box-sm">
      <div class="prose prose-2xl mx-auto">

        <?php
        foreach ($blocks as $block) {
          if ("core/shortcode" == $block['blockName']) {
            echo do_shortcode('[socials]');
          } else {
            echo render_block($block);
          }
        }
        ?>
      </div>

    </div>
  </div>
</section>

<?php get_template_part('template-parts/content/section', 'certificates', array('heading' => 'Certs')) ?>
<?php get_template_part('template-parts/content/section', 'contact-form') ?>



<?php get_footer() ?>