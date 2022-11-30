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
   
  <title>Drag/Drop/Bounce</title>
  <style>
    #container {
      width: 101%;
      height: 109%;
      background-image: url("./Images/map.svg");
	  background-repeat: no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      border-radius: 7px;
      touch-action: none;
	  background-position: center center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
   
   
    }
    #item {
      width: 30px;
      height: 30px;
      background-color: #ff66c4;
      
      border-radius: 50%;
      touch-action: none;
      user-select: none;
	  margin-left:0%;
    }
    #item:active {
      background-color: rgba(168, 218, 220, 1.00);
    }
    #item:hover {
      cursor: pointer;
      border-width: 20px;
    }
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


 <script>
        $(document).ready(function () {
			$("#btnEnd").click(function () {
				window.location='index.php';
			});
			$("#btnResultEnd").click(function () {
				window.location='index.php';
			});
			$("#btnNext").click(function () {
				window.location='ThankYou.php';
				
			});	
        });
    </script>
</head>
<body style="background-color: #26abe2">
<form id="frmNew" action="" method="POST">
    <div class="container-fluid" id="DivQuestion">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-12" style="">
                <div class="pull-left">
				<br>
				<br>
                    <label style="font-family: 'Open Sans', sans-serif; font-size: 25px; color: white; font-weight: 300;">
                        ENGAGE & VOICE
                    </label>
		    <br>
		    <br>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <label style="font-family: 'Open Sans', sans-serif; font-size: 40px; color: white; font-weight: 800;">
                   <mark style= "background-color: #00c2cb; color: white;">do you feel your voice within the community is being heard?</mark>
                </label>
		<br>
		<br>
		<label style="font-family: 'Open Sans', sans-serif; font-size: 40px; color: white; font-weight: 800;">
                   <mark style= "background-color: #ff66c4; color: white;">how engaged are you in the ward?</mark> 
                </label>
		<br>
		<br>
		<label style="font-family: 'Open Sans', sans-serif; font-size: 25px; color: white; font-weight: 300;">
                  Move the dot to place it over that area.
                </label>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="row-fluid" style="">
            <div class="col-xs-12 col-sm-12 col-lg-12" style="">
			<input type="hidden" id="hdnX" name="hdnX" />
			<input type="hidden" id="hdnY" name="hdnY" />
			<div id="outerContainer">
					<div id="container">
						<div id="item">
						</div>
					</div>
			</div>
            </div>
			
        </div>
		<div class="row-fluid" id="dvValidation" style="display:none">
            <div class="col-xs-12 col-sm-12 col-lg-12">
				<div class="pull-left">
						<label style="font-family: 'Open Sans', sans-serif; font-size: 18px; color: white; font-weight: 300;">All anwsers are mandatory!</label>
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
                        ENGAGE & VOICE
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                 <label style="font-family: 'Open Sans', sans-serif; font-size: 40px; color: white; font-weight: 800;">
                   <mark style= "background-color: #00c2cb; color: white;">do you feel your voice within the community is being heard?</mark>
                </label>
		<br>
		<br>
		<label style="font-family: 'Open Sans', sans-serif; font-size: 40px; color: white; font-weight: 800;">
                   <mark style= "background-color: #ff66c4; color: white;">how engaged are you in the ward?</mark> 
                </label>
                <br>
                <br>
            </div>
        </div>
		<div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <label style="font-family: 'Open Sans', sans-serif; font-size: 25px; color: white; font-weight: 300;">
                    Here's what others have said
                </label>
                <br>
		<br>
            </div>
        </div>
		<div class="row-fluid" style="">
            <div class="col-xs-12 col-sm-12 col-lg-12" style="" >
					<iframe src="q5Circle.php" style="border:none;height:100%;width:100%"></iframe>
			</div>
            </div>
			<div class="col-xs-1 col-sm-1 col-lg-1">
			</div>
        
		<div class="row-fluid" style="">
            <div class="col-xs-12 col-sm-12 col-lg-12">
			<br>
		<br>
				<div class="pull-left">
						<input type="button" class="btn button5" style="text-align:center; font-weight: bold; width: 140px; height: 50px; font-size: 20px; font-family: 'Open Sans', sans-serif;" value="END" id="btnResultEnd" />
						
				</div>
			
				<div class="pull-right">
						<input type="button" class="btn button5" style="text-align:center; font-weight: bold; width: 140px; height: 50px; font-size: 20px; font-family: 'Open Sans', sans-serif;" value="FINISH" id="btnNext" />
				</div>
			</div>
	    </div>
</div>
<br>

<script>
    var dragItem = document.querySelector("#item");
    var container = document.querySelector("#container");

    var active = false;
    var currentX;
    var currentY;
    var initialX;
    var initialY;
    var xOffset = 0;
    var yOffset = 0;

    container.addEventListener("touchstart", dragStart, false);
    container.addEventListener("touchend", dragEnd, false);
    container.addEventListener("touchmove", drag, true);

    container.addEventListener("mousedown", dragStart, false);
    container.addEventListener("mouseup", dragEnd, false);
    container.addEventListener("mousemove", drag, true);

    function dragStart(e) {
      if (e.type === "touchstart") {
        initialX = e.touches[0].clientX - xOffset;
        initialY = e.touches[0].clientY - yOffset;
      } else {
        initialX = e.clientX - xOffset;
        initialY = e.clientY - yOffset;
      }

      if (e.target === dragItem) {
        active = true;
      }
    }

    function dragEnd(e) {
      initialX = currentX;
      initialY = currentY;
	
	  $("#hdnX").val(e.clientX);
	  $("#hdnY").val(e.clientY);
	  
	 
		
      active = false;
    }

    function drag(e) {
      if (active) {
      
        e.preventDefault();
      
        if (e.type === "touchmove") {
          currentX = e.touches[0].clientX - initialX;
          currentY = e.touches[0].clientY - initialY;
        } else {
          currentX = e.clientX - initialX;
          currentY = e.clientY - initialY;
        }
	
        xOffset = currentX;
        yOffset = currentY;
		
        setTranslate(currentX, currentY, dragItem);
      }
    }

    function setTranslate(xPos, yPos, el) {
      el.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0)";
    }
  </script>
<?php
		if(isset($_POST["btnConfirm"])=="Confirm")
		{
	    $hdnX = $_POST["hdnX"];
		$hdnY = $_POST["hdnY"];
		if($hdnX  == '' || $hdnY == '')
		{
			echo "<script> $('#dvValidation').show();</script>";
		}
		else
		{
			$sqlQuery="insert into q5(X,Y) values('".$hdnX."','".$hdnY ."');";
			//echo $sqlQuery;
			 if ($conn->query($sqlQuery) === TRUE) 
			 {
				 // if ($result = mysqli_query($conn, "SELECT X,Y FROM q5")) 
				 // {
					
				 // }
				 echo "<script>$('#dvValidation').hide();$('#DivQuestion').hide();$('#DivResult').show();</script>";
			 }
			 else
			 {
				 echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		
		}
	?>
	
