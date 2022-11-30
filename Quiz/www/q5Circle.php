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
    #container {
      width: 100%;
      height: 109%;
      
	  background-repeat: no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: scroll;
      border-radius: 7px;
      touch-action: none;
    }
    #item {
      width: 100px;
      height: 100px;
      background-color: rgb(245, 230, 99);
      border: 10px solid rgba(136, 136, 136, .5);
      border-radius: 50%;
      touch-action: none;
      user-select: none;
	  margin-left:-7%;
    }
    #item:active {
      background-color: rgba(168, 218, 220, 1.00);
    }
    #item:hover {
      cursor: pointer;
      border-width: 20px;
    }
	
  </style>

</head>
<body style="background-color: #26abe2">
<div class="container-fluid" id="DivResult" style="">
		  <div class="row-fluid" style="">
            <div class="col-xs-12 col-sm-12 col-lg-12" style="background-image: url(Images/map.svg);background-size: 100% 100%;">
		<?php

  

if ($result = mysqli_query($conn, "SELECT seqno,X,Y FROM q5")) 
{
	
	$result1 = mysqli_query($conn, "SELECT max(seqno) as 'seqno' FROM q5");
   $rowcont = mysqli_fetch_assoc($result1);
    
$x = 0;
echo '<svg width="100%" height="100%">';


 while ($row = mysqli_fetch_assoc($result))
	 {
		 if($rowcont["seqno"] == $row["seqno"])
		{
		  echo '<circle cx='.$row["X"].' cy='.$row["Y"].' r="10" fill="#ff66c4" stroke="#ff66c4"></circle>';
		}
		  else
			{
				echo '<circle cx='.$row["X"].' cy='.$row["Y"].' r="5" fill="black" stroke="black"></circle>';
			 }
		 //echo '<svg height="140" width="500"><circle cx='.$row["X"].' cy='.$row["Y"].' rx="10" ry="10" style="fill:yellow;stroke:purple;stroke-width:2" />Sorry, your browser does not support inline SVG.</svg>';
		//echo "<svg height='140' width='500'><ellipse cx="200" cy="80" rx="10" ry="10" style="fill:yellow;stroke:purple;stroke-width:2" />Sorry, your browser does not support inline SVG.</svg>";
		//echo $row["X"];
		//echo $row["Y"];
		$x++;
	 }
	echo '</svg>';
}
?>
            </div>
			
        </div>
    </div>
</body>
</html>



<!-- for map result-->



	
