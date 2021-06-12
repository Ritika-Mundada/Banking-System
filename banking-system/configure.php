<?php
        $Server_Name="localhost";
        $User_Name="root";
        $Pwd="";
        $DB_Name="db_bank";
	$conn = mysqli_connect($Server_Name, $User_Name,$Pwd,$DB_Name);


	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>
