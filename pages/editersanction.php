<?php
    require_once('connexiondb.php');
    $id=isset($_GET['id'])?$_GET['id']:0;
    $requete="select * from sanction where id=$id";
    $resultat=$pdo->query($requete);
    $sanction=$resultat->fetch();
    $code_g=$sanction['code_g'];
    $nom_g=$sanction['nom_g'];
    $prenom_g=$sanction['prenom_g'];
    $causes=$sanction['causes'];
    $num_decision=$sanction['num_decision'];
    $type_sanction=strtolower($sanction['type_sanction']);

?>

<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <tit>Edition d' une sanction</tit>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Edition de l'employe:</div>
                <div class="panel-body">
                    <form method="post" action="updatesanction.php" class="form">

                        <div class="form-group">
                            <label for="type_sanction">ID  : <?php echo $id ?></label>
                                <input type="hidden" name="id" 
                                   class="form-control"
                                   value="<?php echo $id ?>"/></br>

                                   <label for="type_sanction">Code_g:</label>
                                <input type="text" name="code_g" 
                                   placeholder="code de l employe"
                                   class="form-control"
                                   value="<?php echo $code_g ?>"/></br>


                            <label for="type_sanction">Nom:</label>
                                <input type="text" name="nom_g" 
                                   placeholder="Nom de la Employe"
                                   class="form-control"
                                   value="<?php echo $nom_g ?>"/></br>

                            <label for="type_sanction">Prenom:</label>
                                <input type="text" name="prenom_g" 
                                   placeholder="Prenom de la Employe"
                                   class="form-control"
                                   value="<?php echo $prenom_g ?>"/></br>

                            <label for="type_sanction">causes</label>
                                <input type="text" name="causes" 
                                   placeholder="causes"
                                   class="form-control"
                                   value="<?php echo $causes ?>"/></br>

                            <label for="type_sanction">num_decision</label>
                                <input type="text" name="num_decision" 
                                   placeholder="numdecision"
                                   class="form-control"
                                   value="<?php echo $num_decision ?>"/></br> 

                        </div>
                             <div>     
                                  <label for="type_sanction">Type_sanction:</label>
                                    <select name="type_sanction" class="form-control" id="type_sanction">
                                        <option value="penurie de salaire"<?php if($type_sanction=="penurie de salaire") echo "selected" ?>> penurie de salaire</option>
                                        <option value="suspension de salaire"<?php if($type_sanction=="suspension de salaire") echo "selected" ?>>suspention de salaire</option>
                  
                                    </select>    
                        
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