<?php
include 'db_con.php';
$return = false;
$username = '';
$first_name = '';
$last_name = '';
if ((isset($_REQUEST['u'])) && (isset($_REQUEST['p']))) {
	$u = $_REQUEST['u'];
	$p = $_REQUEST['p'];
	$qry = "select * from users where username='$u' and password=SHA2('$p', 512) limit 1";
	$result = $conn->query($qry);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$username = $row['username'];
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$_SESSION['user'] = serialize(array('result' => $return, 'username' => $username, 'first_name' => $first_name, 'last_name' => $last_name));
		}
		$return = true;
	}
}

echo json_encode(array('result' => $return, 'username' => $username, 'first_name' => $first_name, 'last_name' => $last_name));
?>