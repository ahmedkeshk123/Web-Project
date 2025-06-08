<?php 
$servername = "localhost"; 
$username = 'root'; 
$password = ''; 
$database = 'minegold';  
// Create connection 
$conn = new mysqli($servername, $username, $password, $database);  
// Check connection 
if ($conn->connect_error) {   die("Connection failed: " . $conn->connect_error); 
}
if(isset($_POST['add'])){    
    $Name = $_POST['name']; 
    $location = $_POST['location']; 
    $Phones = $_POST['Phones']; 
    $type = $_POST['type'];     
    $query1="INSERT into workshop 
VALUES('$Name','$location','$Phones','$type')"; 
mysqli_query($conn,$query1); } 
?> 
