<?php

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "kick start";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error){
		echo "Failed to connect: " . $conn->connect_error;
	}

    else{
        $fname = $_GET["fname"];
        $lname = $_GET["lname"];
        $email = $_GET["mail"];
        $phno = $_GET["phno"];
        $dob = $_GET["dob"];
        $gender = $_GET["gender"];
        $city= $_GET["city"];
        $state=$_GET["state"];
        $edu = $_GET["edu"];
        $spec = $_GET["specialization"];
        $interest =$_GET["interest"];

        $sql="INSERT INTO user_details (fname,Lname,dob,phno,email,city,state,education,specialization,interest,u_id) 
                VALUES ('$fname','$lname','$dob','$phno','$email','$city','$state','$edu','$spec','$interest',1)";
		if($conn->query($sql))
    {
        header('Location: '.trim(strtolower($interest)).'.html');
    }
    else
    {
      echo "Unable to insert table record..!";
    }

    }
?>