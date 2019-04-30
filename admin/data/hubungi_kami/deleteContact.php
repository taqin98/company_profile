<?php

$id = $_GET['id'];

$sql = $conn->query("DELETE FROM tb_hubungi_kami WHERE id_hubungi_kami = '$id'");

if ($sql) {
	?>
      <script type="text/javascript">
        setTimeout(function () {
          swal({
            title: "Success!",
            text: "Data berhasil terhapus!",
            icon: "success",
            timer: 2000,
          });
        }, 10);
        
        window.setTimeout(function(){ 
          window.location.replace('?halaman=viewContact');
        } ,2000);
      </script>
      <?php
    } else {
      ?>
      <script type="text/javascript">
        setTimeout(function () {
          swal({
            title: "Error!",
            text: "Data gagal tersimpan!",
            icon: "error",
            timer: 2000,
          });
        }, 10);
        
        window.setTimeout(function(){ 
          window.location.replace('?halaman=viewContact');
        } ,2000);
      </script>
      <?php
}

?>