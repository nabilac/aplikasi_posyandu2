<?php
include '../action/koneksi.php';
include '../layout/header.php';
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pemeriksaan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../beranda/beranda.php">Home</a></li>
              <li class="breadcrumb-item active">Data Pemeriksaan</li>
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
              <div class="card-body">
                <?php
                    $syarat=$_GET['id_anak'];
                    $data=mysql_query("SELECT * FROM anak WHERE id_anak='$syarat'");
                    $no=1;
                    function format_indo($date)
                    {
                        $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

                        $tahun = substr($date, 0, 4);               
                        $bulan = substr($date, 5, 2);
                        $tgl   = substr($date, 8, 2);
                        $result = $tgl . "-" . $BulanIndo[(int)$bulan-1]. "-". $tahun;
                        return($result);
                    }
                  while ($r=mysql_fetch_array($data))                                     
                  {
                ?>
                Nama Lengkap : <?php echo $r['nama_anak']; ?>
                <br>
                Tanggal Lahir : <?php echo format_indo($r['tanggal_lahir']); ?>
                <br>

                <?php
                // tanggal lahir
                $tanggal_lahir = new DateTime($r['tanggal_lahir']);
                // tanggal hari ini
                $today = new DateTime('today');
                // tahun
                $y = $today->diff($tanggal_lahir)->y;
                // bulan
                $m = $today->diff($tanggal_lahir)->m;
                // hari
                $d = $today->diff($tanggal_lahir)->d;
                echo "Umur : " . $y . " tahun " . $m . " bulan " . $d . " hari";
                ?>
                <br>
                <br>

                &nbsp  &nbsp<a href="grafik_bb.php?id_anak=<?php echo $r['id_anak'];?>"><input type="submit" class="btn btn-primary btn-fw" value="Grafik Berat Badan"></a>
                &nbsp  &nbsp<a href="grafik_tb.php?id_anak=<?php echo $r['id_anak'];?>"><input type="submit" class="btn btn-primary btn-fw" value="Grafik Tinggi Badan"></a>
                &nbsp  &nbsp<a href="grafik_lk.php?id_anak=<?php echo $r['id_anak'];?>"><input type="submit" class="btn btn-primary btn-fw" value="Grafik Lingkar Kepala"></a>
                
                <?php }?>
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Penimbagan</th>
                        <th>Berat Badan(KG)</th>
                        <th>Tinggi Badan(CM)</th>
                        <th>Lingkar Kepala</th>
                        <th>Perilaku</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                        $data=mysql_query("SELECT * FROM pemeriksaan INNER join anak on anak.id_anak = pemeriksaan.id_anak ");
                        $no=1;
                        $syarat=$_GET['id_anak'];
                        $data=mysql_query("SELECT * FROM pemeriksaan WHERE id_anak='$syarat'");

                        while ($r=mysql_fetch_array($data)) {
                        ?>
                            <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo format_indo($r['tanggal_pemeriksaan']); ?></td>
                        <td><?php echo $r['berat_badan']; ?></td>
                        <td><?php echo $r['tinggi_badan']; ?></td>
                        <td><?php echo $r['lingkar_kepala']; ?></td>
                        <td><?php echo $r['perilaku']; ?></td>
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