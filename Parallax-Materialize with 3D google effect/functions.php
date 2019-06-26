<?php
function parastyleandscript(){
  //adding all the scripts and css
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('materialize_css', get_template_directory_uri().'/css/materialize.css');
  //MDB js

  
  wp_enqueue_script('mdb.min_js', get_template_directory_uri().'/mdb_js/jquery-2.2.3.min.js');
  
    wp_enqueue_script('mdb.min_js', get_template_directory_uri().'/mdb_js/jquery-3.1.1.min.js');

    wp_enqueue_style('w3_css', get_template_directory_uri().'/css/w3.css');
  wp_enqueue_style('materialize.min_js', get_template_directory_uri().'/css/materialize.min.css');
  wp_enqueue_script('init_js', get_template_directory_uri().'/js/init.js',NULL,1.0,true);
  
  wp_enqueue_script('materializemin_js', get_template_directory_uri().'/js/materialize.min.js',NULL,1.0,true);

  
}

add_action('wp_enqueue_scripts','parastyleandscript');
register_nav_menus(array(
  'primary'=>__('Primary Menu'),
  'footer'=>__('Footer Menu')
));


//adding thumbnail and image upload to the admin
 function parathumbnailadd(){
   add_theme_support('post-thumbnails');
   add_image_size('small-image',300,200,true);
   add_image_size('banner-image',920,400,array('left','top'));


 }
 add_action('after_setup_theme','parathumbnailadd');

