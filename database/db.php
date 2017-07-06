<?php
 echo '
<html>
 <head>
  <title> Tower Trouble Web Application </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.mi n.js">
  </script>
 </head>
 <body>
 ';

     $connection = @mysqli_connect('127.0.0.1','user','user','Players');

     if(mysqli_connect_errno())
     {
       echo "<h4> Failed to connect </h4>".mysqli_connect_error();
     }
     $query = "select * from Players;";

     $resultset = mysqli_query($connection, $query);

     echo "<h4> Players </h4>";
     echo "<table>";
     echo "</table>";

echo '
 <form enctype="multipart/form-data" 
  action="http://localhost/db.php">       

 </form>
</html>
';
?>
                                                                                                1,1           Top
