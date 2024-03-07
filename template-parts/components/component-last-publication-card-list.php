<?php
$publication_id_list = get_posts(array(
  'post_type' => array('post', 'article'),
  'posts_per_page' => 3,
  'orderby' => 'date',
  'post_status' => 'publish',
  'fields' => 'ids',
));

get_template_part('template-parts/components/component', 'publication-card-list', array('publication_id_list' => $publication_id_list));
