
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Data Kostumer</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="box box-solid box-primary">
        <div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-"></i>
		Data Kostumer </h3>

 
			
		
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
                      <h4><i class="fa fa-angle-right"></i> Data Kostumer</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                <th>No</th>
                                  <th>Nama</th>
                                  <th>Alamat</th>
                                   <th>Email</th>
                                 <th>No Kontak	</th>
                                 <th>Pekerjaan</th>
                                 <th>Deskripsi Info</th>
                                
                                 <th>Source</th>
                                  <th>Aksi</th>
                                  </tr>
                                  </thead>
                                  
                                  <tbody>
                                  <?php
                                  $no=1;
                                  foreach($acc as $u){
                                    
                                  ?>
                                  <tr>
                                     <td><?=$no;?></td>
                                      <td><?=$u->nm_lead;?></td>
                                      <td><?=$u->alamat;?></td>
                                      <td><?=$u->email;?></td>
                                     <td><?=$u->no_kontak;?></td>
                                     <td><?=$u->pekerjaan;?></td>
                                     <td><?=$u->desc_info;?></td>
                                     <td><?=$u->source;?></td>
                                    
									
                                      <td>
                                      <div class="pull-left">
                                      <a class="btn btn-danger btn-xs" href="<?= base_url('c_lead/hapus/'.$u->id_lead);?>" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fa fa-trash-o"></i></a>
                                      
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
