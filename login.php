<?php
if (isset($_SESSION['user'])) {
	header("location: home.php");
}else{
	include 'pages/header.html';
?>


<body class="body">
<div class="container">
	<div class="row">
		<div class="col-lg-4">&nbsp;</div>
		<div class="col-lg-4">
			<br>
			<h1 align="center">WAH ITS Login</h1>
			<br>
			<hr>
			<br>
			<form class="form form-action">
				<label class="sr-only">Username</label>
				  <div class="input-group">
				    <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
				    <input type="text" class="form-control" placeholder="Username" name="usn" required>
				  </div>
				  <br>
				<label class="sr-only">Password</label>
				  <div class="input-group">
				    <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
				    <input type="password" class="form-control" placeholder="Password" class="pw" required>
				  </div>
			</form>		
		</div>
	</div>
	
</div>

</body>
</html>



<?php
}

?>