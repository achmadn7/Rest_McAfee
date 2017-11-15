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
                            <small>Indikator Pelayanan</small>
                        </h3>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <?php
                          echo anchor('rm/indikator/','Kembali',array('class'=>'btn btn-success btn-sm'));
                        ?>
                      </div>
                      <div class="panel-body">
                        <div class="col-lg-12">
                          <h5>
                            <center>Tahun <?php $thn = $this->input->post('tahun'); echo $thn; ?></center>
                            <input type="hidden" name="kemaren" value="<?php $kemaren = $thn-1; ?>">
                          </h5>
                          <hr>
                          <table class="table table-striped table-bordered table-hover">
                            <tr>
                              <td>No</td>
                              <td>Data</td>
                              <td>Triwulan I</td>
                              <td>Triwulan II</td>
                              <td>Triwulan III</td>
                              <td>Triwulan IV</td>
                              <td>Total</td>
                            </tr>
                            <?php
                              foreach ($md_1 as $masih_dirawat_1) {}
                              foreach ($md_2 as $masih_dirawat_2) {}
                              foreach ($md_3 as $masih_dirawat_3) {}
                              foreach ($md_4 as $masih_dirawat_4) {}
                              foreach ($md_5 as $masih_dirawat_5) {}
                              foreach ($md_6 as $masih_dirawat_6) {}
                              foreach ($md_7 as $masih_dirawat_7) {}
                              foreach ($md_8 as $masih_dirawat_8) {}
                              foreach ($md_9 as $masih_dirawat_9) {}
                              foreach ($md_10 as $masih_dirawat_10) {}
                              foreach ($md_11 as $masih_dirawat_11) {}
                              foreach ($md_12 as $masih_dirawat_12) {}
                              $md_tw_i   = $masih_dirawat_1+$masih_dirawat_2+$masih_dirawat_3;
                              $md_tw_ii  = $masih_dirawat_4+$masih_dirawat_5+$masih_dirawat_6;
                              $md_tw_iii = $masih_dirawat_7+$masih_dirawat_8+$masih_dirawat_9;
                              $md_tw_iv  = $masih_dirawat_10+$masih_dirawat_11+$masih_dirawat_12;
                              $total_md  = $md_tw_i+$md_tw_ii+$md_tw_iii+$md_tw_iv;
                              foreach ($ld_1 as $lama_dirawat_1) {}
                              foreach ($ld_2 as $lama_dirawat_2) {}
                              foreach ($ld_3 as $lama_dirawat_3) {}
                              foreach ($ld_4 as $lama_dirawat_4) {}
                              foreach ($ld_5 as $lama_dirawat_5) {}
                              foreach ($ld_6 as $lama_dirawat_6) {}
                              foreach ($ld_7 as $lama_dirawat_7) {}
                              foreach ($ld_8 as $lama_dirawat_8) {}
                              foreach ($ld_9 as $lama_dirawat_9) {}
                              foreach ($ld_10 as $lama_dirawat_10) {}
                              foreach ($ld_11 as $lama_dirawat_11) {}
                              foreach ($ld_12 as $lama_dirawat_12) {}
                              $ld_tw_i   = $lama_dirawat_1+$lama_dirawat_2+$lama_dirawat_3;
                              $ld_tw_ii  = $lama_dirawat_4+$lama_dirawat_5+$lama_dirawat_6;
                              $ld_tw_iii = $lama_dirawat_7+$lama_dirawat_8+$lama_dirawat_9;
                              $ld_tw_iv  = $lama_dirawat_10+$lama_dirawat_11+$lama_dirawat_12;
                              $total_ld  = $ld_tw_i+$ld_tw_ii+$ld_tw_iii+$ld_tw_iv;
                              foreach ($kh_1 as $keluar_hidup_1) {}
                              foreach ($kh_2 as $keluar_hidup_2) {}
                              foreach ($kh_3 as $keluar_hidup_3) {}
                              foreach ($kh_4 as $keluar_hidup_4) {}
                              foreach ($kh_5 as $keluar_hidup_5) {}
                              foreach ($kh_6 as $keluar_hidup_6) {}
                              foreach ($kh_7 as $keluar_hidup_7) {}
                              foreach ($kh_8 as $keluar_hidup_8) {}
                              foreach ($kh_9 as $keluar_hidup_9) {}
                              foreach ($kh_10 as $keluar_hidup_10) {}
                              foreach ($kh_11 as $keluar_hidup_11) {}
                              foreach ($kh_12 as $keluar_hidup_12) {}
                              $kh_tw_i   = $keluar_hidup_1+$keluar_hidup_2+$keluar_hidup_3;
                              $kh_tw_ii  = $keluar_hidup_4+$keluar_hidup_5+$keluar_hidup_6;
                              $kh_tw_iii = $keluar_hidup_7+$keluar_hidup_8+$keluar_hidup_9;
                              $kh_tw_iv  = $keluar_hidup_10+$keluar_hidup_11+$keluar_hidup_12;
                              $total_kh  = $kh_tw_i+$kh_tw_ii+$kh_tw_iii+$kh_tw_iv;
                              foreach ($kmk_1 as $keluar_mati_krg_1) {}
                              foreach ($kmk_2 as $keluar_mati_krg_2) {}
                              foreach ($kmk_3 as $keluar_mati_krg_3) {}
                              foreach ($kmk_4 as $keluar_mati_krg_4) {}
                              foreach ($kmk_5 as $keluar_mati_krg_5) {}
                              foreach ($kmk_6 as $keluar_mati_krg_6) {}
                              foreach ($kmk_7 as $keluar_mati_krg_7) {}
                              foreach ($kmk_8 as $keluar_mati_krg_8) {}
                              foreach ($kmk_9 as $keluar_mati_krg_9) {}
                              foreach ($kmk_10 as $keluar_mati_krg_10) {}
                              foreach ($kmk_11 as $keluar_mati_krg_11) {}
                              foreach ($kmk_12 as $keluar_mati_krg_12) {}
                              $matikr_i   = $keluar_mati_krg_1+$keluar_mati_krg_2+$keluar_mati_krg_3;
                              $matikr_ii  = $keluar_mati_krg_4+$keluar_mati_krg_5+$keluar_mati_krg_6;
                              $matikr_iii = $keluar_mati_krg_7+$keluar_mati_krg_8+$keluar_mati_krg_9;
                              $matikr_iv  = $keluar_mati_krg_10+$keluar_mati_krg_11+$keluar_mati_krg_12;
                              $total_kmk  = $matikr_i+$matikr_ii+$matikr_iii+$matikr_iv;
                              foreach ($kml_1 as $keluar_mati_lbh_1) {}
                              foreach ($kml_2 as $keluar_mati_lbh_2) {}
                              foreach ($kml_3 as $keluar_mati_lbh_3) {}
                              foreach ($kml_4 as $keluar_mati_lbh_4) {}
                              foreach ($kml_5 as $keluar_mati_lbh_5) {}
                              foreach ($kml_6 as $keluar_mati_lbh_6) {}
                              foreach ($kml_7 as $keluar_mati_lbh_7) {}
                              foreach ($kml_8 as $keluar_mati_lbh_8) {}
                              foreach ($kml_9 as $keluar_mati_lbh_9) {}
                              foreach ($kml_10 as $keluar_mati_lbh_10) {}
                              foreach ($kml_11 as $keluar_mati_lbh_11) {}
                              foreach ($kml_12 as $keluar_mati_lbh_12) {}
                              $matilb_i   = $keluar_mati_lbh_1+$keluar_hidup_2+$keluar_hidup_3;
                              $matilb_ii  = $keluar_mati_lbh_4+$keluar_hidup_5+$keluar_hidup_6;
                              $matilb_iii = $keluar_mati_lbh_7+$keluar_hidup_8+$keluar_hidup_9;
                              $matilb_iv  = $keluar_mati_lbh_10+$keluar_hidup_11+$keluar_hidup_12;
                              $total_kml  = $matilb_i+$matilb_ii+$matilb_iii+$matilb_iv;
                              $keluar_i   = $kh_tw_i+$matikr_i+$matilb_i;
                              $keluar_ii  = $kh_tw_ii+$matikr_ii+$matilb_ii;
                              $keluar_iii = $kh_tw_iii+$matikr_iii+$matilb_iii;
                              $keluar_iv  = $kh_tw_iv+$matikr_iv+$matilb_iv;
                              $total_keluar= $keluar_i+$keluar_ii+$keluar_iii+$keluar_iv;
                              $mati_i     = $matikr_i + $matilb_i;
                              $mati_ii    = $matikr_ii + $matilb_ii;
                              $mati_iii = $matikr_iii + $matilb_iii;
                              $mati_iv    = $matikr_iv + $matilb_iv;
                              $total_mati= $mati_i+$mati_ii+$mati_iii+$mati_iv;
                              $jml_tt_i = 255; $jml_tt_ii = 251; $jml_tt_iii = 251; $jml_tt_iv = 251;
                              $total_tt = ($jml_tt_i+$jml_tt_ii+$jml_tt_iii+$jml_tt_iv)/4;
                              $jml_p_i = 90; $jml_p_ii = 91; $jml_p_iii = 92; $jml_p_iv = 92;
                              $total_p = $jml_p_i+$jml_p_ii+$jml_p_iii+$jml_p_iv;
                                 echo "<tr class='odd gradeX'>
                                       <td>1</td>
                                       <td>Hari Perawatan</td>
                                       <td>$md_tw_i</td>
                                       <td>$md_tw_ii</td>
                                       <td>$md_tw_iii</td>
                                       <td>$md_tw_iv</td>
                                       <td>$total_md</td>
                                 </tr>
                                 <tr class='odd gradeX'>
                                       <td>2</td>
                                       <td>Lama Dirawat</td>
                                       <td>$ld_tw_i</td>
                                       <td>$ld_tw_ii</td>
                                       <td>$ld_tw_iii</td>
                                       <td>$ld_tw_iv</td>
                                       <td>$total_ld</td>
                                 </tr>
                                 <tr class='odd gradeX'>
                                       <td>3</td>
                                       <td>Pasien Keluar (H&M)</td>
                                       <td>$keluar_i</td>
                                       <td>$keluar_ii</td>
                                       <td>$keluar_iii</td>
                                       <td>$keluar_iv</td>
                                       <td>$total_keluar</td>
                                 </tr>
                                 <tr class='odd gradeX'>
                                       <td>4</td>
                                       <td>Pasien Mati Keseluruhan</td>
                                       <td>$mati_i</td>
                                       <td>$mati_ii</td>
                                       <td>$mati_iii</td>
                                       <td>$mati_iv</td>
                                       <td>$total_mati</td>
                                 </tr>
                                 <tr class='odd gradeX'>
                                       <td>5</td>
                                       <td>Pasien Mati < 48 Jam</td>
                                       <td>$matikr_i</td>
                                       <td>$matikr_ii</td>
                                       <td>$matikr_iii</td>
                                       <td>$matikr_iv</td>
                                       <td>$total_kmk</td>
                                 </tr>
                                 <tr class='odd gradeX'>
                                       <td>6</td>
                                       <td>Pasien Mati >= 48 Jam</td>
                                       <td>$matilb_i</td>
                                       <td>$matilb_ii</td>
                                       <td>$matilb_iii</td>
                                       <td>$matilb_iv</td>
                                       <td>$total_kml</td>
                                 </tr>
                                 <tr class='odd gradeX'>
                                       <td>7</td>
                                       <td>Jumlah Tempat Tidur</td>
                                       <td>$jml_tt_i</td>
                                       <td>$jml_tt_ii</td>
                                       <td>$jml_tt_iii</td>
                                       <td>$jml_tt_iv</td>
                                       <td>$total_tt</td>
                                 </tr>
                                 <tr class='odd gradeX'>
                                       <td>8</td>
                                       <td>Jumlah Periode</td>
                                       <td>$jml_p_i</td>
                                       <td>$jml_p_ii</td>
                                       <td>$jml_p_iii</td>
                                       <td>$jml_p_iv</td>
                                       <td>$total_p</td>
                                 </tr>";
                            ?>
                          </table>
                        </div>
                      </div>
                    </div>
                    <?php echo form_open("rm/indikator/post"); ?>
                    <div class="panel panel-default">
                      <h5><center>Hasil Perhitungan</center></h5>
                      <div class="panel-heading">
                          <button type="submit" name="submit" class="btn btn-success btn-sm">Simpan</button>
                      </div>
                      <div class="panel-body">
                        <div class="col-lg-12">
                          <?php $today = date("Y-m-d"); ?>
                          <input type="hidden" name="tahun" value="<?php echo $thn; ?>">
                          <input type="hidden" name="tgl" value="<?php echo $today; ?>">
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>Data</label>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>Triwulan I</label>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>Triwulan II</label>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>Triwulan III</label>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>Triwulan IV</label>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>Rata-rata</label>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>1. BOR (%)</label>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php $bor_triwulan_i=$md_tw_i/($jml_tt_i*$jml_p_i)*100; ?>
                              <input class='form-control' name="bor_i" value='<?php echo round($bor_triwulan_i); ?>' type='text' required>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php $bor_triwulan_ii=$md_tw_ii/($jml_tt_ii*$jml_p_ii)*100; ?>
                              <input class='form-control' name="bor_ii" value='<?php echo round($bor_triwulan_ii); ?>' type='text' required>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php $bor_triwulan_iii=$md_tw_iii/($jml_tt_iii*$jml_p_iii)*100; ?>
                              <input class='form-control' name="bor_iii" value='<?php echo round($bor_triwulan_iii); ?>' type='text' required>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php $bor_triwulan_iv=$md_tw_iv/($jml_tt_iv*$jml_p_iv)*100; ?>
                              <input class='form-control' name="bor_iv" value='<?php echo round($bor_triwulan_iv); ?>' type='text' required>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php $rata_bor=$total_md/($total_tt*$total_p)*100; ?>
                              <input class='form-control' name="rata_bor" value='<?php echo round($rata_bor); ?>' type='text' required>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>2. ALOS (hari)</label>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($ld_tw_i !=0 or $keluar_i): ?>
                                <?php $alos_triwulan_i=$ld_tw_i/$keluar_i; ?>
                                <input class="form-control" name="alos_i" value="<?php echo round($alos_triwulan_i); ?>" type='text' required>
                              <?php else: ?>
                                 <?php $alos_triwulan_i=0; ?>
                                <input class="form-control" name="alos_i" value="<?php echo $alos_triwulan_i; ?>" type='text' required>
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($ld_tw_ii !=0 or $keluar_ii): ?>
                                <?php $alos_triwulan_ii=$ld_tw_ii/$keluar_ii; ?>
                                <input type="text" class="form-control" name="alos_ii" value="<?php echo round($alos_triwulan_ii); ?>">
                              <?php else: ?>
                                <?php $alos_triwulan_ii=0; ?>
                                <input class="form-control" name="alos_ii" value="<?php echo $alos_triwulan_ii; ?>" type='text' required>
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($ld_tw_iii !=0 or $keluar_iii): ?>
                                <?php $alos_triwulan_iii=$ld_tw_iii/$keluar_iii; ?>
                                <input type="text" class="form-control" name="alos_iii" value="<?php echo round($alos_triwulan_iii); ?>">
                              <?php else: ?>
                                <?php $alos_triwulan_iii=0; ?>
                                <input class="form-control" name="alos_iii" value="<?php echo $alos_triwulan_iii; ?>" type='text' required>
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($ld_tw_iv !=0 or $keluar_iv): ?>
                                <?php $alos_triwulan_iv=$ld_tw_iv/$keluar_iv; ?>
                                <input type="text" class="form-control" name="alos_iv" value="<?php echo round($alos_triwulan_iv); ?>">
                              <?php else: ?>
                                <?php $alos_triwulan_iv=0; ?>
                                <input class="form-control" name="alos_iv" value="<?php echo $alos_triwulan_iv; ?>" type='text' required>
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($total_ld !=0 or $total_keluar !=0): ?>
                                <td><?php $rata_alos=$total_ld/$total_keluar; ?></td>
                                <input type="text" class="form-control" name="rata_alos" value="<?php echo round($rata_alos); ?>">
                              <?php else: ?>
                                <td><?php $rata_alos=0; ?></td>
                                <input class="form-control" name="rata_alos" value="<?php echo $rata_alos; ?>" type='text' required>
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>3. TOI (hari)</label>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($keluar_i !=0): ?>
                                <?php $toi_triwulan_i=(($jml_tt_i*$jml_p_i)-$md_tw_i)/$keluar_i; ?>
                                <input type="text" class="form-control" name="toi_i" value="<?php echo round($toi_triwulan_i); ?>">
                              <?php else: ?>
                                <?php $toi_triwulan_i=0; ?>
                                <input type="text" class="form-control" name="toi_i" value="<?php echo $toi_triwulan_i; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($keluar_ii !=0): ?>
                                <?php $toi_triwulan_ii=(($jml_tt_ii*$jml_p_ii)-$md_tw_ii)/$keluar_ii; ?>
                                <input type="text" class="form-control" name="toi_ii" value="<?php echo round($toi_triwulan_ii); ?>">
                              <?php else: ?>
                                <?php $toi_triwulan_ii=0; ?>
                                <input type="text" class="form-control" name="toi_ii" value="<?php echo $toi_triwulan_ii; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                               <?php if ($keluar_iii !=0): ?>
                                <?php $toi_triwulan_iii=(($jml_tt_iii*$jml_p_iii)-$md_tw_iii)/$keluar_iii; ?>
                                <input type="text" class="form-control" name="toi_iii" value="<?php echo round($toi_triwulan_iii); ?>">
                              <?php else: ?>
                                <?php $toi_triwulan_iii=0; ?>
                                <input type="text" class="form-control" name="toi_iii" value="<?php echo $toi_triwulan_iii; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                               <?php if ($keluar_iv !=0): ?>
                                <?php $toi_triwulan_iv=(($jml_tt_iv*$jml_p_iv)-$md_tw_iv)/$keluar_ii; ?>
                                <input type="text" class="form-control" name="toi_iv" value="<?php echo round($toi_triwulan_iv); ?>">
                              <?php else: ?>
                                <?php $toi_triwulan_iv=0; ?>
                                <input type="text" class="form-control" name="toi_iv" value="<?php echo $toi_triwulan_iv; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($total_keluar !=0): ?>
                                <?php $rata_toi=(($total_tt*$total_p)-$total_md)/$total_keluar; ?>
                                <input type="text" class="form-control" name="rata_toi" value="<?php echo round($rata_toi); ?>">
                              <?php else: ?>
                                <?php $rata_toi=0; ?>
                                <input type="text" class="form-control" name="rata_toi" value="<?php echo $rata_toi; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>4. BTO (kali)</label>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php $bto_triwulan_i=$keluar_i/$jml_tt_i; ?>
                              <input type="text" class="form-control" name="bto_i" value="<?php echo round($bto_triwulan_i); ?>">
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php $bto_triwulan_ii=$keluar_ii/$jml_tt_ii; ?>
                              <input type="text" class="form-control" name="bto_ii" value="<?php echo round($bto_triwulan_ii); ?>">
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php $bto_triwulan_iii=$keluar_iii/$jml_tt_iii; ?>
                              <input type="text" class="form-control" name="bto_iii" value="<?php echo round($bto_triwulan_iii); ?>">
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php $bto_triwulan_iv=$keluar_iv/$jml_tt_iv; ?>
                              <input type="text" class="form-control" name="bto_iv" value="<?php echo round($bto_triwulan_iv); ?>">
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php $rata_bto=$total_keluar/$total_tt; ?>
                              <input type="text" class="form-control" name="rata_bto" value="<?php echo round($rata_bto); ?>">
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>5. NDR</label>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($keluar_i !=0 or $matikr_i !=0): ?>
                                <td><?php $ndr_triwulan_i=$matilb_i/($keluar_i-$matikr_i)*1000; ?></td>
                                <input type="text" class="form-control" name="ndr_i" value="<?php echo round($ndr_triwulan_i); ?>">
                              <?php else: ?>
                                <td><?php $ndr_triwulan_i=0; ?></td>
                                <input type="text" class="form-control" name="ndr_i" value="<?php echo $ndr_triwulan_i; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($keluar_ii !=0 or $matikr_ii !=0): ?>
                                <td><?php $ndr_triwulan_ii=$matilb_ii/($keluar_ii-$matikr_ii)*1000; ?></td>
                                <input type="text" class="form-control" name="ndr_ii" value="<?php echo round($ndr_triwulan_ii); ?>">
                              <?php else: ?>
                                <td><?php $ndr_triwulan_ii=0; ?></td>
                                <input type="text" class="form-control" name="ndr_ii" value="<?php echo $ndr_triwulan_ii; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($keluar_iii !=0 or $matikr_iii !=0): ?>
                                <td><?php $ndr_triwulan_iii=$matilb_iii/($keluar_iii-$matikr_iii)*1000; ?></td>
                                <input type="text" class="form-control" name="ndr_iii" value="<?php echo round($ndr_triwulan_iii); ?>">
                              <?php else: ?>
                                <td><?php $ndr_triwulan_iii=0; ?></td>
                                <input type="text" class="form-control" name="ndr_iii" value="<?php echo $ndr_triwulan_iii; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($keluar_iv !=0 or $matikr_iv !=0): ?>
                                <td><?php $ndr_triwulan_iv=$matilb_iv/($keluar_iv-$matikr_iv)*1000; ?></td>
                                <input type="text" class="form-control" name="ndr_iv" value="<?php echo round($ndr_triwulan_iv); ?>">
                              <?php else: ?>
                                <td><?php $ndr_triwulan_iv=0; ?></td>
                                <input type="text" class="form-control" name="ndr_iv" value="<?php echo $ndr_triwulan_iv; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($total_keluar !=0 and $total_kmk != 0): ?>
                                <?php $rata_ndr=$total_kml/($total_keluar-$total_kmk)*1000; ?>
                                <input type="text" class="form-control" name="rata_ndr" value="<?php echo round($rata_ndr); ?>">
                              <?php else: ?>
                                <?php $rata_ndr=0; ?>
                                <input type="text" class="form-control" name="rata_ndr" value="<?php echo $rata_ndr; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-12">
                          <div class="col-lg-2">
                            <div class="form-group">
                              <label>6. GDR</label>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($keluar_i): ?>
                                <?php $gdr_triwulan_i=$mati_i/$keluar_i*1000; ?>
                                <input type="text" class="form-control" name="gdr_i" value="<?php echo round($gdr_triwulan_i); ?>">
                              <?php else: ?>
                                <?php $gdr_triwulan_i=0; ?>
                                <input type="text" class="form-control" name="gdr_i" value="<?php echo $gdr_triwulan_i; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($keluar_ii): ?>
                                <?php $gdr_triwulan_ii=$mati_ii/$keluar_ii*1000; ?>
                                <input type="text" class="form-control" name="gdr_ii" value="<?php echo round($gdr_triwulan_ii); ?>">
                              <?php else: ?>
                                <?php $gdr_triwulan_ii=0; ?>
                                <input type="text" class="form-control" name="gdr_ii" value="<?php echo $gdr_triwulan_ii; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($keluar_iii): ?>
                                <?php $gdr_triwulan_iii=$mati_iii/$keluar_iii*1000; ?>
                                <input type="text" class="form-control" name="gdr_iii" value="<?php echo round($gdr_triwulan_iii); ?>">
                              <?php else: ?>
                                <?php $gdr_triwulan_iii=0; ?>
                                <input type="text" class="form-control" name="gdr_iii" value="<?php echo $gdr_triwulan_iii; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($keluar_iv): ?>
                                <?php $gdr_triwulan_iv=$mati_iv/$keluar_iv*1000; ?>
                                <input type="text" class="form-control" name="gdr_iv" value="<?php echo round($gdr_triwulan_iv); ?>">
                              <?php else: ?>
                                <?php $gdr_triwulan_iv=0; ?>
                                <input type="text" class="form-control" name="gdr_iv" value="<?php echo $gdr_triwulan_iv; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="col-lg-2">
                            <div class="form-group">
                              <?php if ($total_keluar !=0): ?>
                                <?php $rata_gdr=$total_mati/$total_keluar*1000; ?>
                                <input type="text" class="form-control" name="rata_gdr" value="<?php echo round($rata_gdr); ?>">
                              <?php else: ?>
                                <?php $rata_gdr=0; ?>
                                <input type="text" class="form-control" name="rata_gdr" value="<?php echo $rata_gdr; ?>">
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="col-lg-12" id="hitung" style.display="none">
                          <h5><center>Perbandingan</center></h5>
                          <hr>
                          <table class="table table-striped table-bordered table-hover">
                        <tr>
                          <td>No</td>
                          <td>Data</td>
                          <td>Tahun <?php echo $thn;?></td>
                          <td>Parameter</td>
                          <td>Kesimpulan</td>
                          <td>Tahun <?php echo $kemaren; ?></td>
                          <td>Keterangan</td>
                        </tr>
                        <?php foreach ($lalu as $l): ?><?php endforeach; ?>
                        <?php foreach ($indi as $i): ?><?php endforeach; ?>
                        <tr>
                          <td>1</td>
                          <td>BOR (%)</td>
                          <!-- <td><?php $rata_bor=$total_md/($total_tt*$total_p)*100; echo round($rata_bor); ?></td>
                          <input type="hidden" name="rata_bor" value="<?php $rata_bor; ?>"> -->
                          <td><?php echo round($i->rata_bor); ?></td>
                          <td>60-80</td>
                          <td>
                            <?php if ($rata_bor>=60 && $rata_bor<=80): ?>
                              <?php echo "Efisien" ?>
                              <input type="hidden" name="kesimpulan_bor" value="Efisien">
                            <?php else: ?>
                                <?php echo "Kurang Efisisen" ?>
                                <input type="hidden" name="kesimpulan_bor" value="Kurang Efisien">
                            <?php endif; ?>
                          </td>
                          <?php if ($cek>0): ?>
                              <td><?php echo round($l->rata_bor); ?></td>
                          <?php else: ?>
                              <td><?php echo "0"; ?></td>
                          <?php endif; ?>
                          <td>
                            <?php if (round($i->rata_bor) > round($l->rata_bor)): ?>
                              <?php echo "Meningkat" ?>
                            <?php elseif(round($i->rata_bor) == round($l->rata_bor)): ?>
                              <?php echo "Tetap" ?>
                            <?php else: ?>
                              <?php echo "Menurun" ?>
                            <?php endif; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>ALOS (hari)</td>
                          <!-- <?php if ($total_ld !=0 or $total_keluar !=0): ?>
                            <td><?php $rata_alos=$total_ld/$total_keluar; echo round($rata_alos); ?></td>
                            <input type="hidden" name="rata_alos" value="<?php $rata_alos; ?>">
                          <?php else: ?>
                            <td><?php echo $rata_alos=0; ?></td>
                            <input type="hidden" name="rata_alos" value="<?php $rata_alos; ?>">
                          <?php endif; ?> -->
                          <td><?php echo round($i->rata_alos); ?></td>
                          <td>6-9</td>
                          <td>
                            <?php if ($rata_alos>=6 && $rata_alos<=9): ?>
                              <?php echo "Efisien" ?>
                              <input type="hidden" name="kesimpulan_alos" value="Efisien">
                            <?php else: ?>
                                <?php echo "Kurang Efisien" ?>
                                <input type="hidden" name="kesimpulan_alos" value="Efisien">
                            <?php endif; ?>
                          </td>
                          <?php if ($cek>0): ?>
                            <td><?php echo round($l->rata_alos); ?></td>
                          <?php else: ?>
                            <td><?php echo "0"; ?></td>
                          <?php endif; ?>
                          <td>
                            <?php if (round($i->rata_alos) > round($l->rata_alos)): ?>
                              <?php echo "Meningkat" ?>
                            <?php elseif(round($i->rata_alos) == round($l->rata_alos)): ?>
                              <?php echo "Tetap" ?>
                            <?php else: ?>
                              <?php echo "Menurun" ?>
                            <?php endif; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>TOI (hari)</td>
                          <!-- <?php if ($total_keluar !=0): ?>
                            <td><?php $rata_toi=(($total_tt*$total_p)-$total_md)/$total_keluar; echo round($rata_toi); ?></td>
                            <input type="hidden" name="rata_toi" value="<?php $rata_toi; ?>">
                          <?php else: ?>
                            <td><?php echo $rata_toi=0; ?></td>
                          <?php endif; ?> -->
                          <td><?php echo round($i->rata_toi); ?></td>
                          <td>1-3</td>
                          <td>
                            <?php if ($rata_toi>=1 && $rata_toi<=3): ?>
                              <?php echo "Efisien" ?>
                              <input type="hidden" name="kesimpulan_toi" value="Efisien">
                            <?php else: ?>
                                <?php echo "Kurang Efisien" ?>
                                <input type="hidden" name="kesimpulan_toi" value="Kurang Efisien">
                            <?php endif; ?>
                          </td>
                          <?php if ($cek>0): ?>
                            <td><?php echo round($l->rata_toi); ?></td>
                          <?php else: ?>
                            <td><?php echo "0"; ?></td>
                          <?php endif; ?>
                          <td>
                            <?php if (round($i->rata_toi) > round($l->rata_toi)): ?>
                              <?php echo "Meningkat" ?>
                            <?php elseif(round($i->rata_toi) == round($l->rata_toi)): ?>
                              <?php echo "Tetap" ?>
                            <?php else: ?>
                              <?php echo "Menurun" ?>
                            <?php endif; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>BTO (kali)</td>
                          <!-- <td><?php $rata_bto=$total_keluar/$total_tt; echo round($rata_bto); ?></td>
                          <input type="hidden" name="rata_bto" value="<?php $rata_bto; ?>"> -->
                          <td><?php echo round($i->rata_bto); ?></td>
                          <td>40-50</td>
                          <td>
                            <?php if ($rata_bto>=40 && $rata_bto<=50): ?>
                              <?php echo "Efisien" ?>
                              <input type="hidden" name="kesimpulan_bto" value="Efisien">
                            <?php else: ?>
                                <?php echo "Kurang Efisien" ?>
                                <input type="hidden" name="kesimpulan_bto" value="Kurang Efisien">
                            <?php endif; ?>
                          </td>
                          <?php if ($cek>0): ?>
                            <td><?php echo round($l->rata_bto); ?></td>
                          <?php else: ?>
                            <td><?php echo "0"; ?></td>
                          <?php endif; ?>
                          <td>
                            <?php if (round($i->rata_bto) > round($l->rata_bto)): ?>
                              <?php echo "Meningkat" ?>
                            <?php elseif(round($i->rata_bto) == round($l->rata_bto)): ?>
                              <?php echo "Tetap" ?>
                            <?php else: ?>
                              <?php echo "Menurun" ?>
                            <?php endif; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>NDR</td>
                          <!-- <?php if ($total_keluar !=0 and $total_kmk != 0): ?>
                            <td><?php $rata_ndr=$total_kml/($total_keluar-$total_kmk)*1000; echo round($rata_ndr); ?></td>
                            <input type="hidden" name="rata_ndr" value="<?php $rata_ndr; ?>">
                          <?php else: ?>
                            <td><?php echo $rata_ndr=0; ?></td>
                            <input type="hidden" name="rata_ndr" value="<?php $rata_ndr; ?>">
                          <?php endif; ?> -->
                          <td><?php echo round($i->rata_ndr); ?></td>
                          <td></td>
                          <td><input type="hidden" name="kesimpulan_ndr" value="-"></td>
                          <?php if ($cek>0): ?>
                            <td><?php echo round($l->rata_ndr); ?></td>
                          <?php else: ?>
                            <td><?php echo "0"; ?></td>
                          <?php endif; ?>
                          <td>
                            <?php if (round($i->rata_ndr) > round($l->rata_ndr)): ?>
                              <?php echo "Meningkat" ?>
                            <?php elseif(round($i->rata_ndr) == round($l->rata_ndr)): ?>
                              <?php echo "Tetap" ?>
                            <?php else: ?>
                              <?php echo "Menurun" ?>
                            <?php endif; ?>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>GDR</td>
                          <!-- <?php if ($total_keluar !=0): ?>
                            <td><?php $rata_gdr=$total_mati/$total_keluar*1000; echo round($rata_gdr); ?></td>
                            <input type="hidden" name="rata_gdr" value="<?php $rata_gdr; ?>">
                          <?php else: ?>
                            <td><?php echo $rata_gdr=0; ?></td>
                            <input type="hidden" name="rata_gdr" value="<?php $rata_gdr; ?>">
                          <?php endif; ?> -->
                          <td><?php echo round($i->rata_gdr); ?></td>
                          <td></td>
                          <td><input type="hidden" name="kesimpulan_gdr" value="-"></td>
                          <?php if ($cek>0): ?>
                            <td><?php echo round($l->rata_gdr); ?></td>
                          <?php else: ?>
                            <td><?php echo "0"; ?></td>
                          <?php endif; ?>
                          <td>
                            <?php if (round($i->rata_gdr) > round($l->rata_gdr)): ?>
                              <?php echo "Meningkat" ?>
                            <?php elseif(round($i->rata_gdr) == round($l->rata_gdr)): ?>
                              <?php echo "Tetap" ?>
                            <?php else: ?>
                              <?php echo "Menurun" ?>
                            <?php endif; ?>
                          </td>
                        </tr>
                      </table>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <!-- load library jquery dan highcharts -->
                      <script src="<?php echo base_url();?>template/assets/chart/highcharts.js"></script>
                      <script src="<?php echo base_url();?>template/assets/chart/exporting.js"></script>
                      <!-- end load library -->
                      <hr>
                      <!-- <h5><center>Grafik<center></h5>
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
                                  text: <?php foreach ($record as $r) { $thn = $r->tahun; $array1=explode("-",$thn); $tahun=$array1[0]; echo $tahun;} ?>
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
                                    data: [".$bor_triwulan_i.",".$alos_triwulan_i.",".$toi_triwulan_i.",".$bto_triwulan_i.",".$ndr_triwulan_i.",".$gdr_triwulan_i."]
                                  },
                                  {
                                    name: 'Triwulan II',
                                    data: [".$bor_triwulan_ii.",".$alos_triwulan_ii.",".$toi_triwulan_ii.",".$bto_triwulan_ii.",".$ndr_triwulan_ii.",".$gdr_triwulan_ii."]
                                  },
                                  {
                                    name: 'Triwulan III',
                                    data: [".$bor_triwulan_iii.",".$alos_triwulan_iii.",".$toi_triwulan_iii.",".$bto_triwulan_iii.",".$ndr_triwulan_iii.",".$gdr_triwulan_iii."]
                                  },
                                  {
                                    name: 'Triwulan IV',
                                    data: [".$bor_triwulan_iv.",".$alos_triwulan_iv.",".$toi_triwulan_iv.",".$bto_triwulan_iv.",".$ndr_triwulan_iv.",".$gdr_triwulan_iv."]
                                  },
                                  {
                                    name: 'Total Rata-rata',
                                    data: [".$rata_bor.",".$rata_alos.",".$rata_toi.",".$rata_bto.",".$rata_ndr.",".$rata_gdr."]
                                  }";
                                ?>
                              ]
                          });
                      </script> -->
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
          document.getElementById("hitung").onclick = toggleTable(false);

       } else {
          document.getElementById("hitung").style.display="none";
          document.getElementById("hitung").onclick = toggleTable(true);
       }
     }
    </script>

    <!-- end load library -->

</body>

</html>
