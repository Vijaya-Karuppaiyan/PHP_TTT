<!DOCTYPE html>
<html>
<head>
    <title>Sum of Digits</title>
</head>
<body>
    <h2>Sum of All Digits in a Number</h2>
   <?php
     $number=456;
     $originalNumber=$number;
     $sum=0;
     while($number>0)
     {
        $digit = $number%10;
        $sum+=$digit;
        $number = $number/10;
     }

     echo "<br> Original numer:  $originalNumber" ;
     echo " <br> Sum of Digits :  $sum";
   ?>

</body>
</html>
