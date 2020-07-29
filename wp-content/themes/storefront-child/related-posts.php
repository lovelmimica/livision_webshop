<div class="related-posts">		
<?php 
 /**
   * pll_current_language($value) - returns the current language on frontend (Polylang plugin).
   * $value - (optional) either name or locale or slug. 
   * Defaults to slug.
   */


   $related = new WP_Query(
      array(
	 'category__in'   => wp_get_post_categories( $post->ID ),
	 'posts_per_page' => 3,
	 'post__not_in'   => array( $post->ID )
      )
   );
   if( $related->have_posts() ) { 
      echo '<h3>Vezani članci</h3>';
      while( $related->have_posts() ) { 
	 $related->the_post(); ?>
	 <div class="related-posts-link">		
	     <a rel="external" href="<?php the_permalink();?>"><?php the_title(); ?></a>
         <div class=related-posts__excerpt><?php the_excerpt() ?></div>
         <a class='related-posts__read-more' rel="external" href="<?php the_permalink();?>">Pročitaj više</a>	
	 </div><?php 
      }
      wp_reset_postdata();
   }	
?>

