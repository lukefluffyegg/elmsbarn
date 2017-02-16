<?php
/**
*
* Template Name: General Page
*
*/
?>
	<?php get_header(); ?>
    	    	
	   <section class="panel panel--two">
	   	  <?php while (have_posts()) : the_post() ;?>
               <?php get_template_part('content/page', 'general'); ?>                                     
          <?php endwhile; ?>
	   </section>
			
	<?php get_footer(); ?>
