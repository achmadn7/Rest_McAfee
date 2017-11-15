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
                <a class="navbar-brand" href="<?php echo base_url()?>rm/dashboard">Sistem Informasi Indikator Pelayanan</a>
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
                            <small><i class="fa fa-file"></i> Rekapitulasi Harian Pasien Rawat Inap</small>
                        </h3>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <?php echo form_open("rm/histori/cek"); ?>
                        <label>Ruang Rawat Inap</label>
                            <select name="ruang" class="form-control">
                            <option value="0">--- Pilih ---</option>
                            <?php
                            foreach ($ruang as $r) {
                              echo "<option value='$r->id_ruang'>$r->nama_ruang</option>";
                            }
                            ?>
                            <option value="47">Dadap Serep / Edelweis</option>
                            <option value="48">Binahong / Flamboyan</option>
                            <option value="49">Adas Manis Obs / Dahlia Obs</option>
                            <option value="50">Adas Manis Gyn / Dahlia Gyn</option>
                            <option value="51">Adas Manis Baby / Dahlia Baby</option>
                            <option value="52">Perinatologi</option>
                            <option value="53">VK Obs</option>
                            <option value="54">VK Gyn</option>
                            <option value="55">VK Baby</option>
                            <option value="56">ICU</option>
                            </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Bulan</label>
                          <select name="bulan" class="form-control">
                            <option value="">--- Pilih ---</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="12">November</option>
                            <option value="12">Desember</option>
                          </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
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
                    <div class="col-lg-2">
                      <div class="form-group">
                        <!-- <?php echo form_open("rm/rekap/post"); ?> -->
                        <label style="color: #fff;">d</label>
                        <br>
                        <!-- <?php
                          echo anchor('rm/histori/','Kembali',array('class'=>'btn btn-success btn-sm'));
                        ?> -->
                        <button type="submit" name="submit" class="btn btn-success btn-sm">Submit</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                          </div>
                          <!-- /.panel-heading -->
                          <div class="panel-body">
                              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>
                                      <tr>
                                          <th>Ruang</th>
                                          <th>Tanggal</th>
                                          <th>1</th>
                                          <th>2</th>
                                          <th>3</th>
                                          <th>4</th>
                                          <th>5</th>
                                          <th>6</th>
                                          <th>7</th>
                                          <th>8</th>
                                          <th>9</th>
                                          <th>10</th>
                                          <th>11</th>
                                          <th>12</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                     <?php
                                      foreach ($record as $r) {
                                        echo "<tr class='odd gradeX'>
                                              <td>$r->ruang</td>
                                              <td>$r->tgl</td>
                                              <td>$r->pasien_awal</td>
                                              <td>$r->pasien_masuk</td>
                                              <td>$r->pasien_pindahan</td>
                                              <td>$r->jml_masuk</td>
                                              <td>$r->pasien_dipindahkan</td>
                                              <td>$r->pasien_keluar_hidup</td>
                                              <td>$r->pasien_matikr</td>
                                              <td>$r->pasien_matilb</td>
                                              <td>$r->jml_keluar</td>
                                              <td>$r->jml_lama_dirawat</td>
                                              <td>$r->pasien_mk_sama</td>
                                              <td>$r->pasien_masih_dirawat</td>
                                        </tr>";
                                      }
                                     ?>
                                  </tbody>
                              </table>
                              <!-- /.table-responsive -->
                          </div>
                          <!-- /.panel-body -->
                      </div>
                      <!-- /.panel -->
                      <hr style="margin-top: 0px;">
                      <div class="col-lg-8">
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            Rangkuman :
                          </div>
                          <!-- <input type="hidden" name="tgl" class="form-control" value="<?php echo $r->tgl; ?>"> -->
                          <div class="panel-body">
                            <?php
                              foreach ($md as $masih_dirawat) {}
                              foreach ($ld as $lama_dirawat) {}
                              foreach ($kh as $keluar_hidup) {}
                              foreach ($kmk as $keluar_mati_krg) {}
                              foreach ($kml as $keluar_mati_lbh) {}
                              $keluar = $keluar_hidup + $keluar_mati_krg + $keluar_mati_lbh;
                              foreach ($kmk as $keluar_mati_krg) {}
                              foreach ($kml as $keluar_mati_lbh) {}
                              $mati   = $keluar_mati_krg + $keluar_mati_lbh;
                            ?>
                            <div class="col-lg-4">a. Hari Perawatan :</div>
                            <div class="col-lg-2" style="float: right; margin-right: 0px;">
                            <?php
                              echo "<input type='text' class='form-control' value='$masih_dirawat'>";
                            ?>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="col-lg-4">b. Lama Dirawat :</div>
                            <div class="col-lg-2" style="float: right; margin-right: 0px;">
                              <?php
                                 echo "<input type='text' class='form-control' value='$lama_dirawat'>";
                              ?>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="col-lg-4">c. Pasien Keluar (H&M)</div>
                            <div class="col-lg-2" style="float: right; margin-right: 0px;">
                              <?php
                               echo "<input type='text' class='form-control' value='$keluar'>";
                              ?>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="col-lg-4">d. Pasien Mati Keseluruhan</div>
                            <div class="col-lg-2" style="float: right; margin-right: 0px;">
                              <?php
                                echo "<input type='text' class='form-control' value='$mati'>";
                              ?>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="col-lg-4">e. Pasien Mati < 48 Jam</div>
                            <div class="col-lg-2" style="float: right; margin-right: 0px;">
                              <?php
                                 echo "<input type='text' class='form-control' value='$keluar_mati_krg'>";
                              ?>
                            </div>
                          </div>
                          <div class="panel-body">
                            <div class="col-lg-4">f. Pasien Mati >= 48 Jam</div>
                            <div class="col-lg-2" style="float: right; margin-right: 0px;">
                              <?php
                                 echo "<input type='text' class='form-control' value='$keluar_mati_lbh'>";
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <hr>
                        <h5>Keterangan:</h5>
                        <p>
                          1. Pasien Awal ; 2. Pasien Masuk ; 3. Pasien Pindahan ; 4. Jumlah(2+3+4) ; 5. Pasien Dipindahkan ; 6. Pasien Keluar Hidup ;
                          <br><br>7. Pasien Mati < 48J ; 8. Pasien Mati > 48J ; 9. Jumlah(6+7+8+9) ; 10. Pasien Lama Dirawat ; 11. Pasien M+K Hari yang Sama ;
                          <br><br> 12. Pasien yang Masih Dirawat
                        </p>
                      </div>
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
