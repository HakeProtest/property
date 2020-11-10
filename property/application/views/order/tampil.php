
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Data Order</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="box box-solid box-primary">
        <div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-"></i>
		Data Order </h3>

    <a class="btn btn-primary pull-right" href="<?= base_url('c_order/tambah/');?>">
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
                      <h4><i class="fa fa-angle-right"></i> Data Order</h4>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                 <th>No</th>
                                  <th>ID Order</th>
                                  <th>Nama Kostumer</th>
                                  <th>Nama Sales</th>
                                  <th>Nama Property</th>
                                  <th>No Kavling</th>
                                  <th>Tanggal Order</th>
                                  <th>Harga</th>
                                  
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
                                      <td><?=$u->id_order;?></td>
                                      <td><?=$u->nm_lead;?></td>
                                      <td><?=$u->nm_account;?></td>
                                      <td><?=$u->nm_property;?></td>
                                     <td><?=$u->no_kavling;?></td>
                                      <td><?php echo tgl_indo($u->tgl_order);?></td>
                                      <td>Rp <?=number_format($u->harga,0,".",".");?></td>
                                      <td>
                                      <div class="pull-left">
                                      <!--<a class="btn btn-success btn-xs" href="<?= base_url('c_order/detail/'.$u->id_order);?>"><i class="fa fa-eye"></i></a>
                                      <a class="btn btn-primary btn-xs" href="<?= base_url('c_order/ubah/'.$u->id_order);?>"><i class="fa fa-pencil"></i></a> -->
                                      <a class="btn btn-danger btn-xs" href="<?= base_url('c_order/hapus/'.$u->id_order);?>" onclick="return confirm('Yakin akan menghapus data ini?');"><i class="fa fa-trash-o"></i></a>
                                      
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
