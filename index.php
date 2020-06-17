<?php get_header() ?>
<section class="posts container mx-auto px-3 md:px-6">
  <h2 class="text-5xl font-bold text-black">Blog</h2>
  <hr>
  <?php if (have_posts()) { ?>
  <ul class="mt-4">
    <?php while(have_posts()) { the_post(); ?>
    <ul>
      <li class="post mb-4">
        <h3 class="mb-3"><a href="<?php the_permalink() ?>" class="text-2xl font-bold text-blue-600">
            <?php the_title() ?>
          </a></h3>
        <div>
          <?php firsttheme_post_meta() ?>
        </div>
        <div>
          <p class="text-gray-800 text-sm"><?php echo get_the_excerpt() ?></p>
        </div>
        <a href="<?php the_permalink() ?>" class="text-blue-400 hover:underline mt-2 text-sm">
          <?php echo __("Read more", "firsttheme") ?> <span class="hidden"><?php echo __("about", "firsttheme") ?>
            <?php echo get_the_title() ?></span>
        </a>
      </li>
    </ul>
    <?php } ?>
    <?php the_posts_pagination() ?>
    <?php } else { ?>
    <p class="text-gray-600 font-bold text-2xl my-5">
      <?php echo __('Sorry, no posts matched your criteria.', 'firsttheme') ?>
    </p>
    <?php } ?>
  </ul>
</section>
<?php get_footer() ?>