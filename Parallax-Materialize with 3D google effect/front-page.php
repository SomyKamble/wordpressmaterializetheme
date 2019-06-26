<?php get_header(); ?>

  <div id="index-banner" class="parallax-container w3-hover-shadow">
    
      <div class="container">
        <script>  
 $(document).ready(function(){
      $('.slider').slider('start');
	  
    });
        </script>
          

<div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('para-slider1-backgrpound-image'));?>"> <!-- random image -->
        <div class="caption center-align">
          <h3><?php echo get_theme_mod('para-slider1-heading'); ?></h3>
          <h5 class="light grey-text text-lighten-3"><?php echo get_theme_mod('para-slider1-sub-heading'); ?></h5>
        </div>
      </li>
      <li>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('para-slider2-backgrpound-image'));?>"> <!-- random image -->
        <div class="caption left-align">
          <h3><?php echo get_theme_mod('para-slider2-heading'); ?></h3>
          <h5 class="light grey-text text-lighten-3"><?php echo get_theme_mod('para-slider2-sub-heading'); ?></h5>
        </div>
      </li>
      <li>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('para-slider3-backgrpound-image'));?>"> <!-- random image -->
        <div class="caption right-align">
          <h3><?php echo get_theme_mod('para-slider3-heading'); ?></h3>
          <h5 class="light grey-text text-lighten-3"><?php echo get_theme_mod('para-slider3-sub-heading'); ?></h5>
        </div>
      </li>
      <li>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('para-slider4-backgrpound-image'));?>"> <!-- random image -->
        <div class="caption center-align">
          <h3><?php echo get_theme_mod('para-slider4-heading'); ?></h3>
          <h5 class="light grey-text text-lighten-3"><?php echo get_theme_mod('para-slider4-sub-heading'); ?></h5>
        </div>
      </li>
    </ul>
  </div>


      
     
    </div>
	
    
  </div>

<div class="section white">
  <div class="container">

    <div class="section">

      <!--   Icon Section   -->
      <h4 class="text-align center"><?php echo get_theme_mod('Section2-heading'); ?></h4>
      <div class="row">
        <div class="col s12 m4">

  <!--card1-->
         <div class="card hoverable">
           <div>
             <?php $link= "#";
             if(get_theme_mod('para-section2-card-1-link-choice')=='Yes') {
                 $link = get_permalink(get_theme_mod('para-section2-card-1-link'));
                   //echo $link;
               }
       ?> <a href="<?php echo $link ?>">
           <div class="card-image">
             <?php if (wp_get_attachment_url(get_theme_mod('para-section2-card1-image'))==NULL){?>
               <img class="responsive-img" src="<?php echo  get_bloginfo('template_url'); ?>/default_images/gear.jpg">
             <?php  } else {?>
             <img class="responsive-img" src="<?php echo wp_get_attachment_url(get_theme_mod('para-section2-card1-image')); ?>">
             <?php } ?>
             <span class="card-title"><?php echo get_theme_mod('para-section2-card-1-heading'); ?></span>
           </div>
           <div class="card-content">
             <p><?php echo get_theme_mod('para-section2-card1-content'); ?></p>
           </div>
           <div class="card-action">
             <?php echo get_theme_mod('para-section2-card-1-tagline'); ?> </a>
           </div>
         </div>

     </div>

        </div>

        <!--card2-->

        <div class="col s12 m4">

            <div>
         <div class="card hoverable">
           <div>
             <?php $link="#";
             if(get_theme_mod('para-section2-card-2-link-choice')=='Yes') {
                 $link = get_permalink(get_theme_mod('para-section2-card-2-link'));
                  // echo $link;
               }
       ?> <a href="<?php echo $link ?>">
           <div class="card-image">
             <?php if (wp_get_attachment_url(get_theme_mod('para-section2-card2-image'))==NULL){?>
               <img class="responsive-img" src="<?php echo  get_bloginfo('template_url'); ?>/default_images/car.jpg">
             <?php  } else {?>
             <img class="responsive-img" src="<?php echo wp_get_attachment_url(get_theme_mod('para-section2-card2-image'));?>">
              <?php  } ?>
             <span class="card-title"><?php echo get_theme_mod('para-section2-card2-heading'); ?></span>
           </div>
           <div class="card-content">
             <p><?php echo get_theme_mod('para-section2-card2-content'); ?></p>
           </div>
           <div class="card-action">
             <?php echo get_theme_mod('para-section2-card2-tagline'); ?></a>
           </div>
         </div>
       </div>
     </div>
        </div>
          <!--card3-->
        <div class="col s12 m4">


         <div class="card hoverable">
           <div>
           <?php $link="#";
           if(get_theme_mod('para-section2-card-3-link-choice')=='Yes') {
               $link = get_permalink(get_theme_mod('para-section2-card-3-link'));
                // echo $link;
             }
     ?> <a href="<?php echo $link ?>">
           <div class="card-image">
             <?php if (wp_get_attachment_url(get_theme_mod('para-section2-card3-image'))==NULL){?>
               <img class="responsive-img" src="<?php echo  get_bloginfo('template_url'); ?>/default_images/beach.jpg">
             <?php  } else {?>
             <img class="responsive-img" src="<?php echo wp_get_attachment_url(get_theme_mod('para-section2-card3-image'));?>">
              <?php  } ?>
             <span class="card-title"><?php echo get_theme_mod('para-section2-card3-heading'); ?></span>
           </div>
           <div class="card-content">
             <p><?php echo get_theme_mod('para-section2-card3-content'); ?></p>
           </div>
           <div class="card-action">
               <?php echo get_theme_mod('para-section2-card3-tagline'); ?></a>
           </div>
         </div>

     </div>
        </div>
      </div>

    </div>
  </div>
