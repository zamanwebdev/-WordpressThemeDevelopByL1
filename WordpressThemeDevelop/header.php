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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <?php wp_head( )?>
</head>
<body <?php body_class();?>>
    <header id="header_area" class="<?php echo get_theme_mod('zaman_menu_position'); ?>">

      <div id="notice">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <!-- <h2><marquee><?php echo get_theme_mod('Offer_Notice'); ?></marquee></h2> -->
            	<h2><?php echo get_theme_mod('Offer_Notice'); ?></h2>
            </div>
          </div>
        </div>
      </div>
      
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('zaman_logo'); ?>" alt="Logo" class="logo"></a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') ); ?>
                </div>
            </div>
        </div>
    </header>