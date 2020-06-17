<?php 
function firsttheme_post_meta() { ?>
<?php 
    printf(
      esc_html__("Posted on %s", "firsttheme"),
      '<a class="text-blue-400 hover:underline" href="'. esc_url(get_the_permalink()) .'"><time datetime="'. esc_attr(get_the_date('c')) .'">'. esc_html(get_the_date()) .'</time></a> '
    );
    printf(
      esc_html__("by %s", "firsttheme"),
      '<a class="text-blue-400 hover:underline" href="'. esc_url(get_author_posts_url(get_the_author_meta('ID'))) .'">'. esc_html(get_the_author()) .'</a>'
    );
  } ?>