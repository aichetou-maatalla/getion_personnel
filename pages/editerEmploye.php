<?php
    require_once('connexiondb.php');
    $id_g=isset($_GET['id_g'])?$_GET['id_g']:0;
    $requete="select * from employe where id_g=$id_g";
    $resultat=$pdo->query($requete);
    $employe=$resultat->fetch();
    $code_g=$employe['code_g'];
    $nom_g=$employe['nom_g'];
    $prenom_g=$employe['prenom_g'];
    $date_ne=$employe['date_ne'];
    $telephone=$employe['telephone'];
    $email=$employe['email'];
    $fonctionalite=$employe['fonctionalite'];
    $departement=strtolower($employe['departement']);

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
                    <form method="post" action="updateEmploye.php" class="form">

                        <div class="form-group">
                            <label for="departement">ID de l'employe : <?php echo $id_g ?></label>
                                <input type="hidden" name="id_g" 
                                   class="form-control"
                                   value="<?php echo $id_g ?>"/></br>

                         <label for="departement">code employe : <?php echo $code_g ?></label>
                                <input type="text" name="code_g" 
                                   class="form-control"
                                   value="<?php echo $code_g ?>"/></br>

                            <label for="departement">Nom:</label>
                                <input type="text" name="nom_g" 
                                   placeholder="Nom de la Employe"
                                   class="form-control"
                                   value="<?php echo $nom_g ?>"/></br>

                            <label for="departement">Prenom:</label>
                                <input type="text" name="prenom_g" 
                                   placeholder="Prenom de la Employe"
                                   class="form-control"
                                   value="<?php echo $prenom_g ?>"/></br>

                            <label for="departement">Date de Naissance:</label>
                                <input type="date" name="date_ne" 
                                   placeholder="date N"
                                   class="form-control"
                                   value="<?php echo $date_ne ?>"/></br>

                            <label for="departement">Telephone:</label>
                                <input type="text" name="telephone" 
                                   placeholder="Num tel"
                                   class="form-control"
                                   value="<?php echo $telephone ?>"/></br> 

                            <label for="departement">Email:</label>
                                <input type="text" name="email" 
                                   placeholder="email de l'employe"
                                   class="form-control"
                                   value="<?php echo $email ?>"/></br>

                            <label for="departement">Fonctionalite:</label>
                                <input type="text" name="fonctionalite" 
                                   placeholder="fonctionalite de la Employe"
                                   class="form-control"
                                   value="<?php echo $fonctionalite ?>"></br>
                        </div>

                        <div class="form-group">
                                  <label for="departement">Departement:</label>
                                    <select name="departement" class="form-control" id="departement">
                                        <option value="mi"<?php if($departement=="mi") echo "selected" ?>> Math / Inf</option>
                                        <option value="gio"<?php if($departement=="gio") echo "selected" ?>>Giologie</option>
                                        <option value="bio"<?php if($departement=="bio") echo "selected" ?>>Biologie</option>
                                        <option value="ph"<?php if($departement=="ph") echo "selected" ?>>Physique</option>
                                        <option value="chimi"<?php if($departement=="chimi") echo "selected" ?>>Chimi</option>
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