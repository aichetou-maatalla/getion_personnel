<?php 
    session_start();
    if(isset($_SESSION['erreurLogin']))
        $erreurLogin=$_SESSION['erreurLogin'];
    else{
         $erreurLogin="";
    }
    session_destroy();
?>
<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>Se Connecter</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
    
        <div class="container col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Se Connecter:</div>
                <div class="panel-body">
                    <form method="post" action="seConnecter.php" class="form">
                        <?php if(!empty($erreurLogin)) {?>
                        <div class="alert alert-danger">
                            <?php echo $erreurLogin ?>
                        </div>
                        <?php } ?>

                        <div class="form-group">
                            <label for="login">Login:</label>
                                <input type="text" name="login"
                                   placeholder="Login" 
                                   class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="pwd">Mot de passe :</label>
                                <input type="password" name="pwd" 
                                   placeholder="Mot de passe"
                                   class="form-control"/>
                        </div>

                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-log-in"></span>
                            Se Connecter
                        </button>
                          
                   </form> 
                </div>
            </div>  
        </div>   
    </body>
</HTML> 