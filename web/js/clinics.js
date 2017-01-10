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
    var infowindowContent;
  var clinics = $('.clinic-row');
  clinics.each(function () {
    markerCoords = new google.maps.LatLng($(this).data('lat'), $(this) .data('lng'));
    infowindowContent = $(this).html();
    addMarker(markerCoords, infowindowContent);
  })
}

function addMarker(location, infowindowContent) {

  var infowindow = new google.maps.InfoWindow({
    content: infowindowContent
  });

  var marker = new google.maps.Marker({
    position: location,
    map: map,
    title: 'Нажмите сюда для просмотра информации о клинике',
  });

  marker.addListener('click', function() {
    infowindow.open(map, marker);
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

});