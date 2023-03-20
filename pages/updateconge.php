<?php
    require_once('connexiondb.php');
    $id_conge=isset($_POST['id_conge'])?$_POST['id_conge']:"";
    $code_g=isset($_POST['code_g'])?$_POST['code_g']:"";
    $nom_g=isset($_POST['nom_g'])?$_POST['nom_g']:"";
    $prenom_g=isset($_POST['prenom_g'])?$_POST['prenom_g']:"";
    $date_debut=isset($_POST['date_debut'])?$_POST['date_debut']:"";
    $date_fin=isset($_POST['date_fin'])?$_POST['date_fin']:"";
    $type_conge=isset($_POST['type_conge'])?$_POST['type_conge']:"";

    $requete="update conge set code_g=?, nom_g=?,prenom_g=?,date_debut=?,date_fin=?,type_conge=? where id_conge=? ";
    $params=array($code_g,$nom_g,$prenom_g,$date_debut,$date_fin,$type_conge,$id_conge);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:conge.php');
?>