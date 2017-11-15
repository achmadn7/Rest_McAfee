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
                            <small><i class="fa fa-fw fa-arrows-v"></i>Resume Harian</small>
                        </h3>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                  <div class="col-lg-12">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Ruang Rawat Inap</label>
                        <?php echo form_open("perawat/resume/pilih"); ?>
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
                    <div class="col-lg-2">
                      <div class="form-group">
                        <label style="color: #fff;">a</label>
                        <br>
                        <button type="submit" name="submit" class="btn btn-success btn-sm">Submit</button>
                      </div>
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
