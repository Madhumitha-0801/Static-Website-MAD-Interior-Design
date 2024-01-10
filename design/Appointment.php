<?php 
  //creating connection to database
include "dbCon.php"; // Using database connection file here
if(isset($_POST['Appointment']))
{	
	$Name = $_POST['Name'];
	$Mobile = $_POST['Mobile'];
	$Email = $_POST['Email'];
	$City = $_POST['City'];
	$Requirement = $_POST['Requirement'];
	
    //$fullname = $_POST['fullname'];
    //$age = $_POST['age'];
	$sql=mysqli_query($db,"INSERT INTO 'tb1' (Name, Mobile, Email, City, Requirement) VALUES ('".$Name."','".$Mobile."', '".$Email."', '".$City."', '".$Requirement."')");

    //$insert = mysqli_query($db,"INSERT INTO `tblemp`(`fullname`, `age`) VALUES ('$fullname','$age')");

    if(!$sql)
    {
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

//mysqli_close($db); // Close connection
?>