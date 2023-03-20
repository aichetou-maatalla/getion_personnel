<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <tit>Nouvelle promotion</tit>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Veuillez saisir les donnees de la nouvelle promotionner</div>
                    <div class="panel-body">
                    <form method="post" action="insertpromotion.php" class="form">

                        <div class="form-group">
                        <label for="code_g">code employe</label>
                                <input type="text" name="code_g" 
                                  placeholder="code employe"
                                  class="form-control"></br>

                            <label for="nom_g">Nom de la Employe:</label>
                                <input type="text" name="nom_g" 
                                   placeholder="Nom de la Employe"
                                   class="form-control"/></br>
                            <label for="prenom_g">Prenom:</label>
                                <input type="text" name="prenom_g" 
                                   placeholder="Prenom de la Employe"
                                   class="form-control"/></br>
                            
                            <label for="ancien_rang">Ancien_Rang</label>
                                <input type="text" name="ancien_rang" 
                                   placeholder="ancien_rang"
                                   class="form-control"/> </br>     
                            <label for="nouveau_rang">Nouveau_Rang</label>
                                <input type="text" name="nouveau_rang" 
                                  placeholder="nouveau_rang"
                                  class="form-control"/></br>

                                  <label for="num_decision">Num_Decision</label>
                                <input type="text" name="num_decision" 
                                  placeholder="num_decision"
                                  class="form-control"/></br>
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