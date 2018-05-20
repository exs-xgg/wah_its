<?php
if (isset($_SESSION['user'])) {
	header("location: index.php");
}else{
	include 'pages/header.html';
?>


<body class="body">
<div class="container">
	<div class="row">
		<div class="col-lg-2 col-md-2 col-xs-1">&nbsp;</div>
		<div class="col-lg-8 col-md-8 col-xs-10">
			<br>
			<h1 align="center" class="jumbotron">WAH Facility Issue and Inquiry Trackin' System (WAHFIITS) Login Interface</h1>
			<hr>
			<br>
			
			<form class="form form-action">
				<label class="sr-only">Username*</label>
				  <div class="input-group">
				    <div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
				    <input type="text" class="form-control" placeholder="Username*" id="usn" required>
				  </div>
				  <br>
				<label class="sr-only">Password*</label>
				  <div class="input-group">
				    <div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
				    <input type="password" class="form-control" placeholder="Password*" id="pw" required>
				  </div>
				  <span class="pull-right">*Required fields</span>
				  <br><br>
				  		
				  
			</form>	
			<div class="col-lg-6 col-md-6 col-xs-6">
	  			<button class="btn btn-primary btn-lg" style="width: 100%" onclick="login()" id="loginbtn">Login</button>
	  		</div>
	  		<div class="col-lg-6 col-md-6 col-xs-6">
	  			<button class="btn btn-warning btn-lg" style="width: 100%" onclick="clear()" id="clearbtn">Clear</button>
	  		</div>	
		</div>
		<div class="col-lg-2 col-md-2 col-xs-1">&nbsp;</div>
	</div>

	<!-- <div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">WAH ITS</h4>
	        </div>
	        <div class="modal-body">
	          <h3 align="center">Loading, Please wait..</h3>
	          <br>
	          <div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="70"
				  aria-valuemin="0" aria-valuemax="100" style="width:70%">
				    <span class="sr-only">70% Complete</span>
				  </div>
				</div>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	      
	    </div>
	</div> -->
<script type="text/javascript">
	function login(){
		if (($("#usn").val()!=="") && ($("#pw").val()!=="")) {
			$("#loginbtn, #clearbtn, #usn, #pw").attr("disabled", "disabled");
			toastr.info('','Logging in',{"progressBar": true, "timeout": "10000"});
			$.ajax({
				url: 'functions/auth.php?u=' + $("#usn").val() + '&p=' + $("#pw").val(),
				success: function(result){
					result = JSON.parse(result);
					if(result.result == true) {
						toastr.success("asd");

						//GO TO INDEX

					}else{
						toastr.error("dsa");
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
</html>



<?php
}

?>