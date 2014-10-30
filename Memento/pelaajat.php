<?php
/*
Template Name: pelaajat
*/
?>

<?php get_header(); ?>

<!--<div class="jumbotron">
<p>Tähän tulee se pyörivä grafiikka</p>
</div>-->


<div class="container">
        
	
		<div class="row">
        
    	<div class="col-md-8">
		
        	<div class="row">
    
    		<div class="col-md-12 col-xs-12">
        
        	<!--sisältö-->
                <div class="panel panel-default" id="pelaajat">
                    <div class="panel-body">


<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php if ( function_exists( 'add_theme_support' ) ) ?>
                    <?php the_content(); ?>
                    <?php edit_post_link(); ?>
                    <?php wp_link_pages(); ?>
                     
              </div><!--end post-->
              
            <?php endwhile; /* rewind or continue if all posts have been fetched */ ?> 
              
            <?php else : ?>
            <p>Valitettavasti yhtään artikkelia ei löytynyt.</p>
            
			<?php endif; ?>

                    </div>
                </div>
            
         
    		</div> <!--md-12-->
      
<!--loppuu -->
        
        </div> <!--row-->

		</div> <!--md-8-->
        
        <?php get_sidebar(); ?>
        
		</div> <!--row-->   




</div> <!--container-->

<?php get_footer(); ?>
