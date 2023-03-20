<?php
    require_once('connexiondb.php');
    $id=isset($_POST['id'])?$_POST['id']:"";
    $code_g=isset($_POST['code_g'])?$_POST['code_g']:"";
    $nom_g=isset($_POST['nom_g'])?$_POST['nom_g']:"";
    $prenom_g=isset($_POST['prenom_g'])?$_POST['prenom_g']:"";
    $causes=isset($_POST['causes'])?$_POST['causes']:"";
    $num_decision=isset($_POST['num_decision'])?$_POST['num_decision']:"";
    $type_sanction=isset($_POST['type_sanction'])?$_POST['type_sanction']:"";


    $requete="update sanction set code_g=?, nom_g=?,prenom_g=?,causes=?,num_decision=?,type_sanction=? where id=?";
    $params=array($code_g,$nom_g,$prenom_g,$causes,$num_decision,$type_sanction,$id);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:sanction.php');
?>