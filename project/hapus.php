<?php
include 'conn.php';

$no_project = $_GET['no_project'];

$query = mysqli_query($koneksi, "DELETE FROM project WHERE no_project='$no_project'");
if ($query){
	header('location:../index.php?menu=project');	
} else {
	header('location:../index.php?menu=project');	
}
?>