</div>

<!--section 3-->
  <div id="index-banner" class="parallax-container valign-wrapper  w3-hover-shadow">
    <div class="section no-pad-bot">
      <div  id="sam23" class="container">
        <div class="row center">
          <h2 class="header center <?php echo get_theme_mod('foot_color')?>-text text-lighten-2">

            <?php echo get_theme_mod('Section3-heading'); ?></h2>
		
		<?php echo do_shortcode('[web_pace_portfolio id="1"]'); ?>

               <div class="row center">
          <div >
		
		  <?php $portfoliolink = get_permalink(get_theme_mod('para-section3-portfolio-link')); ?>
    
    <!-- Container (Portfolio Section) -->
		
  
      </div>
    </div>    
</div>
      </div>
    </div>
    <div class="parallax">
      <?php if (wp_get_attachment_url(get_theme_mod('para-section3-background-image'))==NULL){?>
	  
        <img  src="<?php echo  get_bloginfo('template_url'); ?>/default_images/water.jpg">
      <?php  }
      else{?>

      <img src="<?php echo wp_get_attachment_url(get_theme_mod('para-section3-background-image')); ?>">
        <?php  } ?>
	    </div>
  </div>


<div class="section white w3-hover-shadow">
  <div class="container">

    <div class="section">
<!--section 4-->

      <div class="row w3-hover-shadow">

        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4><?php  echo get_theme_mod('Section4-heading'); ?></h4>
		  <script>  
  $(document).ready(function(){
      $('.slider').slider();
    });
        </script>
          <p class="w3-center"><div class="slider">
    <ul class="slides">
      <li>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('para4-slider1-backgrpound-image'));?>"> <!-- random image -->
        <div class="caption center-align">
          <h3><?php echo get_theme_mod('para4-slider1-heading'); ?></h3>
          <h5 class="light grey-text text-lighten-3"><?php echo get_theme_mod('para4-slider1-sub-heading'); ?></h5>
        </div>
      </li>
      <li>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('para4-slider2-backgrpound-image'));?>"> <!-- random image -->
        <div class="caption left-align">
          <h3><?php echo get_theme_mod('para4-slider2-heading'); ?></h3>
          <h5 class="light grey-text text-lighten-3"><?php echo get_theme_mod('para4-slider2-sub-heading'); ?></h5>
        </div>
      </li>
      <li>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('para4-slider3-backgrpound-image'));?>"> <!-- random image -->
        <div class="caption right-align">
          <h3><?php echo get_theme_mod('para4-slider3-heading'); ?></h3>
          <h5 class="light grey-text text-lighten-3"><?php echo get_theme_mod('para4-slider3-sub-heading'); ?></h5>
        </div>
      </li>
      <li>
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('para4-slider4-backgrpound-image'));?>"> <!-- random image -->
        <div class="caption center-align">
          <h3><?php echo get_theme_mod('para4-slider4-heading'); ?></h3>
          <h5 class="light grey-text text-lighten-3"><?php echo get_theme_mod('para4-slider4-sub-heading'); ?></h5>
	        </div>
      </li>
    </ul>
  </div></p>
		 
        </div>
      </div>
    </div>
    </div>
  </div>

<!--section 5-->
  <div  id="index-banner" class="parallax-container valign-wrapper w3-hover-shadow">

    <div class="section no-pad-bot">
            
            <div class="container">
<div class="row center">
          <h2 class="header center <?php echo get_theme_mod('foot_color')?>-text  text-lighten-2 w3-xxlarge"><?php  echo get_theme_mod('Section5-heading'); ?></h2>
  <div class="row center">
          <h4 class="header col s12 light"><?php echo get_theme_mod('para-section5-sub-heading'); ?>
	
          </h4>
		
           </div>

        </div>
      </div>
    </div>
    <div class="parallax">
      <?php if (wp_get_attachment_url(get_theme_mod('para-section5-backgrpound-image'))==NULL){?>
        <img  src="<?php echo  get_bloginfo('template_url'); ?>/default_images/drip.jpg" alt="Unsplashed background img 3">
    <?php  } else{?>
      <img  src="<?php echo wp_get_attachment_url(get_theme_mod('para-section5-backgrpound-image')); ?>" alt="Unsplashed background img 3">
      <?php } ?>
    </div>
  </div>
<script> 

$('a[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
</script>


<?php get_footer(); ?>