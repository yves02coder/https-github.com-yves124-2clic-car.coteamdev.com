<?php 
// DB credentials.
/*define('DB_HOST','localhost');
define('DB_USER','soumouyves_bnbvqi79');
define('DB_PASS','Fu8m^MA#1wFUjc1J');
define('DB_NAME','carrentales');*/
// Establish database connection.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','carrentales');
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}



?>

