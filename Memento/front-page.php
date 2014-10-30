<?php
/*
Template Name: home
*/
?>


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
        
        	<div class="thumbnail"  id="artikkeli">
            
            <?php query_posts('showposts=5'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="post-header">
                    <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                    <div class="date"><?php the_time( 'H:i, j/F/Y' ); ?> </div>
                    <div class="author"> <p>Kirjoittanut <?php the_author(); ?> </p></div>
            </div><!--end post header-->
                
            <div class="entry well">
            
            <center>
			<?php
			if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			}
			?>
            </center>
            <br>
            
            <?php the_excerpt(); ?>
            
            <div class="comments"><?php comments_popup_link( 'Kommentoi', '1 Kommentti', '% Kommenttia' ); ?>
            </div>
            <?php comments_template(); ?>
            
            </div> <!-- end entry-->
            
            <?php endwhile; else: ?>
            
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
