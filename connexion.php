<?php
$host = 'localhost';
$dbname = 'tp4php';
$username = 'root';
$password = '';
$conn = mysqli_connect($host, $username, $password, $dbname);
// Vérifier la connexion
if (mysqli_connect_errno()) {
echo "Impossible de se connecter à MySQL: " . mysqli_connect_error();
exit();
}
?>