<?php
    require_once('connexiondb.php');
    $id_abs=isset($_POST['id_abs'])?$_POST['id_abs']:"";
    $code_g=isset($_POST['code_g'])?$_POST['code_g']:"";
    $nom_g=isset($_POST['nom_g'])?$_POST['nom_g']:"";
    $prenom_g=isset($_POST['prenom_g'])?$_POST['prenom_g']:"";
    $date_abs=isset($_POST['date_abs'])?$_POST['date_abs']:"";
    $horaire=isset($_POST['horaire'])?$_POST['horaire']:"";
    
    $requete="update absence set code_g=?,nom_g=?,prenom_g=?,date_abs=?,horaire=? where id_abs=?";
    $params=array($code_g,$nom_g,$prenom_g,$date_abs,$horaire,$id_abs);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:absence.php');
?>