<?php

$query = mysqli_query($connect, "SELECT EXTRACT(DAY FROM CURRENT_TIMESTAMP) as todateday");
$rowDay = mysqli_fetch_assoc($query);

$query41 = mysqli_query($connect, "SELECT * FROM profile a, education c WHERE a.id='$id_profile' AND c.id_profile='$id_profile' AND a.id_lkp_country='1' AND a.age>'18' AND a.id_lkp_state='12' AND c.flag_agama='1'");
$rowPengecualianKelayakan = mysqli_fetch_assoc($query41);
if (mysqli_num_rows($query41) == '0') {
  $Permohonan_Kelayakan = '0';
} else {
  $Permohonan_Kelayakan = '1';
}

?>

<div class="content-side content-side-full">          
    <ul class="nav-main">
      <li>
        <a class="active" href="../dashboard/dashboardUrusetia.php"><i class="si si-cup"></i><span class="sidebar-mini-hide">DASHBOARD</span></a>
      </li>                         
      <li>
        <a class="" href="../profile/profile.php"><i class="fa fa-address-book-o"></i><span class="sidebar-mini-hide">PROFIL</span></a>
      </li> 
      <li>
      <a class="nav-submenu" data-toggle="nav-submenu" href=""><i class="fa fa-comments"></i><span class="sidebar-mini-hide">PERMOHONAN</span></a>
      <ul>
        <?php if($Permohonan_Kelayakan == '1'){ ?>
        <li>
          <a class="" href="../application/tatacara_permohonan.php"><span class="sidebar-mini-hide">PERMOHONAN TAULIAH MENGAJAR NEGERI SELANGOR PERATURAN TAULIAH NEGERI SELANGOR</span></a>
        </li>
        <?php } 
        if($Permohonan_Kelayakan == '0'){?>
        <li>
          <a class="" href="../application/tatacara_permohonan_pengecualian.php"><span class="sidebar-mini-hide">PERMOHONAN PENGECUALIAN KELAYAKAN SUBPERATURAN 11(1) PERATURAN TAULIAH NEGERI SELANGOR</span></a>
        </li>
        <?php } ?>
        <li>
          <a class="" href="../application/appJawatan.php "><span class="sidebar-mini-hide">PERMOHONAN PENGECUALIAN PERATURAN 22(a)-(g) PERATURAN TAULIAH NEGERI SELANGOR</span></a>
        </li>
        <li>
          <a class="" href="../application/appPenganjur.php "><span class="sidebar-mini-hide">PERMOHONAN PENGECUALIAN PERATURAN 22(1)(h) PERATURAN TAULIAH NEGERI SELANGOR</span></a>
        </li>

      </ul>
    </li>
      <li>
        <a class="" href="../Mesyuarat/SenaraiMesyuarat.php"><i class="fa fa-group"></i><span class="sidebar-mini-hide">MESYUARAT</span></a>
      </li>
      <li>
        <a class="" href="../laporan/report-main.php"><i class="fa  fa-area-chart "></i><span class="sidebar-mini-hide">LAPORAN/STATISTIK</span></a>
      </li>
      <li>
        <a class="" href=""><i class="fa fa-check-square-o"></i><span class="sidebar-mini-hide">AUDIT TRAIL</span></a>
      </li>
      <!-- <li>
          <a class="nav-submenu" data-toggle="nav-submenu" href="""><i class="fa fa-comments "></i><span class="sidebar-mini-hide">ADUAN</span></a>
          <ul>
            <li>
              <a href="../complaint/senaraiaduan.php">ADUAN PENGERUSI</a>
            </li>
            <li>
              <a href="../complaint/aduan_urusetia.php">SENARAI ADUAN</a>
            </li>
          </ul>
      </li> -->
      <li>
        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-settings"></i><span class="sidebar-mini-hide">PENTADBIRAN</span></a>
          <ul>
            <li>
              <a class="" href="../penetapan/pengguna.php"><span class="sidebar-mini-hide">PENGGUNA</span></a>
            </li>
            <!-- <li>
              <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">PROFIL</span></a>
              <ul>
                <li>
                  <a href="../profile/ProfileList.php">SENARAI PROFIL</a>
                </li>
                <li>
                  <a href="../profile/ProfileStatus.php">STATUS PROFIL</a>
                </li>
              </ul>
            </li> -->
            <li>
              <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">PERMOHONAN</span></a>
              <ul>
                <li>
                  <a href="../application/AppSessionDuration.php">SESI PERMOHONAN</a>
                </li>
                <li>
                  <a href="../application/ApplicationStatus.php">STATUS PERMOHONAN</a>
                </li>
                <li>
                  <a href="../application/ApplicationBanned.php">SEKATAN PERMOHONAN</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">UJIAN</span></a>
              <ul>
                <li>
                  <a href="../test/CategoryTopicQuestion.php">TOPIK SOALAN</a>
                </li>
                <li>
                  <a href="../test/BankQuestion.php">BANK SOALAN</a>
                </li>
                <li>
                  <a href="../test/WeightageQuestion.php">PEMBERAT SOALAN</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-submenu" data-toggle="nav-submenu" href=""><span class="sidebar-mini-hide">TEMU DUGA</span></a>
              <ul>
                <li>
                  <a href="../interview/SchedulingInterview.php">JADUAL TEMU DUGA</a>
                </li>
                <li>
                  <a href="../interview/InterviewAssessment.php">PENILAIAN TEMU DUGA</a>
                </li>
                <li>
                  <a href="../interview/AssessmentDone.php">PENILAIAN SELESAI</a>
                </li>
                <li>
                  <a href="../interview/TemudugaBernotis.php">TEMU DUGA BERNOTIS</a>
                </li>
                <li>
                  <a href="../interview/lokasi_temuduga.php">SENARAI LOKASI TEMU DUGA</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-submenu" data-toggle="nav-submenu" href=""><span class="sidebar-mini-hide">REKOD KEHADIRAN TEMU DUGA</span></a>
              <ul>
                <li>
                  <a href="../attendance_temuduga/qrcode.php">QR CODE</a>
                </li>
                <li>
                  <a href="../attendance_temuduga/attendancerecord.php">SENARAI KEHADIRAN TEMU DUGA</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-submenu" data-toggle="nav-submenu" href=""><span class="sidebar-mini-hide">REKOD KEHADIRAN BERCERAMAH</span></a>
              <ul>
                <li>
                  <a href="../attendancekehadiran/qrcode.php">QR CODE</a>
                </li>
                <li>
                  <a href="../attendancekehadiran/attendancerecord.php">SENARAI KEHADIRAN</a>
                </li>
              </ul>
            </li>
             
            <li>
              <a class="" href="#"><span class="sidebar-mini-hide">MAKLUM BALAS PENGGUNA</span></a>
            </li>
            <li>
              <a class="" href="../administration/SuratArahanPuncaKuasa.php"><span class="sidebar-mini-hide">PENGUMUMAN</span></a>
            </li>
            <li>
              <a class="" href="#"><span class="sidebar-mini-hide">NOTIFIKASI</span></a>
            </li>
            <li>
              <a class="" href="#"><span class="sidebar-mini-hide">BAYARAN FI</span></a>
            </li>
            <li>
              <a class="" href="#"><span class="sidebar-mini-hide">SOALAN LAZIM</span></a>
            </li>
            <li>
              <a class="" href="../penetapan/masjid.php"><span class="sidebar-mini-hide">MASJID</span></a>
            </li>
            <li>
              <a class="" href="../penetapan/surau.php"><span class="sidebar-mini-hide">SURAU</span></a>
            </li>
            <li>
              <a class="" href="#"><span class="sidebar-mini-hide">AGENSI/JABATAN</span></a>
            </li>
          </ul>
      </li>
      <li>
          <a class="nav-submenu" data-toggle="nav-submenu" href="""><i class="fa fa-comments "></i><span class="sidebar-mini-hide">ADUAN</span></a>
          <ul>
            <!-- For Orang Awam -->
            <li>
              <a href="../objection/senaraipbns.php">DAFTAR ADUAN</a>
            </li>
            <li>
              <a href="../objection/semakanaduan.php">SEJARAH ADUAN</a>
            </li>

            <!-- For Pengerusi JKT MAIS -->
            <li>
              <a href="../objection/pengerusijktmais.php">PENGERUSI JAWATANKUASA TAULIAH MAIS (TINDAKAN)</a>
            </li>
            <li>
              <a href="../objection/pengerusijktmaissenarai.php">PENGERUSI JAWATANKUASA TAULIAH MAIS (PAPARAN)</a>
            </li>

            <!-- For JK Kecil Aduan dan Siasatan -->
            <li>
              <a href="../objection/pengerusijkkecilsenarai.php">PENGERUSI JAWATANKUASA KECIL ADUAN DAN SIASATAN</a>
            </li>

            <!-- For Setiausaha -->
            <li>
              <a class="" href="../objection/aduansetiausahasenarai.php">ADUAN SETIAUSAHA</a>
            </li>  
            <li>
              <a class="" href="../objection/aduansetiausaharayuansenarai.php">RAYUAN SETIAUSAHA</a>
            </li> 
            
            <!-- For Urusetia -->
            <li>
              <a class="" href="../objection/urusetianaduansenarai.php">ADUAN URUS SETIA</a>
            </li> 
          </ul>
      </li>     
      <li>
          <a class="nav-submenu" data-toggle="nav-submenu" href=""><i class="fa fa-comments "></i><span class="sidebar-mini-hide"> KEPUTUSAN PERMOHONAN PENGECUALIAN 22(1)(h)</span></a>
          <ul>
            <!-- For Orang Awam -->
            <li>
              <a href="../application/appPenganjur_listing.php">TINDAKAN SETIAUSAHA JAWATANKUASA TAULIAH</a>
            </li>
            <li>
              <a href="../application/listing_pengerusi_jkt.php">TINDAKAN PENGERUSI JAWATANKUASA TAULIAH</a>
            </li>

            <!-- For Setiausaha Majlis -->
            <li>
              <a href="../application/listing_sumajlis.php">KEPUTUSAN SETIAUSAHA MAJLIS</a>
            </li>

      
          </ul>
      </li>           
    </ul>
</div>
