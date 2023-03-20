<?php
    require_once('connexiondb.php');
    $id_g=isset($_GET['id_g'])?$_GET['id_g']:"";
    
    $requete="delete from employe where id_g=?";
    $params=array($id_g);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:employe.php');
?>
