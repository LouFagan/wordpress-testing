<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
</head>



<body <?php body_class();?> >

	<header>
		
<div class="header-top ">
	<img alt="clouds" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" class="topimg">

	
</div> 
		<div class="container container-fluid topnav "> 
			<nav class="navbar navbar-expand-md navbar-light"  role="navigation">
				<div class="navbar-header">
      <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>       
    </button>  
  
    
  </div>
   <!-- Collect the nav links, forms, and other content for toggling --> 
 <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
        <?php
        wp_nav_menu( array(        	 
            'theme_location'    => 'top-menu',
            'depth'             => 0,
            'container'         => 'div', 
            'container_id'		=>'bs-example-navbar-collapse-1',
            'container_class'	=>'collapse navbar-collapse',
            'menu_id'			=> false,
            'menu_class'        => 'navbar-nav mr-auto',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker(),
        ) );
        ?>
    
   </div>
</nav>	

</div>


	</header>
	
