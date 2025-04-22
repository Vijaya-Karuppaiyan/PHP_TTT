<!DOCTYPE html>
<html lang="en">
<head>
    <title>Day Name</title>
</head>
<body>
<h2>Day Name Based on Given Number</h2>
     <?php
       $day=9;

       switch($day)
       {
        case 1:  echo "Sunday";
                 break;
        case 2:  echo "Monday";
                 break;
        case 3:  echo "Tuesday";
                 break;
        case 4:  echo "Wednesday";
                 break;
        case 5:  echo "Thursday";
                 break;
        case 6:  echo "Friday";
                 break;
        case 7:  echo "Saturday";
                 break;
        default:
               echo " Invalid day number"
       }
         
       ?>
    
</body>
</html>