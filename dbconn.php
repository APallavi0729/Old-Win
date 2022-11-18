<?php

$servername = "localhost";
 $username = "root";
 $password = "";
 $database = "education";       

 
 $conn = mysqli_connect($servername, $username, $password,  $database);

 if($conn)
 {
	 echo"connection success";
 }
else{
	echo"connection failed due to......".mysqli_error($conn);
}
?>
