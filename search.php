<?php get_header(); ?>

          <h2>Search results for: <?php the_search_query(); ?></h2>

         <div class = "panel panel-default panel-body">
            <div class = "row">
               <div class = "col-md-10">
                  <?php while(have_posts()) : the_post();?>
       
                     <h3><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>  
 <?php the_post_thumbnail('small-thumbnail'); ?>                       
                     <p><?php the_excerpt(); ?></p>
                      <p class = "text-muted">Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>          
         
                   <?php endwhile; wp_reset_query(); ?>
               </div>
            </div>  
         </div>

<?php get_footer(); ?>
