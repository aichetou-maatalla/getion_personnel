<?php
    require_once('connexiondb.php');
    $id=isset($_GET['id'])?$_GET['id']:"";
    
    $requete="delete from sanction where id=?";
    $params=array($id);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:sanction.php');
?>