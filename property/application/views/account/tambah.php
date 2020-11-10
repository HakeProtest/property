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
                  	  <h4 class="mb"> Tambah Data User</h4>
                      <form class="form-horizontal style-form" action="<?= base_url();?>c_account/simpan_input" enctype="multipart/form-data" method="post">
                         
                         <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_account"> ID User:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="id_account" name='id_account' placeholder='id_account'>
              </div>
              </div>
                          <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_account"> Nama User:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="nm_account" name='nm_account' placeholder='nm_account'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="username"> Username:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="username" name='username' placeholder='username'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="password"> Password:</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" required="required" placeholder=" " id="password" name='password' placeholder='password'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="alamat"> Alamat:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="alamat" name='alamat' placeholder='alamat'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="no_kontak"> No Kontak:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="no_kontak" name='no_kontak' placeholder='no_kontak'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="email"> Email:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="email" name='email' placeholder='email'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="foto"> Foto:</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" required="required" placeholder=" " id="foto" name='foto' placeholder='foto'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="akses"> Akses:</label>
                <div class="col-sm-10">
                <select class="form-control" name="akses">
                	<option value="">Pilih</option>
                	<option value="Admin">Admin</option>
                	<option value="Agen">Agen</option>
                	<option value="Direktur">Direktur</option>
                	<option value="Manager">Manager</option>
                </select>
              </div>
              </div>
              
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_jabatan"> Jabatan:</label>
                <div class="col-sm-10">
                <?php
                    echo '
                    <select name="id_jabatan" class="form-control">
                      <option value="">--Pilih Jabatan--</option>';
                   
                     foreach ($jabatan as $key) {
                            echo '<option value="'.$key->id_jabatan.'">'.$key->nm_jabatan.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
                     </div>      
                          <div class="form-group">
                         
                          
                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div>
                                  <a href="<?= base_url('c_account/tampil');?>" class="btn btn-default">Kembali</a>
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