<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <title>Nouvelle Absent</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Veuillez saisir les donnees de la nouvelle absent</div>
                    <div class="panel-body">
                    <form method="post" action="insertabsence.php" class="form">

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
                            <label for="date_abs">Date d'absence:</label>
                                <input type="date" name="date_abs" 
                                   placeholder="date abs"
                                   class="form-control"/></br>
                            <label for="horaire">Horaire:</label>
                                <input type="text" name="horaire" 
                                   placeholder="Horaire"
                                   class="form-control"/>      
                            
                             </div>
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