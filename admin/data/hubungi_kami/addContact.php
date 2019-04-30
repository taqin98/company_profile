<?php
$sql = $conn->query("SELECT * 
  FROM tb_hubungi_kami
  WHERE id_hubungi_kami = '$_GET[id]' ");
$data = $sql->fetch_assoc();

?>


<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah Data Hubungi Kami</h3>
      </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              
              <form role="form" method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" name="name" class="form-control" value="<?= $data['name'];  ?>" minlength="3" autofocus="" required="" autocomplete="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $data['email'];  ?>" minlength="3" autofocus="" required="" autocomplete="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <input type="text" name="subject" class="form-control" value="<?= $data['subject'];  ?>" minlength="3" autofocus="" required="" autocomplete="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Message</label>
                    <textarea class="textarea col-md-12" name="message"><?= $data['message'];?></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group"></div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="reset" class="btn btn-danger" value="Reset" />
                    <input type="submit" name="save" class="btn btn-info pull-right" value="Add" />
                  </div>
                </div>
              </form>

            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->

      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->



  <?php 
  if (isset($_POST['save']))
  {
    $name            = $_POST['name'];
    $email           = $_POST['email'];
    $subject         = $_POST['subject'];
    $message         = $_POST['message'];
    $dateNow         = date("Y-m-d H:i:s");

    $sql = $conn->query("INSERT INTO tb_hubungi_kami (name, email, subject, message, created_at, updated_at) VALUES ('$name', '$email','$subject', '$message','$dateNow', '$dateNow')");

    if ($sql) {
      ?>
      <script type="text/javascript">
        setTimeout(function () {
          swal({
            title: "Success!",
            text: "Data berhasil tersimpan!",
            icon: "success",
            timer: 1000,
          });
        }, 10);

        window.setTimeout(function(){ 
          window.location.replace('?halaman=viewContact');
        } ,1000);
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
            timer: 1000,
          });
        }, 10);

        window.setTimeout(function(){ 
          window.location.replace('?halaman=viewContact');
        } ,2000);
      </script>
      <?php
    }

    
  }
  ?>