<!-- 

WITHOUT PHP 

<?php //get_header();?>

<section class="hero-section" style="background:url('<?php //echo get_template_directory_uri();?>/img/hero.jpg') no-repeat center center; background-size: cover;">
	<div class="tint"></div>
	<div class="inner">
		<h5>brisbane</h5>
		<h1>wedding photography</h1>
		<a href="#">Learn More</a>
	</div>
</section>

<?php //get_footer();?> -->

<?php get_header();?>

<section class="hero-section" style="background:url('<?php the_field('hero_image')?>') no-repeat center center; background-size: cover;">
	<div class="tint"></div>
	<div class="inner">
		<h5><?php the_field('hero_subtitle')?></h5>
		<h1><?php the_field('hero_title')?></h1>
		<a href="<?php the_field('hero_button_url')?>"><?php the_field('hero_button_text')?></a>
	</div>
</section>
<section class="home-content">
	<div class="container">
		<h2>we are jess &amp; steve</h2>
		<div class="col-half">
asdfasd
		</div>
		<div class="col-half">
asdfasds
		</div>
	</div>
</section>

<?php get_footer();?>
