<?php
function sql($db,$command)
   {
   #$db='u469727502_map';
   $connection = mysqli_connect ('localhost', 'root', 'tpw100', $db);
   #$connection = mysqli_connect ('185.212.70.52', 'u469727502_u469727502_', 'Palmeiras_2022', $db);
    if ($connection -> connect_errno)
     {
        print "Failed to open database!<br>\n";
        return 0;
        exit();
     }
   $result = mysqli_query($connection, $command);
   mysqli_close($connection);
   return $result;
   }
?>
