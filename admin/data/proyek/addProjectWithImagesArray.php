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
                    <input type="text" name="title" class="form-control" value="<?= $data['name'];  ?>" minlength="3" autofocus="" required="" autocomplete="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="textarea col-md-12" name="des"></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <laxbel for="exampleInputEmail1">Images</label>
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
    $gambar = $_FILES['gambar']['name'];
    //var_dump($gambar);

    $x = json_encode($gambar);

    //echo $x;

    // $x2 = json_decode($x);

    // foreach ($x2 as $key => $value) {
    //   # code...
    //   echo $x2[$key] . "<br>";
    // }

    $title            = $_POST['title'];
    $des              = $_POST['des'];
    $dateNow          = date("Y-m-d H:i:s");

    foreach ($_FILES['gambar']['tmp_name'] as $key => $tmp_name) {
          # code...
      $gambar2 = $_FILES['gambar']['name'][$key];
      $tmp  = $_FILES['gambar']['tmp_name'][$key];

      $data = move_uploaded_file($tmp, "data/proyek/gambar/".$gambar2);
      if ($data) {
        # code...
        echo "berhasil";
      } else {
        echo "gagal";
      }

    }

    $sql = $conn->query("INSERT INTO tb_proyek (images, title, description, created_at, updated_at) VALUES ('$x', '$title','$des', '$dateNow', '$dateNow')");

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


  