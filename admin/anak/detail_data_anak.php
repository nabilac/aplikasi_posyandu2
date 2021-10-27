<?php
include '../action/koneksi.php';
include '../layout/header.php';
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Detail Data Anak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../beranda/beranda.php">Home</a></li>
              <li class="breadcrumb-item"><a href="data_anak.php">Data Anak</a></li>
              <li class="breadcrumb-item active">Detail Data Anak</li>
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
                <?php
                    $id_anak=$_GET['id_anak'];
                    $data=mysql_query("SELECT * from anak WHERE id_anak='$id_anak'");
                    while ($r=mysql_fetch_array($data)) {
                ?>
                <div class="card-body">
                    Nama            : <?php echo $r['nama_anak']; ?>
                    <br/>
                    Jenis Kelamin   : <?php echo $r['jenis_kelamin']; ?>
                    <br/>
                    Tempat Lahir    : <?php echo $r['tempat_lahir']; ?>
                    <br/>
                    Tanggal Lahir   : <?php echo $r['tanggal_lahir']; ?>
                    <br/>
                    BB Lahir        : <?php echo $r['berat_badan_lahir']; ?>
                    <br/>
                    TB Lahir        : <?php echo $r['tinggi_badan_lahir']; ?>
                    <br/>
                    LK Lahir        : <?php echo $r['lingkar_kepala_lahir']; ?>
                    <br/>
                    Nama Ayah       : <?php echo $r['nama_ayah']; ?>
                    <br/>
                    Nama Ibu        : <?php echo $r['nama_ibu']; ?>
                    <br/>
                    Alamat          : <?php echo $r['alamat']; ?>
                    <br/>
                    No. Telephone   : <?php echo $r['nohp']; ?>
                    <br>
                    <a href='ubah_data_anak.php?id_anak=<?php echo $r['id_anak'];?>'><input type="button" class="btn btn-outline-primary" value="ubah"></a>
                </div>
                <?php
                    }
                ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php
include '../layout/footer.php';
?>