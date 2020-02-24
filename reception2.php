<?php

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
  $ligne = 2;
  foreach($tabData as $title=>$tab){ //pour chaque titre=>valeur du tableau
  
    echo 'colonne : <b>'.$title.'</b> valeur: '.$tab[$ligne-1]."<br />\n"; // ligne-1 car le tab commence en 0 
  
  }
  
  // via function
  var_dump(getLine($tabData,3));
  
  
}
else{

  die("no file to open");
}

//function sinon
function getLine($array,$num){

  $ligne = $num-1;
  $tmp = array(); //tableau
  foreach($array as $title=>$tab){ //pour chaque titre=>valeur du tableau
  
    $tmp[$title]=$tab[$ligne]; 
  }
  return $tmp;
}



?>
