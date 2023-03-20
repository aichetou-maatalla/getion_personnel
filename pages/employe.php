<?php
    require_once("connexiondb.php");
   
    /*
     
    if(isset($_GET['nomF']))
        $nome=$_GET['nomF'];
    else
         $nomf="";
    */

    $nomf=isset($_GET['nomF'])?$_GET['nomF']:"";
    $departement=isset($_GET['departement'])?$_GET['departement']:"all";

   /* $size=isset($_GET['size'])?$_GET['size']:4;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;*/

    if($departement=="all"){
          $requete="select * from employe
                   where nom_g like '%$nomf%'";
                  /* limit $size
                   offset $offset";*/

          $requeteCount="select count(*) countF from employe
                   where nom_g like '%$nomf%'";         

    }else{
         $requete="select * from employe
                  where nom_g  like '%$nomf%'
                  and departement='$departement'";
                 /* limit $size
                  offset $offset";*/

         $requeteCount="select count(*) countF from employe
                  where nom_g like '%$nomf%'
                  and departement='$departement'";        
    }

    $resultatF=$pdo->query($requete);

    $resultatCount=$pdo->query($requeteCount);
    $tabCount=$resultatCount->fetch();
    $nb_g=$tabCount['countF'];
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
        <tit>Gestion employe </tit>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            <div class="panel panel-success margetop">
                <div class="panel-heading">Rechercher d'un Employe...</div>
                <div class="panel-body">
                    <form method="get" action="employe.php" class="form-inline">
                        <div class="form-group">
                           <input type="text" name="nomF" 
                                  placeholder="Taper Le Nom de Employe"
                                  class="form-control"
                                  value="<?php echo $nomf ?>"/>
                        </div>
                           <label for="departement">departement:</label>
                            <select name="departement" class="form-control" id="departement"
                                   onchange="this.form.submit()">
                                <option value="all" <?php if($departement=="all") echo "selected" ?>>Tout Les Employer</option>
                                <option value="mi"  <?php if($departement=="mi") echo "selected" ?>>Math / Inf</option>
                                <option value="gio"<?php if($departement=="gio") echo "selected" ?>>Giologie</option>
                                <option value="bio"<?php if($departement=="bio") echo "selected" ?>>Biologie</option>
                                <option value="ph"<?php if($departement=="ph") echo "selected" ?>>Physique</option>
                                <option value="chimi"<?php if($departement=="chimi") echo "selected" ?>>Chimi</option>
                            </select>
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-search"></span>
                            chercher...
                        </button>
                        &nbsp &nbsp
                        <a href="nouvelleEmploye.php">
                            <span class="glyphicon glyphicon-plus"></span>
                            Nouvelle Employe</a>
                   </form>
               </div>
           </div> 
           <div class="panel panel-primary">
                <div class="panel-heading">Liste des Employe (<?php echo $nb_g ?> employe)</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                       <thead>
                         <tr>
                             <th>Id_g</th><th>code_g</th><th>Nom_g</th><th>Prenom_g</th><th>Date_ne</th><th>Telephone</th><th>Email</th><th>Fonctionalite</th><th>Departement</th><th>Action</th>
                         </tr>
                       </thead>

                       <tbody>
                          <?php while($employe=$resultatF->fetch()){ ?>
                            <tr>
                                 <td><?php echo $employe['id_g'] ?> </td>
                                 <td><?php echo $employe['code_g'] ?> </td>
                                 <td><?php echo $employe['nom_g'] ?> </td>
                                 <td><?php echo $employe['prenom_g'] ?> </td>
                                 <td><?php echo $employe['date_ne'] ?> </td>
                                 <td><?php echo $employe['telephone'] ?> </td>
                                 <td><?php echo $employe['email'] ?> </td>
                                 <td><?php echo $employe['fonctionalite'] ?> </td>
                                 <td><?php echo $employe['departement'] ?> </td>
                                   <td>
                                       <a href="editerEmploye.php?id_g=<?php echo $employe['id_g'] ?> ">
                                           <span class="glyphicon glyphicon-edit"></span>
                                       </a>
                                 &nbsp&nbsp
                                       <a onclick="return confirm('Etes vous sur de vouloir supprimer les employe')"
                                           href="supprimerEmploye.php?id_g=<?php echo $employe['id_g'] ?> ">
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