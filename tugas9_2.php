<?php
  for ($i=2; $i <=200 ; $i++) {
    if($i==2||$i==3||$i==5||$i==7||$i==11||$i%2!=0&&$i%3!=0&&$i%5!=0&&$i%7!=0&&$i%11!=0){
      echo "$i,";
    }
  }
 ?>
