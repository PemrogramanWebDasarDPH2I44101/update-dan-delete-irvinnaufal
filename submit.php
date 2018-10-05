<?php 
require_once("db.php");
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tgl_lahir = $_POST['tgl_lahir'];
$sql = "INSERT INTO siswa(nim, nama, tgl_lahir)
		VALUES ('$nim', '$nama', '$tgl_lahir')";
if (mysqli_query($conn, $sql)) {
	echo "New record created successfully";
}else{
	echo "Error: ". $sql . "<br>" . mysqli_error($conn);
}		
mysqli_close($conn);
echo "Silahkan klik <a href='list.php'>link ini</a> untuk selanjutnya";
?> 
