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