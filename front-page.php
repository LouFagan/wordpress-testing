<?php get_header();?>
<div class="container-fluid">
	<div class="row align-items-center">
		<div class="col-sm-12">
<div class="page-header header">
	<div class="overlay"></div>
	
<!--<div class="span12">

	<h1 class="text-center"><?php the_title();?></h1>

</div>-->

<div class="description pt-5">
  <h1 class="display-5">Welcome to my page!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="m-y-md">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class=" button btn btn-outline-secondary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>

	<?php if (have_posts()) : while(have_posts()) : the_post();?>
		<?php the_content();?>
	<?php endwhile; endif;?>
</div>
</div><!--end of column -->
<div class="col-sm-12">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="carousel-img" src="wp-content/themes/testing-theme/assets/images/square.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img src="wp-content/themes/testing-theme/assets/images/square.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img src="wp-content/themes/testing-theme/assets/images/square.png" alt="Third slide">
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div><!--end of col -->
</div><!--end of row -->
</div> <!--end of container -->

<div class="container features">
  <div class="row align-items-center">
    <div class="col-md-4">
      <h3 class="feature-title">Lorem ipsum</h3>
     <img src="<?php bloginfo('template_directory'); ?> /assets/images/column-1.png" class="img-fluid">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
    </div>
    <div class="col-md-4 ">
      <h3 class="feature-title">Lorem ipsum</h3>      
      <img src="<?php bloginfo('template_directory'); ?> /assets/images/column-2.jpg" class="img-fluid">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum quam odio, quis placerat ante luctus eu. Sed aliquet dolor id sapien rutrum, id vulputate quam iaculis.</p>
    </div>
    <div class="col-md-4">
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
