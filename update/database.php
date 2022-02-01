<?php
   $servername='ddev-phpfastcreate-db';
   $username='db';
   $password='db';
   $dbname = "db";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   if(!$conn){
      die('Could not Connect My Sql:' .mysql_error());
   }
?>