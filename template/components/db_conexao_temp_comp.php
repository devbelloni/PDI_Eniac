<?php 
//no localhost
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "id20628149_pdi";

//servidor Belloni
// $servername = "127.0.0.1:3306";
// $username = "root";
// $password = "Karameikos1@";
// $dbname = "id20628149_pdi";

//no servidor
//  $servername = "localhost";
//  $password = "Uberlandia1@";
//  $dbname = "id20628149_pdi";

// Create connection
$coat = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$coat) {
  die("Connection failed: " . mysqli_connect_error());
}

// echo "Conectado";

?>