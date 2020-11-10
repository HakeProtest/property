
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Data Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="box box-solid box-primary">
        <div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-"></i>
		Data Kategori </h3>

    <a class="btn btn-primary pull-right" href="<?= base_url('c_kategori/tambah/');?>">
    <i class="fa  fa-plus"></i> Tambah</a>
			
		
		</div>	
            <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <!-- /.panel-heading -->
                    <div class="panel-body">
                      <div style="margin-top: 10px; margin-bottom: 20px; margin-right: 10px; margin-left: 10px;">
                          
                      </div>
                      
                      <?=$this->session->flashdata('msg')?>
					
                      <div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
                      	
                        <div>
                      <h4><i class="fa fa-angle-right"></i> Data Kategori</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                 <th>No</th>
                                  <th>Nama Kategori</th>
                                  <th>Aksi</th>
                                  </tr>
                                  </thead>
                                  
                                  <tbody>
                                  <?php
                                  $no=1;
                                  foreach($acc as $u){
                                    
                                  ?>
                                  <tr>
                                     <td width="15px"><?=$no;?></td>
                                      <td><?=$u->nm_kategori;?></td>
                                      <td>
                                      <div class="pull-left">
                                      <a class="btn btn-primary btn-xs" href="<?= base_url('c_kategori/ubah/'.$u->id_kategori);?>"><i class="fa fa-pencil"></i></a> <a class="btn btn-danger btn-xs" href="<?= base_url('c_kategori/hapus/'.$u->id_kategori);?>" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fa fa-trash-o"></i></a>
                                      
                                      </div>
                                    </td>
                                  </tr>
                                  <?php
                                  $no++;
                                   } ?>
                                  </tbody>
                              </table>
                          </section>
                          </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->
                        <!-- /.table-responsive -->
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