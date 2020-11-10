<?php
include "header.php";
?>

  <!-- Start slider  -->
  <section id="aa-slider">
    <div class="aa-slider-area"> 
      <!-- Top slider -->
      <div class="aa-top-slider">
        <!-- Top slider single slide -->
        <?php 
        foreach($acc as $d):
			
		
         ?>
        <div class="aa-top-slider-single">
          <img src="<?= base_url();?>foto/<?=$d->foto;?>" alt="img">
          <!-- Top slider content -->
          <div class="aa-top-slider-content">
            <span class="aa-top-slider-catg"><?=$d->nm_kategori;?></span>
            <h2 class="aa-top-slider-title"><?=$d->nm_property;?></h2>
            <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i><?=$d->alamat;?></p>
            <!--<span class="aa-top-slider-off">30% OFF</span>-->
            <p class="aa-top-slider-price">Rp <?php echo number_format($d->harga,0,".",".");?></p>
            <a href="detail/<?=$d->id_property;?>" class="aa-top-slider-btn">Lihat Selengkapnya <span class="fa fa-angle-double-right"></span></a>
          </div>
          <!-- / Top slider content -->
        </div>
        <?php
        endforeach;
        ?>
        <!-- / Top slider single slide -->
        
        <!-- / Top slider single slide -->
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Advance Search -->
  <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
      <form method="post" action="c_property/search">
        <div class="form">
         <div class="aa-advance-search-top">
            <div class="row">
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Lokasi" name="lokasi">
                </div>
              </div>
              <div class="col-md-2">
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
              </div>
              <div class="col-md-2">
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
              </div>
              <div class="col-md-2">
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
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input class="aa-search-btn" type="submit" value="Search">
                </div>
              </div>
            </div>
          </div>
         <div class="aa-advance-search-bottom">
           <div class="row">
            <div class="col-md-12">
              <div class="aa-single-filter-search">
                <span>Harga (Rp)</span>
                <span>Dari</span>
                <span id="skip-value-lower" class="example-val">0</span>
                <input type="hidden" id="skip-value-lower2" name="dari" class="example-val"/>
                <span>Sampai</span>
                <span id="skip-value-upper" class="example-val">2000000000000</span>
                <input type="hidden" id="skip-value-upper2" name="sampai" class="example-val"/>
                <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>                  
              </div>
            </div>
          </div>  
         </div>
        </div>
        </form>
      </div>
    </div>
  </section>
  <!-- / Advance Search -->

  <!-- About us -->
  <section id="aa-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-about-us-area">
            <div class="row">
              <div class="col-md-5">
                <div class="aa-about-us-left">
                  <img src="<?= base_url();?>assets/front/img/about-us.png" alt="image">
                </div>
              </div>
              <div class="col-md-7">
                <div class="aa-about-us-right">
                  <div class="aa-title">
                    <h2>About Us</h2>
                    <span></span>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ab dignissimos vitae maxime adipisci blanditiis rerum quae quos! Id at rerum maxime modi fugit vero corrupti, ad atque sit laborum ipsum sunt blanditiis suscipit odio, aut nostrum assumenda nobis rem a maiores temporibus non commodi laboriosam, doloremque expedita! Corporis, provident?</p>                  
                  <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>                    
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / About us -->
<section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Projek Terbaru</h2>
          <span></span>
          <p>List projek Perumahan terbaru daerah bengkulu.</p>         
        </div>
        <div class="aa-latest-properties-content">
        
         <div id="myy" class="carousel slide">
        <div class="carousel-inner" >
             <?php 
             $fs = 1;
        foreach($pro as $d){
        	if($fs==1){
				$act = "active";
			}else{
				$act = "";
			}
			
         ?>
         <?php
         if(($fs % 3 == 1) || ($fs == 1)){
		
         ?>
          <div class="item <?=$act;?>">
          
          <?php
          }
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
         if($fs % 3 == 0){
		
         ?>
         
            </div>
              <?php
          }
          ?>
           
            
            <?php
            $fs++;
            }
            ?>
            
            </div>
            <a class="left carousel-control" style="background-image: none;" href="#myy" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" style="background-image: none;" href="#myy" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <!-- Latest property -->
  <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2>Properti Terbaru</h2>
          <span></span>
          <p>List property terbaru daerah bengkulu.</p>         
        </div>
        <div class="aa-latest-properties-content">
       
          <div class="row">
          <?php 
       
        foreach($acc as $d){
        	
         ?>
        
            <div class="col-md-4">
              <article class="aa-properties-item">
                <a href="#" class="aa-properties-item-img">
                  <img src="<?= base_url();?>foto/<?=$d->foto;?>" alt="img">
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
            </div>
            
            <?php
            }
            ?>
            
            </div>
            </div></div>
            
          </div>
        
  </section>
  <!-- / Latest property -->
  
  
  

  <!-- Service section -->
  <section id="aa-service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-service-area">
            <div class="aa-title">
              <h2>Our Service</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero voluptatibus.</p>
            </div>
            <!-- service content -->
            <div class="aa-service-content">
              <div class="row">
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-home"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Sale</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-check"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Rent</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-crosshairs"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Property Development</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="aa-single-service">
                    <div class="aa-service-icon">
                      <span class="fa fa-bar-chart-o"></span>
                    </div>
                    <div class="aa-single-service-content">
                      <h4><a href="#">Market Analysis</a></h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto repellendus quasi asperiores itaque dolorem at.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Service section -->

  

  <!-- Our Agent Section-->
  <section id="aa-agents">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-agents-area">
            <div class="aa-title">
              <h2>Our Team</h2>
              <span></span>
              <p>Tim yang bekerja di property bengkulu.</p>
            </div>
            <!-- agents content -->
            <div class="aa-agents-content">
              <ul class="aa-agents-slider">
              
        <?php 
        foreach($acc2 as $d){
         ?>
                <li>
                  <div class="aa-single-agents">
                    <div class="aa-agents-img">
                      <img src="<?= base_url();?>foto/<?=$d->foto;?>" alt="agent member image">
                    </div>
                    <div class="aa-agetns-info">
                      <h4><a href="#"><?=$d->nm_account;?></a></h4>
                      <span><?=$d->nm_jabatan;?></span>
                      <div class="aa-agent-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                      </div>
                    </div>
                  </div>
                </li>
           <?php
           }
           ?>     
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Our Agent Section-->

  <!-- Client Testimonial -->
  <section id="aa-client-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-testimonial-area">
            <div class="aa-title">
              <h2>What Client Say</h2>
              <span></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus eaque quas debitis animi ipsum, veritatis!</p>
            </div>
            <!-- testimonial content -->
            <div class="aa-testimonial-content">
              <!-- testimonial slider -->
              <ul class="aa-testimonial-slider">
                <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="<?= base_url();?>assets/front/img/testimonial-1.png" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>David Muller</p>
                      <span>Web Designer</span>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="<?= base_url();?>assets/front/img/testimonial-3.png" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>David Muller</p>
                      <span>Web Designer</span>
                    </div>
                  </div>
                </li>
                 <li>
                  <div class="aa-testimonial-single">
                    <div class="aa-testimonial-img">
                      <img src="<?= base_url();?>assets/front/img/testimonial-2.png" alt="testimonial img">
                    </div>
                    <div class="aa-testimonial-info">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                    </div>
                    <div class="aa-testimonial-bio">
                      <p>David Muller</p>
                      <span>Web Designer</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Client Testimonial -->

  <!-- Client brand -->
  
  <!-- / Client brand -->

  <!-- Latest blog -->
  
  <!-- / Latest blog -->

  <!-- Footer -->
  
 <?php
 include "footer.php";
 ?>