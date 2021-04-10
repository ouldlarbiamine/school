<?php
session_start();

                                  include 'conect.php';      

if(empty($_SESSION['login'])){
	
	header("Location:logout.php?num=$id");

	
}
else
{
if(empty($_SESSION['admin']))
{
	  $_SESSION['admine']=$_GET['num'];
               
}


}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
                  <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
           
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->



               

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                       <div class="user-section">
                            <div class="user-section-inner">
                                <!--<img src="assets/img/user.jpg" alt="">-->
                            </div>
                            <div class="user-info">
                                <div> <strong></strong></div>
                                <div class="user-text-online">
                                   <!-- <span class="user-circle-online btn btn-success btn-circle "></span>-->&nbsp;Espace Admin
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                           
                        </div>
                        <!--end search section-->
                  

				  </li>
                       <li class="">
                        <a href="espace_admin.php">acceille</i></a>
                    </li>
					<!--  <li class="">
                        <a href="participer_conference.php"><i class="">participer conference</i></a>
                    </li>
										  <li class="">
                        <a href="publier_article.php"><i class="">publier article</i></a>
                    </li>-->

                    <li>
                        <a href="#">ajouter<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="ajouter_enseignant.php">ajouter enseignant</a>
                            </li>
                            <li>
                                <a href="ajouter_eleve.php">ajouter eleve </a>
                            </li>           
							<li>
                                <a href="ajouter_survaillant.php">ajouter survaillant </a>
                                
                            </li>
                        </ul>

                   <!-- </li>
					                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>service web<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="recherche_par_nom.php">recherche par nom</a>
                            </li>
                            <li>
                                <a href="recherche _par_description.php">recherche par description </a>
                            </li>           
							<li>
                                <a href="recherche_par_fourniseur.php">recherche  par fourniseur </a>
                            </li>
                        </ul>

                    </li>-->
          
               
              
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

               <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">forme d' ajoute eleve </h1>
				
                </div>
                <!--End Page Header -->

    <form action="ajouter_eleve2.php" method="POST">
                        
          
                               
   <label class="control-label" for="success" > nom:</label>
   <input type="text" class="form-control" id="success" name="nom" />
   <label class="control-label" for="success" > prénom:</label>
   <input type="text" class="form-control" id="success" name="prenom" />
   <label class="control-label" for="success" >  date naissance:</label>
   <input type="date" class="form-control" id="success" name="date_de_naissance" />
   <label class="control-label" for="success" > lieu naissance:</label>
   <input type="text" class="form-control" id="success" name="lieu_de_naissance" />
   <label class="control-label" for="success" > mot de passe:</label>
   <input type="text" class="form-control" id="success" name="mot_de_passe" />
   
        <label class="control-label" for="success" >  groupe:</label>

     <div class="form-group">
                                          
                                            <select class="form-control" name="id_groupe">
                                        <h4 class="media-heading"><?php


                        
         //echo "SELECT `id_groupe`,`id_niveu` FROM `groupe` WHERE 1";

$queryy= mysqli_query($con,"SELECT `id_groupe`,`id_niveu` FROM `groupe` WHERE 1");
          while(   $row=mysqli_fetch_assoc($queryy))
		  {
			 

             echo "<option > ".$row['id_groupe']." </option>";
			
		  }                                  
?>
                                            </select>
                                        </div>
    


   <br>
   <input type="reset"  value="annuler" class="btn btn-danger" >
   <input type="submit"  value="enregistrer"  class="btn btn-primary">
   
          
          
          
          
        
        
        </form>
            </div>

            

        </div>

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
