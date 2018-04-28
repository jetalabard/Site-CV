<head>
    <title>Talabard Jérémy</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="./assets/css/main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.4/angular.min.js"></script>
    <script src="./js/jquery-1.11.2.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/menuController.js"></script>
    <script src="./js/indexController.js"></script>
    <script src="./js/connectionController.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        function initialize() {
            var myLatLng = {lat: 45.7641125, lng: 3.1154926};

            var map = new google.maps.Map(document.getElementById('googleMap'), {
                zoom: 18,
                center: myLatLng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var infowindow = new google.maps.InfoWindow({
                content: '<h1 style="color:black;">39 avenue des Landais 63000 Clermont-Ferrand</h1>'
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Adresse'
            });
            marker.addListener('click', function () {
                infowindow.open(map, marker);
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
