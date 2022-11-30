<?php
require 'connector.php';
$myRangeVideo_CountTest = 0;
$myRangeTelephone_CountTest = 0;
$myRangeEmail_CountTest = 0;
$myRangeSocial_CountTest = 0;
$myRangeSocialMail_CountTest = 0;
			if ($result = mysqli_query($conn, "SELECT avg(VC) as VC  FROM q3")) 
			{
							$myRangeVideo_Count_Temp=mysqli_fetch_assoc($result);
							//echo "<br/>".$Live_count['Livecount'];
							$myRangeVideo_CountTest=$myRangeVideo_Count_Temp['VC'];

			}

			if ($result = mysqli_query($conn, "SELECT avg(Tele) as Tele  FROM q3")) {
							$myRangeTelephone_Count_Temp=mysqli_fetch_assoc($result);
							//echo "<br/>".$Work_count['Playcount'];
							$myRangeTelephone_CountTest=$myRangeTelephone_Count_Temp['Tele'];
			
			}
			
			
			if ($result = mysqli_query($conn, "SELECT avg(Email) as Email  FROM q3")) {
				$myRangeEmail_Count_Temp=mysqli_fetch_assoc($result);
				//echo "<br/>".$Play_count['Workcount'];
				$myRangeEmail_CountTest=$myRangeEmail_Count_Temp['Email'];

			}
			
			if ($result = mysqli_query($conn, "SELECT avg(IM) as IM  FROM q3")) {
				$myRangeSocial_Count_Temp=mysqli_fetch_assoc($result);
				//echo "<br/>".$Play_count['Workcount'];
				$myRangeSocial_CountTest=$myRangeSocial_Count_Temp['IM'];

			}
			
			if ($result = mysqli_query($conn, "SELECT avg(Mail) as Mail  FROM q3")) {
				$myRangeSocialMail_Count_Temp=mysqli_fetch_assoc($result);
				//echo "<br/>".$Play_count['Workcount'];
				$myRangeSocialMail_CountTest=$myRangeSocialMail_Count_Temp['Mail'];

			}
?>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="./Css/bootstrap.min.css">
      <link rel="stylesheet" href="./customCss/2.913d2f6e.chunk.css">
    <link rel="stylesheet" href="./customCss/main.a08b3a1b.chunk.css">
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-9127811-7"></script>
    <script src="./js/analytics.js"></script>
    <link rel="stylesheet" href="./Css/bootstrap.min.css">
	<link rel="stylesheet" href="./Css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./Js/jquery.min.js"></script>
    <script src="./Js/bootstrap.min.js"></script>
   <style>
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
   
   
.slidecontainer {
  width: 100%;
}

.slider, .slider1 {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  border-radius: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}
.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 30px;
  height: 30px;
//border-radius: 50%;
  // background: #F7941D;
  cursor: pointer;
	background-image: url("./Images/a222.png");
 
}

.slider::-moz-range-thumb {
  width: 30px;
  height: 30px;
  //border-radius: 50%;
  //background: #92cff3;
  background-image: url("./Images/a222.png");
  cursor: pointer;
  
}

.slider1:hover {
  opacity: 1;
}
.slider1::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 30px;
  height: 30px;
border-radius: 50%;
   background: #F7941D;
  cursor: pointer;
	//background-image: url("./Images/a222.png");
 
}

.slider1::-moz-range-thumb {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: #92cff3;
  //background-image: url("./Images/a222.png");
  cursor: pointer;
  
}


.line-item-question {
     height:76px;
    font-size: 40px;
    font-family: COM;
}
.col-xs-6 {
    width: 100% !important;
}

 


