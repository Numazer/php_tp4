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

if(isset($_POST["titre"])){
    $titre = $_POST["titre"];git remote add origin https://github.com/Numazer/php_tp4.git
    $contenu = $_POST["contenu"];
    $date = $_POST["date"];
    $auteur = $_POST["auteur"];
    // requete SQL
    $sql = "INSERT INTO journal (titre, contenu, date, auteur) VALUES ('$titre', '$contenu', '$date', '$auteur')";
    if (mysqli_query($conn, $sql)) {
    echo "ajout d'un article";
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

<form method='post' name='form'>
    <input type='text' name='titre'>
    <input type='text' name='contenu'>
    <input type='date' name='date'>
    <input type='text' name='auteur'>
    <input type='submit' value='valider'>
</form>