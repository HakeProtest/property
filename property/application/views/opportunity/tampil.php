
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Data Kesempatan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="box box-solid box-primary">
        <div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-"></i>
		Data Kesempatan </h3>

    <a class="btn btn-primary pull-right" href="<?= base_url('c_opportunity/tambah/');?>">
    <i class="fa  fa-plus"></i> Tambah Kesempatan Baru</a>
			
		
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
                      	  <a class="btn btn-primary pull-right" href="<?= base_url('c_contact/tambah/');?>">
    <i class="fa  fa-plus"></i> Tambah Calon Kustomer</a>
                        <div>
                      <h4><i class="fa fa-angle-right"></i> Data Calon Kostumer</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                <th>No</th>
                                  <th>Nama</th>
                                   <th>Email</th>
                                 <th>No Kontak	</th>
                                 <th>Minat Dengan</th>
                                 <th>Source</th>
                                  <th>Aksi</th>
                                  </tr>
                                  </thead>
                                  
                                  <tbody>
                                  <?php
                                  $no=1;
                                  foreach($acc2 as $u){
                                    
                                  ?>
                                  <tr>
                                     <td><?=$no;?></td>
                                      <td><?=$u->nm_contact;?></td>
                                      <td><?=$u->email;?></td>
                                     <td><?=$u->no_kontak;?></td>
                                     <td><?=$u->minat;?></td>
                                     <td><?=$u->source;?></td>
                                    
									
                                      <td>
                                      <div class="pull-left">
                                       <a class="btn btn-primary btn-xs" href="<?= base_url('c_contact/ubah/'.$u->id_contact);?>"><i class="fa fa-pencil"></i></a>
                                      <a class="btn btn-danger btn-xs" href="<?= base_url('c_contact/hapus/'.$u->id_contact);?>" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fa fa-trash-o"></i></a>
                                      
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
                      <div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
                      	
                        <div>
                      <h4><i class="fa fa-angle-right"></i> Data Kesempatan</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                <th>No</th>
                                  <th>Nama Property</th>
                                  <th>No Kavling</th>
                                	<th>Nama Lead</th>
                                  <th>Nama Sales</th>
                                 <th>Tanggal Dibuat</th>
                                 <th>Stage</th>
                                 <th>Win/Lost</th>
                                 <th>Tanggal Closedeal</th>
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
                                      <td><?=$u->nm_property;?></td>
                                       <td><?=$u->no_kavling;?></td>
                                      <td><?=$u->nm_lead;?></td>
                                      
                                      <td><?=$u->nm_account;?></td>
                                     <td><?=$u->tgl_dibuat;?></td>
                                     <td><?=$u->status_op;?></td>
                                    <td><?=$u->win_lost;?></td>
									<td><?=$u->waktu_close;?></td>
                                      <td>
                                      <div class="pull-left">
                                      <a class="btn btn-primary btn-xs" href="<?= base_url('c_opportunity/detail/'.$u->id_opportunity);?>"><i class="fa fa-pencil"></i> Detail/Ubah Status</a> <a class="btn btn-danger btn-xs" href="<?= base_url('c_opportunity/hapus/'.$u->id_opportunity);?>" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fa fa-trash-o"></i></a>
                                      
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
