var map, markers = [];

function initialize() {
    var centerLat = $('#map-opts').data('center-lat');
    var centerLng = $('#map-opts').data('center-lng');
    var myLatlng = new google.maps.LatLng(centerLat, centerLng);
    var myOptions = {
    zoom: $('#map-opts').data('map-zoom'),
    center: myLatlng
  };


  map = new google.maps.Map(document.getElementById('map'),
      myOptions);


  addMarker(myLatlng);

  google.maps.event.addListener(map, "click", function (e) {

      //lat and lng is available in e object
      var latLng = e.latLng;
      deleteMarkers();
      addMarker(latLng);
      printLatLng(latLng);
      
  });
}
// Adds a marker to the map and push to the array.
function addMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  markers.push(marker);
}

function printLatLng(latLng) {
  $('#clinics-lat').val(latLng.lat());
  $('#clinics-lng').val(latLng.lng());
}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setMapOnAll(null);
}

// Shows any markers currently in the array.
function showMarkers() {
  setMapOnAll(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
}