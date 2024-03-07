<?php

get_template_part('template-parts/components/component', 'section-text-and-media', array(
  'heading' => get_sub_field('heading'),
  'text' => get_sub_field('text'),
  'link' => get_sub_field('link'),
  'video' => get_sub_field('video'),
  'image' => get_sub_field('image')
));
