<?php
session_start();

                                  include 'conect.php';      

if(empty($_SESSION['login'])){
	
	header("Location:logout.php?num=$id");

	
}
else
{
if(empty($_SESSION['servailant']))
{
	  $_SESSION['servailant']=$_GET['num'];
               
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
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/logo.png" alt="" />
                </a>
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
                        
                            <div class="user-info">
                                <div> <strong></strong></div>
                                <div class="user-text-online">
                                   &nbsp;Espace Surveillant
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
            
                       <li class="">
                        <a href="espace_servaillant.php">Acceil</i></a>
                    </li>
                     </li>
                       <li class="">
                        <a href="Delibiration.php">Délibiration</i></a>
                    </li>
					<!--  <li class="">
                        <a href="participer_conference.php"><i class="">participer conference</i></a>
                    </li>
										  <li class="">
                        <a href="publier_article.php"><i class="">publier article</i></a>
                    </li>-->

                    <li>
                        <a href="#"><i class=""></i>Ajouter<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="ajout_nv.php"> Niveu</a>
                            </li>
                            <li>
                                <a href="ajouter-g.php">groupe </a>
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
                    <h1 class="page-header">
					
					
					
					
					 <?php
include 'conect.php';

$lbl_niveu=$_POST['niveu'];
$id_niveu=$_POST['id_niveu'];



$query1= mysqli_query($con, "SELECT max(`matricule`) FROM `eleve` WHERE 1");
$tab=  mysqli_fetch_array($query1);
$matricule=$tab[0]+1;

// echo "INSERT INTO `eleve` (`matricule`, `nom`, `prenom`, `mot_de_passe`, `date_ de_ naissance`, `lieu_ de_ naissance`, `id_ groupe`)"
//." VALUES ('$matricule', '$nom', '$prenom', '$mot_de_passe', '$date_de_naissance', '$lieu_de_naissance', '$id_groupe');";
$query2=mysqli_query($con, "INSERT INTO `niveau` (`id_niveau`, `libelle_niveau`)"
." VALUES ('$id_niveu', '$lbl_niveu');");


//echo"INSERT INTO `niveu` (`id_niveau`, `libelle_niveau`)"
//." VALUES ('$id_niveu', '$lbl_niveu');";
/*echo "INSERT INTO `survaillant` (`matricule`, `nom`, `prenom`, `telephone`, `mot_de_passe`)"
." VALUES ('$matricule', '$nom', '$prenom', '$telephon', '$mot_passe');";*/
if($query2)
{
    echo "insertion est terminer";
}
 else {
    echo "insertion est refusier";    
    
}?>
					 
					
					
					
					
					</h1>
	
                </div>
                <!--End Page Header -->
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
