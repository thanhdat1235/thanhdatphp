<?php
$Username = $Password = $Email = $Phone = "";
$Username = ($_POST['Username']);
$Password = ($_POST['Password']);   
$Email = ($_POST['Email']);   
$Phone = ($_POST['Phone']);   


$servername = "localhost";
$username = "create";
$password = "";
$dbname = "shopee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO khachhang (Username, Password, Email, Phone )
VALUES ('$Username', '$Password', '$Email', '$Phone')";
if ($conn->query($sql) === TRUE) {
    echo '<script type="text/javascript">
    window.location = "cart.php"
  </script>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

$conn->close();
?>