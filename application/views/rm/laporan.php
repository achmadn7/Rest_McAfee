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
                      <div class="col-lg-4">
                        <div class="form-group">
                          <?php echo form_open("rm/laporan/cek"); ?>
                          <label>Tahun</label>
                            <select name="tahun" class="form-control">
                              <?php
                              $mulai= date('Y') - 50;
                              for($i = $mulai;$i<$mulai + 100;$i++){
                                  $sel = $i == date('Y') ? ' selected="selected"' : '';
                                  echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
                              }
                              ?>
                            </select>
                        </div>
                      </div>
                      <div class="col-lg-2" style="margin-right: -0px">
                        <div class="form-group">
                          <label style="color: #fff;">n</label>
                          <br>
                          <button type="submit" name="submit" class="btn btn-success btn-sm">Submit</button>
                        </div>
                      </div>
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

    <!-- highcharts -->
    <script src="<?php echo base_url()?>template/assets/charts/highcharts.js"></script>

    <!-- end load library -->

</body>

</html>
