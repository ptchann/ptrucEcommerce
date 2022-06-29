<?php
// echo  phpinfo(); exit;
$servername = "mysql";
$username = "ptchan";
$password = "ptchan";

$conn = new mysqli($servername, $username, $password, 'banhang');

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// } 

// $sql = "SELECT id, full_name FROM users";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["full_name"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();
?>