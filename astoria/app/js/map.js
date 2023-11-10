$(function() {
    var marker,
        markers = [],
        infowindow = [],
        map,
        image,
        set_marker;
    /* 01 set marker */
    function setMarker(location) {
      image = {
          url: $('#map-canvas').attr('data-set-marker'),
          scaledSize : new google.maps.Size(50, 50),
      };
      set_marker = new google.maps.Marker({
          position: location,
          icon: image
      });
      set_marker.setMap(map);
      map.panTo(location);
    }
    /* 02 add marker */
    function addMarker(location,name,contentstr,markimg,mark_city){
      marker = new google.maps.Marker({
        position: location,
        map: map,
        icon: markimg
      });
      marker.setMap(map);
      infowindow[name] = new google.maps.InfoWindow({
        content:contentstr
      });
      google.maps.event.addListener(marker, 'click', function() {
        for (var i = 0; i < markers.length; i++) {
          infowindow['template_marker_' + i].close();
        }
        infowindow[name].open(map, this);
        map.setCenter(this.getPosition());
      });
      markers.push(marker);
    }
    /* 03 initialize marker */
    function initialize(){
      var lat = $('#map-canvas').attr("data-lat"),
          lng = $('#map-canvas').attr("data-lng"),
          myLatlng = new google.maps.LatLng(lat,lng),
          setZoom = parseInt($('#map-canvas').attr("data-zoom")),
          styles = styles = [
            {
                "stylers": [
                    {
                        "visibility": "on"
                    },
                    {
                        "saturation": -100
                    },
                    {
                        "gamma": 0.54
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "water",
                "stylers": [
                    {
                        "color": "#4d4946"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "labels.text",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#ffffff"
                    }
                ]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                    {
                        "gamma": 0.48
                    }
                ]
            },
            {
                "featureType": "transit.station",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "gamma": 7.18
                    }
                ]
            }
        ],
          styledMap = new google.maps.StyledMapType(styles,{name:"Styled Map"}),mapOptions = {
            zoom: setZoom,
            panControl: false,
            zoomControl: true,
            zoomControlOptions: {
              style: google.maps.ZoomControlStyle.SMALL,
              position: google.maps.ControlPosition.RIGHT_BOTTOM
            },
            streetViewControl: true,
            streetViewControlOptions: {
              position: google.maps.ControlPosition.RIGHT_BOTTOM
            },
            fullscreenControl: true,
            fullscreenControlOptions: {
              position: google.maps.ControlPosition.LEFT_BOTTOM
            },
            gestureHandling: 'cooperative',
            center: myLatlng,
            scaleControl: true,
            mapTypeControl: false
          };
          
      map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
      map.mapTypes.set('map_style', styledMap);
      map.setMapTypeId('map_style');
  
      $('.addresses-block a').each(function(){
        var mark_lat = $(this).attr('data-lat'),
          mark_lng = $(this).attr('data-lng'),
          this_index = $('.addresses-block a').index(this),
          mark_name = 'template_marker_'+this_index,
          mark_locat = new google.maps.LatLng(mark_lat, mark_lng),
          mark_str = $(this).attr('data-string'),
          mark_img = $(this).attr('data-marker');
          mark_city = $(this).attr('data-city');
        addMarker(mark_locat,mark_name,mark_str,mark_img,mark_city); 
      });
  
      directionsService = new google.maps.DirectionsService();
      directionsDisplay = new google.maps.DirectionsRenderer({
        suppressMarkers: true,
        polylineOptions: {
          geodesic: true,
          strokeColor: "#353535",
          strokeOpacity: 1,
          strokeWeight: 3,
          center: location
        }
      });
      // google Autocomplete options
      var options = {
        types: ['geocode'],
        componentRestrictions: {country: "ua"}
      };
  
      if($('#your_location').length ) {
        your_location = new google.maps.places.Autocomplete(
          (document.getElementById('your_location')),
          options
        );
        google.maps.event.addListener(your_location, 'place_changed', function() {
          var place = your_location.getPlace(),
              newLocation;
          if(markers.length) {
            map.panTo(myLatlng);
          }
          newLocation = new google.maps.LatLng(
              place.geometry.location.lat(),
              place.geometry.location.lng()
            );
          setMarker(newLocation);
        });
      }
    }
    /* 04 automatic build route on change inputs */
    function onChangeInput() {
      buildRoute(directionsService, directionsDisplay);
    }
  
    if($('.build-route').length) {
      var input_your_location = document.getElementById('your_location');
      autocomplete = new google.maps.places.Autocomplete(input_your_location);
      document.getElementById('your_location').addEventListener('change', onChangeInput);
    }
    /* 05 build route */
    function buildRoute(markimg) {
      for (var y = 0; y < markers.length; y++) {
        infowindow['template_marker_' + y].close();
      }
      directionsDisplay.setMap(null);
      setTimeout(function() {
        var start = 'РЈРєСЂР°С—РЅР°, ' + document.getElementById("your_location").value;
        var end = document.getElementById("location_department").value;
        var request = {
            origin: start, 
            destination: end,
            travelMode: google.maps.DirectionsTravelMode.DRIVING
        };
        directionsService.route(request, function(response, status) {
          if (status === google.maps.DirectionsStatus.OK) {
            directionsDisplay.setMap(map);
            directionsDisplay.setDirections(response);
          }
        });
      }, 200);
    }
  
    $(document).on('click', '.select2-selection__rendered', function(){
      if ($('#your_location').val()) {
        buildRoute();
      }
    });
  
    $(document).on('blur', '#your_location', function() {

      if ($(this).val() == '') {
        console.log(set_marker);
        setTimeout(function() {
        //   directionsDisplay.setMap(null);
        //   set_marker.setMap(null);
        }, 230);
      }
    });
    /* 06 set current position */
    if($('.build-route').length){
      navigator.geolocation.getCurrentPosition(
        function(position){
          var geocoder = new google.maps.Geocoder;
          var latlng = {lat: position.coords.latitude, lng: position.coords.longitude};
            geocoder.geocode({'location': latlng}, function(results, status) {
            document.getElementById('your_location').setAttribute('value', results[1].formatted_address);
          });
          setMarker(latlng);
        }
      );
    }
  
    if ($('#map-canvas').length) {
      setTimeout(function() {
        initialize();
      }, 500);
    }
  });