function homepagesection1($wp_customize){
  //homepage customize section 1
  $wp_customize-> add_section('para_hp_s',array(
    'title'=>'home page  slider section '
  ));
//slider 1 
  $wp_customize-> add_setting('para-slider1-heading',array(
    'default'=>'Make Your Site a Real Materpiece'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-slider1-heading',array(
    'label'=>'slider 1 heading',
    'section' =>'para_hp_s',
    'settings' =>'para-slider1-heading'
  )));

  $wp_customize-> add_setting('para-slider1-sub-heading',array(
    'default'=>'Give it a 3D Touch'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-slider1-sub-heading',array(
    'label'=>'slider 1  sub heading',
    'section' =>'para_hp_s',
    'settings' =>'para-slider1-sub-heading',
     'type'=>'textarea'
  )));
  $wp_customize-> add_setting('para-slider1-backgrpound-image');

  $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para-slider1-backgrpound-image',array(
    'label'=>'slider 1 Background Image',
    'section' =>'para_hp_s',
    'settings' =>'para-slider1-backgrpound-image',
    'height' => '820',
    'width' =>'1440'

  )));
  
  
  //slider 2
  $wp_customize-> add_setting('para-slider2-heading',array(
    'default'=>'Make Your Site a Real Materpiece'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-slider2-heading',array(
    'label'=>'slider 2 heading',
    'section' =>'para_hp_s',
    'settings' =>'para-slider2-heading'
  )));

  $wp_customize-> add_setting('para-slider2-sub-heading',array(
    'default'=>'Give it a 3D Touch'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-slider2-sub-heading',array(
    'label'=>'slider 2  sub heading',
    'section' =>'para_hp_s',
    'settings' =>'para-slider2-sub-heading',
     'type'=>'textarea'
  )));
  $wp_customize-> add_setting('para-slider2-backgrpound-image');

  $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para-slider2-backgrpound-image',array(
    'label'=>'slider 2 Background Image',
    'section' =>'para_hp_s',
    'settings' =>'para-slider2-backgrpound-image',
    'height' => '820',
    'width' =>'1440'

  )));
  
  
  //slider 3
  $wp_customize-> add_setting('para-slider3-heading',array(
    'default'=>'Make Your Site a Real Materpiece'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-slider3-heading',array(
    'label'=>'slider 3 heading',
    'section' =>'para_hp_s',
    'settings' =>'para-slider3-heading'
  )));

  $wp_customize-> add_setting('para-slider3-sub-heading',array(
    'default'=>'Give it a 3D Touch'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-slider3-sub-heading',array(
    'label'=>'slider 3  sub heading',
    'section' =>'para_hp_s',
    'settings' =>'para-slider3-sub-heading',
     'type'=>'textarea'
  )));
  $wp_customize-> add_setting('para-slider3-backgrpound-image');

  $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para-slider3-backgrpound-image',array(
    'label'=>'slider 3 Background Image',
    'section' =>'para_hp_s',
    'settings' =>'para-slider3-backgrpound-image',
    'height' => '820',
    'width' =>'1440'

  )));

  //slider 4
  $wp_customize-> add_setting('para-slider4-heading',array(
    'default'=>'Make Your Site a Real Materpiece'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-slider4-heading',array(
    'label'=>'slider 4 heading',
    'section' =>'para_hp_s',
    'settings' =>'para-slider4-heading'
  )));

  $wp_customize-> add_setting('para-slider4-sub-heading',array(
    'default'=>'Give it a 3D Touch'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-slider4-sub-heading',array(
    'label'=>'slider 4  sub heading',
    'section' =>'para_hp_s',
    'settings' =>'para-slider4-sub-heading',
     'type'=>'textarea'
  )));
  $wp_customize-> add_setting('para-slider4-backgrpound-image');

  $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para-slider4-backgrpound-image',array(
    'label'=>'slider 4 Background Image',
    'section' =>'para_hp_s',
    'settings' =>'para-slider4-backgrpound-image',
    'height' => '820',
    'width' =>'1440'

  )));

  
  
}

  add_action('customize_register','homepagesection1');



  //homepage section 2
  function homepagesection2($wp_customize){
      //card 1
    $wp_customize-> add_section('para_hp_s2',array(
      'title'=>'home page section 2'
    ));
    //add headline
    $wp_customize-> add_setting('Section2-heading',array(
      'default'=>'Our Features'
    ));

    $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'Section2-heading',array(
      'label'=>'section2 heading ',
      'section' =>'para_hp_s2',
      'settings' =>'Section2-heading'
    )));

    $wp_customize-> add_setting('para-section2-card-1-heading',array(
      'default'=>'Made by Goolge framework'
    ));

    $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card-1-heading',array(
      'label'=>'card 1 heading ',
      'section' =>'para_hp_s2',
      'settings' =>'para-section2-card-1-heading'
    )));


    $wp_customize-> add_setting('para-section2-card1-content',array(
      'default'=>'The theme is made by the help of materialize Framework which is owned by Google'
    ));

    $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card1-content',array(
      'label'=>'card 1 content',
      'section' =>'para_hp_s2',
      'settings' =>'para-section2-card1-content',
       'type'=>'textarea'
    )));
    $wp_customize-> add_setting('para-section2-card1-image');

    $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para-section2-card1-image',array(
      'label'=>'Card1 Image',
      'section' =>'para_hp_s2',
      'settings' =>'para-section2-card1-image',
      'height' => '820',
      'width' =>'1440'

    )));

  $wp_customize-> add_setting('para-section2-card-1-tagline',array(
    'default'=>'It is a rock solid theme'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card-1-tagline',array(
    'label'=>'card 1 tagline ',
    'section' =>'para_hp_s2',
    'settings' =>'para-section2-card-1-tagline'
  )));

  $wp_customize-> add_setting('para-section2-card-1-link-choice',array(
    'default'=>'No'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card-1-link-choice',array(
    'label'=>'Do you want to link card-1 to another page ?',
    'section' =>'para_hp_s2',
    'settings' =>'para-section2-card-1-link-choice',
    'type'=>'select',
    'choices'=> array('No'=>'No','Yes'=>'Yes')
  )));

    $wp_customize->add_setting('para-section2-card-1-link');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'para-section2-card-1-link',
    array(
      'label'=>'link this card to',
      'section'=>'para_hp_s2',
      'settings'=>'para-section2-card-1-link',
      'type' =>'dropdown-pages'
    )
    ));
