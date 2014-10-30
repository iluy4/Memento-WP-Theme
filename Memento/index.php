<?php get_header(); ?>

<!--<div class="jumbotron">
<p>Tähän tulee se pyörivä grafiikka</p>
</div>-->


<div class="container">
        
<!-- artikkelisisältö etusivulla -->
	<div class="row">
    
    <div class="col-md-8">
    
    	<div class="row">
    
    	<div class="col-md-12 col-xs-12">
        
        	<div class="thumbnail" id="artikkeli">

			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
              <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              
                <div class="post-header">
                    <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <div class="date"><?php the_time( 'H:i, j/F/Y' ); ?></div>
                    <div class="author"> <p>Kirjoittanut <?php the_author(); ?> </p></div>
                </div><!--end post header-->
                
                <div class="entry well">
                    <?php if ( function_exists( 'add_theme_support' ) ) ?>
                    <?php the_content(); ?>
                    <?php edit_post_link(); ?>
                    <?php wp_link_pages(); ?>
                    
                    <div class="comments">
					<?php comments_popup_link( 'Kommentoi', '1 Kommentti', '% Kommenttia' ); ?>
                    </div>
                    <?php comments_template(); ?>
                    
                </div><!--end entry-->  
              </div><!--end post-->
              
            <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
              
             <div class="navigation index">
    			<div class="alignleft"><?php next_posts_link( 'Vanhemmat artikkelit' ); ?></div>
   				<div class="alignright"><?php previous_posts_link( 'Uudemmat artikkelit' ); ?></div>
  			</div><!--end navigation-->
              
            <?php else : ?>
            <p>Valitettavasti yhtään artikkelia ei löytynyt.</p>
            
			<?php endif; ?>
            </div>
            
        </div> <!--md-12-->
        </div> <!--row-->
      </div> <!--md-8-->
      
<!--loppuu -->
        
<?php get_sidebar(); ?>

</div> <!--row-->


        

</div> <!--container-->

<?php get_footer(); ?>
