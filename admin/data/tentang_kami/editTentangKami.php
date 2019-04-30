<?php
$sql = $conn->query("SELECT * 
  FROM tb_tentang_kami
  WHERE id_tentang_kami = '$_GET[id]' ");
$data = $sql->fetch_assoc();

?>


<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Data Tentang Kami</h3>
      </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              
              <form role="form" method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">title</label>
                    <input type="text" name="title" class="form-control" value="<?= $data['title'];  ?>" minlength="3" autofocus="" required="" autocomplete="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">text about us</label>
                    <textarea class="textarea col-md-12" name="description"><?= $data['description'];?></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">text why</label>
                    <textarea class="textarea col-md-12" name="why"><?= $data['why'];?></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group"></div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="reset" class="btn btn-danger" value="Reset" />
                    <input type="submit" name="save" class="btn btn-info pull-right" value="Update" />
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
    $title        = $_POST['title'];
    $desc         = $_POST['description'];
    $why          = $_POST['why'];
    $updated_at   = date("Y-m-d H:i:s");

    $sql = $conn->query("UPDATE tb_tentang_kami SET 
      title = '$title', 
      description = '$desc',
      why = '$why',
      updated_at = '$updated_at'
      WHERE id_tentang_kami = '$_GET[id]' ");

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
          window.location.replace('?halaman=viewTentangKami');
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
          window.location.replace('?halaman=viewTentangKami');
        } ,2000);
      </script>
      <?php
    }

    
  }
  ?>





<!--Sweet Alert-->
<script src="assets/js/sweetalert.js"></script>
<script src="bower_components/jquery/dist/jquery.min.js"></script>