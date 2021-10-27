<?php
include '../action/koneksi.php';
include '../layout/header.php';
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Anak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../beranda/beranda.php">Home</a></li>
              <li class="breadcrumb-item active">Data Anak</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <a href="tambah_data_anak.php" ><input type="submit" class="btn btn-primary btn-fw" value="Tambah Data Anak" style="margin-left: 20px; margin-top: 10px"></a>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                      $data = mysql_query("select * from anak"); 
                      $no = 1;
                      function format_indo($date)
                      {
                          $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

                          $tahun = substr($date, 0, 4);               
                          $bulan = substr($date, 5, 2);
                          $tgl   = substr($date, 8, 2);
                          $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
                          return($result);
                      }
                      while($r = mysql_fetch_array($data)){
                      ?>
                      <tr>                      
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $r['nama_anak']; ?></td>
                      <td><?php echo $r['jenis_kelamin']; ?></td>
                      <td><?php echo $r['tempat_lahir']; ?></td>
                      <td><?php echo format_indo($r['tanggal_lahir']); ?></td>                   
                      <td><a href='detail_data_anak.php?id_anak=<?php echo $r['id_anak'];?>'><input type="button" class="btn btn-outline-primary" value="detail"></a>&nbsp<a href='ubah_data_anak.php?id_anak=<?php echo $r['id_anak'];?>'><input type="button" class="btn btn-outline-primary" value="ubah"></a>&nbsp<a href='action/delete_data_anak.php?id_anak=<?php echo $r['id_anak'];?>'><input type="button" class="btn btn-outline-primary" value="hapus"></a></td>
                      </tr>
                       <?php
                      }
                      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
<?php
include '../layout/footer.php';
?> 