//card 2
    $wp_customize-> add_setting('para-section2-card2-heading',array(
      'default'=>'It is super fast and sleek'
    ));

    $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card2-heading',array(
      'label'=>'Card 2 heading ',
      'section' =>'para_hp_s2',
      'settings' =>'para-section2-card2-heading'
    )));


    $wp_customize-> add_setting('para-section2-card2-content',array(
      'default'=>'We have implemented good seo technique and are bound to follow them, making this theme standing out of the box'
    ));

    $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card2-content',array(
      'label'=>'card 2 content',
      'section' =>'para_hp_s2',
      'settings' =>'para-section2-card2-content',
       'type'=>'textarea'
    )));
    $wp_customize-> add_setting('para-section2-card2-image');

    $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para-section2-card2-image',array(
      'label'=>'Card2 Image',
      'section' =>'para_hp_s2',
      'settings' =>'para-section2-card2-image',
      'height' => '820',
      'width' =>'1440'

    )));

  $wp_customize-> add_setting('para-section2-card2-tagline',array(
    'default'=>'It is only one of its Kind'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card2-tagline',array(
    'label'=>'card 2 tagline ',
    'section' =>'para_hp_s2',
    'settings' =>'para-section2-card2-tagline'
  )));

  $wp_customize-> add_setting('para-section2-card-2-link-choice',array(
    'default'=>'No'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card-2-link-choice',array(
    'label'=>'Do you want to link card-2 to another page ?',
    'section' =>'para_hp_s2',
    'settings' =>'para-section2-card-2-link-choice',
    'type'=>'select',
    'choices'=> array('No'=>'No','Yes'=>'Yes')
  )));

    $wp_customize->add_setting('para-section2-card-2-link');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'para-section2-card-2-link',
    array(
      'label'=>'link this card to',
      'section'=>'para_hp_s2',
      'settings'=>'para-section2-card-2-link',
      'type' =>'dropdown-pages'
    )
    ));
//card 3
$wp_customize-> add_setting('para-section2-card3-heading',array(
  'default'=>'It is beautiful'
));

$wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card3-heading',array(
  'label'=>'Card 3 heading ',
  'section' =>'para_hp_s2',
  'settings' =>'para-section2-card3-heading'
)));


$wp_customize-> add_setting('para-section2-card3-content',array(
  'default'=>'Altough competing with world class designs we have retained the beauty and elgance of the theme'
));

$wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card3-content',array(
  'label'=>'card 3 content',
  'section' =>'para_hp_s2',
  'settings' =>'para-section2-card3-content',
   'type'=>'textarea'
)));
$wp_customize-> add_setting('para-section2-card3-image');

$wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para-section2-card3-image',array(
  'label'=>'Card3 Image',
  'section' =>'para_hp_s2',
  'settings' =>'para-section2-card3-image',
  'height' => '820',
  'width' =>'1440'

)));

$wp_customize-> add_setting('para-section2-card3-tagline',array(
'default'=>'Just hover over the page'
));

$wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card3-tagline',array(
'label'=>'card 3 tagline ',
'section' =>'para_hp_s2',
'settings' =>'para-section2-card3-tagline'
)));

  $wp_customize-> add_setting('para-section2-card-3-link-choice',array(
  'default'=>'No'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card-3-link-choice',array(
  'label'=>'Do you want to link this card to another page ?',
  'section' =>'para_hp_s2',
  'settings' =>'para-section2-card-3-link-choice',
  'type'=>'select',
  'choices'=> array('No'=>'No','Yes'=>'Yes')
  )));

$wp_customize->add_setting('para-section2-card-3-link');
$wp_customize->add_control(new WP_Customize_Control($wp_customize,'para-section2-card-3-link',
array(
  'label'=>'link this card to',
  'section'=>'para_hp_s2',
  'settings'=>'para-section2-card-3-link',
  'type' =>'dropdown-pages'
)
));
  }

    add_action('customize_register','homepagesection2');



  function homepagesection3($wp_customize){
    //homepage customize section 3
    $wp_customize-> add_section('para_hp_s3',array(
      'title'=>'home page section 3'
    ));

    $wp_customize-> add_setting('Section3-heading',array(
      'default'=>'Click on customize to see the magic'
    ));

    $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'Section3-heading',array(
      'label'=>'Section3 heading ',
      'section' =>'para_hp_s3',
      'settings' =>'Section3-heading'
    )));

    $wp_customize-> add_setting('para-section3-sub-heading',array(
      'default'=>'We kept customization simple too, via admin'
    ));

    $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section3-sub-heading',array(
      'label'=>'Section3 content',
      'section' =>'para_hp_s3',
      'settings' =>'para-section3-sub-heading',
       'type'=>'textarea'
    )));
	
	
	
    $wp_customize-> add_setting('para-section3-background-image');

    $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para-section3-background-image',array(
      'label'=>'Background Image',
      'section' =>'para_hp_s3',
      'settings' =>'para-section3-background-image',
      'height' => '820',
      'width' =>'1440'

    )));
	
	
	 $wp_customize->add_setting('para-section3-portfolio-link');
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'para-section3-portfolio-link',
    array(
      'label'=>'link the portfolio section to',
      'section'=>'para_hp_s3',
      'settings'=>'para-section3-portfolio-link',
      'type' =>'dropdown-pages'
    )
    ));

  }

    add_action('customize_register','homepagesection3');
