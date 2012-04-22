<?php

include 'db_connect.php';  //include the db_connect.php file

//Create a new connection
$get = new Connection("host","username","password","database");

//Format - 'use variable you created connection with' = 'use variable you created connection with'->query("database defined in db_connect.php", "SQL Statement");
$get = $get->query(,"SELECT * FROM `users`");

//Fetch the data
$data = $get->fetch();


?>