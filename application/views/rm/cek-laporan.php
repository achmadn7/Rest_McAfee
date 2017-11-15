<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Indikator Pelayanan Rawat Inap</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>template/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>template/assets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>template/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Morrid Chart -->
    <link href="<?php echo base_url()?>template/assets/morrisjs/morris.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div id="wrapper">
      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url()?>perawat/dashboard">Sistem Informasi Indikator Pelayanan</a>
          </div>
          <!-- Top Menu Items -->
          <ul class="nav navbar-right top-nav">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="<?php echo base_url()?>home/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                      </li>
                  </ul>
              </li>
          </ul>
          <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="<?php echo base_url()?>rm/dashboard"><i class="fa fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>rm/sensus"><i class="fa fa-file"></i> Informasi Sensus</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>rm/rekap"><i class="fa fa-spinner" aria-hidden="true"></i> Rekap Sensus</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>rm/indikator"><i class="fa fa-spinner" aria-hidden="true"></i> Indikator Pelayanan</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>rm/laporan"><i class="fa fa-spinner" aria-hidden="true"></i> Laporan</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>rm/histori"><i class="fa fa-spinner" aria-hidden="true"></i> Histori Rekap Sensus</a>
                </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <small>Laporan Indikator Pelayanan</small>
                        </h3>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                      <?php
                        echo form_open("rm/laporan/cetak");
                      ?>
                      <button type="submit" name="submit" class="btn btn-success btn-sm">Cetak</button>
                      <h5><center>
                        Tahun <?php $thn = $this->input->post('tahun'); echo $thn; echo "<input type='hidden' name='tahun' class='form-control' value='$thn'>";?>
                      </center></h5>
                      <hr>
                    </div>
                    <div class="col-lg-12" id="hitung" style.display="none">
                      <table class="table table-striped table-bordered table-hover">
                        <tr>
                          <td>No</td>
                          <td>Data</td>
                          <td>Triwilan I</td>
                          <td>Triwilan II</td>
                          <td>Triwilan III</td>
                          <td>Triwilan IV</td>
                          <td>Rata-rata</td>
                          <td>Parameter</td>
                          <td>Kesimpulan</td>
                        </tr>
                        <?php
                         foreach ($indikator as $ind) {
                           echo "<tr class='odd gradeX'>
                                 <td>1</td>
                                 <td>BOR (%)</td>
                                 <td>".round($ind->bor_i)."</td>
                                 <td>".round($ind->bor_ii)."</td>
                                 <td>".round($ind->bor_iii)."</td>
                                 <td>".round($ind->bor_iv)."</td>
                                 <td>".round($ind->rata_bor)."</td>
                                 <td>60-80</td>
                                 <td>".$ind->kesimpulan_bor."</td>
                           </tr>
                           <tr class='odd gradeX'>
                                 <td>2</td>
                                 <td>ALOS (hari)</td>
                                 <td>".round($ind->alos_i)."</td>
                                 <td>".round($ind->alos_ii)."</td>
                                 <td>".round($ind->alos_iii)."</td>
                                 <td>".round($ind->alos_iv)."</td>
                                 <td>".round($ind->rata_alos)."</td>
                                 <td>6-9</td>
                                 <td>".$ind->kesimpulan_alos."</td>
                           </tr>
                           <tr class='odd gradeX'>
                                 <td>3</td>
                                 <td>TOI (hari)</td>
                                 <td>".round($ind->toi_i)."</td>
                                 <td>".round($ind->toi_ii)."</td>
                                 <td>".round($ind->toi_iii)."</td>
                                 <td>".round($ind->toi_iv)."</td>
                                 <td>".round($ind->rata_toi)."</td>
                                 <td>1-3</td>
                                 <td>".$ind->kesimpulan_toi."</td>
                           </tr>
                           <tr class='odd gradeX'>
                                 <td>4</td>
                                 <td>BTO (kali)</td>
                                 <td>".round($ind->bto_i)."</td>
                                 <td>".round($ind->bto_ii)."</td>
                                 <td>".round($ind->bto_iii)."</td>
                                 <td>".round($ind->bto_iv)."</td>
                                 <td>".round($ind->rata_bto)."</td>
                                 <td>40-50</td>
                                 <td>".$ind->kesimpulan_bto."</td>
                           </tr>
                           <tr class='odd gradeX'>
                                 <td>5</td>
                                 <td>NDR (permil)</td>
                                 <td>".round($ind->ndr_i)."</td>
                                 <td>".round($ind->ndr_ii)."</td>
                                 <td>".round($ind->ndr_iii)."</td>
                                 <td>".round($ind->ndr_iv)."</td>
                                 <td>".round($ind->rata_ndr)."</td>
                                 <td></td>
                                 <td></td>
                           </tr>
                           <tr class='odd gradeX'>
                                 <td>6</td>
                                 <td>GDR (permil)</td>
                                 <td>".round($ind->gdr_i)."</td>
                                 <td>".round($ind->gdr_ii)."</td>
                                 <td>".round($ind->gdr_iii)."</td>
                                 <td>".round($ind->gdr_iv)."</td>
                                 <td>".round($ind->rata_gdr)."</td>
                                 <td></td>
                                 <td></td>
                           </tr>";
                         }
                        ?>
                      </table>
                    </div>
                    <div class="col-lg-12">
                      <!-- load library jquery dan highcharts -->
                      <script src="<?php echo base_url();?>template/assets/chart/highcharts.js"></script>
                      <script src="<?php echo base_url();?>template/assets/chart/exporting.js"></script>
                      <!-- end load library -->
                      <hr>
                      <h5><center>Grafik<center></h5>
                        <div id="container" style="min-width: 310px; max-width: 900px; height: 400px; margin: 0 auto"></div>
                        <script type="text/javascript">
                          Highcharts.chart('container', {
                              chart: {
                                  type: 'column'
                              },
                              title: {
                                  text: 'BOR, ALOS, TOI, BTO, NDR, dan GDR RSUD Pandan Arang Boyolali'
                              },
                              subtitle: {
                                  text: <?php foreach ($indikator as $r) { $thn = $r->tgl; $array1=explode("-",$thn); $tahun=$array1[0]; echo $tahun;} ?>
                              },
                              xAxis: {
                                  categories: ['BOR (%)', 'ALOS (hari)', 'TOI(hari)', 'BTO (kali)', 'NDR (permil)', 'GDR (permil)'],
                                  title: {
                                      text: null
                                  }
                              },
                              yAxis: {
                                  min: 0,
                                  title: {
                                      text: '',
                                      align: 'high'
                                  },
                                  labels: {
                                      overflow: 'justify'
                                  }
                              },
                              tooltip: {
                                  valueSuffix: ' '
                              },
                              plotOptions: {
                                  bar: {
                                      dataLabels: {
                                          enabled: true
                                      }
                                  }
                              },
                              legend: {
                                  layout: 'vertical',
                                  align: 'right',
                                  verticalAlign: 'top',
                                  x: -40,
                                  y: 80,
                                  floating: true,
                                  borderWidth: 1,
                                  backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                                  shadow: true
                              },
                              credits: {
                                  enabled: false
                              },
                              series: [
                                <?php
                                  echo "{
                                    name: 'Triwulan I',
                                    data: [".$ind->bor_i.",".$ind->alos_i.",".$ind->toi_i.",".$ind->bto_i.",".$ind->ndr_i.",".$ind->gdr_i."]
                                  },
                                  {
                                    name: 'Triwulan II',
                                    data: [".$ind->bor_ii.",".$ind->alos_ii.",".$ind->toi_ii.",".$ind->bto_ii.",".$ind->ndr_ii.",".$ind->gdr_ii."]
                                  },
                                  {
                                    name: 'Triwulan III',
                                    data: [".$ind->bor_iii.",".$ind->alos_iii.",".$ind->toi_iii.",".$ind->bto_iii.",".$ind->ndr_iii.",".$ind->gdr_iii."]
                                  },
                                  {
                                    name: 'Triwulan IV',
                                    data: [".$ind->bor_iv.",".$ind->alos_iv.",".$ind->toi_iv.",".$ind->bto_iv.",".$ind->ndr_iv.",".$ind->gdr_iv."]
                                  },
                                  {
                                    name: 'Total Rata-rata',
                                    data: [".$ind->bor_iv.",".$ind->rata_alos.",".$ind->rata_toi.",".$ind->rata_bto.",".$ind->rata_ndr.",".$ind->rata_gdr."]
                                  }";
                                ?>
                              ]
                          });
                        </script>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>template/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>template/assets/js/bootstrap.min.js"></script>

    <script>
     function toggleTable(hide)
     {
       if (hide) {
          document.getElementById("hitung").style.display="table";
          document.getElementById("hitung").onclick = toggleTable(true);

       } else {
          document.getElementById("hitung").style.display="none";
          document.getElementById("hitung").onclick = toggleTable(true);
       }
     }
    </script>

    <!-- end load library -->

</body>

</html>
