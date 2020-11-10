<aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#">
                   <img src="<?= base_url();?>foto/<?php echo $this->session->foto;?>"  width="150"></a></p>
              	  <h5 class="centered"><?php echo $this->session->nm_account; ?></h5>
              	  	<!--<p class="centered"><a href="<?= base_url();?>c_pengguna/profil/<?=$this->session->id_account;?>" class="btn btn-info btn-xs">Lihat Profil</a></p>-->
                  <li class="mt">
                      <a  href="<?= base_url();?>c_order/grafik">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				<!--li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Kelola User</span>
                      </a>
                      <ul class="sub">
                        <li><a  href="<?= base_url();?>c_pengguna/tampilpengguna">Data User</a></li>
                      
						            
                      </ul>
                  </li-->
                  <?php
                  if($this->session->akses=="Admin"){
				  	
				
                   ?>
                <li><a  href="<?= base_url();?>c_account/tampil"><i class="fa fa-user"></i> Data User</a></li>
                <li><a  href="<?= base_url();?>c_jabatan/tampil"><i class="fa fa-graduation-cap"></i> Data Jabatan</a></li>
				<li><a  href="<?= base_url();?>c_kategori/tampil"><i class="fa fa-book"></i> Data Tipe</a></li>
				<li><a  href="<?= base_url();?>c_pengembang/tampil"><i class="fa fa-users"></i> Data Pengembang</a></li>
				<li><a  href="<?= base_url();?>c_projek/tampil"><i class="fa fa-home"></i> Data Projek</a></li>
				<li><a  href="<?= base_url();?>c_property/tampil"><i class="fa fa-home"></i> Data Property</a></li>
				
						  
				  <?php
				    }elseif($this->session->akses=="Agen" || $this->session->akses=="Manager" ){
				    	?>
				 
				
				
				
				<!--<li><a  href="<?= base_url();?>c_contact/tampil"><i class="fa fa-user"></i> Data Calon Kostumer</a></li>-->
				<li><a  href="<?= base_url();?>c_lead/tampil"><i class="fa fa-user"></i> Data Kostumer</a></li>
				<li><a  href="<?= base_url();?>c_order/tampil"><i class="fa fa-shopping-cart"></i> Data Order</a></li>
				<li><a  href="<?= base_url();?>c_schedule/tampil"><i class="fa fa-calendar"></i> Data Jadwal</a></li>
				<li><a  href="<?= base_url();?>c_opportunity/tampil"><i class="fa fa-tasks"></i> Data Kesempatan</a></li>
				<!--<li><a  href="<?= base_url();?>c_opportunity/aktifitas"><i class="fa fa-tasks"></i> Data Aktifitas</a></li>-->
				<li><a  href="<?= base_url();?>c_order/laporan"><i class="fa fa-archive"></i> Laporan Order</a></li>	
				<li><a  href="<?= base_url();?>c_opportunity/laporan"><i class="fa fa-archive"></i> Laporan Kesempatan</a></li>		
                   ?>
                   <?php
					}elseif( $this->session->akses=="Direktur" ){
				    	?>
				 <li><a  href="<?= base_url();?>c_account/tampil"><i class="fa fa-user"></i> Data User</a></li>
				<li><a  href="<?= base_url();?>c_order/laporan"><i class="fa fa-archive"></i> Data Laporan</a></li>		
				<li><a  href="<?= base_url();?>c_opportunity/laporan"><i class="fa fa-archive"></i> Laporan Kesempatan</a></li>		
                   ?>
                   <?php
					}
				  ?>
				
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>