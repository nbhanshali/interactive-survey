<?php
require 'connector.php';
?>
<html>
<head>
    <meta name="viewport" content="width=device-width" />
     <?php
		require 'header.php';
     ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Css/bootstrap.min.css">
    <link rel="stylesheet" href="./customCss/2.913d2f6e.chunk.css">
    <link rel="stylesheet" href="./customCss/main.a08b3a1b.chunk.css">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-9127811-7"></script>
    <script src="./js/analytics.js"></script>
    
    <script src="./Js/jquery.min.js"></script>
    <script src="./Js/bootstrap.min.js"></script>
    <script src="./Js//mapbox-gl.js"></script>
	<link href="./Css/mapbox-gl.css" rel="stylesheet" />
<style>
	body { margin: 0; padding: 0; }
	#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
<style>
.coordinates {
background: rgba(0, 0, 0, 0.5);
color: #fff;
position: absolute;
bottom: 40px;
left: 10px;
padding: 5px 10px;
margin: 0;
font-size: 11px;
line-height: 18px;
border-radius: 3px;
display: none;
}
</style>
<style>
.marker {
display: block;
border: solid;
border-color : F7941D;
border-radius: 50%;
cursor: pointer;
padding: 0;
background-color: #F7941D;
}
</style>

</head>
<body style="background-color: white !important">
<div class="container-fluid" id="DivResult" style="">
		<div class="row-fluid" style="">
            <div class="col-xs-11 col-sm-11 col-lg-11"  style="height:100%">
				<div id="map"></div>
				<pre id="coordinates" class="coordinates"></pre>
            </div>
			<div class="col-xs-1 col-sm-1 col-lg-1">
			</div>
        </div>
    </div>
</body>
</html>

<script>
	mapboxgl.accessToken = 'pk.eyJ1IjoicGl5dXNobXVtYmFpIiwiYSI6ImNrOWpnOXM0MzA3eTYzdXA4MjVvYzg3amYifQ.OuqupCXitrLPfD0IwkbctA';
<?php
if ($result = mysqli_query($conn, "SELECT seqno,latitude,longitude FROM q4")) 
{
    // $finalJson1 = "{'type': 'FeatureCollection', 'features': ["; 
	// $finalJson = "";
	// $JsonString = "";
	// while ($row = mysqli_fetch_assoc($result))
	// {
		// $finalJson .= "{'type': 'Feature','properties': {'message': 'Foo','iconSize': [10, 10]},'geometry': {'type': 'Point','coordinates': [".$row["longitude"].",". $row["latitude"]."]}},";
		
	// }
	// $finalJsonEnd="]}";
	// //echo $finalJson1;
	// $finalJson = rtrim($finalJson,',');
	// $JsonString = $finalJson1.$finalJson.$finalJsonEnd;
	//echo $JsonString;
	$data = array();
$data["type"] = "FeatureCollection";
$features = array();
$x = 0;

 $result1 = mysqli_query($conn, "SELECT max(seqno) as 'seqno' FROM q4");
   $rowcont = mysqli_fetch_assoc($result1);


 while ($row = mysqli_fetch_assoc($result))
	 {
		 if($rowcont["seqno"] == $row["seqno"])
		{
			$features_properties = array("message"=>"Foo","iconSize"=>array("30","30"));
		}
		else
		{
			$features_properties = array("message"=>"Foo","iconSize"=>array("10","10"));
		}
		$features_geometry = array("type"=>"Point","coordinates"=>array($row["longitude"], $row["latitude"]));
		$features[$x]["type"] = "Feature";
		$features[$x]["properties"] = $features_properties;
		$features[$x]["geometry"] = $features_geometry;
		$x++;
	 }
	$data["features"] = $features;
}
?>
var geojson = <?php echo json_encode($data,JSON_PRETTY_PRINT) ?>;

var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [-79.3805,43.6532],
zoom: 10
});
 
// add markers to map
geojson.features.forEach(function(marker) {
// create a DOM element for the marker
var el = document.createElement('div');
el.className = 'marker';
el.style.width = marker.properties.iconSize[0] + 'px';
el.style.height = marker.properties.iconSize[1] + 'px';
 
el.addEventListener('click', function() {
//window.alert(marker.properties.message);
});
 
// add marker to map
new mapboxgl.Marker(el)
.setLngLat(marker.geometry.coordinates)
.addTo(map);
});
</script>

<!-- for map result-->



	
