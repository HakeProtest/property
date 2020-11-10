<section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Jadwal</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="box box-solid box-primary">
        <div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-"></i>
		Data Jadwal </h3>

    
			
		
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
                      	<?php
                                  foreach($acc as $u){
                                    
                                  ?>
                        <div style="margin-left: 10px;">
                      <h4><i class="fa fa-angle-right"></i> Detail Jadwal</h4>
                      
                          <section>
                          
                          
                          <h3>Calendar Detail</h3>
                          <hr>
                          <div class="row">
                          <div class="col-md-6">
                          <table>
						  <tr>
						    <td width="150px">Nama Lead</td>
						    <td>: </td>
						    <td><?=$u->nm_lead;?></td>
						  </tr>
						  <tr>
						    <td>Subjek</td>
						    <td>: </td>
						    <td><?=$u->subjek;?></td>
						  </tr>
						  <tr>
						    <td>Nama Sales</td>
						    <td>: </td>
						    <td><?=$u->nm_account;?></td>
						  </tr>
						  <tr>
						    <td>No Kontak</td>
						    <td>: </td>
						    <td><?=$u->no_kontak;?></td>
						  </tr>
						   <tr>
						    <td>Email</td>
						    <td>: </td>
						    <td><?=$u->email;?></td>
						  </tr>
						</table>
						</div>
						
						<div class="col-md-6">
						<table>
						  <tr>
						    <td width="150px">Lokasi</td>
						    <td>: </td>
						    <td><?=$u->lokasi;?></td>
						  </tr>
						  <tr>
						    <td>Tanggal</td>
						    <td>: </td>
						    <td><?php echo tgl_indo($u->tanggal);?></td>
						  </tr>
						  <tr>
						    <td>Jam</td>
						    <td>: </td>
						    <td><?=$u->jam;?></td>
						  </tr>
						  
						</table>
						</div>
						</div>
						<h3>Deskripsi</h3>
						<hr>
						<textarea class="form-control"><?=$u->deskripsi;?></textarea>
						<a href="<?= base_url('c_schedule/tampil');?>" class="btn btn-info">Kembali</a>
						<?php
						}
						?>
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
