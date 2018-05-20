<?php
if (!isset($_SESSION['user'])) {
	header("location: login.php");
}else{
	include 'pages/header.html';
	include 'pages/nav.html';
	?>
<body>
<h1>HI</h1>
	
</body>
</html>
<?php
}

?>