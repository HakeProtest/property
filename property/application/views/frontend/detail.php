<?php
include "header.php";
?>
  <!-- End menu section -->

  <!-- Start Proerty header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Detail Property</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active"><?=$acc->nm_property;?></li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->
<style>
	.product-slider { padding: 45px; }

.product-slider #carousel { border: 4px solid #1089c0; margin: 0; }

.product-slider #thumbcarousel { margin: 12px 0 0; padding: 0 45px; }

.product-slider #thumbcarousel .item { text-align: center; }

.product-slider #thumbcarousel .item .thumb { border: 4px solid #cecece; width: 20%; margin: 0 2%; display: inline-block; vertical-align: middle; cursor: pointer; max-width: 98px; }

.product-slider #thumbcarousel .item .thumb:hover { border-color: #1089c0; }

.product-slider .item img { width: 100%; height: auto; }

.carousel-control { color: #0284b8; text-align: center; text-shadow: none; font-size: 30px; width: 30px; height: 30px; line-height: 20px; top: 23%; }

.carousel-control:hover, .carousel-control:focus, .carousel-control:active { color: #333; }

.carousel-caption, .carousel-control .fa { font: normal normal normal 30px/26px FontAwesome; }
.carousel-control { background-color: rgba(0, 0, 0, 0); bottom: auto; font-size: 20px; left: 0; position: absolute; top: 30%; width: auto; }

.carousel-control.right, .carousel-control.left { background-color: rgba(0, 0, 0, 0); background-image: none; }

</style>
  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-properties-content">            
            <!-- Start properties content body -->
            <div class="aa-properties-details">
             <div class="aa-properties-details-img">
              
               <div class="product-slider">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active"> <img src="<?= base_url();?>foto/<?=$acc->foto;?>"> </div>
      <?php
        foreach($acc2 as $u){
      ?>
      <div class="item"> <img src="<?= base_url();?>foto/<?=$u->foto_property;?>"> </div>
    <?php
    }
    ?>
    </div>
  </div>
  <div class="clearfix">
    <div id="thumbcarousel" class="carousel slide" data-interval="false">
      <div class="carousel-inner">
        <div class="item active">
          <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="<?= base_url();?>foto/<?=$acc->foto;?>"></div>
           <?php
           $slide=1;
        foreach($acc2 as $u){
      ?>
          <div data-target="#carousel" data-slide-to="<?=$slide;?>" class="thumb"><img src="<?= base_url();?>foto/<?=$u->foto_property;?>"></div>
          
          <?php
          $slide++;
    }
    ?>
          
        </div>
        
      </div>
      <!-- /carousel-inner --> 
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> </a> <a class="right carousel-control" href="#carousel" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i> </a> </div>
    <!-- /thumbcarousel --> 
    
  </div>
</div>

               
             </div>
             <div class="aa-properties-info">
             
             <h2>Detail Property</h2><br>
               <div class="col-lg-6">
                  <div class="form-panel">
                  	   
                      <form class="form-horizontal style-form" enctype="multipart/form-data" action="<?= base_url();?>c_property/simpan_ubah" method="post">
                         <div class="form-group">
                <label class="col-sm-4 " for="nm_property"> Nama Property:</label>
                <div class="col-sm-8">
               
                 <?=$acc->nm_property;?>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 " for="id_pengembang"> Projek:</label>
                <div class="col-sm-8">
                
                  <?=$acc->nm_projek;?>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 " for="id_kategori"> Kategori:</label>
                <div class="col-sm-8">
                
                  <?=$acc->nm_kategori;?>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 " for="stok"> No Kavling:</label>
                <div class="col-sm-8">
                
                <?=$acc->no_kavling;?> 
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 " for="harga"> Harga:</label>
                <div class="col-sm-8">
              
                Rp. <?=$acc->harga;?>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 " for="tgl_listing"> Tanggal Listing:</label>
                <div class="col-sm-8">
                
                <?=$acc->tgl_listing;?>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 " for="nm_tipe"> Nama Tipe:</label>
                <div class="col-sm-8">
                
                <?=$acc->nm_tipe;?>
              </div>
              </div>
              
              
                   
                         
                      </form>
                  </div>
          		</div><!-- col-lg-12-->    
          		
          	<div class="col-lg-6">
                  <div class="form-panel">
                  	   
                      <form class="form-horizontal style-form" enctype="multipart/form-data" action="<?= base_url();?>c_property/simpan_ubah" method="post">
                        
              <div class="form-group">
                <label class="col-sm-4 " for="luas"> Luas:</label>
                <div class="col-sm-8">
               
                <?=$acc->luas;?> m2
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 " for="hrg_m2"> Harga m2:</label>
                <div class="col-sm-8">
               
                Rp <?=$acc->hrg_m2;?>
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 " for="interior"> Interior:</label>
                <div class="col-sm-8">
               <p><?=$acc->interior;?></p>
                
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 " for="kmr_tidur"> Kamar Tidur:</label>
                <div class="col-sm-8">
               
                <?=$acc->kmr_tidur;?> Kamar
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 " for="kmr_mandi"> kamar Mandi:</label>
                <div class="col-sm-8">
                
                <?=$acc->kmr_mandi;?> Kamar
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 " for="listrik"> Listrik:</label>
                <div class="col-sm-8">
              
                <?=$acc->listrik;?> Watt
              </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 " for="deskripsi"> Deskripsi:</label>
                <div class="col-sm-8">
                
                <?=$acc->deskripsi;?>
              </div>
              </div>
              
                   
                         
                      </form>
                     
                  </div>
          		</div><!-- col-lg-12-->  
          		 
             </div>
             <!-- Properties social share -->
            
             <!-- Nearby properties -->
             <center><a href="<?=base_url()?>foto/<?=$acc->file;?>" class="btn btn-info" target="_blank">DOWNLOAD FILE</a></center>

            </div>           
          </div>
        </div>
        <!-- Start properties sidebar -->
        <div class="col-md-4">
          <aside class="aa-properties-sidebar">
            <!-- Start Single properties sidebar -->
            <div class="aa-properties-single-sidebar">
              <h3>Properties Search</h3>
             <form method="post" action="<?php echo base_url(); ?>c_property/search">
                <div class="aa-single-advance-search">
                   <input type="text" placeholder="Lokasi" name="lokasi">
                </div>
                <div class="aa-single-advance-search">
                  <?php
                    echo '
                    <select name="id_kategori">
                      <option value="">Kategori</option>';
                   
                     foreach ($kat as $key) {
                            echo '<option value="'.$key->id_kategori.'">'.$key->nm_kategori.'</option>';
                          }
                    echo '
                      </select>';
                  ?>
                </div>
                <div class="aa-single-advance-search">
                  <select name="kamar_tidur">
                    <option value="" selected>Bed</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
                <div class="aa-single-advance-search">
                  <select name="kamar_mandi">
                    <option value="" selected>Bathroom</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
                <div class="aa-single-filter-search">
                  <span>HARGA (Rp)</span>
                  <span>DARI</span>
                  <span id="skip-value-lower" class="example-val">100000000</span>
                  <input type="hidden" id="skip-value-lower2" name="dari" class="example-val"/>
                  <span>SAMPAI</span>
                  <span id="skip-value-upper" class="example-val">2000000000</span>
                  <input type="hidden" id="skip-value-upper2" name="sampai" class="example-val"/>
                  <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                  </div>                  
                </div>
                <div class="aa-single-advance-search">
                  <input type="submit" value="Search" class="aa-search-btn">
                </div>
              </form>
            </div> 
            <!-- Start Single properties sidebar -->
            
            <div class="aa-properties-single-sidebar">
              <h3>Daftar Kostumer</h3>
             <form method="post" action="<?php echo base_url(); ?>c_property/simpan_kontak">
                <div class="aa-single-advance-search">
                   <input type="text" placeholder="Nama" name="nm_contact">
                </div>
                 <div class="aa-single-advance-search">
                   <input type="text" placeholder="Email" name="email">
                </div>
                <div class="aa-single-advance-search">
                   <input type="text" placeholder="No Telpon" name="no_kontak">
                </div>
                <div class="aa-single-advance-search">
                   <input type="text" placeholder="Minat tipe perumahan/no kavling" name="minat">
                </div>
                <div class="aa-single-advance-search">
                   <input type="text" placeholder="Source" name="source">
                </div>
                <div class="aa-single-advance-search">
                  <input type="submit" value="Daftar" class="aa-search-btn">
                </div>
              </form>
            </div> 
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- / Properties  -->

  <!-- Footer -->
   <?php
 include "footer.php";
 ?>