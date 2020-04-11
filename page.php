<?php get_header();?>


<div class="container pt-5 pb-5">
	<!-- <h2 id="post-<?php //the_ID(); ?>">
<?php //the_title(); ?></a></h2>
<small><?php //the_time('F jS, Y') ?> - by <?php //the_author() ?> --><!--</small>-->

 <div class="row">
	<?php
   if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <!--<div class="entry mt-2 p-5">
		<?php //the_content();?>   
    </div>-->

<div class="col-md-12 d-flex justify-content-center" id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
  <h2 class="entry-title pb-3"><?php the_title(); ?></h2>
</div><!--end of div-->
  </div><!--end of row-->
 <?php 

   if( has_post_thumbnail() )
  {
  ?>   

 
 <div class="row">
  <div class="col-md-12 d-flex justify-content-center pb-5 img-responsive post_image">
       <?php the_post_thumbnail('largest'); ?> 
     </div>
  <div class="col-md-12">
        <?php the_content(); ?>
        </div><!--end of div-->
      </div><!--end of row-->
   
   
<?php } 
 else{ ?>
<!--<div class="col-md-12 d-flex justify-content-center">
    <h2 class="entry-title text-center pb-3"><?php //the_title(); ?></h2>
  </div>--><!--end of div
  </div>--><!--end of row-->
  <div class="row">
      <div class=" col-12 entry-content">
    <?php the_content(); ?>
</div><!--end of div-->

   <?php } ?>
    
 
	<?php endwhile; endif;?>
  </div><!--end of row-->
  

 </div> <!--end of container -->


	<?php get_footer();?>