<?php
include 'conect.php';
// echo $_POST['user']."<br>";
// echo $_POST['password']."<br>";
// echo $_POST['persone']."<br>";
$num=$_POST['user'];
$passe=$_POST['password'];
session_start();

                                  



	  $_SESSION['login']=1;


/*



*/
//echo "SELECT `mat`,`mdps` FROM `user`  WHERE `mat`=$num AND`mdps`='$passe'";

if($_POST['persone']=="admin"){
$query1= mysqli_query($con,"SELECT `mat`,`mdps` FROM `user`  WHERE `mat`='$num' AND `mdps`='$passe'");
$tab= mysqli_fetch_array($query1);
$id=$tab[0];
if ($id){
    

header("Location:espace_admin.php?num=$id");
}
 else {
    include 'error2.php';
    
}
}
        elseif($_POST['persone']=="eleve") {
        $query1= mysqli_query($con,"SELECT `matricule`,`nom`,`prenom`,`mot_de_passe`,`date_ de_ naissance`, "
                                 . "`lieu_ de_ naissance`,`id_ groupe` FROM `eleve` WHERE `mot_de_passe`='$passe' and `matricule`=$num");
        $tab= mysqli_fetch_array($query1);
        $id=$tab[0];
        if ($id){
        header("Location:espace_eleve.php?num=$id");
        }
        else {
		include 'error2.php';}

        }
                elseif($_POST['persone']=="enseigant"){
                $query1= mysqli_query($con, "");
                $tab=  mysqli_fetch_array($query1);
                $id=$tab[0];
                $query1= mysqli_query($con,"SELECT `matricule_enseignant`,`mot_de_passe_enseignant` FROM "
				."`enseignant`  WHERE `mot_de_passe_enseignant`='$passe' and `matricule_enseignant`=$num");
                $tab= mysqli_fetch_array($query1);
                $id=$tab[0];
                if ($id){
                header("Location:espace_enseigant.php?num=$id");
                }
                else {
    include 'error2.php';
                }
                }
elseif($_POST['persone']=="servaillant"){

$query1= mysqli_query($con,"SELECT `matricule`,`mot_de_passe` FROM `survaillant` WHERE  `mot_de_passe`='$passe' and `matricule`=$num");
echo "SELECT `matricule`,`mot_de_passe` FROM `survaillant` WHERE  `mot_de_passe`='$passe' and `matricule`=$num";
$tab=  mysqli_fetch_array($query1);
$id=$tab[0];
if ($id){
header("Location:espace_servaillant.php?num=$id");
}
else {
    include 'error2.php';
}
}


  elseif($_POST['persone']=="admin" and $passe=="123456"  and $num=="2630001" ) {
   header("Location:espace_admin.php");
}

        
 else {
            header("Location:index.php");
     
 }
      
?>