function initialize() {
      var myLatlng = new google.maps.LatLng(42.948381397653165, 47.51861572265625);
      var myOptions = {
      zoom: 7,
      center: myLatlng
    };


    map = new google.maps.Map(document.getElementById('map'),
        myOptions);

    
 }