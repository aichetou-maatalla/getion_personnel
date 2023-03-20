<?php
    require_once('connexiondb.php');
    $id_conge=isset($_GET['id_conge'])?$_GET['id_conge']:"";
    
    $requete="delete from conge where id_conge=?";
    $params=array($id_conge);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:conge.php');
?>