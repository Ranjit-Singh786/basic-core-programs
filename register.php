<?php
    //------insert.php------
     $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register";

    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Check connection
    if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error);
    } 
 $username = (isset( $_REQUEST['name'])) ? $_REQUEST['name'] : '';
 $email = (isset( $_REQUEST['email'])) ? $_REQUEST['email'] : '';
 $password = (isset( $_REQUEST['password'])) ? $_REQUEST['password'] : '';
 $cpassword = (isset( $_REQUEST['cpassword'])) ? $_REQUEST['cpassword'] : '';
 $gender = (isset( $_REQUEST['gender'])) ? $_REQUEST['gender'] : '';
 $city = (isset( $_REQUEST['city'])) ? $_REQUEST['city'] : '';



	$sql = "INSERT INTO `crud`( `name`, `email`, `password`, `gender`, `city`) VALUES ('$username','$email','$password','$gender','$city')";
	if (mysqli_query($conn, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
    

 ?>