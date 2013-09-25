<?php get_header(); ?>
  <div class="main">

  <div class="container">
  <div class="row auto">

        <?php $i = 0; ?>

   <?php if (have_posts()) : while (have_posts()) : the_post();
        if (($i%3) === 0)
         {
          echo "</div> <div class='row auto'>";
         }
         ?>
   <?php
  if ( has_post_thumbnail() )
  {
   echo " <div class='span4 images'> ";
    echo "<div class='thumbnail_img'><a href='".get_permalink()."'>";
    the_post_thumbnail( 'cover');
    echo "<div class=hover-thumbnail><p>";
    the_title();
    echo "</p></div><i class='fa fa-arrow-left' aria-hidden='true'></i><span class='mosallas'></span></a></div>";
   echo "</div>";
      $i=$i+1;
  }?>

    <?php  endwhile; else: ?>
   <p><?php _e('متاسفانه صفحه مورد نظر شما یافت نشد.'); ?></p><?php endif; ?>
  </div>
</div>
</div>

<?php get_footer(); ?>
