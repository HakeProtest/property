
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

    <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModal"><span class="fa fa-calendar"></span> Tambah Schedule</a>
			
		
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
                      <h4><i class="fa fa-angle-right"></i> Data Kesempatan</h4>
                      <?php
                      if($u->win_lost=="Win"){
                      ?>
                      <a class="btn btn-success pull-right" style="margin-right: 20px" href="#">
					    WIN</a>
					    <?php
					    }elseif($u->win_lost=="Lost"){
					    	?>
					    <a class="btn btn-danger pull-right" style="margin-right: 20px" href="#">
					    LOST</a>
					    <?php
					    }
					    ?>
                          <section>
                          
                          <h2><u><?=$u->nm_property;?> | No Kavling : <?=$u->no_kavling;?></u></h2>
                          <p> Estimasi Keuntungan : Rp. <?php echo number_format($u->est_keuntungan,0,".",".");?><br>
                          	Tanggal Dibuat : <?php echo tgl_indo($u->tgl_dibuat); ?>
                          </p>
                          <h3>Data Kostumer</h3>
                          <table>
						  <tr>
						    <td width="150px">Nama </td>
						    <td>: </td>
						    <td><?=$u->nm_lead;?></td>
						  </tr>
						  <tr>
						    <td>Email</td>
						    <td>: </td>
						    <td><?=$u->cemail;?></td>
						  </tr>
						  <tr>
						    <td>No Kontak</td>
						    <td>: </td>
						    <td><?=$u->ckontak;?></td>
						  </tr>
						</table>
						
						<h3>Data Sales</h3>
                          <table>
						  <tr>
						    <td width="150px">Nama </td>
						    <td>: </td>
						    <td><?=$u->nm_account;?></td>
						  </tr>
						  <tr>
						    <td>Email</td>
						    <td>: </td>
						    <td><?=$u->aemail;?></td>
						  </tr>
						  <tr>
						    <td>No Kontak</td>
						    <td>: </td>
						    <td><?=$u->akontak;?></td>
						  </tr>
						</table>
						<br>
						<ul class="nav nav-tabs" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" href="#usulan" role="tab" data-toggle="tab">Usulan</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#bertemu" role="tab" data-toggle="tab">Bertemu</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#negosiasi" role="tab" data-toggle="tab">Negosiasi</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#keputusan" role="tab" data-toggle="tab">Keputusan</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" href="#close" role="tab" data-toggle="tab">Close Deal</a>
						  </li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
						  <div role="tabpanel" class="tab-pane fade in active" id="usulan">
						  	<h3>Usulan</h3>
						  	<form method="post" action="<?=base_url()?>c_opportunity/usulan">
						  	<textarea name="usulan" class="form-control" placeholder="Deskripsi..." rows="7"><?=$u->usulan;?></textarea>
						  	<input type="hidden" name="status_op" value="Usulan">
						  	<input type="hidden" name="id_opportunity" value="<?=$u->id_opportunity;?>">
						  	<input type="submit" value="Simpan" class="btn btn-info">
						  	</form>
						  </div>
						  <div role="tabpanel" class="tab-pane fade" id="bertemu">
						  	<h3>Bertemu</h3>
						  	<form method="post" action="<?=base_url()?>c_opportunity/bertemu">
						  	<textarea name="bertemu" class="form-control" placeholder="Deskripsi..." rows="7"><?=$u->bertemu;?></textarea>
						  	<input type="hidden" name="status_op" value="Bertemu">
						  	<input type="hidden" name="id_opportunity" value="<?=$u->id_opportunity;?>">
						  	<input type="submit" value="Simpan" class="btn btn-info">
						  	</form>
						  </div>
						  <div role="tabpanel" class="tab-pane fade" id="negosiasi">
						  <h3>Negosiasi</h3>
						  	<form method="post" action="<?=base_url()?>c_opportunity/negosiasi">
						  	<textarea name="negosiasi" class="form-control" placeholder="Deskripsi..." rows="7"><?=$u->negosiasi;?></textarea>
						  	<input type="hidden" name="status_op" value="Negosiasi">
						  	<input type="hidden" name="id_opportunity" value="<?=$u->id_opportunity;?>">
						  	<input type="submit" value="Simpan" class="btn btn-info">
						  	</form>
						  	</div>
						  <div role="tabpanel" class="tab-pane fade" id="keputusan">
						  <h3>Keputusan</h3>
						  	<form method="post" action="<?=base_url()?>c_opportunity/keputusan">
						  	<textarea name="keputusan" class="form-control" placeholder="Deskripsi..." rows="7"><?=$u->keputusan;?></textarea>
						  	<input type="hidden" name="status_op" value="Keputusan">
						  	<input type="hidden" name="id_opportunity" value="<?=$u->id_opportunity;?>">
						  	<input type="submit" value="Simpan" class="btn btn-info">
						  	</form>
						  	
						  </div>
						  <div role="tabpanel" class="tab-pane fade" id="close">
						  	<h3>Close Deal <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModal2"><span class="fa fa-shopping-cart"></span> Tambah Order</a></h3>
						  	<form method="post" action="<?=base_url()?>c_opportunity/close">
						  	<select name="win_lost" class="form-control">
						  		<option value="">- Ubah Win / Lost -</option>
						  		<option value="Win" <?php if($u->win_lost=="Win"){ echo "selected"; } ?>>Win</option>
						  		<option value="Lost" <?php if($u->win_lost=="Lost"){ echo "selected"; } ?>>Lost</option>
						  	</select><br>
						  	<textarea name="close" class="form-control" placeholder="Deskripsi..." rows="7"><?=$u->close_deal;?></textarea>
						  	<input type="hidden" name="status_op" value="Close Deal">
						  	<input type="hidden" name="id_opportunity" value="<?=$u->id_opportunity;?>">
						  	<input type="submit" value="Simpan" class="btn btn-info">
						  	</form>
						  	
						  </div>
						</div>


                          
                          
                          <?php
                          }
                          ?>
                           <h3>Follow Up</h3>   
                           <form class="form-horizontal style-form" action="<?= base_url();?>c_opportunity/ubahlead" method="post">
                         <div style="margin-left: 10px">
                          <div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_jabatan"> Alamat:</label>
			                <div class="col-sm-10">
			                <input type="hidden" name="id_opportunity" value="<?=$u->id_opportunity;?>">
			                <input type="hidden" name="id_lead" value="<?=$u->id_lead;?>">
			                <input type="text" class="form-control" required="required" placeholder=" " id="alamat" name='alamat' placeholder='nm_jabatan' value="<?=$u->calamat;?>">
			              </div>
			              </div>
               
              
			              <div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="pekerjaan"> Pekerjaan:</label>
			                <div class="col-sm-10">
			                <input type="text" class="form-control" required="required" id="pekerjaan" name="pekerjaan"  value="<?=$u->pekerjaan;?>">
			                
			              </div>
			              </div>
            
		            	<div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_jabatan"> Informasi Tambahan:</label>
			                <div class="col-sm-10">
			                <input type="text" class="form-control" required="required" placeholder=" " id="desc_info" name='desc_info' placeholder='desc_info' value="<?=$u->desc_info;?>">
			              </div>
			              </div>
              
			              <div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="pekerjaan"> Source:</label>
			                <div class="col-sm-10">
			                <input type="text" class="form-control" required="required" id="source" name="source"  value="<?=$u->source;?>">
			                
			              </div>
			              </div>
              
                          <div class="form-group">
                         
                          
                                 
                                  <input type="submit" class="btn btn-primary" value="Simpan">
                          </div>
                         
                          
                          </div>
                      </form>
                      
                      <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Schedule</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'c_schedule/simpan2/'.$u->id_opportunity?>">
                <div class="modal-body">

                   
                    <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_pengembang"> Pilih Lead:</label>
                <div class="col-sm-10">
               <?php
                    echo '
                    <select name="id_lead" class="form-control">
                      <option value="">--Pilih Lead--</option>';
                   
                     foreach ($lead as $key) {
                     	if($key->id_lead==$u->id_lead){
						$dv = "selected";
						}else{
						$dv='';	
						}
                            echo '<option value="'.$key->id_lead.'" '.$dv.'>'.$key->nm_lead.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
              </div>
                          <div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_schedule"> Subjek:</label>
			                <div class="col-sm-10">
			                <input type="text" class="form-control" required="required" placeholder=" " id="subjek" name='subjek' placeholder='subjek'>
			              </div>
			              </div>
			              
			              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_pengembang"> Pilih Sales:</label>
                <div class="col-sm-10">
               <?php
                    echo '
                    <select name="id_account" class="form-control">
                      <option value="">--Pilih Sales--</option>';
                   
                     foreach ($account as $key) {
                         if($key->id_account==$u->id_account){
						$dv = "selected";
						}else{
						$dv='';	
						}
                            echo '<option value="'.$key->id_account.'" '.$dv.'>'.$key->nm_account.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
              </div>
              
              <div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_schedule"> Lokasi:</label>
			                <div class="col-sm-10">
			                <input type="text" class="form-control" required="required" placeholder=" " id="lokasi" name='lokasi' placeholder='lokasi'>
			              </div>
			              </div>
                  
                          <div class="form-group">
                         
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_schedule"> Tanggal:</label>
			                <div class="col-sm-10">
			                <input type="date" class="form-control" required="required" placeholder=" " id="tanggal" name='tanggal' placeholder='tanggal'>
			              </div>
			              </div>
			              <div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_schedule"> Jam:</label>
			                <div class="col-sm-10">
			                <input type="time" class="form-control" required="required" placeholder=" " id="jam" name='jam' placeholder='jam'>
			              </div>
			              </div>
			              <div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_schedule"> Deskripsi:</label>
			                <div class="col-sm-10">
			                <textarea name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
			              </div>
			              </div>
                           

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        
        <div class="modal fade" id="largeModal2" tabindex="-1" role="dialog" aria-labelledby="largeModal2" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Order</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'c_order/simpan_input2/'.$u->id_opportunity?>">
                <div class="modal-body">

                   
                   <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_pengembang"> ID Order:</label>
                <div class="col-sm-10">
              <input type="text" name="id_order" class="form-control" required>
              </div>
              </div>
                      <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_pengembang"> Pilih Property:</label>
                <div class="col-sm-10">
               <?php
                    echo '
                    <select name="id_property" class="form-control">
                      <option value="">--Pilih Property--</option>';
                   
                     foreach ($property as $key) {
                     	if($key->id_property==$u->id_property){
						$dv = "selected";
						}else{
						$dv='';	
						}
                            echo '<option value="'.$key->id_property.'" '.$dv.'>'.$key->nm_property.' - No Kavling : '.$key->no_kavling.' </option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
              </div>
                         <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_pengembang"> Pilih Kostumer:</label>
                <div class="col-sm-10">
               <?php
                    echo '
                    <select name="id_lead" class="form-control">
                      <option value="">--Pilih Kostumer--</option>';
                   
                     foreach ($lead as $key) {
                     	if($key->id_lead==$u->id_lead){
						$dv = "selected";
						}else{
						$dv='';	
						}
                            echo '<option value="'.$key->id_lead.'" '.$dv.'>'.$key->nm_lead.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
              </div>
                         
			              
			              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label" for="id_pengembang"> Pilih Agen:</label>
                <div class="col-sm-10">
               <?php
                    echo '
                    <select name="id_account" class="form-control">
                      <option value="">--Pilih Agen--</option>';
                  
                     foreach ($account as $key) {
                     	 if($key->id_account==$u->id_account){
						$dv = "selected";
						}else{
						$dv='';	
						}
                            echo '<option value="'.$key->id_account.'" '.$dv.'>'.$key->nm_account.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
              </div>
              </div>
              
              <div class="form-group">
			                <label class="col-sm-2 col-sm-2 control-label" for="nm_order"> Tanggal Order:</label>
			                <div class="col-sm-10">
			                <input type="date" class="form-control" required="required" placeholder=" " id="tgl_order" name='tgl_order' placeholder='tgl_order'>
			              </div>
			              </div>
                           

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
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
