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
            <h2>PROJEK</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">PROJEK</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

 <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        
        <div class="aa-latest-properties-content">
        
         
             <?php 
        foreach($pro as $d){
         ?>
         
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="<?= base_url();?>foto/<?=$d->foto_projek;?>" alt="img">
                </a>
                
                <div class="aa-properties-item-content">
                 
                  <div class="aa-properties-about">
                    <h3><a href="#"><?=$d->nm_projek;?></a></h3>
                    <p>Alamat : <?=$d->alamat;?><br><?=$d->deskripsi;?></p>                      
                  </div>
                  <div class="aa-properties-detial">
                    
                    <a href="<?=base_url();?>c_projek/detail/<?=$d->id_projek;?>" class="aa-secondary-btn">Lihat Detail</a>
                  </div>
                </div>
              </article>
            </div>
             
            
            <?php
            
            }
            ?>
            
            </div>
            
      </div>
    </div>
  </section>


  <!-- Footer -->
   <?php
 include "footer.php";
 ?>