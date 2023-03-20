<?php
    require_once('connexiondb.php');

    $code_g=isset($_POST['code_g'])?$_POST['code_g']:"";
    $nom_g=isset($_POST['nom_g'])?$_POST['nom_g']:"";
    $prenom_g=isset($_POST['prenom_g'])?$_POST['prenom_g']:"";
    $ancien_rang=isset($_POST['ancien_rang'])?$_POST['ancien_rang']:"";
    $nouveau_rang=isset($_POST['nouveau_rang'])?$_POST['nouveau_rang']:"";
    $num_decision=isset($_POST['num_decision'])?$_POST['num_decision']:"";
    
    $requete="insert into promotion(code_g,nom_g,prenom_g,ancien_rang,nouveau_rang,num_decision) values(?,?,?,?,?,?)";
    $params=array($code_g,$nom_g,$prenom_g,$ancien_rang,$nouveau_rang,$num_decision);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:promotion.php');
?>