// popovers Initialization
 
var $j = jQuery.noConflict();

$j(function () {
  $j('[data-toggle="popover"]').popover()
  html:true
});

$j('#html-div').popover({
	title: '',
	trigger: 'focus',
	html: true,
	content: function(){		
		return $j('#html-div').html();
		
	} 
});

/*$j('#[data-toggle="popover"]').popover({
	title: '',
	trigger: 'focus',
	html: true,
	content: function(){
	var content= $j(this).attr("data-popover-content");		
		return $j(content).find("#html-div").clone();
		
	} 
});*/

 $j('#pop-content').popover({
 	placement:'bottom',
 	title: '',
 	trigger: 'click',
    html: true, 
	content: function() {
          return $j('#pop-content').html();
        }
});

 $j('.toast').toast('show');



/* $('[data-toggle="popover"]').popover({
    html: true,
    content: function () {
        var content = $(this).attr("data-popover-content");
        return $(content).find(".popover-body").clone();
    }
})*/