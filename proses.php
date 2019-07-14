<?php 
include "connect.php";
$nama=$_POST['nama'];
$plat=$_POST['plat'];
$merek=$_POST['merek'];


	$q="INSERT INTO bengkel VALUES('null','$nama','$plat','$merek')";
$sql=mysqli_query($konek,$q);




 ?>




