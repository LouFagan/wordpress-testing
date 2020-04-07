<?php get_header();?>

<div class="container pt-5 pb-5">
	<h1><?php the_title();?></h1>

	<?php if (have_posts()) : while(have_posts()) : the_post();?>
		<?php the_content();?>
	<?php endwhile; endif;?>


<div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">This is where other content would go.</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">And here too I guess</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Same for here and...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">this would be the last line...</div>
    </div>
  </div>
</div>
<div class="container container-popover">
  <h3>Bootstrap 3 Popover HTML Example</h3>
  <ul class="list-unstyled">
    <li><a data-placement="bottom" data-toggle="popover" data-container="body" data-placement="left" type="button" data-html="true" href="#" id="login"><span class="glyphicon glyphicon-search" style="margin:3px 0 0 0"></span></a></li>
    <div id="popover-content" class="hide">
      <form class="form-inline" role="form">
        <div class="form-group"> 
          <input class="headerSearch search-query" id="str" name="str" type="text" placeholder="Search..." />
          <span class="search-icon style="margin:3px 8px 0 -20px;""><i class="fas fa-search" aria-hidden="true"></i></span>
        
          <!--<span class="glyphicon glyphicon-search" style="margin:3px 8px 0 -20px;"></span>-->
          <!--<input class="btn btn-primary btn-xs" id="phSearchButton" type="submit" value="Search" /> 
          <input class="btn btn-primary btn-xs" id="searchButton" type="submit" value="Dictionary" />-->
        </div>
      </form>
    </div>
  </ul>
</div>


<!--<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>-->
</div> <!--end of container-->
	<?php get_footer();?>