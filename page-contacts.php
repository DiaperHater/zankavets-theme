<?php get_header() ?>

<section class="py-24 bg-white">
  <div class="wrapper">
    <div class="box">
      <div class="lg:flex lg:justify-between lg:items-start">
        <!-- Heading -->
        <h2 class="heading text-neutral-900 mb-12">
          Contacts
        </h2>
        <!-- TelAndEmail -->
        <div class="mb-12">
          <p class="text-3xl text-right text-neutral-900 mb-2">
            Tel: <a href="<?= get_field('telnum')['url'] ?>" class="hover:text-yellow-500 duration-300 hover:underline"><?= get_field('telnum')['title'] ?></a>
          </p>
          <p class="text-3xl text-right text-neutral-900">
            Email: <a href="mailto:<?= get_field('email') ?>" class="hover:text-yellow-500 duration-300 hover:underline"><?= get_field('email') ?></a>
          </p>
        </div>
        <!-- Socials -->
        <div class="">
          <p class="text-xl font-semibold text-right mb-4 text-neutral-900">
            Open to connection:
          </p>
          <div class="flex justify-end gap-3 [&_svg]:text-neutral-900 [&_svg]:w-8 [&_svg]:h-8">
            <?php get_template_part('template-parts/components/social-icons') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_template_part('template-parts/content/section', 'contact-form') ?>

<?php get_footer() ?>