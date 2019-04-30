<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Tambah Data Proyek</h3>
      </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              
              <form role="form" method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" minlength="3" autofocus="" required="" autocomplete="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="textarea col-md-12" name="des"></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label>Date Project</label>
                    <input type="text" name="datepro" class="form-control datepicker" required="" autocomplete="">
                  </div>
                </div>

                <!-- Dinamically Add Field Form Input Images -->
                <!-- <div class="col-md-12">
                  <label for="exampleInputEmail1">Images</label>
                  <div class="row">
                    <div class="col-md-3">
                      <button type="button" class="add_field_button form-control">Add Field</button>
                    </div>
                    <div class="col-md-3">
                      <button type="button" class="remove_field_button form-control">Remove Field</button>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 input_images_array">
                  <div class="form-group">
                    <input type="file" name="gambar[]">
                  </div>
                </div> -->

                <div class="col-md-12">
                  <div class="form-group">
                    <img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;float:left;">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Images</label>
                    <input type="file" name="gambar" id="inputgambar">
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
    $title            = $_POST['title'];
    $des              = $_POST['des'];
    $datepro          = $_POST['datepro'];
    $dateNow          = date('Y-m-d H:i:s');
    $gambar           = $_FILES['gambar']['name'];
    $tmp              = $_FILES['gambar']['tmp_name'];

    $data = move_uploaded_file($tmp, "data/proyek/gambar/$gambar");

    $sql = $conn->query("INSERT INTO tb_proyek (images, title, description, date_proyek, created_at, updated_at)  
      VALUES ('$gambar', '$title','$des', '$datepro', '$dateNow', '$dateNow')");

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
          window.location.replace('?halaman=viewProject');
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
          window.location.replace('?halaman=viewProject');
        } ,2000);
      </script>
      <?php
    }

    
  }
  ?>