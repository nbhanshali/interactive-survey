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
   <style> 
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
			$("#btnConfirm").hide();
            $(".btn-group > .a1").click(function () {
                $(".btn-group > .a1").removeClass("active");
                $(this).addClass("active");
				$("#hdnLive").val($(".a1.active").text());
				if($("#hdnPlay").val() == "" || $("#hdnLive").val() == "" || $("#hdnWork").val() == "")
				{
					//$("#dvValidation").show();
					$("#btnConfirm").hide();
				}
				else
				{
					$("#btnConfirm").show();
					$("#dvValidation").hide();
				}
            });
			$(".btn-group > .a2").click(function () {
                $(".btn-group > .a2").removeClass("active");
                $(this).addClass("active");
				$("#hdnWork").val($(".a2.active").text());
				if($("#hdnPlay").val() == "" || $("#hdnLive").val() == "" || $("#hdnWork").val() == "")
				{
					//$("#dvValidation").show();
					$("#btnConfirm").hide();
				}
				else
				{
					$("#btnConfirm").show();
					$("#dvValidation").hide();
				}
            });
			$(".btn-group > .a3").click(function () {
                $(".btn-group > .a3").removeClass("active");
                $(this).addClass("active");
				$("#hdnPlay").val($(".a3.active").text());
				if($("#hdnPlay").val() == "" || $("#hdnLive").val() == "" || $("#hdnWork").val() == "")
				{
					//$("#dvValidation").show();
					$("#btnConfirm").hide();
					
				}
				else
				{
					$("#btnConfirm").show();
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
				window.location='q5.php';
				
			});	
        });

    </script>
</head>
<body style="background-color: #26abe2;">
<form id="frmNew" action="" method="POST">
    <div class="container-fluid" id="DivQuestion">
        <div class="row-fluid">
		    <div class="col-xs-3 col-sm-3 col-lg-3" style="">
		   </div>
            <div class="col-xs-9 col-sm-9 col-lg-9" style="">
                <div class="pull-left">
				<br>
				<br>
                    <label style="font-family: 'Open Sans', sans-serif; font-size: 25px; color: white; font-weight: 300;">
                        CONSULTATION
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
		<div class="col-xs-3 col-sm-3 col-lg-3">
		</div>
            <div class="col-xs-9 col-sm-9 col-lg-9">
                <label style="font-family: 'Open Sans', sans-serif; font-size: 50px; color: white; font-weight: 800;">
have you attended a community 
<br>
consultation this year?
                </label> 
		<label style="font-family: 'Open Sans', sans-serif; font-size: 25px; color: white; font-weight: 300;">
                    (for example a public consultation for a development,
		<br>
heritage district, area planning study, avenue study, 
		<br>
secondary plan, policy or initiative, etc)
                </label>
            </div>
        </div>
        <div class="row-fluid" style="">
            <div class="col-xs-6 col-sm-6 col-lg-6" style="background-color: #26abe2;">
                <div class="line-item-question row" style="margin-top:100px; margin-left: 400px;">
                    <div class="left-col-labels col-12 col-sm-6" style="text-align: center; padding-right: 32px;">
                        <div style="font-family: 'Open Sans', sans-serif; color: white; font-weight: 300;"></div>
                    </div>
                    <div class="right-col-button col-12 col-sm-6" style="">
                        <div role="group" class="btn-group" align="center">
                            <button type="button" class="a1 yesno btn btn-secondary" style="font-family: 'Open Sans', sans-serif; color: white; font-weight: 300;">YES</button>
                            <button type="button" class="a1 yesno btn btn-secondary" style="font-family: 'Open Sans', sans-serif; color: white; font-weight: 300;">NO</button>
							<input type="hidden" id="hdnLive"  value="" name="Live" />
                        </div>
                    </div>
                </div>
                <div class="line-item-question row">
                    <div class="left-col-labels col-12 col-sm-6" style="text-align: center; padding-right: 32px;">
                        <div style="font-family: 'Open Sans', sans-serif; color: white; font-weight: 300;"></div>
                    </div>
                    <div class="right-col-button col-12 col-sm-6">
                        <div role="group" class="btn-group">
                        </div>
                    </div>
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
		   <div class="col-xs-3 col-sm-3 col-lg-3" style="">
		   </div>
            <div class="col-xs-9 col-sm-9 col-lg-9" style="">
                <div class="pull-left">
				<br>
				<br>
                    <label style="font-family: 'Open Sans', sans-serif; font-size: 25px; color: white; font-weight: 300;">
                        CONSULTATION
                    </label>
                </div>
            </div>
        </div>
        <div class="row-fluid">
		<div class="col-xs-3 col-sm-3 col-lg-3">
		</div>
            <div class="col-xs-9 col-sm-9 col-lg-9">
               <label style="font-family: 'Open Sans', sans-serif; font-size: 50px; color: white; font-weight: 800;">
