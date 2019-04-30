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
        <h3 class="box-title">Detail Data</h3>
      </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              
              <form role="form" method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input readonly="" type="text" name="name" class="form-control" value="<?= $data['name'];  ?>" minlength="3" autofocus="" required="" autocomplete="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input readonly="" type="email" name="email" class="form-control" value="<?= $data['email'];  ?>" minlength="3" autofocus="" required="" autocomplete="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <input readonly="" type="text" name="subject" class="form-control" value="<?= $data['subject'];  ?>" minlength="3" autofocus="" required="" autocomplete="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Message</label>
                    <textarea readonly="" class="col-md-12" name="message"><?= $data['message'];?></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group"></div>
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
