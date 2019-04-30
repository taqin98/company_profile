<?php
session_start();

if (isset($_SESSION['user'])) {
	# code...
	session_destroy();
	?>
	<!--Sweet Alert-->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		setTimeout(function () {
			swal({
				title: "Logout Berhasil !!",
				text: "terimakasih sudah bekerja dengan keras",
				icon: "success",
				timer: 3000,
			});
		}, 10);

		window.setTimeout(function(){ 
			window.location.replace('http://javageosurvey.com');
		} ,3000);
	</script>
	<?php
} else {
	?>
	<script type="text/javascript">
		setTimeout(function () {
			swal({
				title: "Logout Gagal !!",
				text: "Terjadi kesalahan dalam sistem",
				icon: "error",
				timer: 3000,
			});
		}, 10);
	</script>
	<?php
}

?>