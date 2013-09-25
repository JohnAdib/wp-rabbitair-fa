<?php get_header(); ?>

      <div class="container pages">
         <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
         <article>
           <?php
              if(is_home())
              {
                if ( has_post_thumbnail() )
                {
                  echo "<a href='".get_permalink()."'>";
                  the_post_thumbnail( 'thumbnail');
                  echo "</a>";
                }
                the_excerpt();
              }
              else
              {
                the_content();
              }
            ?>
         </article>
         <?php endwhile; else: ?>
         <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
      </div>

<?php get_footer(); ?>