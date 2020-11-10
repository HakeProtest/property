
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Data Property</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="box box-solid box-primary">
        <div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-"></i>
		Data Property </h3>

    <a class="btn btn-primary pull-right" href="<?= base_url('c_property/tambah/');?>">
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
                      <h4><i class="fa fa-angle-right"></i> Data Property</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                <th>Foto</th>
                                <th>ID Property</th>
                                  <th>Nama</th>
                                   <th>No Kavling</th>
                                  <th>Harga</th>
                                 <th>Tipe	</th>
                                 <th>Download File</th>
                                
                                  <th>Aksi</th>
                                  </tr>
                                  </thead>
                                  
                                  <tbody>
                                  <?php
                                  foreach($acc as $u){
                                    
                                  ?>
                                  <tr>
                                     
                                      <td><img src="<?=base_url()?>foto/<?=$u->foto;?>" width="150px"></td>
                                      <td><?=$u->id_property;?></td>
                                      <td><?=$u->nm_property;?></td>
                                      <td><?=$u->no_kavling;?></td>
                                     <td><?=$u->harga;?></td>
                                     <td><?=$u->nm_tipe;?></td>
                                     <td><a href="<?=base_url()?>foto/<?=$u->file;?>" target="_blank"><?=$u->file;?></a></td>
                                    
									
                                      <td>
                                      <div class="pull-left">
                                      <a class="btn btn-primary btn-xs" href="<?= base_url('c_property/ubah/'.$u->id_property);?>"><i class="fa fa-eye"></i>Ubah / Detail</a> 
                                      <a class="btn btn-info btn-xs" href="<?= base_url('c_property/galeri/'.$u->id_property);?>"><i class="fa fa-picture-o"></i>Galeri</a> 
                                      <a class="btn btn-success btn-xs" href="<?= base_url('c_property/history/'.$u->id_property);?>"><i class="fa fa-eye"></i>History Opportunity</a>
                                      <a class="btn btn-danger btn-xs" href="<?= base_url('c_property/hapus/'.$u->id_property);?>" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fa fa-trash-o"></i></a>
                                      
                                      </div>
                                    </td>
                                  </tr>
                                  <?php } ?>
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
