<html>
<head>
<title>Registered successfully</title>
<style>
*{
background-color:grey;
color:black;
}
</style>
</head>
<body>
Congratulations <?php echo $_POST["name"]; ?>
<br>
you have successfully registered for <?php echo $_POST["event"] ; ?>
<br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Culrav2k18";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name= ( isset($_POST["name"]) ) ? $_POST["name"] : '';
$surname= ( isset($_POST["surname"]) ) ? $_POST["surname"] : '';
$clg= ( isset($_POST["clg"]) ) ? $_POST["clg"] : '';
$mail=( isset($_POST["mail"]) ) ? $_POST["mail"] : '';
$event= ( isset($_POST["event"]) ) ? $_POST["event"] : '';
 
$sql = "INSERT INTO Culrav (name, surname, clg,mail,event)
 VALUES ('$name','$surname','$clg','$mail','$event')";
 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>