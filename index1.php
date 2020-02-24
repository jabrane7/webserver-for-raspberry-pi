<?php


session_start();
//$dir=$_SESSION['id'];
//$ids=$_SESSION['username'];

   


if ( !isset($_SESSION['username']) ) { 
header('Location: smart.php');
    Exit;  
} 

else 
{ 
} 

$file = 'nomf.csv'; //chemin vers le fichier
$row = 1; //compteur de ligne
$tabData = array(); //tableau des données CSV
$tabTitle = array(); //titre les colonnes

//ouvre le fichier
if (($handle = fopen($file, "r")) !== FALSE) {

  // on parcours le fichier csv tant qu'il n'y a plus de ligne
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data); //nombre de champs sur une ligne
    //récupère les champs sur une ligne
    for ($c=0; $c < $num; $c++) {
      if($row == 1){ // titre des colonnes csv
       
        $tabData[$data[$c]] = array(); //on créer un tableau avec le titre de la colonne
        $tabTitle[$c] = $data[$c];
     

            
      }
      else{
        
       $tabData[$tabTitle[$c]][] = $data[$c]; // on met les données dans le tableau
      
     }				
    }	
    $row++; // on incrémente la ligne
    }		

  //var_dump($tabData);
  
  //accés à la ligne 2 par exemple
 // $ligne = 1;
//  foreach($tabData as $title=>$tab){ 
//pour chaque titre=>valeur du tableau
    //  echo $Data ;
//echo $tabTitle[0];
  
     // echo 'colonne : <b>'.$title.'</b> valeur: '.$tab[$ligne-1]."<br />\n"; //   //ligne-1 car le tab commence en 0  
      // echo 'colonne1 : <b>'.$title.'</b> valeur1: '.$tab[$ligne-1]."<br />\n"; // //ligne-1 car le tab commence en 0  
  
 // }


  
  // via function
//  var_dump(getLine($tabData,1));
  
  
}
?>


<html>
<body>
<p>&nbsp;</p>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="72" align="left"><img src="ic_house2.png" width="169" height="119"  ></td>
  </tr>
</table>
<table width="700" border="0" align="center" bordercolor="#E3F1FF" bgcolor="#CCCCCC" class="wysiwyg">
  <tr> 
    <td width="900" height="100" align="center" class="thead">  <br>  PARAMETRE SMART HOUSE </td>
  </tr>
</table>
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0" class="alt2">
  <tr> 
    <td height="180" valign="middle">
<table width="426" border="0" align="center">
        <tr>
          <td width="420" align="center" class="titresmain2 style1">
		            </td>
        </tr>



     </table>
      <table width="700" height="98" border="0" align="center">
        <tr align="center"> 
          <td  height="41" align="center">
		  <form name="frm_index" method="post" action="envoi.php" >
		  <table width="301" border="0" align="center" class="panel">


                         


<tr align="center" bgcolor="#cfd1ff">
<td colspan="6" class="momaizcctbord"><strong><label for="utilisateur">Utilisateur</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="utilisateur" name="utilisateur" value="<?php echo $tabTitle[6] ; ?>"required/></p></a></strong></td>
 
<td colspan="6" class="momaizcctbord"><strong><label for="password">Mot de passe</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="password" name="password" value="<?php echo $tabTitle[7] ; ?>"required/></p></a></strong></td>
</tr>

<tr align="center" bgcolor="#cfd1ff">

<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">

<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff"> 

</tr>


<tr align="center" bgcolor="#cfd1ff">
<td colspan="6" class="momaizcctbord"><strong><label for="nom">Mail compte facebook</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="nom" name="nom" value="<?php echo $tabTitle[0] ; ?>" required/><br/></p></a></strong></td>


 
<td colspan="6" class="momaizcctbord"><strong><label for="prenom">Mot de passe facebook</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="prenom" name="prenom" value="<?php echo $tabTitle[1] ; ?>"required/><br/></p></a></strong></td>
 
<td colspan="6" class="momaizcctbord"><strong><label for="telephone">Ami facebook</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="tel" id="telephone" name="telephone" value="<?php echo $tabTitle[2] ; ?>"required/><br/></p></a></strong></td>

</tr>



<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">

<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff"> 

</tr>
 <tr align="center" bgcolor="#cfd1ff"> 
