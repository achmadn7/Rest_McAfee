<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Indikator Pelayanan</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>template/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url()?>template/assets/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url()?>template/assets/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>template/assets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>template/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                        <a href="<?php echo base_url()?>perawat/dashboard"><i class="fa fa-home"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-file"></i> Sensus Harian <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url()?>perawat/sensus"> <i class="fa fa-spinner" aria-hidden="true"></i> Pasien Masuk</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>perawat/sensus/pasien_pindahan"> <i class="fa fa-spinner" aria-hidden="true"></i> Pasien Pindahan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>perawat/sensus/pasien_dipindahkan"><i class="fa fa-spinner" aria-hidden="true"></i> Pasien Dipindahkan</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>perawat/sensus/pasien_keluar"><i class="fa fa-spinner" aria-hidden="true"></i> Pasien Keluar</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url()?>perawat/resume"><i class="fa fa-spinner" aria-hidden="true"></i> Resume Harian</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>perawat/histori"><i class="fa fa-history" aria-hidden="true"></i> Histori</a>
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
                            <?php
                              foreach ($ruang as $r) {$ruang = $r->id_ruang; $nama = $r->nama_ruang; $kelas = $r->kelas;}
                            ?>
                            <small><i class="fa fa-fw fa-arrows-v"></i>Resume Harian Ruang <?php echo "$nama"; ?></small>
                        </h3>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-lg-12">
                      <?php echo form_open("perawat/resume/post"); ?>
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <?php
                                echo anchor('perawat/resume/','Kembali',array('class'=>'btn btn-success btn-sm'));
                              ?>
                              <button type="submit" name="submit" class="btn btn-success btn-sm">Simpan</button>
                          </div>
                          <div class="panel-body">
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>Resume</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <label>VVIP 2</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <label>VVIP 1</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <label>VIP</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <label>III</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <label>II</label>
                                </div>
                              </div>
                              <div class="col-lg-1">
                                <div class="form-group">
                                  <label>I</label>
                                </div>
                              </div>
                              <div class="col-lg-2">
                                <div class="form-group">
                                  <label>Jumlah</label>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>1. Pasien Awal</label>
                                  <?php
                                    $tgl = date("Y-m-d");
                                    echo "<input class='form-control' type='hidden' name='id' value='2' required>";
                                    echo "<input class='form-control' type='hidden' name='ruang' value='$ruang' required>";
                                    echo "<input class='form-control' type='hidden' name='tgl' value='$tgl' required>";
                                  ?>
                                  <?php
                                    $jml_hari = 0;
                                    foreach ($p_lama_dirawat as $ld) {
                                      $masuk = $ld->tgl2;
                                      $keluar= $ld->tgl1;
                                      $time1 = strtotime($masuk);
                                      $time2 = strtotime($keluar);
                                      $selisih = ($time2-$time1);
                                      $hari    = $selisih/(60*60*24);
                                      $jml_hari= $jml_hari + $hari;
                                    }
                                    if ($jml_hari > 0) {
                                      echo "<input class='form-control' name='jml_lama_dirawat' value='$jml_hari' type='hidden' required>";
                                    }
                                    else {
                                      $hari = 0;
                                      echo "<input class='form-control' name='jml_lama_dirawat' value='$hari' type='hidden' required>";
                                    }
                                  ?>
                                </div>
                              </div>
                              <?php
                                if ($cek>0) {
                                  foreach ($awal as $jml_pawal_i) {}
                                  if ($ruang==12) {
                                    echo "
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' name='pasien_awal' type='text' required>
                                        </div>
                                      </div>
                                    ";
                                  }
                                  elseif ($ruang==11) {
                                    echo "
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' name='pasien_awal' type='text' required>
                                        </div>
                                      </div>
                                    ";
                                  }
                                  elseif ($ruang==9 or $ruang==10) {
                                    echo "
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' name='pasien_awal' type='text' required>
                                        </div>
                                      </div>
                                    ";
                                  }
                                  elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                    echo "
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' name='pasien_awal' type='text' required>
                                        </div>
                                      </div>
                                    ";
                                  }
                                  elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                    echo "
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' name='pasien_awal' type='text' required>
                                        </div>
                                      </div>
                                    ";
                                  }
                                  else {
                                    echo "
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' name='pasien_awal' type='text' required>
                                        </div>
                                      </div>
                                    ";
                                  }
                                }
                                else {
                                  $jml_pawal_i=0;
                                  if ($ruang==12) {
                                    echo "
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' name='pasien_awal' type='text' required>
                                        </div>
                                      </div>
                                    ";
                                  }
                                  elseif ($ruang==11) {
                                    echo "
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' name='pasien_awal' type='text' required>
                                        </div>
                                      </div>
                                    ";
                                  }
                                  elseif ($ruang==9 or $ruang==10) {
                                    echo "
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' name='pasien_awal' type='text' required>
                                        </div>
                                      </div>
                                    ";
                                  }
                                  elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                    echo "
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' name='pasien_awal' type='text' required>
                                        </div>
                                      </div>
                                    ";
                                  }
                                  elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                    echo "
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' name='pasien_awal' type='text' required>
                                        </div>
                                      </div>
                                    ";
                                  }
                                  else {
                                    echo "
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='-' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' type='text' required>
                                        </div>
                                      </div>
                                      <div class='col-lg-1'>
                                        <div class='form-group'>
                                          <input class='form-control' value='$jml_pawal_i' name='pasien_awal' type='text' required>
                                        </div>
                                      </div>
                                    ";
                                  }
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>2. Pasien Masuk</label>
                                </div>
                              </div>
                              <?php
                                foreach ($masuk as $m_i) {}
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$m_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$m_i' name='pasien_masuk' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$m_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$m_i' name='pasien_masuk' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$m_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$m_i' name='pasien_masuk' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$m_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$m_i' name='pasien_masuk' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$m_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$m_i' name='pasien_masuk' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$m_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$m_i' name='pasien_masuk' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>3. Pasien Pindahan</label>
                                </div>
                              </div>
                              <?php
                                foreach ($pindahan as $p_i) {}
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$p_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$p_i' name='pasien_pindahan' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$p_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$p_i' name='pasien_pindahan' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$p_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$p_i' name='pasien_pindahan' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$p_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$p_i' name='pasien_pindahan' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$p_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$p_i' name='pasien_pindahan' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$p_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$p_i' name='pasien_pindahan' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>4. Jumlah pasien dirawat (1+2+3)</label>
                                </div>
                              </div>
                              <?php
                                $jml_pdirawat_i = $jml_pawal_i + $m_i + $p_i;
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pdirawat_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pdirawat_i' name='jml_pdirawat' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pdirawat_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pdirawat_i' name='jml_pdirawat' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pdirawat_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pdirawat_i' name='jml_pdirawat' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pdirawat_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pdirawat_i' name='jml_pdirawat' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pdirawat_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pdirawat_i' name='jml_pdirawat' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pdirawat_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pdirawat_i' name='jml_pdirawat' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>5. Pasien Pulang</label>
                                </div>
                              </div>
                              <?php
                                foreach ($p_pulang as $plg_i) {}
                                if ($kelas==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$plg_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$plg_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$plg_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$plg_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$plg_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$plg_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$plg_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$plg_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$plg_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$plg_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$plg_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$plg_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>6. Pasien Dirujuk</label>
                                </div>
                              </div>
                              <?php
                                foreach ($p_dirujuk as $dirujuk_i) {}
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$dirujuk_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$dirujuk_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$dirujuk_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$dirujuk_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$dirujuk_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$dirujuk_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$dirujuk_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$dirujuk_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$dirujuk_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$dirujuk_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$dirujuk_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$dirujuk_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>7. Pasien Pindah ke RS lain</label>
                                </div>
                              </div>
                              <?php
                                $pindahrs = 0;
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$pindahrs' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$pindahrs' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$pindahrs' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$pindahrs' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$pindahrs' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$pindahrs' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$pindahrs' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$pindahrs' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$pindahrs' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$pindahrs' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$pindahrs' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$pindahrs' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>8. Pulang Paksa (APS)</label>
                                </div>
                              </div>
                              <?php
                                foreach ($p_aps as $aps_i) {}
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$aps_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$aps_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$aps_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$aps_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$aps_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$aps_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$aps_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$aps_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$aps_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$aps_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$aps_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$aps_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>9. Pasien Melarikan Diri</label>
                                </div>
                              </div>
                              <?php
                                foreach ($p_lari as $lari_i) {}
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$lari_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$lari_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$lari_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$lari_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$lari_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$lari_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$lari_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$lari_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$lari_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$lari_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$lari_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$lari_i' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>10. Total Pasien Keluar Hidup</label>
                                </div>
                              </div>
                              <?php
                                foreach ($p_keluar_hidup as $keluar_hidup_i) {}
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$keluar_hidup_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$keluar_hidup_i' name='keluar_hidup' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$keluar_hidup_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$keluar_hidup_i' name='keluar_hidup' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$keluar_hidup_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$keluar_hidup_i' name='keluar_hidup' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$keluar_hidup_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$keluar_hidup_i' name='keluar_hidup' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$keluar_hidup_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$keluar_hidup_i' name='keluar_hidup' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$keluar_hidup_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$keluar_hidup_i' name='keluar_hidup' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>11. Pasien Dipindahkan</label>
                                </div>
                              </div>
                              <?php
                                foreach ($dipindahkan as $d_i) {}
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$d_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$d_i' name='pasien_dipindahkan' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$d_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$d_i' name='pasien_dipindahkan' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$d_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$d_i' name='pasien_dipindahkan' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$d_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$d_i' name='pasien_dipindahkan' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$d_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$d_i' name='pasien_dipindahkan' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$d_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$d_i' name='pasien_dipindahkan' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>12. Mati < 48 Jam</label>
                                </div>
                              </div>
                              <?php
                                foreach ($p_matikrg as $matikrg_i) {}
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matikrg_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matikrg_i' name='pasien_matikr' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matikrg_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matikrg_i' name='pasien_matikr' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matikrg_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matikrg_i' name='pasien_matikr' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matikrg_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matikrg_i' name='pasien_matikr' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matikrg_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matikrg_i' name='pasien_matikr' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matikrg_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matikrg_i' name='pasien_matikr' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>13. Mati >= 48 Jam</label>
                                </div>
                              </div>
                              <?php
                                foreach ($p_matilbh as $matilbh_i) {}
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matilbh_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matilbh_i' name='pasien_matilb' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matilbh_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matilbh_i' name='pasien_matilb' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matilbh_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matilbh_i' name='pasien_matilb' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matilbh_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matilbh_i' name='pasien_matilb' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matilbh_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matilbh_i' name='pasien_matilb' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matilbh_i' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$matilbh_i' name='pasien_matilb' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>14. Total Pasien Keluar (10+11+12+13)</label>
                                </div>
                              </div>
                              <?php
                                $jml_pkeluar = $keluar_hidup_i + $d_i + $matikrg_i + $matilbh_i;
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pkeluar' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pkeluar' name='total_pkeluar' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pkeluar' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pkeluar' name='total_pkeluar' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pkeluar' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pkeluar' name='total_pkeluar' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pkeluar' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pkeluar' name='total_pkeluar' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pkeluar' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pkeluar' name='total_pkeluar' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pkeluar' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pkeluar' name='total_pkeluar' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>15. Pasien M+K pada hari yg sama</label>
                                </div>
                              </div>
                              <?php
                                $mk_sama = 0;
                                if ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$mk_sama' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$mk_sama' name='p_mk_sama' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$mk_sama' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$mk_sama' name='p_mk_sama' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$mk_sama' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$mk_sama' name='p_mk_sama' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$mk_sama' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$mk_sama' name='p_mk_sama' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$mk_sama' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$mk_sama' name='p_mk_sama' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$mk_sama' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$mk_sama' name='p_mk_sama' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                            <div class="col-lg-12">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label>16. Jumlah pasien yg masih dirawat (4-14)</label>
                                </div>
                              </div>
                              <?php
                                $jml_pmasih_dirawat = $jml_pdirawat_i - $jml_pkeluar;
                                if ($ruang==11) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pmasih_dirawat' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pmasih_dirawat' name='jml_pmasih_dirawat' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==12) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pmasih_dirawat' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pmasih_dirawat' name='jml_pmasih_dirawat' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==9 or $ruang==10) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pmasih_dirawat' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pmasih_dirawat' name='jml_pmasih_dirawat' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==2 or $ruang==6 or $ruang==7 or $ruang==8 or $ruang==15 or $ruang==18 or $ruang==21 or $ruang==24) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pmasih_dirawat' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pmasih_dirawat' name='jml_pmasih_dirawat' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                elseif ($ruang==5 or $ruang==14 or $ruang==17 or $ruang==20 or $ruang==23) {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pmasih_dirawat' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pmasih_dirawat' name='jml_pmasih_dirawat' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                                else {
                                  echo "
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='-' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pmasih_dirawat' type='text' required>
                                      </div>
                                    </div>
                                    <div class='col-lg-1'>
                                      <div class='form-group'>
                                        <input class='form-control' value='$jml_pmasih_dirawat' name='jml_pmasih_dirawat' type='text' required>
                                      </div>
                                    </div>
                                  ";
                                }
                              ?>
                            </div>
                          </div>
                          <!-- /.panel-body
                      </div>
                      <!-- /.panel
                  </div>
                  <!-- /.col-lg-12 -->
                </div>

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

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>template/assets/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>template/assets/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src=".<?php echo base_url()?>template/assets/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
