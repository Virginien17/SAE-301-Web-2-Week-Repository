<?php
    include("../Config/config.php");
    $bdd = new PDO('mysql:host='.$hote.';port='.$port.';dbname='.$nom_bd,$identifiant, $mot_de_passe,$options);

    // on doit lister l'ensemble des produit du site, ordonnés par date décroissante pour la suppression
    $requete='SELECT mail, mdp FROM `admin`';
    $resultats=$bdd->query($requete);
    $admin=$resultats->fetch(PDO::FETCH_ASSOC);
    $resultats->closeCursor();

    // on doit lister les catégories existante
    $requete='SELECT mail, mdp FROM `compte`';
    $resultats=$bdd->query($requete);
    $compte=$resultats->fetchAll(PDO::FETCH_ASSOC);
    $resultats->closeCursor();


    if ($_POST["mail"]==$admin["mail"] && $_POST["mdp"]==$admin["mdp"]) {
        header('Location: admin.php');
        exit();
    }

    

    else
    {
        header('Location: ../index.php');
        exit();
    }
?>