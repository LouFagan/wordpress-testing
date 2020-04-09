<?php get_header();?>

<div class="container pt-5 pb-5">
	<h1><?php the_title();?></h1>

	<?php if (have_posts()) : while(have_posts()) : the_post();?>
		<?php the_content();?>
	<?php endwhile; endif;?>


<div class="row">
  <div class="col-4 data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
    <div class="list-group" id="list-tab" role="tablist">
      <a id="home" class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a id="profile"class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a id="messages"class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a id="settings"class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>

  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">This is where other content would go. Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">And here too I guess. Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Same for here and...Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">this would be the last line...Ex consequat commodo adipisicing exercitation aute excepteur occaecat ullamco duis aliqua id magna ullamco eu. Do aute ipsum ipsum ullamco cillum consectetur ut et aute consectetur labore. Fugiat laborum incididunt tempor eu consequat enim dolore proident. Qui laborum do non excepteur nulla magna eiusmod consectetur in. Aliqua et aliqua officia quis et incididunt voluptate non anim reprehenderit adipisicing dolore ut consequat deserunt mollit dolore. Aliquip nulla enim veniam non fugiat id cupidatat nulla elit cupidatat commodo velit ut eiusmod cupidatat elit dolore.</div>
    </div>
  </div>
</div>

<div class="container popover-div">
  <h3>Bootstrap 4 Popover HTML Example</h3>
  <ul class="list-unstyled">    
   <li><a data-toggle="popover" data-container="body" type="button" href="#" id="login"><span class="font-awesome" style="margin:3px 0 0 0"><i class="fas fa-search" aria-hidden="true"></i></span></a></li>
    <div id="pop-content" class="d-none">
      <form class="form-inline" role="form">
        <div class="form-group"> 
          <input class="headerSearch search-query" id="str" name="str" type="text" placeholder="Search..." />
          <span class="search-icon" style="margin:3px 8px 0 -20px;"><i class="fas fa-search" aria-hidden="true"></i></span>        
          <!--<span class="glyphicon glyphicon-search" style="margin:3px 8px 0 -20px;"></span>-->
          <input class="btn btn-primary btn-xs" id="phSearchButton" type="submit" value="Search" /> 
          <input class="btn btn-primary btn-xs" id="searchButton" type="submit" value="Dictionary" />
        </div>
      </form>
    </div>
  </ul>
</div>
<div class="row">
	<h2><span class="ez-toc-section" id="Bootstrap_3_Popover_with_HTML">Bootstrap 3 Popover with HTML</span></h2>
	<div id="popover-div" class="col-sm-12 col-xs-12 col-md-9">
		<a title="" class="btn btn-primary" href="#"  data-toggle="popover">Popover Example</a>        
		<div class="d-none" id="html-div">
			<form class="">
				<div class="form-group">
					<input class="form-control" type="text" placeholder="please enter name">
					
				</div>
				<div class="form-group">
				<button type="submit" class="btn btn-primary btn-default" style="">Send invitation</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="row">
    <hr>
    <p>A bootstrap popover example with data-html="true" to render html within data-content=""</p>
      <hr>

<a tabindex="0"
   class="btn btn-lg btn-primary" 
   role="button" 
   data-html="true" 
   data-toggle="popover" 
   data-placement="bottom" 
   data-trigger="focus" 
   title="<b>Example popover</b> - title" 
   data-content="<div><a href='/link'><b>Geoff</b> - content</a></div><div><b>Hilary</b> - content</div>">RSS <i class="fa fa-rss" aria-hidden="true"></i></a>
            
      <hr>
    </div>
  </div>

<!--<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>-->
</div> <!--end of container-->
	<?php get_footer();?>