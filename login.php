<?php
if (isset($_SESSION['user'])) {
	header("location: index.php");
}else{
	include 'pages/header.html';
?>


<body>
<div class="container text-center">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-xs-1">&nbsp;</div>
		<div class="col-lg-8 col-md-8 col-xs-10">
			<br>
			<h1 align="center" class="jumbotron">WAH Facility Issue and Inquiry Trackin' System (WAHFIITS) Login Interface</h1>
			<hr>
			<br>
			
			<form class="form form-action">
				<div class="col-lg-12 col-md-12 mb-4">

                    <div class="md-form">
                        <input type="text" id="usn" class="form-control" required>
                        <label for="form1" class="">Username*</label>
                    </div>

                </div>
				  <br>
				  <div class="col-lg-12 col-md-12 mb-4">

                    <div class="md-form">
                        <input type="password" id="pw" class="form-control" required>
                        <label for="form1" class="">Password*</label>
                    </div>

                </div>
				
				  <span class="pull-right">*Required fields</span>
				  <br><br>
				  		
				  
			</form>	
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-6 col-md-12">
			  			<button class="btn btn-primary btn-lg waves-effect waves-light" onclick="login()" id="loginbtn">Login</button>
			  		</div>
			  		<div class="col-lg-6 col-md-12">
			  			<button class="btn btn-warning btn-lg waves-effect waves-light" onclick="clear()" id="clearbtn">Clear</button>
			  		</div>
				</div>
			</div>
				
		</div>
		<div class="col-lg-2 col-md-2 col-xs-1">&nbsp;</div>
	</div>
<script type="text/javascript">
	function login(){
		if (($("#usn").val()!=="") && ($("#pw").val()!=="")) {
			// $("#loginbtn, #clearbtn, #usn, #pw").attr("disabled", "disabled");
			toastr.info('','Logging in',{"progressBar": true});
			$.ajax({
				url: 'functions/auth.php?u=' + $("#usn").val() + '&p=' + $("#pw").val(),
				success: function(result){
					result_ = JSON.parse(result);
					localStorage.setItem("user", result);
					if(result_.result == true) {
						var cons = JSON.parse(localStorage.user)
						toastr.success("Welcome, " + cons.first_name + ' ' + cons.last_name);

						//GO TO INDEX
						$("#body").load('pages/home.html');

					}else{
						toastr.error("Error: Wrong Password or Internal Server Error 500");
					}
				},
				error: function(){
					toastr.error('',"<b>Error communicating with server</b>",{"progressBar": true});
					$("#loginbtn, #clearbtn, #usn, #pw").removeAttr("disabled");
				}
			});
		}else{
			toastr.warning('','Input required fields',{"progressBar": true});
		}
		
	}
	function clear(){
		$("#usn").val('');
		$("#pw").val('');
	}
</script>
</body>
    <!-- <script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/mdbootstrap/js/jquery-3.2.1.min.js"></script>
	<script src="node_modules/mdbootstrap/js/mdb.min.js"></script>
	<script src="node_modules/mdbootstrap/js/popper.min.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
	<script src="node_modules/toastr/build/toastr.min.js"></script> -->
</html>



<?php
}

?>