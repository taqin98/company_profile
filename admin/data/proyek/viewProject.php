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
                        <th>DATE PROJECT</th>
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
                          <td><img src="data/proyek/gambar/<?= $data['images']; ?>" style="width: 50px;"></td>
                          <td><?= $data['title']; ?></td>
                          <td><?= substr($data['description'], 0, 100); ?></td>
                          <td><?= date('d F Y', strtotime($data['date_proyek'])); ?></td>
                          <td><?= $data['created_at']; ?> WIB</td>
                          <td><?= $data['updated_at']; ?> WIB</td>
                          <td style="width: 180px">
                            <a href="?halaman=detailProject&id=<?= $data['id_proyek'] ?>" class="btn btn-success btn-md fa fa-files-o" data-toggle="tooltip" title="Detail Data"></a>
                            <a href="?halaman=editProject&id=<?= $data['id_proyek'] ?>" class="btn btn-warning btn-md fa fa-edit" data-toggle="tooltip" title="Edit Data"></a>
                            <a href="?halaman=deleteProject&id=<?= $data['id_proyek'] ?>" class="btn btn-danger btn-md fa fa-trash" data-toggle="tooltip" title="Delete Data"></a>
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
