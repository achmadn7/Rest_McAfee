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
                            <small><i class="fa fa-history"></i> Histori Pasien Masuk</small>
                        </h3>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-lg-12">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Kategori</label>
                        <?php echo form_open("perawat/histori/cek"); ?>
                            <select name="kategori" class="form-control">
                            <option value="0">--- Pilih ---</option>
                            <option value="1">Pasien Masuk</option>
                            <option value="2">Pasien Pindahan</option>
                            <option value="3">Pasien Dipindahkan</option>
                            <option value="4">Pasien Keluar</option>
                            </select>
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label>Ruang Rawat Inap</label>
                          <select name="ruang" class="form-control">
                            <option value="">--- Pilih ---</option>
                            <?php
                            foreach ($ruang as $r) {
                              echo "<option value='$r->id_ruang'>$r->nama_ruang</option>";
                            }
                            ?>
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
                        <button type="submit" name="submit" class="btn btn-success btn-sm">Submit</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">
                              <!-- <?php
                                echo anchor('perawat/pasienmasuk/export_excel','Export Excel',array('type'=>'submit','name'=>'submit','class'=>'btn btn-success btn-sm'));
                              ?> -->
                          </div>
                          <!-- /.panel-heading -->
                          <div class="panel-body">
                              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>
                                      <tr>
                                          <th>No.RM</th>
                                          <th>Nama Pasien</th>
                                          <th>Ruang</th>
                                          <th>Kelas</th>
                                          <th>Hari</th>
                                          <th>Tanggal</th>
                                          <th>Jam</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                     <?php
                                      foreach ($record as $r) {
                                        echo "<tr class='odd gradeX'>
                                              <td>$r->no_rm</td>
                                              <td>$r->nama_pasien</td>
                                              <td>$r->nama_ruang</td>
                                              <td>$r->kelas</td>
                                              <td>$r->hari</td>
                                              <td>$r->tgl1</td>
                                              <td>$r->jam</td>
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
