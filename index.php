<?php get_header(); ?>

<section id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	//if some posts in wordpress exist then the loop will show them
	?> 
			<!-- <h1>POST IS RUNNING GIRLLL!</h1>-->		
			<h1>
			 	<?php the_title(); 
			 	//the title is now going to correspond with whatever title there is in the post
			 	?> 	
 			</h1>
 			<a href="<?php the_permalink(); ?>">LEARN MORE</a>
 			<?php the_post_thumbnail('thumbnail');?>
			<?php the_content();?>
 			<?php the_category();?>

	<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>