have you attended a community 
<br>
consultation this year?
                </label> 
		<label style="font-family: 'Open Sans', sans-serif; font-size: 25px; color: white; font-weight: 300;">
                    (for example a public consultation for a development,
		<br>
heritage district, area planning study, avenue study, 
		<br>
secondary plan, policy or initiative, etc)
                </label>
            </div>
        </div>
		<div class="row-fluid">
		<div class="col-xs-3 col-sm-3 col-lg-3">
		</div>
            <div class="col-xs-9 col-sm-9 col-lg-9">
                <label style="font-family: 'Open Sans', sans-serif; font-size: 25px; color: white; font-weight: 300;">
                    Here's what others have said
                </label>
                <br>
<br>
<br>
<br>
<br>
<br>
            </div>
        </div>
		<div class="row-fluid" style="">
		<div class="col-xs-3 col-sm-3 col-lg-3">
		</div>
            <div class="col-xs-6 col-sm-6 col-lg-6" style="background-color: #26abe2;">
                <div class="line-item-question row" style="margin-top:15px">
                    <div class="right-col-button col-12 col-sm-3" >
                        <div style="font-family: 'Open Sans', sans-serif; color: white; font-weight: 300;"></div>
                    </div>
                    <div class="right-col-button col-12 col-sm-5" style="">
                        <div class="progress" style="height: 50px;">
									<div id="prgLive" class="progress-bar" aria-valuetext="50%" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
                    </div>
                </div>
               <br>
<br>
<br>
<br>
<br>
<br>
<div class="col-xs-3 col-sm-3 col-lg-3">
			</div>
        </div>


		<div class="row-fluid" style="">
            <div class="col-xs-12 col-sm-12 col-lg-12">
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
	
	<?php
	
	$L_Count=0;
	$totalCount=0;
	
	//echo $_POST["btnConfirm"];
	if(isset($_POST["btnConfirm"])=="Confirm")
	{
		$Live= substr($_POST["Live"],0,1);
	
		//echo $Live." " .$play." ".$Work;	
		$sqlQuery="insert into q3(LIVE) values('".$Live."');";
		//echo $sqlQuery;
		if($Live == '')
		{
			echo "<script> 
					$('#dvValidation').show();
					</script>";
		}
		else{
			
			if ($conn->query($sqlQuery) === TRUE) {
			
			
			if ($result = mysqli_query($conn, "SELECT count(*) as Livecount  FROM q3 where LIVE='Y'")) {
				$Live_count=mysqli_fetch_assoc($result);
				//echo "<br/>".$Live_count['Livecount'];
				$L_Count=$Live_count['Livecount'];

			}
			
			
			if ($result = mysqli_query($conn, "SELECT count(*) as TotalCount  FROM q3")) {
				$Total_count=mysqli_fetch_assoc($result);
				//echo "<br/>".$Total_count['TotalCount'];
				$totalCount=$Total_count['TotalCount'];

			}

			$LivePer=round(($L_Count*100)/$totalCount,0);
			
			// $Live_Count="SELECT count(*) as Livecount  FROM q3 where LIVE='Y'";
			
			// $resut_L=$conn->query($Live_Count);
			// while($row=f
			
			//echo $LivePer . "<br/> "
			
			echo "<script> 
			        $('#dvValidation').hide();
					$('#DivQuestion').hide();
					$('#DivResult').show();
					$('#prgLive').attr('aria-valuenow', ".($LivePer*3).").css('width',". ($LivePer*3).");
					
					$('#prgLive').html('YES<br/>".$LivePer."%');
				
			</script>";
	      //echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}
		
		$conn->close();
	}
?>
