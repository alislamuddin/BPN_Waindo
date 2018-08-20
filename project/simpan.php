<?php 
include '../conn.php';
  $nama_project    = $_POST['nama_project'];
  $jenis_project    = $_POST['jenis_project'];
  $tanggal_rencana     = $_POST['tanggal_rencana'];
 

  $querytambah = mysqli_query($koneksi, "INSERT INTO `project`(`nama_project`, `jenis_project`, `tanggal_rencana`)  
    VALUES ('$nama_project','$jenis_project','$tanggal_rencana')") or die(mysqli_error());
    
  if($querytambah) {
    header('location:../index.php?menu=project');
   } else{
    echo "Upss Something wrong..";
   }

 ?>
