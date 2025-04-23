<?php
  echo " Pattern -1 Everything is same <br/>";
   for($i=1; $i<=3; $i++)
   {
    for ($j=1; $j<=3; $j++)
    {
        echo "*";
    }
    echo "<br/>";
   }

   echo "-----------------------<br/>";

   echo " Pattern -2 Column is same <br/>";
   for($i=1; $i<=3; $i++)
   {
    for ($j=1; $j<=3; $j++)
    {
        echo $j . "  ";
    }
    echo "<br/>";
   }

   echo "-----------------------<br/>"; 

   echo " Pattern -3 row is same <br/>";
   for($i=1; $i<=3; $i++)
   {
    for ($j=1; $j<=3; $j++)
    {
        echo $i . "  ";
    }
    echo "<br/>";
   }

   echo "-----------------------<br/>"; 

   echo " Pattern -4 nothing is same <br/>";
   $a=1;
   for($i=1; $i<=3; $i++)
   {
    for ($j=1; $j<=3; $j++)
    {
        echo $a . "  ";
        $a++; 
    }
    echo "<br/>";
   }

   echo "-----------------------<br/>";

   echo " Pattern -5 inverted right angle triangle <br/>";
   $n = 4; // Number of rows

   for ($i = $n; $i >= 1; $i--) {
       // Print spaces
       for ($j = 1; $j <= $n - $i; $j++) {
           echo "&nbsp;";
       }

       // Print stars
       for ($k = 1; $k <= $i; $k++) {
           echo "*";
       }

       echo "<br>";
   }

   ?>