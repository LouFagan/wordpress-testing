<?php get_header();?>


<div class="container pt-5 pb-5">
	<!-- <h2 id="post-<?php //the_ID(); ?>">
<?php //the_title(); ?></a></h2>
<small><?php //the_time('F jS, Y') ?> - by <?php //the_author() ?> --><!--</small>-->

 <div class="card my-card mb-4 pl-3">
	<?php
   if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <!--<div class="entry mt-2 p-5">
		<?php //the_content();?>   
    </div>-->

<div id="post-<?php the_ID(); ?>"<?php post_class(); ?>></div>

 <?php 

   if( has_post_thumbnail() )
  {
  ?>   

 
 
  <div class="card-body img-thumbnail post_image">
       <?php the_post_thumbnail('smallest'); ?> 
       <h2 class="entry-title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
   
   
<?php } 
 else{ ?>
<div class="card-body">
    <h2 class="entry-title"><?php the_title(); ?></h2>
      <div class="entry-content">
    <?php the_content(); ?>
</div>
</div>
   <?php } ?>
    
 
	<?php endwhile; endif;?>
</div><!--end of row-->
 </div> <!--end of container -->


	<?php get_footer();?>