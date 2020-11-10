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
            <h2>Properties Page</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">PROPERTIES</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-properties-content">
            <!-- start properties content head -->
            <div class="aa-properties-content-head">              
              <div class="aa-properties-content-head-left">
                <form action="" class="aa-sort-form">
                  <!--<label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Name</option>
                    <option value="3">Price</option>
                    <option value="4">Date</option>
                  </select>-->
                </form>
                <form action="" class="aa-show-form">
                  <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">6</option>
                    <option value="2">12</option>
                    <option value="3">24</option>
                  </select>
                </form>
              </div>
              <div class="aa-properties-content-head-right">
                <a id="aa-grid-properties" href="#"><span class="fa fa-th"></span></a>
                <a id="aa-list-properties" href="#"><span class="fa fa-list"></span></a>
              </div>            
            </div>
            <!-- Start properties content body -->
            <div class="aa-properties-content-body">
              <ul class="aa-properties-nav">
              <?php 
        foreach($acc as $d):
         ?>
                <li>
                  <article class="aa-properties-item">
                    <a class="aa-properties-item-img" href="<?= base_url();?>foto/<?=$d->foto;?>">
                      <img alt="img" src="<?= base_url();?>foto/<?=$d->foto;?>">
                    </a>
                     <?php
                if($d->status=="For Sale"){
                ?>
                <div class="aa-tag for-sale">
                  For Sale
                </div>
                <?php
				}else{
					?>
				<div class="aa-tag sold-out">
                  Sold Out
                </div>	
				<?php
				}
                ?>
                <div class="aa-properties-item-content">
                  <div class="aa-properties-info">
                    <span><?=$d->kmr_tidur;?> Kamar Tidur</span>
                    <span><?=$d->kmr_mandi;?> Kamar Mandi</span>
                    <!--<span><?=$d->listrik;?> Watt</span>-->
                    <span><?=$d->luas;?> m2</span>
                  </div>
                  <div class="aa-properties-about">
                    <h3><a href="#"><?=$d->nm_property;?></a></h3>
                    <p>No Kavling : <?=$d->no_kavling;?><br><?=$d->deskripsi;?></p>                      
                  </div>
                  <div class="aa-properties-detial">
                    <span class="aa-price">
                      Rp <?php echo number_format($d->harga,0,".",".");?>
                    </span>
                    <a href="<?=base_url();?>c_property/detail/<?=$d->id_property;?>" class="aa-secondary-btn">Lihat Detail</a>
                  </div>
                </div>
                  </article>
                </li>
                <?php
        endforeach;
        ?>
                
              </ul>
            </div>
            <!-- Start properties content bottom -->
            <!--<div class="aa-properties-content-bottom">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li class="active"><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>-->
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

 <?php
 include "footer.php";
 ?>