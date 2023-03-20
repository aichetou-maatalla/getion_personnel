<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset="utf-8">
        <tit>nouvelle sanctionne</tit>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            
            <div class="panel panel-primary margetop">
                <div class="panel-heading">Veuillez saisir les donnees de la nouvelle sanctionne</div>
                    <div class="panel-body">
                    <form method="post" action="insertsanction.php" class="form">

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
                            
                            <label for="causes">Causes</label>
                                <input type="text" name="causes" 
                                   placeholder="causes"
                                   class="form-control"/> </br>     
                            <label for="num_decision">Num_decision</label>
                                <input type="text" name="num_decision" 
                                  placeholder="num_decision"
                                  class="form-control"/></br>
                             </div>
                             <div class="form-group">
                                  <label for="type_sanction">Type de sanction</label>
                                  <select name="type_sanction" class="form-control" id="type_sanction">
                                        <option value="penurie de salaire" selected> penurie de salaire</option>
                                        <option value="suspention de salaire">suspention de salaire</option>
                                        
                                        
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