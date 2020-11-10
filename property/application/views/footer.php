  <footer class="site-footer">
          <div class="text-center">
              
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url();?>assets/admin/js/jquery.js"></script>
    <script src="<?= base_url();?>assets/admin/js/jquery-1.8.3.min.js"></script>
    <script src="<?= base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?= base_url();?>assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?= base_url();?>assets/admin/js/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url();?>assets/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?= base_url();?>assets/admin/js/jquery.sparkline.js"></script>
    <script src="<?= base_url();?>assets/admin/js/datatables/datatables.js"></script>
   


    <!--common script for all pages-->
    <script src="<?= base_url();?>assets/admin/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?= base_url();?>assets/admin/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?= base_url();?>assets/admin/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?= base_url();?>assets/admin/js/sparkline-chart.js"></script>    
	<script src="<?= base_url();?>assets/admin/js/zabuto_calendar.js"></script>	
	<script>
		$(document).ready(function() {
  $('table.table').DataTable({
        "language": {
            "lengthMenu": "Menampilkan _MENU_ Data per Halaman",
            "zeroRecords": "Data Tidak Ditemukan",
            "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(Ditemukan dari _MAX_ total data)",
            "paginate": {
      "previous": "Sebelumnya",
      "next": "Selanjutnya"
    }
        }
    });
} );


	</script>
	<script type="text/javascript">
jQuery(document).ready(function($){
    $('.my-form2 .add-box').click(function(){
        var n = $('.text-box').length + 1;
        if( 5 < n ) {
            alert('Stop it!');
            return false;
        }
        var box_html = $('<div><div class="col-md-8 col-md-offset-2"><div class="col-md-4 text-right">Pilih Foto :</div><div class="col-md-8"><input type="file" name="foto_property[]" class="form-control"> </div></div><a href="#" class="remove-box btn btn-danger btn-sm "><i class="fa fa-trash-o"> </i></a></div>');
        
        box_html.hide();
        $('.my-form2 p.text-box:last').after(box_html);
        box_html.fadeIn('slow');
        return false;
    });
    $('.my-form2').on('click', '.remove-box', function(){
        $(this).parent().css( 'background-color', '#' );
        $(this).parent().fadeOut("slow", function() {
            $(this).remove();
            $('.box-number').each(function(index){
                $(this).text( index + 1 );
            });
        });
        return false;
    });
});
</script>
	<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
	</body>
</html>