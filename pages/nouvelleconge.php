<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <tit>nouvelle conge</tit>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Veuillez saisir  conge de l'employe</div>
                    <div class="panel-body">
                    <form method="post" action="insertconge.php" class="form">

                        <div class="form-group">
						
						    <label for="code_g">Code de l'employe:</label>
                                <input type="text" name="code_g" 
                                   placeholder="Code l'employe"
                                   class="form-control"/></br>
                            <label for="nom_g">Nom:</label>
                                <input type="text" name="nom_g" 
                                   placeholder="Nom de la Employe"
                                   class="form-control"/></br>
                            <label for="prenom_g">Prenom:</label>
                                <input type="text" name="prenom_g" 
                                   placeholder="Prenom de l'employe"
                                   class="form-control"/></br>
                            <label for="date_debut">Date de Debut:</label>
                                <input type="date" name="date_debut" 
                                   placeholder="date debut"
                                   class="form-control"/></br>
                            <label for="date_fin">Date Fin:</label>
                                <input type="date" name="date_fin" 
                                   placeholder="Date fin"
                                   class="form-control"/>      
                            
                        
                         </div>

                               <div class="form-group">
                                  <label for="type_conge">Type De Conge:</label>
                                    <select name="type_conge" class="form-control" id="type_conge">
                                        <option value="Scientifique" selected>Sientfique</option>
                                        <option value="Maladie">Maladie</option>
                                        <option value="Maternite">Maternite</option>
                                        <option value="Long_Dureé">Long_Dureé</option>
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