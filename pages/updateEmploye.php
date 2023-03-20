<?php
    require_once('connexiondb.php');
    $id_g=isset($_POST['id_g'])?$_POST['id_g']:"";
    $code_g=isset($_POST['code_g'])?$_POST['code_g']:"";
    $nom_g=isset($_POST['nom_g'])?$_POST['nom_g']:"";
    $prenom_g=isset($_POST['prenom_g'])?$_POST['prenom_g']:"";
    $date_ne=isset($_POST['date_ne'])?$_POST['date_ne']:"";
    $telephone=isset($_POST['telephone'])?$_POST['telephone']:"";
    $email=isset($_POST['email'])?$_POST['email']:"";
    $fonctionalite=isset($_POST['fonctionalite'])?$_POST['fonctionalite']:"";
    $departement=isset($_POST['departement'])?$_POST['departement']:"";

    $requete="update employe set code_g=?,nom_g=?,prenom_g=?,date_ne=?,telephone=?,email=?,fonctionalite=?,departement=? where id_g=?";
    $params=array($code_g,$nom_g,$prenom_g,$date_ne,$telephone,$email,$fonctionalite,$departement,$id_g);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:employe.php');
?>