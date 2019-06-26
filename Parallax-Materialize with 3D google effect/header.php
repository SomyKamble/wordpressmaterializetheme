<html lang="en" <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset') ?>"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title><?php bloginfo('name'); ?></title>

  <!-- CSS  -->



  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<div class='hoverable'>
<nav class="white" role="navigation" id='navibar'>
  <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo home_url(); ?>" class="brand-logo"><?php bloginfo('name'); ?></a>


      <ul class="right hide-on-med-and-down">

        <?php  $args = array('theme_location'=>'primary'); ?>
        <?php wp_nav_menu( $args ); ?>


        </ul>

      <ul id="nav-mobile" class="side-nav">
        <?php  $args = array('theme_location'=>'primary'); ?>
        <?php wp_nav_menu( $args ); ?>
      </ul>



      <a href="#" data-activates="nav-mobile" class="button-collapse">


  <img src="<?php echo  get_bloginfo('template_url'); ?>/icon_image/Very-Basic-Menu-icon.png" class="w3-display-left" ></a>


    </div>
  </nav>
</div>
