
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Data Laporan Kesempatan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="box box-solid box-primary">
        <div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-"></i>
		Data Laporan Kesempatan</h3>

  
		
		</div>	
            <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <!-- /.panel-heading -->
                    <div class="panel-body">
                      <div style="margin-top: 10px; margin-bottom: 20px; margin-right: 10px; margin-left: 10px;">
                          
                      </div>
                      
                      <?=$this->session->flashdata('msg')?>
					<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
		  <div class="panel-heading">Pilih Periode Tanggal dan Status(Win/Lost)</div>
		  <div class="panel-body">
		     <form class="form-horizontal style-form"  action="<?= base_url();?>c_opportunity/hasillaporan" method="post">
			<div class="form-group">
				<label class="col-sm-3 control-label" for="">Dari</label>
				<div class="col-md-8">
					<input type="date" name="t1" id="" class="form-control tanggal" autocomplete="off" placeholder="Dari Tanggal" required="" value="<?php echo set_value('t1',date('Y-m-d')); ?>"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="">Hingga</label>
				<div class="col-md-8">
					<input type="date" name="t2" id="" class="form-control tanggal" autocomplete="off" placeholder="Hingga Tanggal" required="" value="<?php echo set_value('t2',date('Y-m-d')); ?>"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="">Status</label>
				<div class="col-md-8">
					<select name="status_op" class="form-control">
						<option value="">Semua</option>
						<option value="Win">Win</option>
						<option value="Lost">Lost</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label" for="">Sales</label>
				<div class="col-md-8">
					<?php
                    echo '
                    <select name="sales" class="form-control">
                      <option value="">--Pilih Sales--</option>';
                   
                     foreach ($account as $key) {
                            echo '<option value="'.$key->id_account.'">'.$key->nm_account.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-3 control-label">&nbsp;</label>
				<div class="col-md-9">
					<button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-search"></i> Tampilkan</button>
				</div>
			</div>
			<?php
			echo form_close();
			?>
		  </div>
		</div>
	</div>
	</div>
	<input type="button" class="btn btn-info" onclick="printDiv('printableArea')" value="Cetak Laporan" />
	<div id="printableArea">
                      <div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
                      	
                        <div>
                      <h3 align="center">Laporan Kesempatan Tanggal <?=tgl_indo($t1);?> sampai <?=tgl_indo($t2);?><br>
                      	<?php
                      	if($s1!=''){
                      		
							?>
							Status : <?=$s1;?>
							<?php
						}else
						{
							echo "";
						}
                      	?>
                      	<?php
                      	if($s2!=''){
                      		$nama = $this->db->query("select nm_account from account where id_account='$s2'")->row()->nm_account;
							?>
							<br>Nama Sales : <?=$nama;?>
							<?php
						}else
						{
							echo "Semua Sales";
						}
                      	?>
                      </h3>
                          <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                <th>No</th>
                                  <th>Nama Property</th>
                                  <th>No Kavling</th>
                                	<th>Nama Kostumer</th>
                                  <th>Nama Sales</th>
                                 <th>Tanggal Dibuat</th>
                                 <th>Stage</th>
                                 <th>Win/Lost</th>
                                 <th>Tanggal Closedeal</th>
                                
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
                                     
                                    </td>
                                  </tr>
                                  <?php
                                  $no++;
                                   } 
                                   
                                   ?>
                                  </tbody>
                              </table>
                          </section>
                          </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->
                        <!-- /.table-responsive -->
                    </div>
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