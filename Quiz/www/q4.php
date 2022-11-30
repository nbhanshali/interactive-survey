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
 @font-face {
  font-family: myFirstFont;
  src: url(./Oswald/Oswald-VariableFont_wght.ttf);
}

div {
  font-family: myFirstFont;
}
	
	.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555 !important;
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
				window.location='q5.php';
				
			});	
        });
    </script>
</head>
<body style="background-color: white !important">
<form id="frmNew" action="" method="POST">
    <div class="container-fluid" id="DivQuestion">
        <div class="row-fluid">
		
            <div class="col-xs-12 col-sm-12 col-lg-12" style="">
                <div class="pull-left">
				<br>
				<br>
                    <label style="font-size: 22px">
                        SPENDING TIME
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <label style="font-size: 32px">
                   What area of the city have you not had the opportunity to explore but would like to?<br/>Move the dot to place it over that area.
                </label>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="row-fluid" style="">
            <div class="col-xs-11 col-sm-11 col-lg-11" style="height:50%">
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
						<label style="font-weight: bold; font-size: 18px">Selection is compulsory !</label>
				</div>
			</div>
		</div>
		<div class="row-fluid" style="">
            <div class="col-xs-12 col-sm-12 col-lg-12">
			<br>
		<br>
				<div class="pull-left">
						<input type="button" class="btn button5" style="font-weight: bold; width: 130px; height: 50px; font-size: 25px" value="End" id="btnEnd" />
						
				</div>
			
				<div class="pull-right">
						<input type="submit" class="btn button5" style="font-weight: bold; width: 145px; height: 50px; font-size: 25px" value="Confirm" name="btnConfirm" id="btnConfirm" />
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
                    <label style="font-size: 22px">
                         SPENDING TIME
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <label style="font-size: 32px">
                   What area of the city have you not had the opportunity to explore but would like to?<br/>Move the dot to place it over that area.
                </label>
                <br>
                <br>
                <br>
            </div>
        </div>
		<div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <label style="font-size: 22px">
                    WHAT OTHERS SAID?
                </label>
                <br>
            </div>
        </div>
		<div class="row-fluid" style="">
            <div class="col-xs-11 col-sm-11 col-lg-11" style="height:50%" >
				<iframe src="q4Map.php" style="border:none;height:100%;width:100%"></iframe>
            </div>
			<div class="col-xs-1 col-sm-1 col-lg-1">
			</div>
        </div>
		<div class="row-fluid" style="">
            <div class="col-xs-12 col-sm-12 col-lg-12">
			<br>
		<br>
				<div class="pull-left">
						<input type="button" class="btn button5" style="font-weight: bold; width: 130px; height: 50px; font-size: 25px" value="End" id="btnResultEnd" />
						
				</div>
			
				<div class="pull-right">
						<input type="button" class="btn button5" style="font-weight: bold; width: 130px; height: 50px; font-size: 25px" value="Next" id="btnNext" />
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
center: [-79.384293,43.653908 ],
zoom: 10
});
 
var canvas = map.getCanvasContainer();
 
var geojson = {
'type': 'FeatureCollection',
'features': [
{
'type': 'Feature',
'geometry': {
'type': 'Point',
'coordinates': [-79.384293,43.653908]
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
			$sqlQuery="insert into q4(latitude,longitude) values('".$Latitude."','".$Longitude."');";
			//echo $sqlQuery;
			 if ($conn->query($sqlQuery) === TRUE) 
			 {
				 if ($result = mysqli_query($conn, "SELECT latitude,longitude FROM q4")) 
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
	
