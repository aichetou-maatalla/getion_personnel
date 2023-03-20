<?php
    require_once('connexiondb.php');
    $id_abs=isset($_GET['id_abs'])?$_GET['id_abs']:0;
    $requete="select * from absence where id_abs=$id_abs";
    $resultat=$pdo->query($requete);
    $absence=$resultat->fetch();
    $code_g=$absence['code_g'];
    $nom_g=$absence['nom_g'];
    $prenom_g=$absence['prenom_g'];
    $date_abs=$absence['date_abs'];
    $horaire=$absence['horaire'];
    //$email=$employe['email'];
    //$fonctionalite=$employe['fonctionalite'];
    //$departement=strtolower($employe['departement']);

?>

<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <tit>Edition d' une employe</tit>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Edition de l'absence:</div>
                <div class="panel-body">
                    <form method="post" action="updateabsence.php" class="form">

                        <div class="form-group">
                            <label for="id_abs">ID  : <?php echo $id_abs ?></label>
                                <input type="hidden" name="id_abs" 
                                   class="form-control"
                                   value="<?php echo $id_abs ?>"/></br>

                         <label for="code_g">code employe : <?php echo $code_g ?></label>
                                <input type="text" name="code_g" 
                                   class="form-control"
                                   value="<?php echo $code_g ?>"/></br>

                            <label for="nom_g">Nom:</label>
                                <input type="text" name="nom_g" 
                                   placeholder="Nom de la Employe"
                                   class="form-control"
                                   value="<?php echo $nom_g ?>"/></br>

                            <label for="prenom_g">Prenom:</label>
                                <input type="text" name="prenom_g" 
                                   placeholder="Prenom de la Employe"
                                   class="form-control"
                                   value="<?php echo $prenom_g ?>"/></br>

                            <label for="date_abs">Date d'absence:</label>
                                <input type="date" name="date_abs" 
                                   placeholder="date_abs"
                                   class="form-control"
                                   value="<?php echo $date_abs ?>"/></br>

                            <label for="horaire">Horaire:</label>
                                <input type="text" name="horaire" 
                                   placeholder="horaire"
                                   class="form-control"
                                   value="<?php echo $horaire ?>"/></br> 

                           
                        </div>

                        
                         
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            Enregistrer
                        </button>
                       
                   </form> 
                </div>
            </div>  
        </div>   
    </body>
</HTML> 