//section 4
function homepagesection4($wp_customize){
  $wp_customize-> add_section('para_hp_s4',array(
    'title'=>'home page section 4'
  ));

  $wp_customize-> add_setting('Section4-heading',array(
    'default'=>'Contact Us'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'Section4-heading',array(
    'label'=>'Section4 heading ',
    'section' =>'para_hp_s4',
    'settings' =>'Section4-heading'
  )));

  $wp_customize-> add_setting('section4-content',array(
    'default'=>'If You require more beautiful Custom theme Just email at somykamble1001@gmail.com'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'section4-content',array(
    'label'=>'section4 content',
    'section' =>'para_hp_s4',
    'settings' =>'section4-content',
     'type'=>'textarea'
  )));
  
  
  
  //section 4 slider 1 
  $wp_customize-> add_setting('para4-slider1-heading',array(
    'default'=>'Make Your Site a Real Materpiece'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para4-slider1-heading',array(
    'label'=>'slider 1 heading',
    'section' =>'para_hp_s4',
    'settings' =>'para4-slider1-heading'
  )));

  $wp_customize-> add_setting('para4-slider1-sub-heading',array(
    'default'=>'Give it a 3D Touch'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para4-slider1-sub-heading',array(
    'label'=>'slider 1  sub heading',
    'section' =>'para_hp_s4',
    'settings' =>'para4-slider1-sub-heading',
     'type'=>'textarea'
  )));
  $wp_customize-> add_setting('para4-slider1-backgrpound-image');

  $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para4-slider1-backgrpound-image',array(
    'label'=>'slider 1 Background Image',
    'section' =>'para_hp_s4',
    'settings' =>'para4-slider1-backgrpound-image',
    'height' => '820',
    'width' =>'1440'

  )));
  
    //section 4 slider 2
 $wp_customize-> add_setting('para4-slider2-heading',array(
    'default'=>'Make Your Site a Real Materpiece'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para4-slider2-heading',array(
    'label'=>'slider 2 heading',
    'section' =>'para_hp_s4',
    'settings' =>'para4-slider2-heading'
  )));

  $wp_customize-> add_setting('para4-slider2-sub-heading',array(
    'default'=>'Give it a 3D Touch'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para4-slider2-sub-heading',array(
    'label'=>'slider 2  sub heading',
    'section' =>'para_hp_s4',
    'settings' =>'para4-slider2-sub-heading',
     'type'=>'textarea'
  )));
  $wp_customize-> add_setting('para4-slider2-backgrpound-image');

  $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para4-slider2-backgrpound-image',array(
    'label'=>'slider 2 Background Image',
    'section' =>'para_hp_s4',
    'settings' =>'para4-slider2-backgrpound-image',
    'height' => '820',
    'width' =>'2440'

  )));
  
    //section 4 slider 3
  
 $wp_customize-> add_setting('para4-slider3-heading',array(
    'default'=>'Make Your Site a Real Materpiece'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para4-slider3-heading',array(
    'label'=>'slider 3 heading',
    'section' =>'para_hp_s4',
    'settings' =>'para4-slider3-heading'
  )));

  $wp_customize-> add_setting('para4-slider3-sub-heading',array(
    'default'=>'Give it a 3D Touch'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para4-slider3-sub-heading',array(
    'label'=>'slider 3  sub heading',
    'section' =>'para_hp_s4',
    'settings' =>'para4-slider3-sub-heading',
     'type'=>'textarea'
  )));
  $wp_customize-> add_setting('para4-slider3-backgrpound-image');

  $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para4-slider3-backgrpound-image',array(
    'label'=>'slider 3 Background Image',
    'section' =>'para_hp_s4',
    'settings' =>'para4-slider3-backgrpound-image',
    'height' => '820',
    'width' =>'3440'

  )));
  
    //section 4 slider 4
