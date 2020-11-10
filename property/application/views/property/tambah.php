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
		Anda login sebagai : <?php echo $this->session->nm_property; ?></h3>
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
                  	  <h4 class="mb"> Tambah Data Property</h4>
                      <form class="form-horizontal style-form" action="<?= base_url();?>c_property/simpan_input" enctype="multipart/form-data" method="post">
                         <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_property"> ID Property:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="id_property" name='id_property' placeholder='id_property'>
                
              </div>
              </div>
                          <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_property"> Nama Property:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="nm_property" name='nm_property' placeholder='nm_property'>
                <input type="hidden" class="form-control" required="required" placeholder=" " name='id_account' value="<?php echo $this->session->id_account; ?>">
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_pengembang"> Projek:</label>
                <div class="col-sm-10">
                <?php
                    echo '
                    <select name="id_projek" class="form-control">
                      <option value="">--Pilih Projek--</option>';
                   
                     foreach ($projek as $key) {
                            echo '<option value="'.$key->id_projek.'">'.$key->nm_projek.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_kategori"> Kategori:</label>
                <div class="col-sm-10">
                <?php
                    echo '
                    <select name="id_kategori" class="form-control">
                      <option value="">--Pilih Kategori--</option>';
                   
                     foreach ($kategori as $key) {
                            echo '<option value="'.$key->id_kategori.'">'.$key->nm_kategori.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="no_kavling"> No Kavling:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="no_kavling" name='no_kavling' placeholder='no_kavling'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="harga"> Harga:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="harga" name='harga' placeholder='harga'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="tgl_listing"> Tanggal Listing:</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" required="required" placeholder=" " id="tgl_listing" name='tgl_listing' placeholder='tgl_listing'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_tipe"> Nama Tipe:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="nm_tipe" name='nm_tipe' placeholder='nm_tipe'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="luas"> Luas:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="luas" name='luas' placeholder='luas'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="hrg_m2"> Harga m2:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="hrg_m2" name='hrg_m2' placeholder='hrg_m2'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="interior"> Interior:</label>
                <div class="col-sm-10">
               
                <textarea name="interior" class="form-control" required="required"></textarea>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="kmr_tidur"> Kamar Tidur:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="kmr_tidur" name='kmr_tidur' placeholder='kmr_tidur'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="kmr_mandi"> kamar Mandi:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="kmr_mandi" name='kmr_mandi' placeholder='kmr_mandi'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="listrik"> Listrik:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="listrik" name='listrik' placeholder='listrik'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="deskripsi"> Deskripsi:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="deskripsi" name='deskripsi' placeholder='deskripsi'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="foto"> Foto (png, jpg):</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" required="required" placeholder=" " id="foto" name='foto' placeholder='foto'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="file"> File (.pdf):</label>
                <div class="col-sm-10">
                <input type="file" class="form-control"  placeholder=" " id="file" name='file' placeholder='file'>
              </div>
              </div>
             
             <h4 class="mb"> Input Foto Galeri</h4>
              
              <div class="col-md-8 col-md-offset-2">
				<div class="col-md-4 text-right">
				
				Pilih Foto :
				</div>
				<div class="col-md-8">
						<input type="file" name="foto_property[]" class="form-control">
				</div>
				</div>	
				<div class="col-md-12 my-form2">
			    <center>
				<p class="text-box"><br>
			        <a class="add-box btn btn-primary"" href="#"> <i class="fa fa-plus"> </i> Tambah Foto</a>
			   
			    </p>
			    </center>
				</div>
				<div class="clearfix"></div>
              
              
             
                          <div class="form-group">
                         
                          
                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div>
                                  <a href="<?= base_url('c_property/tampil');?>" class="btn btn-default">Kembali</a>
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