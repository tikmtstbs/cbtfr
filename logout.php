<?php
	require("config/config.default.php");
	require("config/dis.php");
	(isset($_SESSION['id_siswa'])) ? $id_siswa = $_SESSION['id_siswa'] : $id_siswa = 0;
	($id_siswa<>0) ? mysql_query("DELETE FROM login where id_siswa='$id_siswa'"):null;
	session_destroy();
	header('location:'.$homeurl);
?>