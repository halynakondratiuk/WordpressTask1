<?php get_header(); ?>

 
         <div class = "panel panel-default panel-body">
            <div class = "row">
               <div class = "col-md-10">
                  <?php while(have_posts()) : the_post();?>
       
                  <h3><?php the_title(); ?></h3>                        
                     <p><?php the_content(); ?></p>
                      <p class = "text-muted">Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p> 
                   <?php endwhile; wp_reset_query(); ?>
               </div>
            </div>  
         </div>

<?php get_footer(); ?>
