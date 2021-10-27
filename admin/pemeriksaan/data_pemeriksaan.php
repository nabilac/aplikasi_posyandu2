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
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php 
                      $data = mysql_query("select * from anak"); 
                      $no = 1;
                      while($r = mysql_fetch_array($data)){
                      ?>
                      <tr>                      
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $r['nama_anak']; ?></td>                
                      <td><a href='pemeriksaan_per_anak.php?id_anak=<?php echo $r['id_anak'];?>'><input type="button" class="btn btn-outline-primary" value="pemeriksaan"></a></td>
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