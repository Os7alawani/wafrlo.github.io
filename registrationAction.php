<?php 

// Connecting to the database
$dbhost = "localhost";
$username = "root";
$password = "";
$dbname = "wafferlo";

$conn = mysqli_connect($dbhost , $username , $password ,$dbname);
if($conn->connect_error){
    die("Connection Failed");
}
echo "Connected Successfuly to Wafferlo Database <br>";

// Data Insertion 
$Email = $_POST['Email'];
$Password = $_POST['Password']; 
$FirstName  = $_POST['FirstName']; 
$LastName = $_POST['LastName'];

$sql = "insert into user (Email , Password , FirstName , LastName) values ('$Email' , '$Password' , '$FirstName' , '$LastName')";
$query = mysqli_query($conn , $sql);

if($query)
    echo "Data Inserted Successfily to User Table";
else
    echo "Insertion Failed";

?>



