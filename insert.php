<?php
$facebookid = $facebookpass = "";
$facebookid = ($_POST["facebookid"]);
$facebookpass = ($_POST["facebookpass"]);   

$servername = "localhost";
$username = "login";
$password = "";
$dbname = "shopee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (facebookid, facebookpass)
VALUES ('$facebookid', '$facebookpass')";

if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript">
  window.location = "index.php"
</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>