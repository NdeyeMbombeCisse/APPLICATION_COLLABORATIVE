<?php
include "config.php";

if (isset($_POST['envoyer'])){
    $prenom= $_POST['prenom'];
    $nom= $_POST['nom'];
    $email= $_POST['email'];
    $mot_de_pass= $_POST['mot_de_pass'];


    $sql="INSERT INTO utilisateur (prenom,nom,email,mot_de_pass) VALUES(' $prenom','$nom','$email','$mot_de_pass')";
    $resultat =mysqli_query($link,$sql);

    if($resultat){
      header("location: index.php? msg=New record created successefully")  ;
    }else{
        echo"erreur"  .mysqli_error($link);
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar{
            background-color:blue;
            color:white;
            text-align: center;
            height: 100px;
        }
        .container h2{
            text-align: center;
            margin-top:5%;
            
        }
        .container p{
            text-align:center;
        }
        .formulaire{
            
    width: 300px; /* Largeur du formulaire */
    margin: 0 auto; /* Centrer le formulaire horizontalement */
    padding: 20px; /* Ajouter un peu d'espace intérieur */
    border: 1px solid #ccc; /* Ajouter une bordure */
    border-radius: 5px; /* Ajouter des coins arrondis */
    background-color: #f9f9f9; /* Couleur de fond */
}

.formulaire label {
    display: block; /* Afficher chaque label sur une nouvelle ligne */
    margin-bottom: 5px; /* Ajouter un espace en bas de chaque label */
}

.formulaire input[type="text"],
.formulaire input[type="password"] {
    width: 100%; /* Largeur de l'input à 100% */
    padding: 8px; /* Ajouter un peu d'espace intérieur */
    margin-bottom: 10px; /* Ajouter un espace en bas de chaque input */
    border: 1px solid #ccc; /* Ajouter une bordure */
    border-radius: 3px; /* Ajouter des coins arrondis */
    box-sizing: border-box; /* Inclure la bordure et le padding dans la largeur */
}

.formulaire input[type="submit"] {
    width: 100%; /* Largeur du bouton à 100% */
    padding: 10px; /* Ajouter un peu d'espace intérieur */
    border: none; /* Supprimer la bordure */
    border-radius: 3px; /* Ajouter des coins arrondis */
    background-color: #007bff; /* Couleur de fond */
    color: #fff; /* Couleur du texte */
    cursor: pointer; /* Définir le curseur en pointer au survol */
}

.formulaire input[type="submit"]:hover {
    background-color: #0056b3; /* Couleur de fond au survol */
}

    
    </style>
    <title>php CRUD APPLICATION</title>
</head>
<body>
    <header>
        <nav class="navbar">
        <p><h1>CRUD APPLICATION</h1></p>
        </nav>
        </header>
        <div class="container">
            <h2>Add new idea</h2>
            <p>ajouter une idee</p>
        </div>

        <div class="formulaire">
            
        <form action="mesidee.php" method="post">
        <fieldset>
            <label for="titre">title:</label>
            <input type="text" id="titre" name="titre">
            <label for="description">description:</label>
            <input type="text" id="description" name="description">
            <label for="contenu">contenu:</label>
            <input type="text" id="contenu" name="contenu">
            
        
        </fieldset>
        <input type="submit" value="envoyer" name="envoyer">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>