body {
  margin: 2rem;
}
</style>

    <script>
        $(document).ready(function () {
            $(".btn-group > .a1").click(function () {
                $(".btn-group > .a1").removeClass("active");
                $(this).addClass("active");
				$("#hdnLive").val($(".a1.active").text());
				if($("#hdnPlay").val() == "" || $("#hdnLive").val() == "" || $("#hdnWork").val() == "")
				{
					$("#dvValidation").show();
				}
				else
				{
					$("#dvValidation").hide();
				}
            });
			$(".btn-group > .a2").click(function () {
                $(".btn-group > .a2").removeClass("active");
                $(this).addClass("active");
				$("#hdnWork").val($(".a2.active").text());
				if($("#hdnPlay").val() == "" || $("#hdnLive").val() == "" || $("#hdnWork").val() == "")
				{
					$("#dvValidation").show();
				}
				else
				{
					$("#dvValidation").hide();
				}
            });
			$(".btn-group > .a3").click(function () {
                $(".btn-group > .a3").removeClass("active");
                $(this).addClass("active");
				$("#hdnPlay").val($(".a3.active").text());
				if($("#hdnPlay").val() == "" || $("#hdnLive").val() == "" || $("#hdnWork").val() == "")
				{
					$("#dvValidation").show();
				}
				else
				{
					$("#dvValidation").hide();
				}
            });
			
			$("#btnConfirm").click(function () {
				if($("#hdnPlay").val() == "" || $("#hdnLive").val() == "" || $("#hdnWork").val() == "")
				{
					$("#dvValidation").show();
				}
				else
				{
					$("#dvValidation").hide();
					$("#DivQuestion").hide();
					$("#DivResult").show();
					
				}
            });
			 $("#btnEnd").click(function () {
				window.location='index.php';
			});
			$("#btnResultEnd").click(function () {
				window.location='index.php';
			});
			$("#btnNext").click(function () {
				window.location='q4.php';
				
			});	
		});
    </script>
	<script>
	
	</script>
