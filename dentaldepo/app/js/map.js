jQuery(function ($) {

    var maps = [],
        mapStyles = [
                {
                    "featureType": "all",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#ffaa00"
                        },
                        {
                            "saturation": "-33"
                        },
                        {
                            "lightness": "10"
                        }
                    ]
                },
                {
                    "featureType": "administrative.locality",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9c5e18"
                        }
                    ]
                },
                {
                    "featureType": "landscape.natural.terrain",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "saturation": "-23"
                        },
                        {
                            "gamma": "2.01"
                        },
                        {
                            "color": "#f2f6f6"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "saturation": "-14"
                        }
                    ]
                }
            ],
        ibOptions = {
            alignBottom: true,
            content: 'text',
            pixelOffset: new google.maps.Size(-175, -60),
            boxStyle: {
                width: "350px"
            },
            closeBoxMargin: "5px 5px 5px 5px",
            closeBoxURL: 'img/icon-close.png'
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

    }

    $('.map-wrapper').each(function () {
        initialize($(this));
    });

});