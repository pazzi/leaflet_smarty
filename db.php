<?php
function sql($db,$command)
   {
   $connection = mysqli_connect ('localhost', 'root', 'tpw100', $db);
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