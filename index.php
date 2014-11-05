<!DOCTYPE html>
<html>
<head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
        html, body, #map-canvas {
            height: 100%;
            margin: 0px;
            padding: 0px
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script>
        var map;
        var geocoder ;
        function initialize()
        {
            geocoder = new google.maps.Geocoder();
            geocoder.geocode({'address' : "Худжанд 34 мкр"},function(results, status){
                if(status == google.maps.GeocoderStatus.OK){
                    var position = {
                        lat: results[0].geometry.location.lat(),
                        lng: results[0].geometry.location.lng()
                    };
                    var mapOptions = {
                        zoom: 12,
                        center: new google.maps.LatLng(position.lat, position.lng)
                    };
                    map = new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);
                }
                else
                {
                    console.log("Cant find this address!");
                }
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script
</head>
<body>
<div id="map-canvas"></div>

</body>
</html>