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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-9127811-7"></script>
    <script src="./js/analytics.js"></script>
   
    <script src="./Js/jquery.min.js"></script>
    <script src="./Js/bootstrap.min.js"></script>
    <script src="./Js//mapbox-gl.js"></script>
	<link href="./Css/mapbox-gl.css" rel="stylesheet" />
<style>
	body { margin: 0; padding: 0; }
	#map { position: absolute; top: 0; bottom: 0; width: 100%; }
	
	@font-face {
  font-family: myFirstFont;
  src: url(./Oswald/Oswald-VariableFont_wght.ttf);
}

div {
  font-family: myFirstFont;
}
	
	.button5 {
  background-color: orange;
  color: white;
  border-radius: 25px;
}
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
border: none;
border-radius: 50%;
cursor: pointer;
padding: 0;
}
</style>
 <script>
        $(document).ready(function () {
			$("#btnEnd").click(function () {
				window.location='index.php';
			});
			$("#btnResultEnd").click(function () {
				window.location='index.php';
			});
			$("#btnNext").click(function () {
				window.location='q3.php';
				
			});	
        });
    </script>
</head>
<body style="background-color: #26abe2;">
<form id="frmNew" action="" method="POST">
    <div class="container-fluid" id="DivQuestion">
        <div class="row-fluid">
		
		 
            <div class="col-xs-12 col-sm-12 col-lg-12" style="">
                <div class="pull-left">
				<br>
				<br>
                    <label style="font-family: 'Open Sans', sans-serif; font-size: 25px; color: white; font-weight: 300;">
                        SPENDING TIME
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <label style="font-family: 'Open Sans', sans-serif; font-size: 50px; color: white; font-weight: 800;">
                    what area of Spadina - Fort York<br/>do you enjoy spending time in?
                </label>
		<br>
		<label style="font-family: 'Open Sans', sans-serif; font-size: 25px; color: white; font-weight: 300;">
		    move the dot to place it over that area.
		</label>
                <br>
                <br>
            </div>
        </div>
        <div class="row-fluid" style="">
            <div class="col-xs-11 col-sm-11 col-lg-11" style="height:48%;">
				<div id="map"></div>
				<pre id="coordinates" class="coordinates"></pre>
				<input type="hidden" id="hdnLatitude" name="Latitude">
				<input type="hidden" id="hdnLongitude" name="Longitude">
            </div>
			<div class="col-xs-1 col-sm-1 col-lg-1">
			</div>
        </div>
	
		<div class="row-fluid" id="dvValidation" style="display:none">
            <div class="col-xs-12 col-sm-12 col-lg-12">
				
				<div class="pull-left">
						<label style="font-family: 'Open Sans', sans-serif; font-size: 20px; color: white; font-weight: 300;"> Selection is compulsory !</label>
				</div>
			</div>
		</div>
		<div class="row-fluid" style="">
            <div class="col-xs-12 col-sm-12 col-lg-12">
		<br>
				<div class="pull-left">
						<input type="button" class="btn button5" style="text-align:center; font-weight: bold; width: 140px; height: 50px; font-size: 20px; font-family: 'Open Sans', sans-serif;" value="END" id="btnEnd" />
						
				</div>
			
				<div class="pull-right">
						<input type="submit" class="btn button5" style="text-align:center; font-weight: bold; width: 140px; height: 50px; font-size: 20px; font-family: 'Open Sans', sans-serif;" value="CONFIRM" name="btnConfirm" id="btnConfirm" />
				</div>
			</div>
	    </div>
    </div>
</form>

	<div class="container-fluid" id="DivResult" style="Display:None">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-12" style="">
                <div class="pull-left">
				<br>
				<br>
                    <label style="font-family: 'Open Sans', sans-serif; font-size: 25px; color: white; font-weight: 300;">
                         SPENDING TIME
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <label style="font-family: 'Open Sans', sans-serif; font-size: 50px; color: white; font-weight: 800;">
                    what area of Spadina - Fort York<br/>do you enjoy spending time in?
                </label>
		<br>
		<label style="font-family: 'Open Sans', sans-serif; font-size: 25px; color: white; font-weight: 300;">
		    Here's what others have said
		</label>
                <br>
                <br>
            </div>
        </div>
		<div class="row-fluid" style="">
            <div class="col-xs-11 col-sm-11 col-lg-11" style="height:45%" >
				<iframe src="q2Map.php" style="border:none;height:100%;width:100%"></iframe>
            </div>
			<div class="col-xs-1 col-sm-1 col-lg-1">
			</div>
        </div>
		<div class="row-fluid" style="">
            <div class="col-xs-12 col-sm-12 col-lg-12">
			<br>
		<br>
				<div class="pull-left">
						<input type="button" class="btn button5" style="text-align:center; font-weight: bold; width: 140px; height: 50px; font-size: 20px; font-family: 'Open Sans', sans-serif;" value="END" id="btnResultEnd" />
						
				</div>
			
				<div class="pull-right">
						<input type="button" class="btn button5" style="text-align:center; font-weight: bold; width: 140px; height: 50px; font-size: 20px; font-family: 'Open Sans', sans-serif;" value="NEXT" id="btnNext" />
				</div>
			</div>
	    </div>
    </div>
