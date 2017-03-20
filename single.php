<?php get_header(); ?>

   <div class = "row">
      <div class = "col-md-9">
         <div class = "panel panel-default panel-body">
            <?php while(have_posts()) : the_post(); ?>
                     
                     <h3><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> 
  <?php the_post_thumbnail('banner-image'); ?> 
                     <p class = "text-muted">Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>  
                     <p><?php the_content(''); ?></p>
                      
                   <?php endwhile; wp_reset_query(); ?>
         </div>
      </div>
        <div class = "col-md-3">
           <div class = "list-group">
            <?php query_posts('posts_per_page=4');
             while(have_posts()) : the_post(); ?>
          <div class="list-group">
            <a href = "<?php the_permalink(); ?>">
           <h4 class = "list-group-item-heading"><?php the_title(); ?></h4>
             <p class = "list-group-item-text">Posted by <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p> 
            </a>
           </div>
           <?php endwhile; wp_reset_query(); ?>
           </div>
        </div>
   </div>

<?php get_footer(); ?>
