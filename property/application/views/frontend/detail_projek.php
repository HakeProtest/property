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
            <h2>Detail Projek</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active"><?=$acc->nm_projek;?></li>
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
    <h1><?=$acc->nm_projek;?></h1>
      <div class="row">
        <div class="col-md-8">
          <div class="aa-properties-content">            
            <!-- Start properties content body -->
            <div class="aa-properties-details">
             <div class="aa-properties-details-img">
               <img src="<?= base_url();?>foto/<?=$acc->foto_projek;?>" alt="img">
               
             </div>
             <br>
              <h1>Foto Denah</h1>
             <div class="aa-properties-details-img">
               <img src="<?= base_url();?>foto/<?=$acc->foto_denah;?>" alt="img">
               
             </div>
             <div class="aa-properties-info">
               <div class="col-lg-12"><br><br>
                  <section id="no-more-tables">
                              <table class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                <th>ID Property</th>
                                  <th>Nama</th>
                                   <th>No Kavling</th>
                                  <th>Harga</th>
                                 <th>Tipe</th>
                                  <th>Status</th>
                                
                                  </tr>
                                  </thead>
                                  
                                  <tbody>
                                  <?php
                                  foreach($acc2 as $u){
                                    
                                  ?>
                                  <tr>
                                     
                                     
                                      <td><a href="<?=base_url();?>c_property/detail/<?=$u->id_property;?>"><font color="blue"><?=$u->id_property;?></font></a></td>
                                      <td><?=$u->nm_property;?></td>
                                      <td><?=$u->no_kavling;?></td>
                                     <td><?=$u->harga;?></td>
                                     <td><?=$u->nm_tipe;?></td>
                                     <td><?=$u->status;?></td>
                                  </tr>
                                  <?php } ?>
                                  </tbody>
                              </table>
                          </section>
          		</div><!-- col-lg-12-->    
             </div>
             <!-- Properties social share -->
            
             <!-- Nearby properties -->
             

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