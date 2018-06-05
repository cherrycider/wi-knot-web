<?php

//mysql :
//$db = mysqli_connect ("localhost","wi_knot_application","000000","wi_knot");
  
  

// PG database : - extend the app to add a PDO connection

//$dbopts = parse_url(getenv('DATABASE_URL'));
//$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
//               array(
//                'pdo.server' => array(
//                   'driver'   => 'pgsql',
//                   'user' => $dbopts["user"],
//                   'password' => $dbopts["pass"],
//                   'host' => $dbopts["host"],
//                   'port' => $dbopts["port"],
//                   'dbname' => ltrim($dbopts["path"],'/')
//                   )
//               )
//);

//$db = pg_connect ("
//			host=$dbopts["host"] 
//			port=$dbopts["port"] 
//			dbname=ltrim($dbopts["path"] ,'/')
//			user=$dbopts["user"] 
//			password=$dbopts["pass"]
//		");

//most simple line:
$db = pg_connect (getenv("DATABASE_URL"));

?>
