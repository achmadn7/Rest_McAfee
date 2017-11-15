<!DOCTYPE html>
<html>
  <head>
    <title>Cetak PDF</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>template/assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php
      foreach($indikator as $ind){ $thn = $ind->tgl; $array1=explode("-",$thn); $tahun=$array1[0];}
    ?>
    <h3 style="text-align: center;">Laporan Indikator Pelayanan Rawat Inap <br> RSUD Pandan Arang Boyolali <br> Tahun <?php echo "$tahun"; ?></h3>
    <hr>
    <br><br>
    <table border="1" width="100%" align="center">
      <tr>
        <th>No</th>
        <th>Data</th>
        <th>Triwulan I</th>
        <th>Triwulan II</th>
        <th>Triwulan III</th>
        <th>Triwulan IV</th>
        <th>Total</th>
      </tr>
        <!-- <?php
          foreach($record as $r){
          echo "<tr>
            <td>1</td>
            <td>Hari Perawatan</td>
            <td>".$r->hari_perawatan_i."</td>
            <td>".$r->hari_perawatan_ii."</td>
            <td>".$r->hari_perawatan_iii."</td>
            <td>".$r->hari_perawatan_iv."</td>
            <td>".$r->total_i."</td>
          </tr>";
          echo "<tr>
            <td>2</td>
            <td>Lama Perawatan</td>
            <td>".$r->lama_dirawat_i."</td>
            <td>".$r->lama_dirawat_ii."</td>
            <td>".$r->lama_dirawat_iii."</td>
            <td>".$r->lama_dirawat_iv."</td>
            <td>".$r->total_ii."</td>
          </tr>";
          echo "<tr>
            <td>3</td>
            <td>Pasien Keluar (H&M)</td>
            <td>".$r->pasien_keluar_i."</td>
            <td>".$r->pasien_keluar_ii."</td>
            <td>".$r->pasien_keluar_iii."</td>
            <td>".$r->pasien_keluar_iv."</td>
            <td>".$r->total_iii."</td>
          </tr>";
          echo "<tr>
            <td>4</td>
            <td>Pasien Mati Keseluruhan</td>
            <td>".$r->p_mati_keseluruhan_i."</td>
            <td>".$r->p_mati_keseluruhan_ii."</td>
            <td>".$r->p_mati_keseluruhan_iii."</td>
            <td>".$r->p_mati_keseluruhan_iv."</td>
            <td>".$r->total_iv."</td>
          </tr>";
          echo "<tr>
            <td>5</td>
            <td>Pasien Mati < 48 Jam</td>
            <td>".$r->p_mati_krg_i."</td>
            <td>".$r->p_mati_krg_ii."</td>
            <td>".$r->p_mati_krg_iii."</td>
            <td>".$r->p_mati_krg_iv."</td>
            <td>".$r->total_v."</td>
          </tr>";
          echo "<tr>
            <td>6</td>
            <td>Pasien Mati >= 48 Jam</td>
            <td>".$r->p_mati_lbh_i."</td>
            <td>".$r->p_mati_lbh_ii."</td>
            <td>".$r->p_mati_lbh_iii."</td>
            <td>".$r->p_mati_lbh_iv."</td>
            <td>".$r->total_vi."</td>
          </tr>";
          echo "<tr>
            <td>7</td>
            <td>Jumlah Tempat Tidur</td>
            <td>".$r->jml_tt_i."</td>
            <td>".$r->jml_tt_ii."</td>
            <td>".$r->jml_tt_iii."</td>
            <td>".$r->jml_tt_iv."</td>
            <td>".$r->total_vii."</td>
          </tr>";
          echo "<tr>
            <td>8</td>
            <td>Jumlah Periode</td>
            <td>".$r->jml_periode_i."</td>
            <td>".$r->jml_periode_ii."</td>
            <td>".$r->jml_periode_iii."</td>
            <td>".$r->jml_periode_iv."</td>
            <td>".$r->total_viii."</td>
          </tr>";
        }
        ?> -->
    </table>
    <br><br>
    <table border="1" width="100%" align="center">
      <tr>
        <th>No</th>
        <th>Data</th>
        <th>Triwulan I</th>
        <th>Triwulan II</th>
        <th>Triwulan III</th>
        <th>Triwulan IV</th>
        <th>Total</th>
        <th>Parameter</th>
        <th>Kesimpulan</th>
      </tr>
        <?php
        foreach($indikator as $ind){
          echo "<tr>
            <td>1</td>
            <td>BOR</td>
            <td>".$ind->bor_i."%</td>
            <td>".$ind->bor_ii."%</td>
            <td>".$ind->bor_iii."%</td>
            <td>".$ind->bor_iv."%</td>
            <td>".$ind->rata_bor."%</td>
            <td>60-80%</td>
            <td>".$ind->kesimpulan_bor."</td>
          </tr>";
          echo "<tr>
            <td>2</td>
            <td>AlOS</td>
            <td>".$ind->alos_i." hari</td>
            <td>".$ind->alos_ii." hari</td>
            <td>".$ind->alos_iii." hari</td>
            <td>".$ind->alos_iv." hari</td>
            <td>".$ind->rata_alos." hari</td>
            <td>6-9 hari</td>
            <td>".$ind->kesimpulan_alos."</td>
          </tr>";
          echo "<tr>
            <td>3</td>
            <td>TOI</td>
            <td>".$ind->toi_i." hari</td>
            <td>".$ind->toi_ii." hari</td>
            <td>".$ind->toi_iii." hari</td>
            <td>".$ind->toi_iv." hari</td>
            <td>".$ind->rata_toi." hari</td>
            <td>1-3 hari</td>
            <td>".$ind->kesimpulan_toi."</td>
          </tr>";
          echo "<tr>
            <td>4</td>
            <td>BTO</td>
            <td>".$ind->bto_i." kali</td>
            <td>".$ind->bto_ii." kali</td>
            <td>".$ind->bto_iii." kali</td>
            <td>".$ind->bto_iv." kali</td>
            <td>".$ind->rata_bto." kali</td>
            <td>40-50 kali</td>
            <td>".$ind->kesimpulan_bto."</td>
          </tr>";
          echo "<tr>
            <td>5</td>
            <td>NDR</td>
            <td>".$ind->ndr_i."</td>
            <td>".$ind->ndr_ii."</td>
            <td>".$ind->ndr_iii."</td>
            <td>".$ind->ndr_iv."</td>
            <td>".$ind->rata_ndr."</td>
            <td></td>
          </tr>";
          echo "<tr>
            <td>6</td>
            <td>GDR</td>
            <td>".$ind->gdr_i."</td>
            <td>".$ind->gdr_ii."</td>
            <td>".$ind->gdr_iii."</td>
            <td>".$ind->gdr_iv."</td>
            <td>".$ind->rata_gdr."</td>
            <td></td>
          </tr>";
        }
        ?>
    </table>
    <br><br>
    <p>
      Mengetahui <br> Kepala Rekam Medis <br><br><br><br><br><br> <b><u>Sri Sugiyanti, A.Md.PK</u></b> <br> <b>19680830 199303 2 004</b>
    </p>
  </body>
</html>
