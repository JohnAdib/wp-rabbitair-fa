<?php get_header(); ?>
<div class="container blog">
  <div class="row">
    <h2 class="page-title">The Air Quality Blog by Rabbit Air</h2>
    <?php get_sidebar(); ?>
    <div class="span8">
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <article>
         <?php
          the_date('F  Y , d', '<span>', '</span>');
          echo "<h2><a href='".get_permalink()."'>";
          the_title();
          echo "</a></h2>";
          the_excerpt();
          if ( has_post_thumbnail() )
          {
            the_post_thumbnail( 'full');
          }

          the_content();
          ?>
       </article>
       <?php endwhile; else: ?>
       <p><?php _e('متاسفانه هیچ خبری یافت نشد.'); ?></p><?php endif; ?>
      <hr class="normal-hr">
    </div>
  </div>
</div>
<?php get_footer(); ?>