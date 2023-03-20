<?php
     require_once('connexiondb.php');
     $code_g=isset($_POST['code_g'])?$_POST['code_g']:"";
     $nom_g=isset($_POST['nom_g'])?$_POST['nom_g']:"";
     $prenom_g=isset($_POST['prenom_g'])?$_POST['prenom_g']:"";
     $date_debut=isset($_POST['date_debut'])?$_POST['date_debut']:"";
     $date_fin=isset($_POST['date_fin'])?$_POST['date_fin']:"";
     $type_conge=isset($_POST['type_conge'])?$_POST['type_conge']:"";
 
    $requete="insert into conge(code_g,nom_g,prenom_g,date_debut,date_fin,type_conge) values(?,?,?,?,?,?)";
    $params=array($code_g,$nom_g,$prenom_g,$date_debut,$date_fin,$type_conge);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:conge.php');
?>