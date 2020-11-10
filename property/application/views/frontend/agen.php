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
            <h2>AGEN</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">AGEN</li>
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
        foreach($acc2 as $d){
         ?>
         
            <div class="col-md-3">
              <article class="aa-properties-item">
                <a href="#">
                  <img src="<?= base_url();?>foto/<?=$d->foto;?>" alt="img" width="253px" height="330px">
                </a>
                
                <div class="aa-properties-item-content">
                 
                  <div class="aa-properties-about">
                    <h3><a href="#"><?=$d->nm_account;?></a></h3>
                    <p>Jabatan : <?=$d->nm_jabatan;?><br>
                    	No Telp : <?=$d->no_kontak;?>
                    </p>                      
                  </div>
                  
                </div>
              </article>
            </div>
             
            
            <?php
            
            }
            ?>
            
            </div>
            \
      </div>
    </div>
  </section>


  <!-- Footer -->
   <?php
 include "footer.php";
 ?>