</div>
<script>
mapboxgl.accessToken = 'pk.eyJ1IjoicGl5dXNobXVtYmFpIiwiYSI6ImNrOWpnOXM0MzA3eTYzdXA4MjVvYzg3amYifQ.OuqupCXitrLPfD0IwkbctA';
var coordinates = document.getElementById('coordinates');
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [-79.393089, 43.641490],
zoom: 12
});



var canvas = map.getCanvasContainer();
 
var geojson = {
'type': 'FeatureCollection',
'features': [
{
'type': 'Feature',
'geometry': {
'type': 'Point',
'coordinates': [-79.393089, 43.641490]
}
}
]
};

function onMove(e) {
var coords = e.lngLat;
 
// Set a UI indicator for dragging.
canvas.style.cursor = 'grabbing';
 
// Update the Point feature in `geojson` coordinates
// and call setData to the source layer `point` on it.
geojson.features[0].geometry.coordinates = [coords.lng, coords.lat];
map.getSource('point').setData(geojson);
}
 
function onUp(e) {
var coords = e.lngLat;
 
// Print the coordinates of where the point had
// finished being dragged to on the map.
coordinates.style.display = 'block';
$("#hdnLatitude").val(coords.lat);
$("#hdnLongitude").val(coords.lng);

coordinates.innerHTML =
'Longitude: ' + coords.lng + '<br />Latitude: ' + coords.lat;
canvas.style.cursor = '';
 
// Unbind mouse/touch events
map.off('mousemove', onMove);
map.off('touchmove', onMove);
}
 
map.on('load', function() {
// Add a single point to the map
map.addSource('point', {
'type': 'geojson',
'data': geojson
});

map.addSource('toronto', {
'type': 'geojson',
'data': {
'type': 'Feature',
'geometry': {
'type': 'Polygon',
'coordinates': [[
[-79.347581, 43.650313],
[-79.359905, 43.645138],
[-79.347031, 43.628813],
[-79.386752, 43.606987],
[-79.406227, 43.627459],
[-79.423062, 43.624672],
[-79.430072, 43.632286],
[-79.425378, 43.633642],
[-79.428683, 43.642302],
[-79.422351, 43.643470],
[-79.424810, 43.649395],
[-79.383738, 43.655770],
[-79.378872, 43.645207],
[-79.350002, 43.653259]
]]
}
}
});



map.addLayer({
'id': 'toronto',
'type': 'fill',
'source': 'toronto', // reference the data source
'layout': {},
'paint': {
'fill-color': '#0080ff', // blue color fill
'fill-opacity': 0.2
}
});

map.addLayer({
'id': 'outline',
'type': 'line',
'source': 'maine',
'layout': {},
'paint': {
'line-color': '#000',
'line-width': 3
}
});


map.addLayer({
'id': 'point',
'type': 'circle',
'source': 'point',
'paint': {
'circle-radius': 10,
'circle-color': '#F7941D'
}
});


 
// When the cursor enters a feature in the point layer, prepare for dragging.
map.on('mouseenter', 'point', function() {
map.setPaintProperty('point', 'circle-color', '#F7941D');
canvas.style.cursor = 'move';
});
 
map.on('mouseleave', 'point', function() {
map.setPaintProperty('point', 'circle-color', '#F7941D');
canvas.style.cursor = '';
});
 
map.on('mousedown', 'point', function(e) {
// Prevent the default map drag behavior.
e.preventDefault();
 
canvas.style.cursor = 'grab';
 
map.on('mousemove', onMove);
map.once('mouseup', onUp);
});
 
map.on('touchstart', 'point', function(e) {
if (e.points.length !== 1) return;
 
// Prevent the default map drag behavior.
e.preventDefault();
 
map.on('touchmove', onMove);
map.once('touchend', onUp);
});
});

map.addControl(new mapboxgl.NavigationControl());

</script>

<!-- for map result-->


<?php
if(isset($_POST["btnConfirm"])=="Confirm")
{
	    $Latitude = $_POST["Latitude"];
		$Longitude = $_POST["Longitude"];
		if($Latitude == '' || $Longitude == '')
		{
			echo "<script> $('#dvValidation').show();</script>";
		}
		else
		{
			$sqlQuery="insert into q2(latitude,longitude) values('".$Latitude."','".$Longitude."');";
			//echo $sqlQuery;
			 if ($conn->query($sqlQuery) === TRUE) 
			 {
				 if ($result = mysqli_query($conn, "SELECT latitude,longitude FROM q2")) 
				 {
					
				 }
				 echo "<script>$('#dvValidation').hide();$('#DivQuestion').hide();$('#DivResult').show();</script>";
			 }
			 else
			 {
				 echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		
}
?>
	
