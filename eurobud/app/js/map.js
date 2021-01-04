jQuery(function ($) {

    var maps = [],
        mapStyles = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#00426a"
            },
            {
                "saturation": "-75"
            },
            {
                "lightness": "30"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#00426a"
            },
            {
                "saturation": "-27"
            },
            {
                "lightness": "22"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#0076a8"
            },
            {
                "lightness": "90"
            },
            {
                "saturation": "-80"
            },
            {
                "gamma": "1.00"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
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
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "weight": "0.01"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#00426a"
            },
            {
                "lightness": "47"
            },
            {
                "saturation": "-75"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
            {
                "weight": "0.01"
            },
            {
                "lightness": "36"
            },
            {
                "saturation": "-59"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#0076a8"
            },
            {
                "weight": "1.00"
            },
            {
                "lightness": "45"
            },
            {
                "saturation": "-67"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "labels.icon",
        "stylers": [
            {
                "saturation": "-62"
            },
            {
                "visibility": "simplified"
            },
            {
                "gamma": "0.66"
            },
            {
                "hue": "#0075ff"
            },
            {
                "lightness": "17"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#0076a8"
            },
            {
                "lightness": "63"
            },
            {
                "saturation": "-76"
            },
            {
                "weight": "2"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#0076a8"
            },
            {
                "lightness": "66"
            },
            {
                "saturation": "-81"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#0076a8"
            },
            {
                "lightness": "70"
            },
            {
                "saturation": "-78"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "lightness": "50"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "labels.text",
        "stylers": [
            {
                "saturation": "-47"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#0076a8"
            },
            {
                "visibility": "on"
            },
            {
                "lightness": "58"
            },
            {
                "saturation": "-44"
            },
            {
                "gamma": "0.87"
            }
        ]
    }
],
        ibOptions = {
            alignBottom: true,
            content: 'text',
            pixelOffset: new google.maps.Size(-125, -60),
            boxStyle: {
                width: "250px"
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