<?php
    session_start();
    require_once('connexiondb.php');
    $login=isset($_POST['login'])?$_POST['login']:"";
    $pwd=isset($_POST['pwd'])?$_POST['pwd']:"";

    $requete="select * from utilisateur where login='$login' and pwd=MD5('$pwd')";
    $resultat=$pdo->query($requete);
    
    if($user=$resultat->fetch()){
        if($user['etat']==1){
            $_SESSION['user']=$user;
            header('location:../index.php');
        }else{
            $_SESSION['erreurLogin']="<strong>Erreur!!</strong>votre compte est desactiver.<br> Veuillez contacter le chef de service";
            header('location:login.php');

        }

    }else{
        $_SESSION['erreurLogin']="<strong>Erreur!!</strong>Login ou Mot de passe incorrecte!!!";
        header('location:login.php');
    }

?>
