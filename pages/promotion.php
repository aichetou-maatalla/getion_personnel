<?php
 require_once("connexiondb.php");
   
   /*
    
   if(isset($_GET['nomF']))
       $nome=$_GET['nomF'];
   else
        $nomf="";
   */

   $nom=isset($_GET['nom'])?$_GET['nom']:"";
   $type_sanction=isset($_GET['type_sanction'])?$_GET['type_sanction']:"all";

  /* $size=isset($_GET['size'])?$_GET['size']:4;
   $page=isset($_GET['page'])?$_GET['page']:1;
   $offset=($page-1)*$size;*/

   if($type_sanction=="all"){
         $requete="select * from promotion
                  where nom_g like '%$nom%'";
                 /* limit $size
                  offset $offset";*/

         $requeteCount="select count(*) countP from promotion
                  where nom_g like '%$nom%'";         

   }else{
        $requete="select * from promotion
                 where nom_g  like '%$nom%'
                 and type_sanction='$type_sanction'";
                /* limit $size
                 offset $offset";*/

        $requeteCount="select count(*) countP from promotion
                 where nom_g like '%$nom%'
                 and type_sanction='$type_sanction'";        
   }

   $resultatP=$pdo->query($requete);

   $resultatCount=$pdo->query($requeteCount);
   $tabCount=$resultatCount->fetch();
   $nb_P=$tabCount['countP'];
  /* $reste=$nb_g % $size;

   if($reste===0)
       $nbpage=$nb_g/$size;
   else
       $nbpage=floor($nb_g/$size)+1;
*/
?>

<!DOCTYPE HTML>
<HTML>
<head>
<meta charset="utf-8">
<tit>Gestion de promotion </tit>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>
<body>
    <?php include("menu.php"); ?> 
    
    <div class="container">
        <div class="panel panel-success margetop">
           <div class="panel-heading"> Promotion...</div>
           <div class="panel-body">
                
           <form method="get" action="promotion.php" class="form-inline">
                        <div class="form-group">
                           <input type="text" name="nom" 
                                  placeholder="Taper Le Nom de Employe"
                                  class="form-control"
                                  value="<?php echo $nom ?>"/>
                        </div>
                          
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-search"></span>
                            chercher...
                        </button>
                        &nbsp &nbsp
                        <a href="nouvellepromotion.php">
                            <span class="glyphicon glyphicon-plus"></span>
                            Nouvelle Promotionner</a>
                   </form>
               </div>
           </div> 
        
         

        <div class="panel panel-primary">
           <div class="panel-heading">liste des Promotions(<?php echo $nb_P ?> promotion) </div>
           <div class="panel-body">
                 


           <table class="table table-striped table-bordered">
                       <thead>
                         <tr>
                             <th>Id</th><th>code_g</th><th>Nom_g</th><th>Prenom_g</th><th>Ancien_Rang</th><th>Nouveau_Rang</th><th>Num_Decision</th><th>Action</th>
                         </tr>
                       </thead>

                       <tbody>
                          <?php while($promotion=$resultatP->fetch()){ ?>
                            <tr>
                                 <td><?php echo $promotion['id_p'] ?> </td>
                                 <td><?php echo $promotion['code_g'] ?> </td>
                                 <td><?php echo $promotion['nom_g'] ?> </td>
                                 <td><?php echo $promotion['prenom_g'] ?> </td>
                                 <td><?php echo $promotion['ancien_rang'] ?> </td>
                                 <td><?php echo $promotion['nouveau_rang'] ?> </td>
                                 <td><?php echo $promotion['num_decision'] ?> </td>
    
                                   <td>
                                       <a href="editerpromotion.php?id_p=<?php echo $promotion['id_p'] ?> ">
                                           <span class="glyphicon glyphicon-edit"></span>
                                       </a>
                                       &nbsp &nbsp
                                       <a onclick="return confirm('Etes vous sur de vouloir supprimer les promotions')"
                                           href="supprimerpromotion.php?id_p=<?php echo $promotion['id_p'] ?> ">
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