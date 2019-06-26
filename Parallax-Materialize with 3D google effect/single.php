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
  <header class="w3-container w3-center w3-padding-32">

    <p>Welcome to the blog of <span class="w3-tag"><?php the_author() ?></span></p>
  </header>

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
      <span class="w3-opacity">By  <?php the_author() ?> on <?php the_time('F j, Y g:i a');?></span>
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
      <div class="w3-card-4 w3-margin w3-white">

            <div class="w3-container">
              <ul>
	<?php
		//Gather comments for a specific page/post
		$comments = get_comments(array(
			'post_id' => get_the_ID(),
			'status' => 'approve' //Change this to the type of comments to be displayed
		));

		//Display the list of comments
		wp_list_comments(array(
			'per_page' => 20, //Allow comment pagination
			'reverse_top_level' => false //Show the oldest comments at the top of the list
		), $comments);
	?>
</ul>
</div>
</div>

<div class="w3-card-4 w3-margin w3-white">

      <div class="w3-container">
     <p><?php $comment_args = array( 'title_reply'=>'Got Something To Say:',

   'fields' => apply_filters( 'comment_form_default_fields', array(

   'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Your Name' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) .

           '<input id="author" class="class="validate" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',

       'email'  => '<p class="comment-form-email">' .

                   '<label for="email">' . __( 'Your Email Please' ) . '</label> ' .

                   ( $req ? '<span>*</span>' : '' ) .

                   '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',

       'url'    => '' ) ),

       'comment_field' => '<p>' .

                   '<label for="comment">' . __( 'Let us know what you have to say:' ) . '</label>' .

                   '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>' .

                   '</p>',

       'comment_notes_after' => '',



       'label_submit' => __('COMMENT'),

   );

   comment_form($comment_args); ?>

</p>
     <div class="w3-row" id="button_color" value="<?php echo get_theme_mod('foot_color'); ?>">
       


     </div>
   </div>
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
