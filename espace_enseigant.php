<?php
session_start();

                                  include 'conect.php';      

if(empty($_SESSION['login'])){
	
	header("Location:logout.php?num=$id");

	
}
else
{
if(empty($_SESSION['enseignat']))
{
	  $_SESSION['enseignat']=$_GET['num'];
               
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
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                             </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>

                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                          </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

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
                     <!-- <span class="user-circle-online btn btn-success btn-circle "></span>-->&nbsp;Espace Enseignant
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
         
                       <li class="">
                        <a href="espace_enseigant.php">acceille</i></a>
                    </li>
					<!--  <li class="">
                        <a href="participer_conference.php"><i class="">participer conference</i></a>
                    </li>
										  <li class="">
                        <a href="publier_article.php"><i class="">publier article</i></a>
                    </li>-->

                    <li>
                        <a href="#">La saisie des notes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="sesier_not_tr1.php">1??r trimestre</a>
                            </li>
                            <li>
                                <a href="sesier_not_tr2.php">2??me trimestre </a>
                            </li>           
							<li>
                                <a href="sesier_not_tr3.php">3??me trimestre </a>
                                
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
                
							
							
							
							
                                  <div class="form-group">
								                    <h1 class="page-header">beinvenue dans votre espace </h1>

                                      </div>
									   								                    <h1 class="">
  <?php
             
		   

             $donnes=$_SESSION['enseignat'];
			// echo $donnes;    SELECT `matricule_enseignant`,`nom_enseignant`,`prenom_eneignant`,`num_telephone_enseignant`,`mot_de_passe_enseignant` FROM `enseignant` WHERE 1
          $query= mysqli_query($con,"SELECT `matricule_enseignant`,`nom_enseignant`,".
		  "`prenom_eneignant`,`num_telephone_enseignant`,`mot_de_passe_enseignant` FROM `enseignant`".
		  " WHERE  `matricule_enseignant`=\"$donnes\";");

          $b=0;     
while ($row= mysqli_fetch_assoc($query)) {//1
     $matricule_enseignant=$row['matricule_enseignant'];
	 $nom_enseignant=$row['nom_enseignant'];  
	 $prenom_eneignant=$row['prenom_eneignant'];  // echo "<br>$num  : $nom ";
	 $num_telephone_enseignant=$row['num_telephone_enseignant'];  // echo "<br>$num  : $nom ";

           $b=1;  
          }
		  
		  
		 if ($b==1)

		 {	

echo "<b>Matricule </b> : $matricule_enseignant<br>";
echo "<b>Nom </b>:$nom_enseignant<br> ";
echo " <b>Prenom  </b>: $prenom_eneignant <br>";
echo " <b>Num telephone </b>: $num_telephone_enseignant <br>";

		 
		 
		 
		 }			 
             
			 else{
				 
		echo "  <br>";
		 
				 
				 
			 }
             
             ?>
			 
			 
			 </h1>
									  
								
                </div>
                <!--End Page Header -->
            </div>

            

        </div>
        <!-- end page-wrapper -->

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
