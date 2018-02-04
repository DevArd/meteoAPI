function initMap() {
    let map;
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 48.864, lng: 2.349},
        zoom: 5
    })
    var infoWindow = new google.maps.InfoWindow({map: map});

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Vous êtes ici !');
            map.setCenter(pos);
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ? 'Error: The Geolocation service failed.' : 'Error: Your browser doesn\'t support geolocation.');
}

function placeMarker() {
    // Si aucune ville existe
    if (document.getElementById("coord1")===null && document.getElementById("coord2")===null) {
        initMap()
        
        // Les 2 villes existent... On place 2 markers
    } else if (document.getElementById("coord1")!==null && document.getElementById("coord2")!==null) {
        let lat1 = Number(document.getElementById("coord1lat").innerText);
        let lon1 = Number(document.getElementById("coord1lon").innerText);
        let ville1 = {lat: lat1, lng: lon1};

        let lat2 = Number(document.getElementById("coord2lat").innerText);
        let lon2 = Number(document.getElementById("coord2lon").innerText);
        let ville2 = {lat: lat2, lng: lon2};
        let middleMap = {lat: (lat2+lat1)/2, lng: (lon2+lon1)/2};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 4,
            center: middleMap
        });
        var marker1 = new google.maps.Marker({
            position: ville1,
            map: map
        });
        var marker2 = new google.maps.Marker({
            position: ville2,
            map: map
        });

        // On place que le marker de la première ville
    } else if ( document.getElementById("coord1")!==null) {
        let lat1 = Number(document.getElementById("coord1lat").innerText);
        let lon1 = Number(document.getElementById("coord1lon").innerText);
        let ville1 = {lat: lat1, lng: lon1};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: ville1
        });
        var marker = new google.maps.Marker({
            position: ville1,
            map: map
        });

        // On place que le marker de la deuxième ville
    } else {
        let lat2 = Number(document.getElementById("coord2lat").innerText);
        let lon2 = Number(document.getElementById("coord2lon").innerText);
        let ville2 = {lat: lat2, lng: lon2};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: ville2
        });
        var marker = new google.maps.Marker({
            position: ville2,
            map: map
        });
    }
}