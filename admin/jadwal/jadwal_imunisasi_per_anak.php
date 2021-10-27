<?php
include '../action/koneksi.php';
include '../layout/header.php';
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Jadwal Imunisasi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../beranda/beranda.php">Home</a></li>
              <li class="breadcrumb-item active">Data Jadwal Imunisasi</li>
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

                <?php }?>
                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>Tanggal Imunisasi</th>
                        <th>Nama Vaksin</th>
                        <th>Detail</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php 
                          $date1 = new DateTime($r['tanggal_lahir']);
                           $HB = $date1->modify("+0 days");
                              
                              
                          $date2 = new DateTime($r['tanggal_lahir']);
                          $BCG = $date2->modify("+30 days");
                              
                              
                          $date3 = new DateTime($r['tanggal_lahir']);
                          $Polio = $date3->modify("+30 days");
                              
                              
                          $date4 = new DateTime($r['tanggal_lahir']);
                          $DPT = $date4->modify("+60 days");

                          $date5 = new DateTime($r['tanggal_lahir']);
                          $Polio2 = $date5->modify("+60 days");

                          $date6 = new DateTime($r['tanggal_lahir']);
                          $DPT2 = $date6->modify("+90 days");

                          $date7 = new DateTime($r['tanggal_lahir']);
                          $Polio3 = $date7->modify("+90 days");

                          $date8 = new DateTime($r['tanggal_lahir']);
                          $DPT3 = $date8->modify("+120 days");

                          $date9 = new DateTime($r['tanggal_lahir']);
                          $Polio4 = $date9->modify("+120 days");

                          $date10 = new DateTime($r['tanggal_lahir']);
                          $IPV = $date10->modify("+120 days");

                          $date11 = new DateTime($r['tanggal_lahir']);
                          $Campak = $date11->modify("+270 days");

                         
                          $tanggal_datang= new DateTime();
                              
                          $vaksin = array ("HB-0","BCG","*Polio","*DPT","Polio 2","*DPT 2","Polio 3","*DPT 3","*Polio 4","*IPV","Campak","*Polio 5","*DPT 5","Campak 2","*DPT 6");
                         
                           
                              
                        ?>
                      <tr>
                        <td><?php echo $HB->format("d-F-Y");?></td>
                        <td><?php echo $vaksin[0];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($HB <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                       
                     
                      </tr>

                      <tr>
                        <td><?php echo $BCG->format("d-F-Y");?></td>
                        <td><?php echo $vaksin[1];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($BCG <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>

                      </tr>
                      <tr>
                        <td><?php echo $Polio->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[2];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Polio <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $DPT->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[3];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($DPT <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $Polio2->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[4];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Polio2 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $DPT2->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[5];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($DPT2 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $Polio3->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[6];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Polio3 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $DPT3->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[7];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($DPT3 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $Polio4->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[8];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Polio4 <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $IPV->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[9];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($IPV <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $Campak->format("d-F-Y"); ?></td>
                        <td><?php echo $vaksin[10];  ?></td>
                        <td><?php 
                        
                        $tanggal_datang= new DateTime();
                        
                        if($Campak <= $tanggal_datang){
                          echo "<font color='blue'>Sudah Imunisasi</font>";
                        }else{
                          echo "<font color='red'>Belum Imunisasi</font>";
                        }
                        ?></td>
                      </tr>
                     
                      </tr>
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