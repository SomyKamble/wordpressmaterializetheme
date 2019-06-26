<?php
get_header(); ?>


<?php
if (have_posts()):
  while(have_posts()): the_post();
 get_template_part('content');
  ?>
  <?php endwhile ;
  echo '<div class="w3-center"><div class="w3-bar w3-xlarge">';
  echo paginate_links();
  echo '</div></div>';
  else :
    '<p>No content found</p>';

    endif ;?>



<?php get_footer();
 ?>
