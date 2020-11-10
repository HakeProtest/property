<?php 
 if ($this->session->userdata('username') == '') {
        redirect('');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>PROPERTY WEB</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url();?>assets/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url();?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/admin/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?= base_url();?>assets/admin/css/style.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet">
	<link href="<?= base_url();?>assets/admin/js/datatables/datatables.min.css" rel="stylesheet">
    <script src="<?= base_url();?>assets/admin/js/chart-master/Chart.js"></script>
    <script src="<?= base_url();?>assets/admin/js/jquery.min.js"></script>
	<script src="<?= base_url();?>assets/admin/js/highchart.js"></script>

  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?= base_url();?>home_admin" class="logo"><b>PROPERTY WEB</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                        </ul>
                    </li>
                   
                </ul>
                <!--  notification end -->
            </div>  
            <div class="top-menu">
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme"><?php 
               $idnya = $this->session->id_account;
               $skr = date("Y-m-d");
               echo $this->db->query("select count(*) as brp from schedule where tanggal='$skr' and id_account=$idnya")->row()->brp;
                ?></span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">Anda memiliki <?php 
               $idnya = $this->session->id_account;
               $skr = date("Y-m-d");
               echo $this->db->query("select count(*) as brp from schedule where tanggal='$skr' and id_account=$idnya")->row()->brp;
                ?> Jadwal</p>
                            </li>
                             <?php
                $q = $this->db->query("select * from schedule join lead on lead.id_lead=schedule.id_lead where tanggal='$skr' and id_account=$idnya")->result();
                foreach($q as $d){
					
				
                ?>
                            <li>
                                <a href="<?=base_url()?>c_schedule/detail/<?=$d->id_schedule;?>">
                                    <div class="task-info">
                                        <div class="desc">Bertemu dengan : <?=$d->nm_lead;?><br> pada <?=$d->tanggal;?> <?=$d->jam;?></div>
                                    </div>
                                    
                                </a>
                            </li>
                             <?php
                }
                ?>
                            <li>
                                <a href="<?=base_url();?>c_schedule/tampil">Lihat Semua</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            
            	<ul class="nav pull-right top-menu">
            	
                    <li><button onclick="logout()" class="logout">KELUAR</button>
                 </li>
              </ul>
            </div>
        </header>
					         <script type="text/javascript">
							       function logout(){
								      var r = confirm('Do You Want To Logout?');
								      if(r){
									       window.location.href='<?php echo base_url();?>login/logout';
								        }
							       }
						        </script>