<?php
    require_once('connexiondb.php');
    $id_p=isset($_GET['id_p'])?$_GET['id_p']:0;
    $requete="select * from promotion where id_p=$id_p";
    $resultat=$pdo->query($requete);
    $promotion=$resultat->fetch();
    $code_g=$promotion['code_g'];
    $nom_g=$promotion['nom_g'];
    $prenom_g=$promotion['prenom_g'];
    $ancien_rang=$promotion['ancien_rang'];
    $nouveau_rang=$promotion['nouveau_rang'];
    $num_decision=$promotion['num_decision'];
    //$departement=strtolower($promotion['departement']);

?>

<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <tit>Edition d'une promotionner </tit>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Edition de promotionner:</div>
                <div class="panel-body">
                    <form method="post" action="updatepromotion.php" class="form">

                        <div class="form-group">
                            <label for="promotion">ID promotion : <?php echo $id_p ?></label>
                                <input type="hidden" name="id_p" 
                                   class="form-control"
                                   value="<?php echo $id_p ?>"/></br>

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

                            <label for="ancien_rang">Ancien_Rang:</label>
                                <input type="text" name="ancien_rang" 
                                   placeholder="ancien_rang"
                                   class="form-control"
                                   value="<?php echo $ancien_rang ?>"/></br>

                            <label for="nouveau_rang">Nouveau_rang:</label>
                                <input type="text" name="nouveau_rang" 
                                   placeholder="nouveau_rang"
                                   class="form-control"
                                   value="<?php echo $nouveau_rang ?>"/></br> 

                            <label for="num_decision">Num_decision:</label>
                                <input type="text" name="num_decision" 
                                   placeholder="num_decision"
                                   class="form-control"
                                   value="<?php echo $num_decision ?>"/></br>

                            
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