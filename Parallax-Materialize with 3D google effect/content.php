<article class="post w3-hover-shadow">
<a href="<?php the_permalink(); ?>">
<div class="w3-card-4 w3-row w3-margin">

<div class="w3-third">
  <?php if (has_post_thumbnail()) {?>
  <img src="<?php the_post_thumbnail_url();?>" style="width:100%;min-height:200px" class='w3-image'>
  <?php } ?>
</div>
<div class="w3-twothird w3-container">
  <h3><b><?php the_title(); ?></b></h3>
  <p>
<?php the_content(); ?>
  </p>
</div>
<a>
</article>
<hr>
