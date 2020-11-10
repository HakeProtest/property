
<?php
  
    foreach($bulanan as $result){
        $bulan[] = $result->tahun_bulan; //ambil bulan
        $jumlah_bulanan[] = (int) $result->jumlah_bulanan; //ambil nilai
       
    }
    
    foreach($pie as $result){
        $status[] = $result->status_op; //ambil bulan
        $jml[] = (int) $result->jml; //ambil nilai
       //$jml[] = $result->status_op.",".(int) $result->jml; //ambil nilai
    }
  
     
?>
<script>
	var chart2;
$(function() {
chart2 = Highcharts.chart('cc2', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Order Bulanan'
    },
    subtitle: {
        text: 'Property Bengkulu'
    },
    xAxis: {
        categories: <?php echo json_encode($bulan);?>,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Pendapatan (Rp)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Jumlah',
        data: <?php echo json_encode($jumlah_bulanan);?>

    }]
});
});


//pie

var chart3;
$(function() {
chart3 = Highcharts.chart('cc3', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Grafik Jumlah Opportunity'
    },
    subtitle: {
        text: 'Property Bengkulu'
    },
    xAxis: {
        categories: <?php echo json_encode($status);?>,
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Jumlah',
        data: [
       <?php foreach($pie as $result){ ?>
       {
        name: "<?php echo $result->status_op; ?>",
        y: <?php echo (int) $result->jml;?>,
            selected: true
            },
            <?php } ?>
        ]
       
		
    }]
});
});
</script>
<section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                    <div id="cc2" class="col-md-8"></div>
                    <div id="cc3" class="col-md-4"></div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="box box-solid box-primary">
        <div class="box-header">
		<h3 class="btn btn disabled box-title">
		<i class="fa  fa-"></i>
		Data Grafik Order </h3>

    
			
		
		</div>	
            <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <!-- /.panel-heading -->
                    <div class="panel-body">
                      <div style="margin-top: 10px; margin-bottom: 20px; margin-right: 10px; margin-left: 10px;">
                          
                      </div>
                      
                      <?=$this->session->flashdata('msg')?>
					
                      <div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
                      	
                          
                          </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->
                        <!-- /.table-responsive -->
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
