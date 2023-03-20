<?php
    require_once('connexiondb.php');
    $id_conge=isset($_GET['id_conge'])?$_GET['id_conge']:0;
    $requete="select * from conge where id_conge=$id_conge";
    $resultat=$pdo->query($requete);
    $conge=$resultat->fetch();
    $code_g=$conge['code_g'];
    $nom_g=$conge['nom_g'];
    $prenom_g=$conge['prenom_g'];
    $date_debut=$conge['date_debut'];
    $date_fin=$conge['date_fin'];
    $type_conge=strtolower($conge['type_conge']);

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
                <div class="panel-heading">Edition de l'employe:</div>
                <div class="panel-body">
                    <form method="post" action="updateconge.php" class="form">

                        <div class="form-group">
                            <label for="id_conge">ID de l'employe : <?php echo $id_conge ?></label>
                                <input type="hidden" name="id_conge" 
                                   class="form-control"
                                   value="<?php echo $id_conge ?>"/></br>

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

                            <label for="date_debut">Date Debut:</label>
                                <input type="date" name="date_debut" 
                                   placeholder="date_debut"
                                   class="form-control"
                                   value="<?php echo $date_debut ?>"/></br>

                            <label for="dat_fin">Date_Fin:</label>
                                <input type="date" name="date_fin" 
                                   placeholder="date_fin"
                                   class="form-control"
                                   value="<?php echo $date_fin ?>"/></br> 

                            
                        </div>

                        <div class="form-group">
                                  <label for="type_conge">Type_Conge:</label>
                                    <select name="type_conge" class="form-control" id="type_conge">
                                        <option value="scientifique"<?php if($type_conge=="scientifique") echo "selected" ?>> Scientifique</option>
                                        <option value="Maternite"<?php if($type_conge=="Maternite") echo "selected" ?>>Maternite</option>
                                        <option value="Maladie"<?php if($type_conge=="Maladie") echo "selected" ?>>Maladie</option>
                                        <option value="Longe_Duree"<?php if($conge=="Longe_Duree") echo "selected" ?>>Long_Dureé</option>
              
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