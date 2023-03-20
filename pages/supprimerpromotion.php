<?php
    require_once('connexiondb.php');
    $id_p=isset($_GET['id_p'])?$_GET['id_p']:"";
    
    $requete="delete from promotion where id_p=?";
    $params=array($id_p);
    $resultat=$pdo->prepare($requete);
    $resultat->execute($params);

    header('location:promotion.php');
?>