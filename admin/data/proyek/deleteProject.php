<?php

$id = $_GET['id'];

$sql = $conn->query("SELECT images from tb_proyek WHERE id_proyek = '$id'");
$data =  $sql->fetch_assoc();
$gambar = $data['images'];
$dir = "data/proyek/gambar/$gambar";
if (is_file($dir)) {
unlink($dir);
}

$del = $conn->query("DELETE FROM tb_proyek WHERE id_proyek = '$id'");
if ($del) {
	# code...
	?>
	<script type="text/javascript">
		alert("Data Berhasil dihapus"); document.location = '?halaman=viewProject';
	</script>
	<?php
} else {
	# code...
	?>
	<script type="text/javascript">
		alert("Data Gagal dihapus"); document.location = '?halaman=viewProject';
	</script>
	<?php
}


?>