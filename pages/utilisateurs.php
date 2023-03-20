<?php
    require_once('identifier.php');

    require_once("connexiondb.php");
   
    $login=isset($_GET['login'])?$_GET['login']:"";

   /* $size=isset($_GET['size'])?$_GET['size']:4;
    $page=isset($_GET['page'])?$_GET['page']:1;
    $offset=($page-1)*$size;*/

 
    $requeteUser="select * from utilisateur where login like '%$login%'";
    $requeteCount="select count(*) countUser from utilisateur";

    $resultatUser=$pdo->query($requeteUser);
    $resultatCount=$pdo->query($requeteCount);


    $tabCount=$resultatCount->fetch();
    $nbrUser=$tabCount['countUser'];
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
        <title>Gestion des utilisateurs </title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/monstyle.css">
    </head>
    <body>
        <?php include("menu.php"); ?> 
    
        <div class="container">
            <div class="panel panel-success margetop">
                <div class="panel-heading">Rechercher des utilisateurs...</div>
                <div class="panel-body">
                    <form method="get" action="utilisateurs.php" class="form-inline">
                        <div class="form-group">
                           <input type="text" name="login" 
                                  placeholder="Login"
                                  class="form-control"
                                  value="<?php echo $login ?>"/>
                        </div>
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-search"></span>
                            chercher...
                        </button>
                   </form>
               </div>
           </div> 

           <div class="panel panel-primary">
                <div class="panel-heading">Liste des utilisateurs (<?php echo $nbrUser ?> utilisateurs)</div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                       <thead>
                         <tr>
                             <th>login</th><th>Email</th><th>Role</th><th>Action</th>
                         </tr>
                       </thead>

                       <tbody>
                          <?php while($user=$resultatUser->fetch()){ ?>
                            <tr class="<?php echo $user['etat']==1?'success':'danger'?>">
                                 <td><?php echo $user['login'] ?> </td>
                                 <td><?php echo $user['email'] ?> </td>
                                 <td><?php echo $user['role'] ?> </td>
                                    <td>
                                       <a href="editerUtilisateur.php?idUser=<?php echo $user['iduser'] ?> ">
                                           <span class="glyphicon glyphicon-edit"></span>
                                       </a>
                                       &nbsp; &nbsp;
                                       <a onclick="return confirm('Etes vous sur de vouloir supprimer employe cet Utilisateur')"
                                           href="supprimerUtilisateur.php?idUser=<?php echo $user['iduser'] ?> ">
                                           <span class="glyphicon glyphicon-trash"></span>
                                       </a>
                                       &nbsp; &nbsp;
                                        <a href="activerUtilisateur.php?idUser=<?php echo $user['iduser'] ?>&etat=<?php echo $user['etat'] ?>">
                                            <?php
                                                if($user['etat']==1)
                                                     echo '<span class="glyphicon glyphicon-remove"></span>';
                                                else
                                                     echo '<span class="glyphicon glyphicon-ok"></span>'; 
                                            ?>
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