<div class="row">
  <div class="col-md-12">
    <div class="box">
      <!-- .box-header -->
      <div class="box-header with-border">
        <h3 class="box-title">Data Tentang Kami</h3>
        &nbsp;
        <a href="?halaman=addTentangKami" class="btn btn-success">
          <i class="fa fa-plus"></i> Tambah
        </a>
      </div>
      <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
                  <div style="overflow-x: auto;">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>TITLE</th>
                        <th>ABOUT US</th>
                        <th>WHY CHOOSE US</th>
                        <th>CREATED AT</th>
                        <th>UPDATED AT</th>
                        <th>ACTIONS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $sql = $conn->query("SELECT * from tb_tentang_kami order by id_tentang_kami desc");
                      $nomor=1;

                      while ($data = $sql->fetch_assoc()) {            
                        ?>
                        <tr>
                          <td><?= $nomor++; ?></td>
                          <td><?= $data['title']; ?></td>
                          <td><?= substr($data['description'], 0, 100); ?></td>
                          <td><?= substr($data['why'], 0, 100); ?></td>
                          <td><?= $data['created_at']; ?> WIB</td>
                          <td><?= $data['updated_at']; ?> WIB</td>
                          <td style="width: 180px">
                            <a href="?halaman=detailTentangKami&id=<?php echo $data['id_tentang_kami'] ?>" class="btn btn-success btn-md fa fa-files-o" data-toggle="tooltip" title="Detail Data"></a>
                            <a href="?halaman=editTentangKami&id=<?php echo $data['id_tentang_kami'] ?>" class="btn btn-warning btn-md fa fa-edit" data-toggle="tooltip" title="Edit Data"></a>
                            <a href="?halaman=deleteTentangKami&id=<?php echo $data['id_tentang_kami'] ?>" class="btn btn-danger btn-md fa fa-trash" data-toggle="tooltip" title="Delete Data"></a>
                          </td>
                        </tr>
                        <?php
                      }
                      ?>
                    </tbody>
                  </table>
                  </div>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script type="text/javascript">
        function klik() {
          swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
              });
            } else {
              swal("Your imaginary file is safe!");
            }
          });
        }
      </script>