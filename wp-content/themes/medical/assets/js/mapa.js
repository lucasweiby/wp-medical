var map;

function initialize() {
    var cpt = new google.maps.LatLng(-3.750234, -38.504310);

    var options = {
        scrollwheel: false,
        navigationControl: false,
        zoom: 14,
        center: cpt
      };

    map = new google.maps.Map(document.getElementById("mapa"), options);

    var contentString = "<h4>Empresa</h4>"+"<p>Endereço</p>"+"<p>CEP </p>"+"<p>Fortaleza - CE Brasil</p>";
    var infowindow = new google.maps.InfoWindow({
     content: contentString
    });

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(-3.750315, -38.504092),
        title: "Empresa",
        map: map,
        icon: 'assets/img/pin.png'
    });
    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
}

initialize();
