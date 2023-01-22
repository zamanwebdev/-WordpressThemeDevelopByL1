<?php
/*
* This template for displaying the header  
*/ 

?>
<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head( )?>
</head>
<body <?php body_class();?>>
    <header id="header_area" class="<?php echo get_theme_mod('zaman_menu_position'); ?> sticky-top">

      <div id="notice">
        <div class="container">
          <div class="row">
          <div class="col-md-3">
             <h2 style="text-align: left;">Linked<span style="color: #004AAD;">Mation</span></h2>
          </div>
            <div class="col-md-9">
            	<h2><a href="<?php echo get_theme_mod('Schedule_Now'); ?>" target="_blank"><?php echo get_theme_mod('Offer_Notice'); ?></a></h2>
            </div>
          </div>
        </div>
      </div>
      
        <!-- <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php //echo home_url(); ?>"><img src="<?php //echo get_theme_mod('zaman_logo'); ?>" alt="Logo" class="logo"></a>
                </div>
                <div class="col-md-9">
                    <?php //wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') ); ?>
                </div>
            </div>
        </div> -->
    </header>