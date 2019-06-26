<footer class="page-footer <?php echo get_theme_mod('foot_color')?>" id ="footer_col">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text"><?php echo get_theme_mod('footer-heading'); ?></h5>
        <p class="grey-text text-lighten-4"> <?php echo get_theme_mod('footer-content'); ?></p>
      </div>


      <div class="col l3 s12">

        <ul class="white-text">
          <?php dynamic_sidebar('footer2'); ?>

        </ul>
      </div>

      <div class="col l3 s12">
        <h5 class="white-text"></h5>
        <ul>
          <?php  $args = array('theme_location'=>'footer'); ?>

        </ul>
      </div>
    </div>
  </div>
  <!--Social buttons-->

      <!--Twitter
    <?php //echo  //get_bloginfo('template_url'); ?>  /icon_image/facebook-box3.png " >-->


  <div class="footer-copyright">

    <div class="container">

      <a href="#" class="btn-floating btn-large waves-effect waves-light">

      <img class="w3-image" src="<?php echo  get_bloginfo('template_url'); ?>/icon_image/Arrow-up-icon.png" width="57" height="60">

      </a>  Made by <a class="brown-text text-lighten-3" href="http://modernmonks.in/">Modern Monks</a>

      &nbsp
      &nbsp

      <?php if(get_theme_mod('social_icons-choice')=="Yes"){?>
    <a class="btn-floating btn-large waves-effect waves-light" href="<?php echo get_theme_mod('social_icons-facebook'); ?>">
      <!-- Facebook icon by Icons8 -->

    <img  class="w3-image" src="<?php echo  get_bloginfo('template_url'); ?>/icon_image/Facebook-icon.png" width="61" height="61">
    </a>
    <a class="btn-floating btn-large waves-effect waves-light" href="<?php echo get_theme_mod('social_icons-pintrest'); ?>">
      <!-- Facebook icon by Icons8 -->

    <img  class="w3-image" src="<?php echo  get_bloginfo('template_url'); ?>/icon_image/Pinterest-icon.png" width="57" height="61" >
    </a>
    <a class="btn-floating btn-large waves-effect waves-light"  href="<?php echo get_theme_mod('social_icons-twitter'); ?>">
      <!-- Facebook icon by Icons8 -->

    <img class="w3-image" src="<?php echo  get_bloginfo('template_url'); ?>/icon_image/Twitter-icon.png" width="59" height="61">
    </a>
    <a class="btn-floating btn-large waves-effect waves-light" href="<?php echo get_theme_mod('social_icons-google'); ?>">
      <!-- Facebook icon by Icons8 -->

    <img  class="w3-image" src="<?php echo  get_bloginfo('template_url'); ?>/icon_image/Google-plus-icon.png" width="59" height="61">
    </a>
    <a class="btn-floating btn-large waves-effect waves-light" href="<?php echo get_theme_mod('social_icons-linkedin'); ?>">
      <!-- Facebook icon by Icons8 -->

    <img class="w3-image" src="<?php echo  get_bloginfo('template_url'); ?>/icon_image/Linkedin-icon.png" width="59" height="61">
    </a>
<?php } ?>
    </div>

    <a  href="<?php echo get_bloginfo('template_url');?>/searchpage.php" id ='somy' class='btn-floating btn-small waves-effect waves-light' style=" position: fixed;
    bottom: 0;
    right: 0;"><img class="w3-image" src="<?php echo  get_bloginfo('template_url'); ?>/icon_image/search_icon.png" width="40" height="40">
  </a>

  </div>


</footer>


 <!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
<?php wp_footer(); ?>
</body>
</html>
