<?php
include("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["supprimer"])) {
    $id = $_POST["id"];
    supprimerArticle($conn, $id);
}


function supprimerArticle($conn, $id) {
    $id = mysqli_real_escape_string($conn, $id);
    $sql = "DELETE FROM journal WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Article supprimé avec succès";
    } else {
        echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location: edit.php");
}
?>