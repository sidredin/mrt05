var map;
var markers = [];

function initialize() {
      var centerLat = $('#map-opts').data('center-lat');
      var centerLng = $('#map-opts').data('center-lng');
      // console.log(centerLat);
      var myLatlng = new google.maps.LatLng(centerLat, centerLng);
      var myOptions = {
      zoom: $('#map-opts').data('map-zoom'),
      center: myLatlng
    };
    map = new google.maps.Map(document.getElementById('map'),
    myOptions);
    addMarkers();
}

function addMarkers(){
    var markers = [];
    var markerCoords;
  var clinics = $('.clinic-row');
  clinics.each(function () {
    markerCoords = new google.maps.LatLng($(this).data('lat'), $(this) .data('lng'));
    addMarker(markerCoords);
  })
}

function addMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  markers.push(marker);
}

// Высвечивание активных пунктов меню (разных меню - горизонтальных, вертикальных и т.п.)

$(document).ready(function () {

  var location = window.location.href;

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

  $('.add-to-cart').on('click', function(e){
     e.preventDefault();
     var id = $(this).data('id');
     $.ajax({
         url: "/cart/add",
         data: {id: id},
         type: 'GET',
         success: function(res){
             if(!res) alert('Ошибка!');
             showCart(res);
         },
         error: function(res){
             alert('Произошла ошибка в процессе Ajax-запроса');
         },
     });
 });

});