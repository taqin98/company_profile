<style type="text/css">
  p {
    text-align: justify;
  }
</style>
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <!-- .box-header -->
      <div class="box-header with-border">
        <h3 class="box-title">Detail Proyek</h3>

      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <?php
            $id = $_GET['id'];
            $sql = $conn->query("SELECT * from tb_proyek WHERE id_proyek = '$id'");
            $data = $sql->fetch_assoc();
              //var_dump($data);
            ?>
            <div class="col-md-2">
            </div>
            <div class="col-md-8">                
              <div class="row">
                <div class="col-md-12">
                  <img src="data/proyek/gambar/<?= $data['images']; ?>" style="width: 100%;">
                </div>
                <div class="col-md-12">
                  <span><?php echo date('d F Y', strtotime($data['created_at'])); ?></span>
                  <span style="float: right;"><?php echo substr($data['created_at'], -9, 10); ?></span>
                </div>
                <div class="col-md-12">
                  <label><h3><?= $data['title']; ?></h3></label>
                </div>
                <div class="col-md-12">
                  <p><?= $data['description']; ?></p>
                </div>
              </div>
            </div>
            <div class="col-md-2">
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
