<?php
/*
 * Theme Front Page 
*/


get_header(); ?>
<!-- First Slider Start Bellow  -->
<section id="slider_area">
    <div class="slider">
      <?php 
        query_posts('post_type=first_slider&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post')); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
        <div>
          <?php echo the_post_thumbnail('slider') ?>
        </div>

        <?php 
          endwhile;
          endif;
        ?>
    </div>
  </section>
  <!-- First Slider End -->


  <!-- Second Slider Start  -->
  <!-- <section id="slider_area">
    <div id="owl_slider" class="owl-carousel">
      <?php 
        query_posts('post_type=second_slider&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post')); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
        <div>
          <?php echo the_post_thumbnail('slider') ?>
        </div>

        <?php 
          endwhile;
          endif;
        ?>
  </section> -->
  <!-- Second Slider End  -->
  <!-- Homepage Widget Start -->
  <div id="homepage_post">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <?php dynamic_sidebar( 'home-1'); ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Homepage Widget End -->


  <section id="service_area">
    <div class="container">
      <div class="row">
        <?php 
        query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post')); 

        if(have_posts()) :
          while(have_posts()) : the_post(); 
        ?>
        <div class="col-md-4">
          <div class="child_service">
          <h2><?php the_title(); ?></h2>
          <?php echo the_post_thumbnail('service') ?>
          <?php the_excerpt(  ); ?>
          </div>
        </div>

        <?php 
          endwhile;
          endif;
        ?>
      </div>
    </div>
  </section>



<?php get_footer(); ?>