</head>
<body style="background-color: white !important">
<form id="frmNew" action="" method="POST">
    <div class="container-fluid" id="DivQuestion">
        <div class="row-fluid">
		 <div class="col-xs-3 col-sm-3 col-lg-3" style="">
		 </div>
            <div class="col-xs-9 col-sm-9 col-lg-9" style="">
                <div class="pull-left">
				<br>
				<br>
                    <label style="font-size: 22px">
                        ENGAGEMENT
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
             <div class="col-xs-3 col-sm-3 col-lg-3" style="">
		 </div>
            <div class="col-xs-9 col-sm-9 col-lg-9" style="">
                <label style="font-size: 32px">
                    What engagement method do you value the most during COVID?
                </label>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="row-fluid" style="">
		<div class="col-xs-3 col-sm-3 col-lg-3">
		</div>
            <div class="col-xs-6 col-sm-6 col-lg-6" style="background-color:white">
			
                <div class="line-item-question row">
				<table class="table">
				<tr>
					<td>
						<div class="left-col-labels col-12 col-sm-12" style="text-align: center; padding-right: 32px;">
							<div class="pull-left" style="font-weight:bold;color:black;font-size:18px">Video Conferencing</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
					<div class="right-col-button col-1 col-sm-1" style="width:100%">
						<i class="fa fa-minus" style="font-size:24px;color: orange;"></i>
					</div>
				    <div class="right-col-button col-10 col-sm-10" style="width:100%">
							<div class="slidecontainer">
						         <input type="range" min="1" max="100" value="50" class="slider1" id="myRangeVideo">
								<input type="hidden" id="hdnVideo" name="hdnVideo"/>
							</div>
						</div>
				    <div class="right-col-button col-1 col-sm-1" style="width:100%">
						<i class="fa fa-plus" style="font-size:24px;color: orange;"></i>
					</div>
					</td>
				</tr>
				</table>
                </div>
                <div class="line-item-question row">
				<table class="table">
				<tr>
					<td>
						<div class="left-col-labels col-12 col-sm-12" style="padding-right: 32px;">
							<div  class="pull-left" style="font-weight:bold;color:black;font-size:18px">Telephone</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
                    <div class="right-col-button col-1 col-sm-1" style="width:100%">
						<i class="fa fa-minus" style="font-size:24px;color: orange;"></i>
					</div>
				    <div class="right-col-button col-10 col-sm-10" style="width:100%">
							<div class="slidecontainer">
							<input type="range" min="1" max="100" value="50" class="slider1" id="myRangeTelephone">
							<input type="hidden" id="hdnTelephone" name="hdnTelephone" />
						</div>
						</div>
				    <div class="right-col-button col-1 col-sm-1" style="width:100%">
						<i class="fa fa-plus" style="font-size:24px;color: orange;"></i>
					</div>
					</td>
				</tr>
				</table>
                </div>
                <div class="line-item-question row">
				<table class="table">
				<tr>
					<td>
                    <div class="left-col-labels col-12 col-sm-12" style=" padding-right: 32px;">
                        <div class="pull-left" style="font-weight:bold;color:black">Email </div>
                    </div>
					</td>
				</tr>
				<tr>
				<td>
                     <div class="right-col-button col-1 col-sm-1" style="width:100%">
						<i class="fa fa-minus" style="font-size:24px;color: orange;"></i>
					</div>
				    <div class="right-col-button col-10 col-sm-10" style="width:100%">
							<div class="slidecontainer">
							<input type="range" min="1" max="100" value="50" class="slider1" id="myRangeEmail">
							<input type="hidden" id="hdnEmail" name="hdnEmail" />
							
						</div>
						</div>
				    <div class="right-col-button col-1 col-sm-1" style="width:100%">
						<i class="fa fa-plus" style="font-size:24px;color: orange;"></i>
					</div>
					</td>
				</tr>
				</table>
                </div>
				<div class="line-item-question row">
				<table class="table">
				<tr>
					<td>
                    <div class="left-col-labels col-12 col-sm-12" style="text-align: center; padding-right: 32px;">
                        <div class="pull-left" style="font-weight:bold;color:black;font-size: 13px;">Instant Messaging (social media, or texting)</div>
                    </div>
					</td>
				</tr>
				<tr>
				<td>
                    <div class="right-col-button col-1 col-sm-1" style="width:100%">
						<i class="fa fa-minus" style="font-size:24px;color: orange;"></i>
					</div>
				    <div class="right-col-button col-10 col-sm-10" style="width:100%">
							<div class="slidecontainer">
							<input type="range" min="1" max="100" value="50" class="slider1" id="myRangeSocial">
							<input type="hidden" id="hdnSocial" name="hdnSocial" />
						</div>
						</div>
				    <div class="right-col-button col-1 col-sm-1" style="width:100%">
						<i class="fa fa-plus" style="font-size:24px;color: orange;"></i>
					</div>
					</td>
				</tr>
				</table>
                </div>
				<div class="line-item-question row">
				<table class="table">
				<tr>
					<td>
                    <div class="left-col-labels col-12 col-sm-12" style="padding-right: 32px;">
                        <div class="pull-left" style="font-weight:bold;color:black">Mail</div>
                    </div>
					</td>
				</tr>
				<tr>
				<td>
                     <div class="right-col-button col-1 col-sm-1" style="width:100%">
						<i class="fa fa-minus" style="font-size:24px;color: orange;"></i>
					</div>
				    <div class="right-col-button col-10 col-sm-10" style="width:100%">
							<div class="slidecontainer">
							<input type="range" min="1" max="100" value="50" class="slider1" id="myRangeSocialMail">
							<input type="hidden" id="hdnSocialMail" name="hdnSocialMail" />
						</div>
						</div>
				    <div class="right-col-button col-1 col-sm-1" style="width:100%">
						<i class="fa fa-plus" style="font-size:24px;color: orange;"></i>
					</div>
					</td>
				</tr>
				</table>
                </div>
            </div>
			<div class="col-xs-3 col-sm-3 col-lg-3">
			</div>
        </div>
		<div class="row-fluid" id="dvValidation" style="display:none">
            <div class="col-xs-12 col-sm-12 col-lg-12">
				<div class="pull-left">
						<label style="font-weight: bold; font-size: 18px">All Anwsers are mendetory !!</label>
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
		<div class="col-xs-3 col-sm-3 col-lg-3" style="">
		</div>
            <div class="col-xs-9 col-sm-9 col-lg-9" style="">
                <div class="pull-left">
				<br>
				<br>
                    <label style="font-size: 22px">
                         ENGAGEMENT
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-xs-3 col-sm-3 col-lg-3" style="">
		</div>
            <div class="col-xs-9 col-sm-9 col-lg-9" style="">
                <label style="font-size: 32px">
                    What engagement method do you value the most during COVID?
                </label>
                <br>
                <br>
            </div>
        </div>
		<div class="row-fluid">
           <div class="col-xs-3 col-sm-3 col-lg-3" style="">
		</div>
            <div class="col-xs-9 col-sm-9 col-lg-9" style="">
                <label style="font-size: 22px">
                    WHAT OTHERS SAID?
                </label>
                <br>
            </div>
        </div>
		<div class="row-fluid" style="">
		  <div class="col-xs-3 col-sm-3 col-lg-3" style="">
		</div>
            <div class="col-xs-6 col-sm-6 col-lg-6" style="background-color:white">
                <div class="line-item-question row">
				<table class="table">
				<tr>
					<td>
						<div class="left-col-labels col-12 col-sm-12" style="text-align: center; padding-right: 32px;">
							<div class="pull-left" style="font-weight:bold;color:black;font-size:18px">Video Conferencing</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="right-col-button col-12 col-sm-12" style="width:100%">
							<div class="slidecontainer">
						       <!-- <p style='text-align:center; margin:0; display: inline-block; margin-left: calc(<?= $myRangeVideo_CountTest ?>% - 28px)'>You</p>-->
								<input type="range" min="1" max="100" value="50" class="slider" id="myRangeVideo_Result" name="myRangeVideo_Result" disabled>
								<p style='text-align:center; margin:0; display: inline-block; margin-left: calc(<?= $myRangeVideo_CountTest ?>% - 25px)'>|<br>Average</p>
							</div>
						</div>
					</td>
				</tr>
				</table>
                </div>
                <div class="line-item-question row">
				<table class="table">
				<tr>
					<td>
						<div class="left-col-labels col-12 col-sm-12" style="padding-right: 32px;">
							<div  class="pull-left" style="font-weight:bold;color:black;font-size:18px">Telephone</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
                    <div class="right-col-button col-12 col-sm-12" style="max-width:100%">
                        <div class="slidecontainer">
						<!-- <p style='text-align:center; margin:0; display: inline-block; margin-left: calc(<?= $myRangeVideo_CountTest ?>% - 28px)'>You</p>-->
							<input type="range" min="1" max="100" value="50" class="slider" id="myRangeTelephone_Result" disabled> 
							<p style='text-align:center; margin:0; display: inline-block; margin-left: calc(<?= $myRangeTelephone_CountTest ?>% - 25px)'>|<br>Average</p>
						</div>
                    </div>
					</td>
				</tr>
				</table>
                </div>
                <div class="line-item-question row">
				<table class="table">
				<tr>
					<td>
                    <div class="left-col-labels col-12 col-sm-12" style=" padding-right: 32px;">
                        <div class="pull-left" style="font-weight:bold;color:black">Email </div>
                    </div>
					</td>
				</tr>
				<tr>
				<td>
                    <div class="right-col-button col-12 col-sm-12" style="">
                        <div class="slidecontainer">
						<!-- <p style='text-align:center; margin:0; display: inline-block; margin-left: calc(<?= $myRangeVideo_CountTest ?>% - 28px)'>You</p>-->
							<input type="range" min="1" max="100" value="50" class="slider" id="myRangeEmail_Result" disabled>
							<p style='text-align:center; margin:0; display: inline-block; margin-left: calc(<?= $myRangeEmail_CountTest ?>% - 25px)'>|<br>Average</p>
							


							
						</div>
                    </div>
					</td>
				</tr>
				</table>
                </div>
				<div class="line-item-question row">
				<table class="table">
				<tr>
					<td>
                    <div class="left-col-labels col-12 col-sm-12" style="text-align: center; padding-right: 32px;">
                        <div class="pull-left" style="font-weight:bold;color:black;font-size: 13px;">Instant Messaging (social media, or texting)</div>
                    </div>
					</td>
				</tr>
				<tr>
				<td>
                    <div class="right-col-button col-12 col-sm-12" style="">
                        <div class="slidecontainer">
						<!-- <p style='text-align:center; margin:0; display: inline-block; margin-left: calc(<?= $myRangeVideo_CountTest ?>% - 28px)'>You</p>-->
							<input type="range" min="1" max="100" value="50" class="slider" id="myRangeSocial_Result" disabled>
							<p style='text-align:center; margin:0; display: inline-block; margin-left: calc(<?= $myRangeSocial_CountTest ?>% - 25px)'>|<br>Average</p>


						</div>
                    </div>
					</td>
				</tr>
				</table>
                </div>
				<div class="line-item-question row">
				<table class="table">
				<tr>
					<td>
                    <div class="left-col-labels col-12 col-sm-12" style="padding-right: 32px;">
                        <div class="pull-left" style="font-weight:bold;color:black">Mail</div>
                    </div>
					</td>
				</tr>
				<tr>
				<td>
                    <div class="right-col-button col-12 col-sm-12" style="">
                        <div class="slidecontainer">
						<!-- <p style='text-align:center; margin:0; display: inline-block; margin-left: calc(<?= $myRangeVideo_CountTest ?>% - 28px)'>You</p>-->
							<input  type="range" min="1" max="100" value="50" class="slider" id="myRangeSocialMail_Result" disabled>
							<p style='text-align:center; margin:0; display: inline-block; margin-left: calc(<?= $myRangeSocialMail_CountTest ?>% - 25px)'>|<br>Average</p>
						</div>
                    </div>
					</td>
				</tr>
				</table>
                </div>
            </div>
			<div class="col-xs-3 col-sm-3 col-lg-3">
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
var myRangeVideo = document.getElementById("myRangeVideo");
var myRangeTelephone = document.getElementById("myRangeTelephone");
var myRangeEmail = document.getElementById("myRangeEmail");
var myRangeSocial = document.getElementById("myRangeSocial");
var myRangeSocialMail = document.getElementById("myRangeSocialMail");

