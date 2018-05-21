
if (localStorage.getItem("user") === null) {
	$("#body").load("login.php");
}else{
	$("#body").load("pages/home.html");
}


function logout(){
	$.ajax({
		url: 'functions/logout.php',
		success: function(result){
			localStorage.user = null;
			toastr.success("You are successfully logged out.")
		}
	});
}