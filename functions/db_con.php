
 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $conn = mysqli_connect($servername, $username, $password,'wah_its');
 if ($conn->connect_error) {
 echo "<h1> CONNECTION ERROR</h1>";
}
error_reporting(E_ALL & ~E_NOTICE);


 ?>