Easy-PHP-MySQL
==============

Easy-PHP-MySQL simplifies and shortens the process of connecting and querying one or more databases in PHP.

<span style="font-size: 16px; font-weight: bold;">Usage:</span>

1) Place db_connect.php on your server.
<br /><br />2) Include db_connect.php in any file you wish to have database communication with. (For help including, view "example.php"
<br /><br />3) Create a connection with connection details: '$users = new Connection("host","user","password","database");' (choose a variable that reflects what you are doing, I used "$users").
<br /><br />6) Choose your database and create a statement: '$users = $users->query("SELECT * FROM `users`");' (IMPORTANT: Use the same name for both variables)
<br /><br />7) Now you can get the data from your query using `$users->fetch()`;

Example:

Create a new connection
`$users = new Connection("host","user","password","database");`

Create a query (View documentation for an example).
`$users = $users->query("SELECT * FROM users");`

Get the data from the query.
`$data = $db1->fetch();`
Fetch will return data as an  array with row names ie. `$data[0]['row_name'];`
This way the data is easy to loop through
`foreach($data as $d){`
`  echo $d['row_name'];`
`}`



For more [complete] examples check out example.php


More/Better Documentation and Examples coming soon.