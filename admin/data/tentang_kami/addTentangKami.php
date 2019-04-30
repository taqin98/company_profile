<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah Data Tentang Kami</h3>
      </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              
              <form role="form" method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">title</label>
                    <input type="text" name="title" class="form-control" minlength="3" autofocus="" required="" autocomplete="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">text about us</label>
                    <textarea class="textarea col-md-12" name="description"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">text why</label>
                    <textarea class="textarea col-md-12" name="why"></textarea>
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
    $title        = $_POST['title'];
    $desc         = $_POST['description'];
    $why          = $_POST['why'];
    $created_at   = date("Y-m-d H:i:s");
    $updated_at   = date("Y-m-d H:i:s");

    $sql = $conn->query("INSERT INTO tb_tentang_kami (title, description, why, created_at, updated_at) VALUES ('$title', '$desc', '$why', '$created_at', '$updated_at')");

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
