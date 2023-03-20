<?php
 require_once("connexiondb.php");
   
   /*
    
   if(isset($_GET['nomF']))
       $nome=$_GET['nomF'];
   else
        $nomf="";
   */

   $nomprenom=isset($_GET['nomprenom'])?$_GET['nomprenom']:"";
   $type_sanction=isset($_GET['type_sanction'])?$_GET['type_sanction']:"all";

  /* $size=isset($_GET['size'])?$_GET['size']:4;
   $page=isset($_GET['page'])?$_GET['page']:1;
   $offset=($page-1)*$size;*/

   if($type_sanction=="all"){
         $requete="select * from sanction
                  where nom_g like '%$nomprenom%'";
                 /* limit $size
                  offset $offset";*/

         $requeteCount="select count(*) countS from sanction
                  where nom_g like '%$nomprenom%'";         

   }else{
        $requete="select * from sanction
                 where nom_g  like '%$nomprenom%'
                 and type_sanction='$type_sanction'";
                /* limit $size
                 offset $offset";*/

        $requeteCount="select count(*) countS from sanction
                 where nom_g like '%$nomprenom%'
                 and type_sanction='$type_sanction'";        
   }

   $resultatS=$pdo->query($requete);

   $resultatCount=$pdo->query($requeteCount);
   $tabCount=$resultatCount->fetch();
   $nb_S=$tabCount['countS'];
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
<tit>Gestion de diplome </tit>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/monstyle.css">
</head>
<body>
    <?php include("menu.php"); ?> 
    
    <div class="container">
        <div class="panel panel-success margetop">
           <div class="panel-heading"> sanction...</div>
           <div class="panel-body">
                
           <form method="get" action="sanction.php" class="form-inline">
                        <div class="form-group">
                           <input type="text" name="nomprenom" 
                                  placeholder="Taper Le Nom de Employe"
                                  class="form-control"
                                  value="<?php echo $nomprenom ?>"/>
                        </div>
                           <label for="type_sanction">Type_sanction:</label>
                            <select name="type_sanction" class="form-control" id="type_sanction"
                                   onchange="this.form.submit()">
                                <option value="all" <?php if($type_sanction=="all") echo "selected" ?>>Tout Les Employer sanctionner</option>
                                <option value="penurie de salaire"  <?php if($type_sanction=="penurie de salaire") echo "selected" ?>>penurie de salaire</option>
                                <option value="suspention de salaire"<?php if($type_sanction=="suspention de salaire") echo "selected" ?>>suspention de salaire</option>
                                
                            </select>
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-search"></span>
                            chercher...
                        </button>
                        &nbsp &nbsp
                        <a href="nouvellesanction.php">
                            <span class="glyphicon glyphicon-plus"></span>
                            Nouvelle sanctionnes</a>
                   </form>
               </div>
           </div> 
        
         

        <div class="panel panel-primary">
           <div class="panel-heading">liste des Sanctionnes(<?php echo $nb_S ?> sanction) </div>
           <div class="panel-body">
                 


           <table class="table table-striped table-bordered">
                       <thead>
                         <tr>
                             <th>Id</th><th>code_g</th><th>Nom_g</th><th>Prenom_g</th><th>causes</th><th>num_decision</th><th>type_sanction</th><th>Action</th>
                         </tr>
                       </thead>

                       <tbody>
                          <?php while($sanction=$resultatS->fetch()){ ?>
                            <tr>
                                 <td><?php echo $sanction['id'] ?> </td>
                                 <td><?php echo $sanction['code_g'] ?> </td>
                                 <td><?php echo $sanction['nom_g'] ?> </td>
                                 <td><?php echo $sanction['prenom_g'] ?> </td>
                                 <td><?php echo $sanction['causes'] ?> </td>
                                 <td><?php echo $sanction['num_decision'] ?> </td>
                                 <td><?php echo $sanction['type_sanction'] ?> </td>
    
                                   <td>
                                       <a href="editersanction.php?id=<?php echo $sanction['id'] ?> ">
                                           <span class="glyphicon glyphicon-edit"></span>
                                       </a>
                                       &nbsp &nbsp
                                       <a onclick="return confirm('Etes vous sur de vouloir supprimer les sanction')"
                                           href="supprimersanction.php?id=<?php echo $sanction['id'] ?> ">
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