$wp_customize-> add_setting('para4-slider4-heading',array(
    'default'=>'Make Your Site a Real Materpiece'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para4-slider4-heading',array(
    'label'=>'slider 4 heading',
    'section' =>'para_hp_s4',
    'settings' =>'para4-slider4-heading'
  )));

  $wp_customize-> add_setting('para4-slider4-sub-heading',array(
    'default'=>'Give it a 3D Touch'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para4-slider4-sub-heading',array(
    'label'=>'slider 4  sub heading',
    'section' =>'para_hp_s4',
    'settings' =>'para4-slider4-sub-heading',
     'type'=>'textarea'
  )));
  $wp_customize-> add_setting('para4-slider4-backgrpound-image');

  $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para4-slider4-backgrpound-image',array(
    'label'=>'slider 4 Background Image',
    'section' =>'para_hp_s4',
    'settings' =>'para4-slider4-backgrpound-image',
    'height' => '820',
    'width' =>'4440'

  )));

}
  add_action('customize_register','homepagesection4');

    function homepagesection5($wp_customize){
      //homepage customize section 5
      $wp_customize-> add_section('para_hp_s5',array(
        'title'=>'homepage section 5'
      ));

      $wp_customize-> add_setting('Section5-heading',array(
        'default'=>'This theme makes your website look elegant customize the footer with some standard color'
      ));

      $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'Section5-heading',array(
        'label'=>'Section5 heading ',
        'section' =>'para_hp_s5',
        'settings' =>'Section5-heading'
      )));


      $wp_customize-> add_setting('para-section5-sub-heading',array(
        'default'=>'sam is  is here'
      ));

      $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section5-sub-heading',array(
        'label'=>'home page section5 heading',
        'section' =>'para_hp_s5',
        'settings' =>'para-section5-sub-heading',
         'type'=>'textarea'
      )));
      $wp_customize-> add_setting('para-section5-backgrpound-image');

      $wp_customize-> add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'para-section5-backgrpound-image',array(
        'label'=>'Background Image',
        'section' =>'para_hp_s5',
        'settings' =>'para-section5-backgrpound-image',
        'height' => '820',
        'width' =>'1440'

      )));



    }

      add_action('customize_register','homepagesection5');






        function homepagefooter($wp_customize){
          $wp_customize-> add_section('para_hp_footer',array(
            'title'=>'footer'
          ));

          $wp_customize-> add_setting('footer-heading',array(
            'default'=>'About Us'
          ));

          $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'footer-heading',array(
            'label'=>'footer heading ',
            'section' =>'para_hp_footer',
            'settings' =>'footer-heading'
          )));


          $wp_customize-> add_setting('footer-content',array(
            'default'=>'We are a great team with good and skilled persons and pur next project will be more awesome and cool'
          ));

          $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'footer-content',array(
            'label'=>'footer content',
            'section' =>'para_hp_footer',
            'settings' =>'footer-content',
             'type'=>'textarea'
          )));





        }

add_action('customize_register','homepagefooter');


//social icons


