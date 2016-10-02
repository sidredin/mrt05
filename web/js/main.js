$(document).ready(function () {
	var location = window.location.href;
  $('.navbar-nav li').each(function () {      
      var link = $(this).children()[0].href;
      if(location == link) {
          $(this).addClass('active');
          $(this).parent().parent('li').addClass('active');

      }
  });

});



