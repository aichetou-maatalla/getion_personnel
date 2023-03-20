<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <tit>nouvelle Employe</tit>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Veuillez saisir les donnees de la nouvelle employe</div>
                    <div class="panel-body">
                    <form method="post" action="insertEmploye.php" class="form">

                        <div class="form-group">

                        <label for="code_g">Code de la Employe:</label>
                                <input type="text" name="code_g" 
                                   placeholder="code de l Employe"
                                   class="form-control"/></br>
                            <label for="nom_g">Nom de la Employe:</label>
                                <input type="text" name="nom_g" 
                                   placeholder="Nom de la Employe"
                                   class="form-control"/></br>
                            <label for="prenom_g">Prenom:</label>
                                <input type="text" name="prenom_g" 
                                   placeholder="Prenom de la Employe"
                                   class="form-control"/></br>
                            <label for="date_ne">Date de Naissance:</label>
                                <input type="date" name="date_ne" 
                                   placeholder="date N"
                                   class="form-control"/></br>
                            <label for="departement">Telephone:</label>
                                <input type="text" name="telephone" 
                                   placeholder="Num tel"
                                   class="form-control"/>      
                            <label for="email">Email:</label>
                                <input type="text" name="email" 
                                  placeholder="email de la Employe"
                                  class="form-control"/></br>
                            <label for="fonctionalite">Fonctionalite:</label>
                                <input type="text" name="fonctionalite" 
                                  placeholder="fonctionalite de la Employe"
                                  class="form-control"></br>

                             </div>

                               <div class="form-group">
                                  <label for="departement">Departement:</label>
                                    <select name="departement" class="form-control" id="departement">
                                        <option value="mi" selected> Math / Inf</option>
                                        <option value="gio">Giologie</option>
                                        <option value="bio">Biologie</option>
                                        <option value="ph">Physique</option>
                                        <option value="chimi">Chimi</option>
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