var hdnVideo = document.getElementById("hdnVideo");
var hdnTelephone = document.getElementById("hdnTelephone");
var hdnEmail = document.getElementById("hdnEmail");
var hdnSocial = document.getElementById("hdnSocial");
var hdnSocialMail = document.getElementById("hdnSocialMail");


hdnVideo.value = myRangeVideo.value;
hdnTelephone.value = myRangeTelephone.value;
hdnEmail.value = myRangeEmail.value;
hdnSocial.value = myRangeSocial.value;
hdnSocialMail.value = myRangeSocialMail.value;


myRangeVideo.oninput = function() {
  hdnVideo.value = this.value;
}
myRangeTelephone.oninput = function() {
  hdnTelephone.value = this.value;
}
myRangeEmail.oninput = function() {
  hdnEmail.value = this.value;
}
myRangeSocial.oninput = function() {
  hdnSocial.value = this.value;
}
myRangeSocialMail.oninput = function() {
  hdnSocialMail.value = this.value;
}

</script>

	<?php
	
	$myRangeVideo_Count=0;
	$myRangeTelephone_Count=0;
	$myRangeEmail_Count=0;
	$myRangeSocial_Count=0;
	$myRangeSocialMail_Count=0;
	$totalCount=0;
	
	//echo $_POST["btnConfirm"];
	if(isset($_POST["btnConfirm"])=="Confirm")
	{
		$hdnVideo= $_POST["hdnVideo"];
		$hdnTelephone= $_POST["hdnTelephone"];
		$hdnEmail= $_POST["hdnEmail"];
		$hdnSocial= $_POST["hdnSocial"];
		$hdnSocialMail= $_POST["hdnSocialMail"];
	
		//echo $Live." " .$play." ".$Work;	
		
		
		if($hdnVideo == '' || $hdnTelephone == '' || $hdnEmail == '' || $hdnSocial == '' || $hdnSocialMail == '')
		{
			echo "<script> 
					$('#dvValidation').show();
					</script>";
		}
		else{
			$sqlQuery="insert into q3(VC,Tele,Email,IM,Mail	) values('".$hdnVideo."','".$hdnTelephone."','".$hdnEmail."','".$hdnSocial."','".$hdnSocialMail."');";
			//echo $sqlQuery;
			if ($conn->query($sqlQuery) === TRUE) {
			
			
			if ($result = mysqli_query($conn, "SELECT avg(VC) as VC  FROM q3")) {
				$myRangeVideo_Count_Temp=mysqli_fetch_assoc($result);
				//echo "<br/>".$Live_count['Livecount'];
				$myRangeVideo_Count=$myRangeVideo_Count_Temp['VC'];

			}
			
			if ($result = mysqli_query($conn, "SELECT avg(Tele) as Tele  FROM q3")) {
				$myRangeTelephone_Count_Temp=mysqli_fetch_assoc($result);
				//echo "<br/>".$Work_count['Playcount'];
				$myRangeTelephone_Count=$myRangeTelephone_Count_Temp['Tele'];

			}
			
			
			if ($result = mysqli_query($conn, "SELECT avg(Email) as Email  FROM q3")) {
				$myRangeEmail_Count_Temp=mysqli_fetch_assoc($result);
				//echo "<br/>".$Play_count['Workcount'];
				$myRangeEmail_Count=$myRangeEmail_Count_Temp['Email'];

			}
			
			if ($result = mysqli_query($conn, "SELECT avg(IM) as IM  FROM q3")) {
				$myRangeSocial_Count_Temp=mysqli_fetch_assoc($result);
				//echo "<br/>".$Play_count['Workcount'];
				$myRangeSocial_Count=$myRangeSocial_Count_Temp['IM'];

			}
			
			if ($result = mysqli_query($conn, "SELECT avg(Mail) as Mail  FROM q3")) {
				$myRangeSocialMail_Count_Temp=mysqli_fetch_assoc($result);
				//echo "<br/>".$Play_count['Workcount'];
				$myRangeSocialMail_Count=$myRangeSocialMail_Count_Temp['Mail'];

			}
			
			
			echo "<script> 
			        $('#dvValidation').hide();
					$('#DivQuestion').hide();
					$('#DivResult').show();
					$('#myRangeVideo_Result')[0].value = ".$hdnVideo.";
					$('#myRangeTelephone_Result')[0].value = ".$hdnTelephone.";
					$('#myRangeEmail_Result')[0].value = ".$hdnEmail.";
					$('#myRangeSocial_Result')[0].value = ".$hdnSocial.";
					$('#myRangeSocialMail_Result')[0].value = ".$hdnSocialMail.";
				</script>";
	      //echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}
		
		$conn->close();
	}
?>
