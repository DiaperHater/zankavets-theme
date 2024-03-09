<?php

$heading = get_sub_field('heading');
$publication_id_list = get_sub_field('publications');
?>

<!-- LastPosts -->
<section class="py-24">
  <div class="wrapper">
    <div class="box">
      <!-- Heading -->
      <h2 class="mb-20 text-yellow-300 heading">
        <?= $heading ?>
      </h2>
      <!-- Cards -->
      <?php get_template_part('template-parts/components/component', 'publication-card-list', array('publication_id_list' => $publication_id_list)); ?>

    </div>
  </div>
</section>