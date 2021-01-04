<div id="map" style="width: 100; height: 700px;"></div>
<?php

$car1 = 'Car 1';
$car2 = 'Car 2';
$car3 = 'Car 3';
$car4 = 'Car 4';
$car5 = 'Car 5';

$batterLevel1 = rand(0, 13) . 'volt';

$lat5 = 15.961329;
$long5 = 15.017345;
$n5 = 5;

$lat4 = 21.616579;
$long4 = -0.461734;
$n4 = 4;
$lat3 = -13.923404;
$long3 = 24.876509;
$n3 = 3;
$lat2 = 25.799891;
$long2 = -6.081648;
$n2 = 2;
$lat1 = 44.314842;
$long1 = 85.602364;
$n1 = 1;

/*$url='https://maps.googleapis.com/maps/api/geocode/json?latlng=' .  $lat1 . ',' . $long1 . '&key=AIzaSyB1UDlyDwrCdlA41STFfOP6xvudJzlce8s';
echo $url;
echo getGeoLocation($url);

function getGeoLocation($inUrl) {

		//create curl resource
		$initCurl = curl_init();

		//set url
		curl_setopt($initCurl, CURLOPT_URL, $inUrl);

		//return the transfer as a string
		curl_setopt($initCurl, CURLOPT_RETURNTRANSFER, 1);

		// $output contains the output string
		$theGeo = curl_exec($initCurl);


		return $theGeo;
	}//getGeoLocation
*/
?>
<script type="text/javascript">
  var locations = [
    ['Battery level of <?php echo $car5 ?>: <?php echo $batterLevel1?>', <?php echo $lat5 ?>, <?php echo $long5 ?>, <?php echo $n5 ?>],
    ['Battery level of <?php echo $car4 ?>: <?php echo rand(0, 13) . 'volt'?>', <?php echo $lat4 ?>, <?php echo $long4 ?>, <?php echo $n4 ?>],
    ['Battery level of <?php echo $car3 ?>: <?php echo rand(0, 13) . 'volt'?>', <?php echo $lat3 ?>, <?php echo $long3 ?>, <?php echo $n3 ?>],
    ['Battery level of <?php echo $car2 ?>: <?php echo rand(0, 13) . 'volt'?>', <?php echo $lat2 ?>, <?php echo $long2 ?>, <?php echo $n2 ?>],
    ['Battery level of <?php echo $car1 ?>: <?php echo rand(0, 13) . 'volt'?>', <?php echo $lat1 ?>, <?php echo $long1 ?>, <?php echo $n1 ?>]
  ];

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 3,
    center: new google.maps.LatLng(-33.92, 151.25),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
  }

  document.getElementByClassName("gm-style-iw-d").style.color="black";
</script>
