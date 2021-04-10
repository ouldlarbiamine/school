
				  
				  
				  
				   <?php
             
		   

             $donnes=$_SESSION['eleve'];
			 
			
			 
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
  </tr>"

		 
             
	
			 
			 
			      ?>
				  