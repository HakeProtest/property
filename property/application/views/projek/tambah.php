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
		Anda login sebagai : <?php echo $this->session->nm_projek; ?></h3>
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
                  	  <h4 class="mb"> Tambah Data Projek</h4>
                      <form class="form-horizontal style-form" action="<?= base_url();?>c_projek/simpan_input" enctype="multipart/form-data" method="post">
                        
                         <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_projek"> ID Projek:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="id_projek" name='id_projek' placeholder='id_projek'>
              </div>
              </div> 
                       <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_projek"> Nama Projek:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="nm_projek" name='nm_projek' placeholder='nm_projek'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_pengembang"> Pengembang:</label>
                <div class="col-sm-10">
               <?php
                    echo '
                    <select name="id_pengembang" class="form-control">
                      <option value="">--Pilih Pengembang--</option>';
                   
                     foreach ($pengembang as $key) {
                            echo '<option value="'.$key->id_pengembang.'">'.$key->nm_pengembang.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="alamat"> Alamat:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="alamat" name='alamat' placeholder='alamat'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="tgl_listing"> Tanggal Listing:</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" required="required" placeholder=" " id="tgl_listing" name='tgl_listing' placeholder='tgl_listing'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="deskripsi"> deskripsi:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="deskripsi" name='deskripsi' placeholder='deskripsi'>
              </div>
              </div>
               <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="foto"> Foto Projek (png, jpg):</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" required="required" placeholder=" " id="foto" name='foto' placeholder='foto'>
              </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="foto"> Foto Denah (png, jpg):</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" required="required" placeholder=" " id="foto" name='foto_denah' placeholder='foto'>
              </div>
              </div>
                  
                          <div class="form-group">
                         
                          
                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div>
                                  <a href="<?= base_url('c_projek/tampil');?>" class="btn btn-default">Kembali</a>
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