<?php 
$servername = "projedbinstance.cktjpclzgyei.us-east-1.rds.amazonaws.com";
$username = "projemaster";
$password = "master1234";
$dbname = "proje";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql 	= 'SELECT * FROM visitors';
$query 	= mysqli_query($conn, $sql);
while ($info = mysqli_fetch_array($query))
{ 
Echo "<img src=https://yasincloudproject-resized.s3.amazonaws.com/resized-images/".$info['photo'] ."> <br>"; 
Echo "<b>Foto:</b> ".$info['photo'] . "<br> ";
Echo "<b>Name:</b> ".$info['name'] . "<br> "; 
Echo "<b>Email:</b> ".$info['email'] . " <br>"; 
Echo "<b>Phone:</b> ".$info['phone'] . " <hr>"; } 
?>
