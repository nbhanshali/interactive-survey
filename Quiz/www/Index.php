<html>
<head>
    <meta name="viewport" content="width=device-width" />
   <?php
  require 'header.php';
   ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="./Js/jquery.min.js"></script>
    <script src="./Js/bootstrap.min.js"></script>
	<script>
	
	 $(document).ready(function () {
		 $("#btnStart").click(function () {
			 window.location='q1.php';
		 });
	 });	
	</script>
	<style>
.button5 {
  background-color: orange;
  color: white;
  border-radius: 25px;
}
	</style>
</head>
<body style="background-color: #26abe2;">
    <div class="container-fluid">
        <div class="row-fluid">
		<div class="col-xs-2 col-sm-2 col-lg-2" style="">
		
		</div>
        <div class="col-xs-10 col-sm-10 col-lg-10" style="padding-top: 5%;">
                <div class="pull-left">
                    <label style="color: white; font-size: 51px; font-family: 'Open Sans', sans-serif; letter-spacing: 5px; font-weight: 300;">
                        GET TO KNOW YOUR COMMUNITY 
			<br \>
			BY ANSWERING
			<br \>
			5 QUICK QUESTIONS
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
		<div class="col-xs-2 col-sm-2 col-lg-2" style="">
		
		</div>
            <div class="col-xs-10 col-sm-10 col-lg-10">
                <br />
                <br />
                <br />
                <br />
		<br />
                <br />
                <br />
                <br />
            </div>
        </div>
        <div class="row-fluid" style="">
		<div class="col-xs-2 col-sm-2 col-lg-2">
		</div>
        <div class="col-xs-6 col-sm-6 col-lg-6">
		<label style="color: white; font-size: 15px; font-family: 'Open Sans', sans-serif; font-weight: 300;">
               Any information recorded as part of this survey is completely anonymous. We do not collect identifying information such as your name, email address or IP address.
                </label>
        </div>
        <div class="col-xs-4 col-sm-4 col-lg-4">
                <div class="col text-center">
                    <input type="button" value="START" style="text-align:center; font-weight: bold; width: 140px; height: 50px; font-size: 20px; font-family: 'Open Sans', sans-serif;" id="btnStart" class="btn button5"/>
                </div>
        </div>
        </div>
    </div>

</body>
</html>

