<?php
$host="localhost";
$user= "root";
$password= "";
$database= "szkola";
$conn = new mysqli($host, $user, $password, $database);

if($conn-> connect_error) {
    die("Błąd połączenia:" . $conn->connect_error);

}

echo "Połączenie zostało pomyślnie nawiązanie.";

$conn->close();
?>