<?php
    require_once('connexiondb.php');

    $code_g=isset($_POST['code_g'])?$_POST['code_g']:"";
    $nom_g=isset($_POST['nom_g'])?$_POST['nom_g']:"";
    $prenom_g=isset($_POST['prenom_g'])?$_POST['prenom_g']:"";
    $date_ne=isset($_POST['date_ne'])?$_POST['date_ne']:"";
    $telephone=isset($_POST['telephone'])?$_POST['telephone']:"";
    $email=isset($_POST['email'])?$_POST['email']:"";
    $fonctionalite=isset($_POST['fonctionalite'])?$_POST['fonctionalite']:"";
    $departement=isset($_POST['departement'])?$_POST['departement']:"";

    $requete="insert into employe(code_g,nom_g,prenom_g,date_ne,telephone,email,fonctionalite,departement) values(?,?,?,?,?,?,?,?)";
    $params=array($code_g,$nom_g,$prenom_g,$date_ne,$telephone,$email,$fonctionalite,$departement);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:employe.php');
?>