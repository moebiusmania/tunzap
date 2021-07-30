<?php get_header(); ?>
    
    
   	<div class="container" id="centro">
   		<div class="row" id="vasca">
        	<!-- App -->
            <div id="main" class="span11">
        		
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<p>Nella categoria ->  </p>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_content(); ?>
					<p class="piccolo">Scritto il <?php the_date(); ?> da <?php the_author(); ?> - <?php comments_number(); ?></p>
					<div class="divisore"></div>
					
				<?php endwhile; else: ?>
					<h3>Avviso</h3>
					<p><?php _e('Ci dispiace, nessuna pagina corrisponde alla tua ricerca'); ?></p>
				<?php endif; ?>
				
            </div>
	    
            <?php get_sidebar(); ?>
	    
	    
        </div>
   	</div>
    
<?php get_footer(); ?>