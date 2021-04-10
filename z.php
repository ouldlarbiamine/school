        <?php

include 'conect.php';

//$query=  mysqli_query($con,"SELECT * FROM `sanse`");         id_groupe
$query=  mysqli_query($con,"SELECT `nom`,`prenom`,`matricule` FROM `eleve` WHERE `id_ groupe`=$id_groupe");
               
//  oierient les etudient  choizi
     //   echo "<caption>  </caption>";
     
while ($row= mysqli_fetch_assoc($query)) {//1
    $nom=$row['nom']; $prenom=$row['prenom'];  
     $matricule=$row['matricule'];

                  
                   


                echo "<tr><td>  $matricule </td><td>  $nom </td><td>$prenom  </td> <td>"
. " <div class=\"btn-group\"><a class=\"btn btn-primary\"   href=\"sesier_not_tr1_3.php?mat=$matricule\"><i class=\"icon_check_alt2\"  ></i>sesier_not</a> ";

           echo "</td> </tr></div>" 
."</tr>";
}
echo "</table>";
?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>