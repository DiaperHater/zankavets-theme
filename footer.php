  </main>

  <!-- Footer -->
  <footer class="pt-12 pb-24">
    <div class="wrapper">
      <div class="box">
        <!-- Navigation -->
        <div class="w-[920px] max-w-full mx-auto border-b border-b-yellow-300 pb-8 mb-12 md:grid md:grid-cols-8 md:gap-x-6 lg:items-center">
          <!-- Logo -->
          <a href="<?= home_url() ?>" class="block mb-12 text-4xl font-bold leading-none text-center text-yellow-300 uppercase duration-200 hover:text-yellow-500 md:col-span-2 md:col-start-4 md:mb-0">
            Zankavets
          </a>
          <!-- leftColumn -->
          <div class="flex flex-col items-center justify-end mb-6 gap-y-6 md:col-span-3 md:m-0 md:row-start-1 lg:flex-row lg:gap-x-6 lg:">
            <a href="/about" class="text-base text-yellow-300 uppercase duration-200 hover:text-yellow-500 decoration-4 underline-offset-4 hover:underline">
              About
            </a>
            <a href="/services" class="text-base text-yellow-300 uppercase duration-200 hover:text-yellow-500 decoration-4 underline-offset-4 hover:underline">
              Services
            </a>
            <a href="/blog" class="text-base text-yellow-300 uppercase duration-200 hover:text-yellow-500 decoration-4 underline-offset-4 hover:underline">
              Blog
            </a>
          </div>
          <!-- rightColumn -->
          <div class="flex flex-col items-center gap-y-6 md:col-span-3 md:m-0 lg:flex-row lg:gap-x-6">
            <a href="/articles" class="text-base text-yellow-300 uppercase duration-200 hover:text-yellow-500 decoration-4 underline-offset-4 hover:underline">
              Scientific Articles
            </a>
            <a href="/books" class="text-base text-yellow-300 uppercase duration-200 hover:text-yellow-500 decoration-4 underline-offset-4 hover:underline">
              Books
            </a>
            <a href="#" class="text-base text-yellow-300 uppercase duration-200 hover:text-yellow-500 decoration-4 underline-offset-4 hover:underline">
              Contact
            </a>
          </div>
        </div>
        <!-- Socials -->
        <div class="flex justify-center mb-20 gap-x-6">
          <?php get_template_part('template-parts/components/social-icons', null) ?>
        </div>
        <div class="flex justify-between font-light text-yellow-300">
          <!-- Sign -->
          <p class="">
            © vladyzankavets.com <?php echo date("Y"); ?>
          </p>
          <p>
            Website by <a href="https://valerypronin.com" class=""><strong>Valery Pronin</strong></a>
          </p>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer() ?>

  </body>

  </html>