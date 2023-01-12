<?php
/*
* This is main template file 
*/

  get_header();

?>
    
    
    
    <section id="body_area">
    <div class="container">
      <div class="row">
        
        <div class="col-md-9">
          
          <?php get_template_part('template_part/blog_setup'); ?>

          
        </div>
        <div class="col-md-3">
           <?php get_sidebar(); ?>
        </div>
        
      </div>
    </div>
  </section>

  <?php
    // footer.php file include code is Bellow
    get_footer(); 
  ?>