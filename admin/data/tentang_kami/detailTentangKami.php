<div class="row">
  <div class="col-md-12">
    <div class="box">
      <!-- .box-header -->
      <div class="box-header with-border">
        <h3 class="box-title">Detail Tentang Kami</h3>

      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <?php
            $id = $_GET['id'];
            $sql = $conn->query("SELECT * from tb_tentang_kami WHERE id_tentang_kami = '$id'");
            $data = $sql->fetch_assoc();
              //var_dump($data);
            ?>
            <div class="col-md-12">
              <label><h4><?= $data['title']; ?></h4></label><br>
              <?= $data['description']; ?>
            </div>
            <div class="col-md-12">
              <label><h4>Mengapa Memilih kami?</h4></label><br>
              <p><?= $data['why']; ?></p>
            </div>
            <div class="col-md-12">
              <span><?php echo date('d F Y', strtotime($data['created_at'])); ?></span>
              <span style="float: right;"><?php echo substr($data['created_at'], -9, 10); ?> WIB</span>
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
