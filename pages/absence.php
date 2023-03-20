<?php
    require_once("connexiondb.php");
   
    /*
     
    if(isset($_GET['nomF']))
        $nome=$_GET['nomF'];
    else
         $nomf="";
    */

    $nomA=isset($_GET['nomA'])?$_GET['nomA']:"";
    $prenom_g=isset($_GET['prenom_g'])?$_GET['prenom_g']:"all";

   /* $size=isset($_GET['size'])?$_GET['size']:4;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;*/

    if($prenom_g=="all"){
          $requete="select * from absence
                   where nom_g like '%$nomA%'";
                  /* limit $size
                   offset $offset";*/

          $requeteCount="select count(*) countF from absence
                   where nom_g like '%$nomA%'";         

    }else{
         $requete="select * from absence
                  where nom_g  like '%$nomA%'
                  and prenom_g='$prenom_g'";
                 /* limit $size
                  offset $offset";*/

         $requeteCount="select count(*) countA from absence
                  where nom_g like '%$nomA%'
                  and prenom_g='$prenom_g'";        
    }

    $resultatA=$pdo->query($requete);

    $resultatCount=$pdo->query($requeteCount);
    $tabCount=$resultatCount->fetch();
    $nb_A=$tabCount['countA'];
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
        <title>Gestion d'absance </title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            <div class="panel panel-success margetop">
                <div class="panel-heading">Rechercher d'un abscent...</div>
                <div class="panel-body">
                    <form method="get" action="absence.php" class="form-inline">
                        <div class="form-group">
                           <input type="text" name="nomA" 
                                  placeholder="Taper Le Nom de Employe"
                                  class="form-control"
                                  value="<?php echo $nomA ?>"/>
                        </div>
                           
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-search"></span>
                            chercher...
                        </button>
                        &nbsp &nbsp
                        <a href="nouvelleabsence.php">
                            <span class="glyphicon glyphicon-plus"></span>
                            Nouvelle Absance</a>
                   </form>
               </div>
           </div> 
           <div class="panel panel-primary">
                <div class="panel-heading">Liste des Absences (<?php echo $nb_A ?> absence)</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                       <thead>
                         <tr>
                             <th>Id</th><th>code_g</th><th>Nom</th><th>Prenom</th><th>Date_abs</th><th>Horaire</th><th>Action</th>
                         </tr>
                       </thead>

                       <tbody>
                          <?php while($absence=$resultatA->fetch()){ ?>
                            <tr>
                                 <td><?php echo $absence['id_abs'] ?> </td>
                                 <td><?php echo $absence['code_g'] ?> </td>
                                 <td><?php echo $absence['nom_g'] ?> </td>
                                 <td><?php echo $absence['prenom_g'] ?> </td>
                                 <td><?php echo $absence['date_abs'] ?> </td>
                                 <td><?php echo $absence['horaire'] ?> </td>
                                 
                                   <td>
                                       <a href="editerabsence.php?id_abs=<?php echo $absence['id_abs'] ?> ">
                                           <span class="glyphicon glyphicon-edit"></span>
                                       </a>
                                 &nbsp&nbsp
                                       <a onclick="return confirm('Etes vous sur de vouloir supprimer les absences')"
                                           href="supprimerabsence.php?id_abs=<?php echo $absence['id_abs'] ?> ">
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
    