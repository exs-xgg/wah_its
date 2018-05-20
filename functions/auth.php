<?php
include 'db_con.php';
$result = false;
if ((isset($_GET['u'])) && (isset($_GET['p']))) {
	$u = $_GET['u'];
	$p = $_GET['p'];
	$qry = "select * from users where username=$u and pw=SHA2($p, 512) limit 1";
}

echo json_encode(array('result' => $result));
?>