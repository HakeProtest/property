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
            <h2>Contact</h2>
            <ol class="breadcrumb">
            <li><a href="#">HOME</a></li>            
            <li class="active">Contact</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
          <div class="aa-contact-area">
          
            <div class="aa-contact-bottom">
              <div class="aa-title">
                <h2>Form Kontak</h2>
                <span></span>
                <p>Silahkan isi form dibawah ini jika anda berminat untuk membeli property Kami.</p>
              </div>
              <div class="aa-contact-form">
                <form class="contactform" method="post" action="<?php echo base_url(); ?>c_property/simpan_kontak">                  
                  <p class="comment-form-author">
                    <label for="author">Nama Lengkap <span class="required">*</span></label>
                    <input type="text" name="nm_contact" value="" size="30" required="required">
                  </p>
                  <p class="comment-form-email">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" name="email" value="" aria-required="true" required="required">
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">No Telp</label>
                   <input type="text" name="no_kontak" value="" aria-required="true" required="required"> 
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Minat</label>
                   <input type="text" placeholder="Minat tipe perumahan/no kavling" name="minat" required="required">
                  </p>
                  <p class="comment-form-comment">
                    <label for="comment">Source</label>
                    <input type="text" name="source" value="" aria-required="true" placeholder="Teman, Web, Koran, Media lain" required="required"> 
                  </p>                
                  <p class="form-submit">
                    <input type="submit" name="submit" class="aa-browse-btn" value="Kirim">
                  </p>        
                </form>
              </div>
            </div>
          </div>
       </div>
     </div>
   </div>
 </section>


  <!-- Footer -->
   <?php
 include "footer.php";
 ?>