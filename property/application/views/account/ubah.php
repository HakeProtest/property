      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="box box-solid box-primary">
        <div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-welcome"></i>
		Anda login sebagai : <?php echo $this->session->nm_account; ?> </h3>
	
		
		</div>	
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                         
                        <div class="panel-body">
                        <div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	   <h4 class="mb"> Edit User </h4>
                  	   <?=$this->session->flashdata('msg')?>
                      <form class="form-horizontal style-form" enctype="multipart/form-data" action="<?= base_url();?>c_account/simpan_ubah" method="post">
                         
                          
               <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_account"> ID User:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="id_account" name='id_account' placeholder='id_account' value="<?= $acc->id_account?>">
                <input class="form-control" name="id_account2" type="hidden" value="<?= $acc->id_account?>" >
              </div>
              </div>
                          <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_account"> Nama User:</label>
                <div class="col-sm-10">
                
                <input type="text" class="form-control" required="required" placeholder=" " id="nm_account" name='nm_account' value="<?= $acc->nm_account?>" placeholder='nm_account'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="username"> Username:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="username" name='username' value="<?= $acc->username?>" placeholder='username'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="password"> Password:</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" required="required" placeholder=" " id="password" name='password' value="<?= $acc->password?>" placeholder='password'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="alamat"> Alamat:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="alamat" value="<?= $acc->alamat?>" name='alamat' placeholder='alamat'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="no_kontak"> No Kontak:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="no_kontak" value="<?= $acc->no_kontak?>" name='no_kontak' placeholder='no_kontak'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="email"> Email:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="email" name='email' value="<?= $acc->email?>" placeholder='email'>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="foto"> Foto:</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" placeholder=" " id="foto" name='foto' placeholder='foto'>
                <input type="hidden" name="foto2" value="<?= $acc->foto?>">
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="akses"> Akses:</label>
                <div class="col-sm-10">
                <select class="form-control" name="akses">
                	<option value="">Pilih</option>
                	<option value="<?= $acc->akses?>" selected><?= $acc->akses?></option>
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
                     	if($key->id_jabatan==$acc->id_jabatan){
						$dv = "selected";
						}else{
						$dv='';	
						}
                            echo '<option value="'.$key->id_jabatan.'" '.$dv.'>'.$key->nm_jabatan.'</option>';
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