function social_icons($wp_customize){
//does the user wants to show social icons
  $wp_customize-> add_section('social_icon_links',array(
    'title'=>'Social icon links'
  ));
$wp_customize-> add_setting('social_icons-choice',array(
'default'=>'Yes'
));

$wp_customize-> add_control(new WP_Customize_Control($wp_customize,'social_icons-choice',array(
'label'=>'Do you want to display your social icons in the footer ?',
'section' =>'social_icon_links',
'settings' =>'social_icons-choice',
'type'=>'select',
'choices'=> array('No'=>'No','Yes'=>'Yes')
)));

//facebook link Url
$wp_customize-> add_setting('social_icons-facebook');

$wp_customize-> add_control(new WP_Customize_Control($wp_customize,'social_icons-facebook',array(
'label'=>'facebook url',
'section' =>'social_icon_links',
'settings' =>'social_icons-facebook',
'type'=>'url'

)));

//pintrest

$wp_customize-> add_setting('social_icons-pintrest');

$wp_customize-> add_control(new WP_Customize_Control($wp_customize,'social_icons-pintrest',array(
'label'=>'Pinterest url',
'section' =>'social_icon_links',
'settings' =>'social_icons-pintrest',
'type'=>'url'

)));
//twitter

$wp_customize-> add_setting('social_icons-twitter');

$wp_customize-> add_control(new WP_Customize_Control($wp_customize,'social_icons-twitter',array(
'label'=>'Twitter url',
'section' =>'social_icon_links',
'settings' =>'social_icons-twitter',
'type'=>'url'

)));

//google plus
$wp_customize-> add_setting('social_icons-google');

$wp_customize-> add_control(new WP_Customize_Control($wp_customize,'social_icons-google',array(
'label'=>'Google Plus url',
'section' =>'social_icon_links',
'settings' =>'social_icons-google',
'type'=>'url'

)));

//linked in

$wp_customize-> add_setting('social_icons-linkedin');

$wp_customize-> add_control(new WP_Customize_Control($wp_customize,'social_icons-linkedin',array(
'label'=>'Linkedin url',
'section' =>'social_icon_links',
'settings' =>'social_icons-linkedin',
'type'=>'url'

)));

}

add_action('customize_register','social_icons');



        //Our widet
        function ourwidget(){
          register_sidebar(array(
            'name'=>'Sidebar',
            'id'=> 'siderbar1'
          ));

          register_sidebar(array(
            'name'=>'footer',
            'id'=> 'footer2'
          ));
        }
         add_action('widgets_init' , 'ourwidget');

//link color
add_action('customize_register','lnwp_link_color');
function lnwp_link_color($wp_customize){
          $wp_customize->add_section('somy_standard_color',array(
            'title' => __('Link colors','parallaxgoogletheme'),
            'priority'=> 20,
          ));
          $wp_customize->add_setting('lnwp_link_color',array(
            'default' => '#00000',
            'transport'=> 'refresh',
          ));
          $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize,'lnwp_link_color_control', array(
            'label'=>__('Link Color','parallaxgoogletheme'),
            'section'=> 'somy_standard_color',
            'settings' =>'lnwp_link_color'
          )));

}
add_action('customize_register','lnwp_link_color');


function learningcustomizecss(){?>
  <style type="text/css">
      a:link,
      a:visited{
        color: <?php echo get_theme_mod('lnwp_link_color'); ?> ;
      }
</style>

<?php }
    add_action('wp_head','learningcustomizecss');

    //footer color
function footer_color($wp_customize){
  $wp_customize-> add_section('footercolor',array(
  'title'=>'Give your footer one of the standard site color'
  ));

  $wp_customize-> add_setting('foot_color',array(
  'default'=>'teal'
  ));

  $wp_customize-> add_control(new WP_Customize_Control($wp_customize,'para-section2-card-3-link-choice',array(
  'label'=>'Give your footer one of the standard site color',
  'section' =>'footercolor',
  'settings' =>'foot_color',
  'type'=>'select',
  'choices'=> array(
    'teal'=>'teal',
    'blue'=>'blue',
    'light-blue'=>' light-blue',
    'cyan' =>'cyan',
    'green'=>'green',
    'light-green'=>'light-green',
    'lime'=>'lime',
    'yellow'=>'yellow',
    'amber'=>'amber',
    'orange'=>'orange',
    'deep-orange'=>'deep-orange',
    'brown'=>'brown',
    'grey'=>'grey',
    'blue-grey'=>'blue-grey',
    'indigo'=>'indigo',
    'deep-purple'=>'deep-purple',
    'purple'=>'purple',
    'pink'=>'pink',
    'red'=>'red',
    'pink darken-4'=>'pink darken-4',
    'red lighten-1'=>'red lighten-1',
    'purple darken-4'=>'purple darken-4',




  )
  )));

}


add_action('customize_register','footer_color');
add_filter( 'widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode');
add_filter( 'the_excerpt', 'shortcode_unautop');
add_filter( 'the_excerpt', 'do_shortcode');
add_filter( 'term_description', 'shortcode_unautop');
add_filter( 'term_description', 'do_shortcode' );
add_filter( 'comment_text', 'shortcode_unautop');
add_filter( 'comment_text', 'do_shortcode' );





























