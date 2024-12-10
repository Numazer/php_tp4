<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
include('header.php');
include("connexion.php");

//requete SQL
$result = $conn->query("SELECT * FROM journal");
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        echo "<article class='article'>";
        echo "<p>Titre: " . $row["titre"] . "</p>";
        echo "<p>date : " . $row["date"] . " - Auteur: " . $row["auteur"] . "</p>";
        echo "<p>contenu : " . $row["contenu"] . "</p>";
        echo "</article>";
    }
}else{
    echo "0 résultats";
}
?>
</body>
</html>