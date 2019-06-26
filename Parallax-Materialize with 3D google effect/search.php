<?php

get_header();

if (have_posts()): ?>

<h4 id="sam"> Search Results for  : <?php the_search_query() ?></h4>
<?php
  while(have_posts()): the_post();
get_template_part('content');
  ?>

  <?php endwhile ;
  else :
    '<p>No content found</p>';

    endif ;
get_footer();
 ?>
