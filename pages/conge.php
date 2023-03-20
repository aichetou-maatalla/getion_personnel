<?php
    require_once("connexiondb.php");
   
    /*
     
    if(isset($_GET['nomF']))
        $nome=$_GET['nomF'];
    else
         $nomf="";
    */

    $nomC=isset($_GET['nomC'])?$_GET['nomC']:"";
    $type_conge=isset($_GET['type_conge'])?$_GET['type_conge']:"all";

   /* $size=isset($_GET['size'])?$_GET['size']:4;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;*/

    if($type_conge=="all"){
          $requete="select * from conge
                   where nom_g like '%$nomC%'";
                  /* limit $size
                   offset $offset";*/

          $requeteCount="select count(*) countC from conge
                   where nom_g like '%$nomC%'";         

    }else{
         $requete="select * from conge
                  where nom_g  like '%$nomC%' 
                  and type_conge='$type_conge'";
                 /* limit $size
                  offset $offset";*/

         $requeteCount="select count(*) countC from conge
                  where nom_g like '%$nomC%' 
                  and type_conge='$type_conge'";        
    }

    $resultatC=$pdo->query($requete);

    $resultatCount=$pdo->query($requeteCount);
    $tabCount=$resultatCount->fetch();
    $nb_C=$tabCount['countC'];
   /* $reste=$nb_g % $size;

    if($reste===0)
        $nbpage=$nb_g/$size;
    else
        $nbpage=floor($nb_g/$size)+1;
*/
?>
<! DOCTYPE HTML>
<HTML>
    <head>  
        <meta charset="utf-8">
        <title>Gestion De Conge </title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            <div class="panel panel-success margetop">
                <div class="panel-heading">Rechercher d'un conge...</div>
                <div class="panel-body">
                    <form method="get" action="conge.php" class="form-inline">
                        <div class="form-group">
                           <input type="text" name="nomC" 
                                  placeholder="Taper Le Nom de Employe"
                                  class="form-control"
                                  value="<?php echo $nomC ?>"/>
                        </div>
                           <label for="type_conge">Type Conge:</label>
                            <select name="type_conge" class="form-control" id="type_conge"
                                   onchange="this.form.submit()">
                                <option value="all"<?php if($type_conge=="all") echo "selected" ?>>Tout Les Conges</option>
                                <option value="Scientifique"<?php if($type_conge=="Scientifique") echo "selected" ?>>Scientifique</option>
                                <option value="Maladie"<?php if($type_conge=="Maladie") echo "selected" ?>>Maladie</option>
                                <option value="Maternite"<?php if($type_conge=="Maternite") echo "selected" ?>>Maternite</option>
                                <option value="Long_Dureé"<?php if($type_conge=="Longe_Dureé") echo "selected" ?>>Long_Dureé</option>

                            </select>
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-search"></span>
                            chercher...
                        </button>
                        &nbsp &nbsp
                        <a href="nouvelleconge.php">
                            <span class="glyphicon glyphicon-plus"></span>
                            Nouvelle Conge</a>
                   </form>
               </div>
           </div> 
           <div class="panel panel-primary">
                <div class="panel-heading">Liste des Employe en conge(<?php echo $nb_C ?> conge)</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                       <thead>
                         <tr>
                             <th>ID</th><th>code employe</th><th>Nom</th><th>Prenom</th><th>Date Debut</th><th>Date fin</th><th>Type conge</th><th>Action</th>
                         </tr>
                       </thead>

                       <tbody>
                          <?php while($conge=$resultatC->fetch()){ ?>
                            <tr>
                                 <td><?php echo $conge['id_conge'] ?> </td>
                                 <td><?php echo $conge['code_g'] ?> </td>
                                 <td><?php echo $conge['nom_g'] ?> </td>
                                 <td><?php echo $conge['prenom_g'] ?> </td>
                                 <td><?php echo $conge['date_debut'] ?> </td>
                                 <td><?php echo $conge['date_fin'] ?> </td>
                                 <td><?php echo $conge['type_conge'] ?> </td>
                                    <td>
								   
								    <a href="editerconge.php?id_conge=<?php echo $conge['id_conge'] ?> ">
                                           <span class="glyphicon glyphicon-edit"></span>
                                       </a>
                                       &nbsp &nbsp
                                       <a onclick="return confirm('Etes vous sur de vouloir supprimer les conge')"
                                           href="supprimerconge.php?id_conge=<?php echo $conge['id_conge'] ?> ">
                                           <span class="glyphicon glyphicon-trash"></span>
                                       </a>
                                    </td>
                            </tr> 
                          <?php } ?>
                        </tbody>   
                    </table>
                    
                </div>
            </div>   
        </div>   
    </body>
</HTML> 