<td colspan="6" class="momaizcctbord"><strong><label for="mail">Compte Gmail</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="email" id="mail" name="mail" value="<?php echo $tabTitle[3] ; ?>"  required/><br/></p></a></strong></td>
 
<td colspan="6" class="momaizcctbord"><strong><label for="adresse">Mot de passe Gmail</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="adresse" name="adresse" value="<?php echo $tabTitle[4] ; ?>"  required/><br/></p></a></strong></td>
 

<td colspan="6" class="momaizcctbord"><strong><label for="ville">Mail Expiditeur</label></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="ville" name="ville"  value="<?php echo $tabTitle[5] ; ?>" required/><br/></p></a></strong></td>

</tr>


 
<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">

 <tr align="center" bgcolor="#cfd1ff">
<td colspan="6" class="momaizcctbord"><strong><label for="lampe1">Lampe 1</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="lampe1on" name="lampe1on" value="<?php echo $tabTitle[8] ; ?>"  required/><br/>
</p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="lampe1off" name="lampe1off" value="<?php echo $tabTitle[9] ; ?>"  required/><br/>
</p></a></strong></td>

<td colspan="6" class="momaizcctbord"><strong><label for="lampe2">Lampe 2</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="lampe2on" name="lampe2on" value="<?php echo $tabTitle[10] ; ?>"  required/><br/>
</p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="lampe2off" name="lampe2off" value="<?php echo $tabTitle[11] ; ?>"  required/><br/>
</p></a></strong></td>



<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">

 <tr align="center" bgcolor="#cfd1ff">
<td colspan="6" class="momaizcctbord"><strong><label for="lampe3">Lampe 3</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="lampe3on" name="lampe3on" value="<?php echo $tabTitle[12] ; ?>"  required/><br/>
</p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="lampe3off" name="lampe3off" value="<?php echo $tabTitle[13] ; ?>"  required/><br/>
</p></a></strong></td>

<td colspan="6" class="momaizcctbord"><strong><label for="micro">Micro Onde</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="microon" name="microon" value="<?php echo $tabTitle[14] ; ?>"  required/><br/>
</p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="microoff" name="microoff" value="<?php echo $tabTitle[15] ; ?>"  required/><br/>
</p></a></strong></td>

<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">

 <tr align="center" bgcolor="#cfd1ff">
<td colspan="6" class="momaizcctbord"><strong><label for="clim">Climatiseur</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="climon" name="climon" value="<?php echo $tabTitle[16] ; ?>"  required/><br/>
</p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="climoff" name="climoff" value="<?php echo $tabTitle[17] ; ?>"  required/><br/>
</p></a></strong></td>

<td colspan="6" class="momaizcctbord"><strong><label for="tv">TV</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="tvon" name="tvon" value="<?php echo $tabTitle[18] ; ?>"  required/><br/>
</p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="tvoff" name="tvoff" value="<?php echo $tabTitle[19] ; ?>"  required/><br/>
</p></a></strong></td>


<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">
<tr align="center" bgcolor="#cfd1ff">

 <tr align="center" bgcolor="#cfd1ff">
<td colspan="6" class="momaizcctbord"><strong><label for="Arrosage">Arrosage</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="arroon" name="arroon" value="<?php echo $tabTitle[20] ; ?>"  required/><br/>
</p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="arrooff" name="arrooff" value="<?php echo $tabTitle[21] ; ?>"  required/><br/>
</p></a></strong></td>

<td colspan="6" class="momaizcctbord"><strong><label for="Temperature">Temperature</label></p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="temp1" name="temp1" value="<?php echo $tabTitle[22] ; ?>"  required/><br/>
</p></a></strong></td>

<td colspan="4" class="momaizcctbord"><strong><input type="text" id="temp2" name="temp2" value="<?php echo $tabTitle[23] ; ?>"  required/><br/>
</p></a></strong></td>




</tr>

<tr align="center" bgcolor="#cfd1ff">


<input type="submit" value="Envoyer"/>


</form>

<form method="post" action="reception2.php" enctype="multipart/form-data">


             
              
          </table>
		  </form>		  </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<table width="700" border="0" align="center" class="tborder">
  <tr> 
    <td align="center" class="thead">JBM &copy; 2019</td>
  </tr>
</table>
 
              

</body>
</html>

