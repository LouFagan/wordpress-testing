<?php get_header();?>

<div class="page-header header container-fluid">
	<div class="overlay"></div>
	
<!--<div class="span12">

	<h1 class="text-center"><?php the_title();?></h1>

</div>-->
<div class="description">
  <h1>Welcome to the Landing Page!</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis. Suspendisse consectetur mi id libero fringilla, in pharetra sem ullamcorper.</p>
  <button class="btn btn-outline-secondary btn-lg">Tell Me More!</button>
</div>

	<!--<?php if (have_posts()) : while(have_posts()) : the_post();?>
		<?php the_content();?>
	<?php endwhile; endif;?>-->



</div>
<div class="container features">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h3 class="feature-title">Lorem ipsum</h3>
     <img src="<?php bloginfo('template_directory'); ?> /assets/images/column-1.png" class="img-fluid">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <h3 class="feature-title">Lorem ipsum</h3>      
      <img src="<?php bloginfo('template_directory'); ?> /assets/images/column-2.jpg" class="img-fluid">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
    <h3 class="feature-title">Get in Touch!</h3>
<div class="form-group">
  <input type="text" class="form-control" placeholder="Name" name="">
</div>
<div class="form-group">
  <input type="email" class="form-control" placeholder="Email Address" name="email">
</div>
<div class="form-group">
  <textarea class="form-control" rows="4"></textarea>
</div>
<input type="submit" class="btn btn-secondary btn-block" value="Send" name="">		
    </div>

  </div> 
</div>

<?php get_footer();?>
