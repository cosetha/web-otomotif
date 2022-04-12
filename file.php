<?php
     $lines = array();
     $fopen = fopen('file.txt', 'r');
     while (!feof($fopen)) {
         $line=fgets($fopen);
         $line=trim($line);
         $lines[]=$line;
     }
     fclose($fopen);
     $finalOutput = array();
     foreach ($lines as $string)
     {
         $string = preg_replace('!\s+!', ' ', $string);
         $row = explode(",", $string);
         array_push($finalOutput,$row);
     }     
    
?>