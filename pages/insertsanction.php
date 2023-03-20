<?php
    require_once('connexiondb.php');

    $code_g=isset($_POST['code_g'])?$_POST['code_g']:"";
    $nom_g=isset($_POST['nom_g'])?$_POST['nom_g']:"";
    $prenom_g=isset($_POST['prenom_g'])?$_POST['prenom_g']:"";
    $causes=isset($_POST['causes'])?$_POST['causes']:"";
    $num_decision=isset($_POST['num_decision'])?$_POST['num_decision']:"";
    $type_sanction=isset($_POST['type_sanction'])?$_POST['type_sanction']:"";

    $requete="insert into sanction(code_g,nom_g,prenom_g,causes,num_decision,type_sanction) values(?,?,?,?,?,?)";
    $params=array($code_g,$nom_g,$prenom_g,$causes,$num_decision,$type_sanction);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:sanction.php');
?>