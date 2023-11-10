var GeoLocation = {};
jQuery(function ($) {

    var maps = [],
        mapStyles = [],
        ibOptions = {
            alignBottom: true,
            content: 'text',
            pixelOffset: new google.maps.Size(45, 40),
            boxStyle: {
                width: "370px"
            },
            closeBoxURL: 'img/close-map-info.png'
        },
        ib = new InfoBox(ibOptions);

    function Map(id, mapOptions) {
        this.map = new google.maps.Map(document.getElementById(id), mapOptions);
        this.markers = [];
        this.infowindows = [];
        this.clusters = null;
    }

    function addMarker(mapId, location, index, string, image) {
        maps[mapId].markers[index] = new google.maps.Marker({
            position: location,
            map: maps[mapId].map,
            icon: {
                url: image
            }
        });

        var content = '<div class="info-box">' + string + '</div>';

        google.maps.event.addListener(maps[mapId].markers[index], 'click', function () {
            ib.setContent(content);
            ib.setPosition(location);
            ib.open(maps[mapId].map);
        });

    }

    function initialize(mapInst) {

        var lat = mapInst.attr("data-lat"),
            lng = mapInst.attr("data-lng"),
            myLatlng = new google.maps.LatLng(lat, lng),
            setZoom = parseInt(mapInst.attr("data-zoom")),
            mapId = mapInst.attr('id');


        var mapOptions = {
            zoom: setZoom,
            disableDefaultUI: true,
            scrollwheel: false,
            zoomControl: true,
            streetViewControl: true,
            center: myLatlng,
            styles: mapStyles
        };

        maps[mapId] = new Map(mapId, mapOptions);

        $('.marker[data-rel="' + mapId + '"]').each(function (i, el) {
            addMarker(
                mapId,
                new google.maps.LatLng(
                    $(this).attr('data-lat'),
                    $(this).attr('data-lng')
                ),
                i,
                $(this).attr('data-string'),
                $(this).attr('data-image')
            );
        });

        var options = {
            types: ['geocode'],
            componentRestrictions: {country: "ua"}
        };

        autocomplete = new google.maps.places.Autocomplete(
            (document.getElementById('mapStreet')),
            options
        );

        google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var place = autocomplete.getPlace(),
                newLocation;
            if (!place.geometry.location) return false;

            newLocation = new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng());
            smoothZoomMap(maps[mapId].map, 15);
            maps[mapId].map.panTo(newLocation);

        });

    }

    // Smooth map zoom
	function smoothZoomMap(map, targetZoom) {
		var currentZoom = arguments[2] || map.getZoom();
		if (currentZoom != targetZoom) {
			google.maps.event.addListenerOnce(map, 'zoom_changed', function(event) {
				smoothZoomMap(map, targetZoom, currentZoom + (targetZoom > currentZoom ? 1 : -1));
			});
			setTimeout(function() {
				map.setZoom(currentZoom)
			}, 100);
		}
	}

   
    setTimeout( function(){
        $('.map-wrapper').each(function () {
            initialize($(this));
        });
    },2400);

});








