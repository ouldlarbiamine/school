<?php
session_start();

                                  include 'conect.php';      

if(empty($_SESSION['login'])){
	
	header("Location:logout.php?num=$id");

	
}
else
{
if(empty($_SESSION['eleve']))
{
	  $_SESSION['eleve']=$_GET['num'];
               
}


}
$mat=$_SESSION['eleve'];


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
 
 
 
 
 
 
 
 
 				  
				  <table style="width:100%" border="1">
  <tr>
    <th>matier</th>
    <th>examen</th>
    <th>not_cc`</th> 
    <th>devoire</th>
    <th>cof</th>
  </tr>	  
			 
				  

				  
				  
				  
				   <?php
             
		   

             $matricule_enseignant=$_SESSION['eleve'];
			 
			
			 
			  $query= mysqli_query($con,"SELECT `id_matier`,`note_composition`,`not_cc`,`note_devoir`,`id_note`,`cof` FROM `note` WHERE `id_note`
in  (SELECT `id_note` FROM `avoir2` WHERE `matricule_eleve`=$matricule_enseignant)");
			// echo $donnes;    SELECT `matricule_enseignant`,`nom_enseignant`,`prenom_eneignant`,`num_telephone_enseignant`,`mot_de_passe_enseignant` FROM `enseignant` WHERE 1
          


          $b=0;     
while ($row= mysqli_fetch_assoc($query)) {//1
     $id_matier=$row['id_matier'];
	 $note_composition=$row['note_composition'];  
	 $not_cc=$row['not_cc'];  // echo "<br>$num  : $nom ";
	 $note_devoir=$row['note_devoir'];  // echo "<br>$num  : $nom ";
	 $cof=$row['cof'];  // echo "<br>$num  : $nom ";



    echo"   <tr>
    <td>$id_matier</td>
    <td>$note_composition</td> 
    <td>$not_cc</td>
    <td>$note_devoir</td>
    <td>$cof</td>
  </tr>";
  
  
  

}
             
	
			 
			 
			      ?>
				  
				  
				  
				  </table>
  
  
  
                      
                      
              
                       <input id="impression" name="impression" type="button" onclick="imprimer_page()" value="Imprimer cette page" />
                      
                     </div>  </fieldset>    




    
<script type="text/javascript">
function imprimer_page(){
  window.print();
}
</script> 
 
 
 
 
 
 
 
 
        <!-- end page-wrapper -->

    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
