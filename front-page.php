<?php get_header();?>

<div class="container container-fluid pt-5 pb-5">
	<div class="main row-fluid pt-5 pb-5">
<div class=" frontpage-header span12">
	<h1><?php the_title();?></h1>
</div>
	<?php if (have_posts()) : while(have_posts()) : the_post();?>
		<?php the_content();?>
	<?php endwhile; endif;?>
</div>
</div>




<?php get_footer();?>
