      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Calon Kostumer</h1>
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
                  	   <h4 class="mb"> Edit Calon Kostumer </h4>
                      <form class="form-horizontal style-form" action="<?= base_url();?>c_contact/simpan_ubah" method="post">
                         
                          
                         
                          <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_contact"> Nama Calon Kostumer:</label>
                <div class="col-sm-10">
                <input class="form-control" name="id_contact" type="hidden" value="<?= $acc->id_contact?>" required>
                <input type="text" class="form-control" required="required" placeholder=" " id="nm_contact" name='nm_contact' value="<?= $acc->nm_contact?>" placeholder='nm_contact'>
              </div>
              </div>
              
             
              
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_contact"> No Kontak:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="no_kontak" name='no_kontak' value="<?= $acc->no_kontak?>" placeholder='no_kontak'>
              </div>
              </div>
              
               <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_contact"> Email:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="email" name='email' value="<?= $acc->email?>" placeholder='email'>
              </div>
              </div>
              
               <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_contact"> Source:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="source" name='source' value="<?= $acc->source?>" placeholder='source'>
              </div>
              </div>
              
               <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="nm_contact"> Minat dengan Perumahan/no kavling:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" required="required" placeholder=" " id="minat" name='minat' value="<?= $acc->minat?>" placeholder='minat'>
              </div>
              </div>
              
               
                          <div class="form-group">
                         
                          
                                  <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div>
                                  <a href="<?= base_url('c_contact/tampil');?>" class="btn btn-default">Kembali</a>
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