
// Надо настроить!!!


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
  var zoom = map.getZoom();
  document.getElementById('zoomspan').innerHTML = zoom;
  printLatLng(myLatlng);
  document.getElementById('centerspan').innerHTML = myLatlng;

  google.maps.event.addListener(map, "zoom_changed", function () {
      var center = map.getCenter();
      document.getElementById('centerspan').innerHTML = center;
      var zoom = map.getZoom();
      document.getElementById('zoomspan').innerHTML = zoom;
  });
  google.maps.event.addListener(map, "drag", function () {
      var center = map.getCenter();
      document.getElementById('centerspan').innerHTML = center;
  });
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
  document.getElementById('clinics-lat').value = latLng.lat();
  document.getElementById('clinics-lng').value = latLng.lng();
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