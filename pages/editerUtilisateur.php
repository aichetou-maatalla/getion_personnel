<?php
    require_once('identifier.php');

    require_once('connexiondb.php');
    $idUser=isset($_GET['idUser'])?$_GET['idUser']:0;

    $requeteUser="select * from utilisateur where idUser=$idUser";
    $resultatUser=$pdo->query($requeteUser);
    $user=$resultatUser->fetch();

    $login=$user['login'];
    $email=$user['email'];
    $role=strtoupper($user['role']);

?>
<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>Edition d' une utilisateur</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Edition de l'utilisateur:</div>
                <div class="panel-body">
                    <form method="post" action="updateUtilisateur.php" class="form">

                        <div class="form-group">
                            <label for="idUser">ID : <?php echo $idUser ?></label>
                                <input type="hidden" name="idUser" 
                                   class="form-control"
                                   value="<?php echo $idUser ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="login">Login:</label>
                                <input type="text" name="login" 
                                   placeholder="login"
                                   class="form-control"
                                   value="<?php echo $login ?>"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                                <input type="text" name="email" 
                                   placeholder="Email"
                                   class="form-control"
                                   value="<?php echo $email ?>"/>
                        </div>
                        <div class="form-group">
                        <select name="role" class="form-control">
                            <option value="ADMIN" <?php if($role=="ADMIN") echo "selected" ?>>Administrateur</option>
                            <option value="VISITEUR" <?php if($role=="VISITEUR") echo "selected" ?>>Visiteur</option>
                        </select>
                        </div>
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            Enregistrer
                        </button>
                             &nbsp;&nbsp;
                        <a href="modifierPwd.php?idUser=<?php echo $idUser ?>">Changer le mot de passe</a>
                       
                   </form> 
                </div>
            </div>  
        </div>   
    </body>
</HTML> 