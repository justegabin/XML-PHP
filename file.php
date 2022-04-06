<?php
  $xmldata = simplexml_load_file("file.xml") or die("Failed to load"); // acceder au fichier file.xml

// Declaration des variables  
  $resultatchannel1 = " " ;   //  channel1
  $resultatchannel3 = " " ;   //  channel1
  $streaming = " " ;          //  Streaming

  $resultatchannel1 =  $xmldata->streaming['channel1'];  // on recupere la valeur de channel 1 
  $resultatchannel3 =  $xmldata->streaming['channel3'];  // on recupere la valeur de channel 3 
  $streaming =  $xmldata->streaming;                    // on recupere la valeur se trouvant entre les balise streaming 



   // on teste si la valeur de channel1 est à True
  if ($resultatchannel1 == "True" )
  {
      echo "le résulat de channel1  est TRUE " ;
  }

   // on teste si la valeur de channel1 est à False
  elseif ($resultatchannel1 == "False" )
  {
      echo "le résulat de channel1   est false " ;
  }
  
  else
  {

    echo "le résulat n'est pas  TRUE  c'est " . $resultatchannel1  ;
  }


  echo " <hr/>" ;


  // on teste si la valeur de channel3 est à True 
  if ($resultatchannel3 == "True" )
  {
      echo "le résulat de channel3  est TRUE " ;
  }


  // on teste si la valeur de channel3 est à False
  elseif ($resultatchannel3 == "False" )
  {
      echo "le résulat de channel3   est false " ;
  }
  
  else
  {

    echo "le résulat n'est pas  TRUE  c'est " . $resultatchannel3  ;
  }


?>