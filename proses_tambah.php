<?php
include("koneksi.php");

if(isset($_POST['tambah'])){
    $nik=$_POST['NIK'];
    $jk=$_POST['jk'];

    $sql= "INSERT INTO tb_bbm (NIK, jk) VALUES ('$nik', '$jk')";
    $query=mysqli_query($koneksi, $sql);

}else{
    ("akses dilarang");
}
?>