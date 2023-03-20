<?php
    require_once('connexiondb.php');

    $code_g=isset($_POST['code_g'])?$_POST['code_g']:"";
    $nom_g=isset($_POST['nom_g'])?$_POST['nom_g']:"";
    $prenom_g=isset($_POST['prenom_g'])?$_POST['prenom_g']:"";
    $date_abs=isset($_POST['date_abs'])?$_POST['date_abs']:"";
    $horaire=isset($_POST['horaire'])?$_POST['horaire']:"";
    
    $requete="insert into absence(code_g,nom_g,prenom_g,date_abs,horaire) values(?,?,?,?,?)";
    $params=array($code_g,$nom_g,$prenom_g,$date_abs,$horaire);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:absence.php');
?>