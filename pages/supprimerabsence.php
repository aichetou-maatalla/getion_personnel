<?php
    require_once('connexiondb.php');
    $id_abs=isset($_GET['id_abs'])?$_GET['id_abs']:"";
    
    $requete="delete from absence where id_abs=?";
    $params=array($id_abs);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:absence.php');
?>
