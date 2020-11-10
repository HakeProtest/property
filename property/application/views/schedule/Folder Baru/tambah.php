      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="box box-solid box-primary">
        <div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-welcome"></i>
		Anda login sebagai : <?php echo $this->session->nm_account; ?></h3>
		<!--a class="btn btn-primary pull-right" data-toggle="modal" data-target="#tambahData">
		<i class="fa  fa-plus"></i> Tambah data</a-->		
		
		</div>	
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                         
                        <div class="panel-body">
                        <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"> Tambah Data Jadwal</h4>
                      <form class="form-horizontal style-form" action="<?= base_url();?>c_schedule/simpan_input" method="post">
                         <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_pengembang"> Pilih Lead:</label>
                <div class="col-sm-10">
               <?php
                    echo '
                    <select name="id_lead" class="form-control">
                      <option value="">--Pilih Lead--</option>';
                   
                     foreach ($lead as $key) {
                            echo '<option value="'.$key->id_lead.'">'.$key->nm_lead.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
              </div>
                          <div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_schedule"> Subjek:</label>
			                <div class="col-sm-10">
			                <input type="text" class="form-control" required="required" placeholder=" " id="subjek" name='subjek' placeholder='subjek'>
			              </div>
			              </div>
			              
			              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_pengembang"> Pilih Sales:</label>
                <div class="col-sm-10">
               <?php
                    echo '
                    <select name="id_account" class="form-control">
                      <option value="">--Pilih Sales--</option>';
                   
                     foreach ($account as $key) {
                            echo '<option value="'.$key->id_account.'">'.$key->nm_account.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
              </div>
              
              <div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_schedule"> Lokasi:</label>
			                <div class="col-sm-10">
			                <input type="text" class="form-control" required="required" placeholder=" " id="lokasi" name='lokasi' placeholder='lokasi'>
			              </div>
			              </div>
                  
                          <div class="form-group">
                         
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_schedule"> Tanggal:</label>
			                <div class="col-sm-10">
			                <input type="date" class="form-control" required="required" placeholder=" " id="tanggal" name='tanggal' placeholder='tanggal'>
			              </div>
			              </div>
			              <div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_schedule"> Jam:</label>
			                <div class="col-sm-10">
			                <input type="time" class="form-control" required="required" placeholder=" " id="jam" name='jam' placeholder='jam'>
			              </div>
			              </div>
			              <div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_schedule"> Deskripsi:</label>
			                <div class="col-sm-10">
			                <textarea name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
			              </div>
			              </div>
                           <div class="form-group">
                          
                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div>
                                  <a href="<?= base_url('c_schedule/tampil');?>" class="btn btn-default">Kembali</a>
                                  <input type="reset" class="btn btn-default" value="Reset">
                                  <input type="submit" class="btn btn-primary" value="Simpan">
                          </div>
                          </div>
                          
                          </div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
                        </div>
                        <!-- /.panel-body -->
                        
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>


    </div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->



      <!--main content end-->
     
  </section>