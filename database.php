
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Customer_Details';
$conn = new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)

	{
		echo "connected failed";
	}

	
echo "connect sucessfully";
	

?>
