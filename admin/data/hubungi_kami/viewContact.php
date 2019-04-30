<div class="row">
  <div class="col-md-12">
    <div class="box">
      <!-- .box-header -->
      <div class="box-header with-border">
        <h3 class="box-title">Data Hubungi Kami</h3>
        &nbsp;
        <a href="?halaman=addContact" class="btn btn-success">
          <i class="fa fa-plus"></i> tambah
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
                        <th>NAME</th>
                        <th>EAMIL</th>
                        <th>SUBJECT</th>
                        <th>MESSAGE</th>
                        <th>CREATED AT</th>
                        <th>UPDATED AT</th>
                        <th>ACTIONS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $sql = $conn->query("SELECT * from tb_hubungi_kami order by id_hubungi_kami desc");
                      $nomor=1;

                      while ($pecah = $sql->fetch_assoc()) {            
                        ?>
                        <tr>
                          <td><?= $nomor++; ?></td>
                          <td><?= $pecah['name']; ?></td>
                          <td><?= $pecah['email']; ?></td>
                          <td><?= $pecah['subject']; ?></td>
                          <td><?= substr($pecah['message'], 0, 100); ?></td>
                          <td><?= $pecah['created_at']; ?> WIB</td>
                          <td><?= $pecah['updated_at']; ?> WIB</td>
                          <td style="width: 180px">
                            <a href="?halaman=detailContact&id=<?php echo $pecah['id_hubungi_kami'] ?>" class="btn btn-success btn-md fa fa-files-o" data-toggle="tooltip" title="Detail Data"></a>
                            <a href="?halaman=editContact&id=<?php echo $pecah['id_hubungi_kami'] ?>" class="btn btn-warning btn-md fa fa-edit" data-toggle="tooltip" title="Edit Data"></a>
                            <a onclick="klik()" href="?halaman=deleteContact&id=<?php echo $pecah['id_hubungi_kami'] ?>" class="btn btn-danger btn-md fa fa-trash" data-toggle="tooltip" title="Delete Data"></a>
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