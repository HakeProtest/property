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
                  	  <h4 class="mb"> Tambah Data Kesempatan</h4>
                      <form class="form-horizontal style-form" action="<?= base_url();?>c_opportunity/simpan_input"  method="post">
                         
                       <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_projek"> Nama Sales:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="nm_sales" name='nm_sales' value="<?php echo $this->session->nm_account; ?>" readonly>
                <input type="hidden" name="id_account" value="<?php echo $this->session->id_account; ?>" >
                
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_pengembang"> Pilih Property:</label>
                <div class="col-sm-10">
               <?php
                    echo '
                    <select name="id_property" class="form-control">
                      <option value="">--Pilih Property--</option>';
                   
                     foreach ($property as $key) {
                            echo '<option value="'.$key->id_property.'">'.$key->nm_property.' - No Kavling : '.$key->no_kavling.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_pengembang"> Pilih Contact:</label>
                <div class="col-sm-10">
               <?php
                    echo '
                    <select name="id_contact" class="form-control">
                      <option value="">--Pilih Contact--</option>';
                   
                     foreach ($contact as $key) {
                            echo '<option value="'.$key->id_contact.'">'.$key->nm_contact.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="alamat"> Estimasi Keuntungan:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="est_keuntungan" name='est_keuntungan' placeholder='Estimasi Keuntungan'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="tgl_listing"> Tanggal Dibuat:</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" required="required" placeholder=" " id="tgl_dibuat" name='tgl_dibuat' value="<?php echo date("Y-m-d"); ?>" readonly>
              </div>
              </div>
             
                  
                          <div class="form-group">
                         
                          
                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div>
                                  <a href="<?= base_url('c_opportunity/tampil');?>" class="btn btn-default">Kembali</a>
                                  <input type="reset" class="btn btn-default" value="Reset">
                                  <input type="submit" class="btn btn-primary" value="Selanjutnya">
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