$(document).ready(function () {
	var location = window.location.href;
  $('.navbar-nav li').each(function () {      
      var link = $(this).children()[0].href;
      if(location == link) {
          $(this).addClass('active');
      }
  });

  $('.dropdown-menu li').each(function () {
      var link = $(this).children()[0].href;
      if(location == link) {
      		var city= $(this).children().html();
      		var button = $('button.dropdown-toggle');
      		button.addClass('btn-primary');
      		button.removeClass('btn-default');
      		button.html(city+'<span class="caret">');
          $(this).addClass('active');
      }
  });

  $('.list-group a').each(function () {
      var link = $(this)[0].href;
      if(location == link) {
        $(this).addClass('active');
      }
  });

});



