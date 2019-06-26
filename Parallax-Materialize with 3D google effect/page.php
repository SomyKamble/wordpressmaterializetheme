<?php get_header(); ?>


<?php  if (have_posts()):
  while(have_posts()): the_post();

  ?>





<?php endwhile ;
else :
  '<p>No content found</p>';


  endif ; ?>


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <style>
  body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
  </style>


  <!-- w3-content defines a container for fixed size centered content,
  and is wrapped around the whole page content, except for the footer in this example -->
  <div class="w3-content" style="max-width:1400px">

  <!-- Header -->


  <!-- Grid -->
  <div class="w3-row">

  <!-- Blog entries -->
  <div class="w3-col l8 s12">
    <!-- Blog entry -->
    <div class="w3-card-4 w3-margin w3-white">
      <?php if (has_post_thumbnail()) {?>
      <img src="<?php the_post_thumbnail_url(); ?>" alt="Please Use an image" style="width:100%" class='w3-image'>
      <?php } ?>

      <div class="w3-container">
        <h3><b><?php the_title()?></b></h3>

      </div>

      <div class="w3-container">
        <p><?php the_content(); ?></p>
        <div class="w3-row">


        </div>
      </div>
    </div>
    <hr>

    <!-- Blog entry -->

  <!-- END BLOG ENTRIES -->
  </div>

  <!-- Introduction menu -->
  <div class="w3-col l4">
    <!-- About Card -->
    <div class="w3-card-2 w3-margin">

      <ul class="w3-ul w3-hoverable w3-white">

            <?php
            dynamic_sidebar('siderbar1');
            ?>
          <span class="w3-large">  </span><br>




      </ul>
    </div>
    <hr>



    <!-- Posts -->


    <!-- Labels / tags -->

  <!-- END Introduction Menu -->
  </div>

  <!-- END GRID -->
</div><br>

  <!-- END w3-content -->
  </div>

  <!-- Footer -->



<?php get_footer(); ?>
