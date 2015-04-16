<?php
// Why is this important ? Why does localhost have to be first?
$mysqli = new mysqli('localhost', 'root', 'root', 'todo');
// if $mysqli fails connect error, then we want it to die and have this meessage
if ($mysqli->connect_error) {
	die('Connect Error (' . $mysqli->connnect_errno .')'
		. $mysqli->connect_error);
}
else {
 // echo "Connection Made";
}
$mysqli->close();

?>