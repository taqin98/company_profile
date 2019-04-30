<div class="row">
  <div class="col-md-12">
    <div class="box">
      <!-- .box-header -->
      <div class="box-header with-border">
        <h3 class="box-title">Data Proyek</h3>
        &nbsp;
        <a href="?halaman=addProject" class="btn btn-success">
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
                        <th>IMAGES</th>
                        <th>TITLE</th>
                        <th>DESCRIPTION</th>
                        <th>CREATED AT</th>
                        <th>UPDATED AT</th>
                        <th>ACTIONS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $sql = $conn->query("SELECT * from tb_proyek order by id_proyek desc");
                      $nomor=1;

                      while ($data = $sql->fetch_assoc()) {            
                        ?>
                        <tr>
                          <td><?php echo $nomor++; ?></td>
                          <td>

                            <?php
                            $decode = json_decode($data['images']);
                            foreach ($decode as $key => $value) {
                              # code...
                              //echo $decode[$key] . "<br>";
                              ?>
                              <img style="width: 50px;" src="data/proyek/gambar/<?php echo $decode[$key]; ?>">
                              <?php
                            }
                            ?>
                              
                          </td>
                          <td><?= $data['title']; ?> WIB</td>
                          <td><?php echo substr($data['description'], 0, 100); ?></td>
                          <td><?= $data['created_at']; ?> WIB</td>
                          <td><?= $data['updated_at']; ?> WIB</td>
                          <td style="width: 180px">
                            <a href="?halaman=detail_anggota&id=<?php echo $data['nis'] ?>" class="btn btn-success btn-md fa fa-files-o" data-toggle="tooltip" title="Detail Data"></a>
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
