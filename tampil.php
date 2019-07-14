<?php 
include "connect.php";
if($_POST){

$nama=$_POST['nama'];
$plat=$_POST['plat'];
$merek=$_POST['merek'];


$q="INSERT INTO bengkel VALUES(null,'$nama','$plat','$merek')";
$sql=mysqli_query($konek,$q);



}

$tampil="SELECT no_ from bengkel where nama='$nama' and no_plat='$plat' and merk_motor='$merek'";
$tampil1="SELECT nama from bengkel where nama='$nama' and no_plat='$plat' and merk_motor='$merek'";
$sql2=mysqli_query($konek,$tampil);
$sql23=mysqli_query($konek,$tampil1);
 ?>


<center>
	<?php
	foreach ($sql23 as $data) {
		echo "$data[nama]";
	}
 ?>

	<p>
		No Antrian Anda <br>
	</p>

	<?php
	foreach ($sql2 as $data) {
		echo "$data[no_]";
	}
 ?>
<a href="projekta.php" id="home">
            <p>HOME</p>
        </a>
</center>



