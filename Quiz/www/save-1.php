<?php
require 'connector.php';
	
	//echo $_POST["btnConfirm"];
	if(isset($_POST["btnConfirm"])=="Confirm")
	{
		$Live= $_POST["Live"];
		$play= $_POST["Play"];
		$Work= $_POST["Work"];
	
		//echo $Live." " .$play." ".$Work;	
		$sqlQuery="insert into q1(LIVE,work,play) values('".$Live."','".$Work."','".$play."');";
		//echo $sqlQuery;
		if ($conn->query($sqlQuery) === TRUE) {
			//echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>