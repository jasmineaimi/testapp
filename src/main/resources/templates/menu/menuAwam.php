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
        <a class="active" href="../dashboard/dashboardAwam.php"><i class="si si-cup"></i><span class="sidebar-mini-hide">DASHBOARD</span></a>
      </li>                         
      <li>
        <a class="" href="../profile/profile.php"><i class="fa fa-address-book-o"></i><span class="sidebar-mini-hide">PROFIL</span></a>
        <!-- <a class="nav-submenu" data-toggle="nav-submenu" href="../profile/profile.php"><i class="fa fa-address-book-o"></i><span class="sidebar-mini-hide">PROFIL</span></a>
          <ul>
            <li>
              <a class="" href="../profile/maklumat_pengguna.php"><span class="sidebar-mini-hide">MAKLUMAT PENGGUNA</span></a>
            </li>
            <li>
              <a class="" href="../profile/maklumat_pendidikan.php"><span class="sidebar-mini-hide">MAKLUMAT PENDIDIKAN</span></a>
            </li>
            <li>
              <a class="" href=""><span class="sidebar-mini-hide">MAKLUMAT PEKERJAAN</span></a>
            </li>
            <li>
              <a class="" href=""><span class="sidebar-mini-hide">MAKLUMAT TAULIAH NEGERI LAIN</span></a>
            </li>
            <li>
              <a class="" href=""><span class="sidebar-mini-hide">MAKLUMAT BIDANG KEPAKARAN</span></a>
            </li>
            <li>
              <a class="" href=""><span class="sidebar-mini-hide">DOKUMEN SOKONGAN</span></a>
            </li>
            <li>
              <a class="" href=""><span class="sidebar-mini-hide">STATUS KEPUTUSAN PERMOHONAN</span></a>
            </li>
            <li>
              <a class="" href=""><span class="sidebar-mini-hide">REKOD TATATERTIB</span></a>
            </li>
            <li>
              <a class="" href=""><span class="sidebar-mini-hide">HISTORY LOG</span></a>
            </li>
          </ul> -->
      </li> 
    

      <li>
      <a class="nav-submenu" data-toggle="nav-submenu" href=""><i class="fa fa-comments"></i><span class="sidebar-mini-hide">PERMOHONAN</span></a>
      <ul>
        <?php if($Permohonan_Kelayakan == '1'){ ?>
        <li>
          <a class="" href="../application/tatacara_permohonan.php"><span class="sidebar-mini-hide">PERMOHONAN TAULIAH MENGAJAR NEGERI SELANGOR PERATURAN-PERATURAN TAULIAH NEGERI SELANGOR</span></a>
        </li>
        <?php } 
        if($Permohonan_Kelayakan == '0'){?>
        <li>
          <a class="" href="../application/tatacara_permohonan_pengecualian.php"><span class="sidebar-mini-hide">PERMOHONAN TAULIAH OLEH ORANG YANG TIDAK MEMENUHI SYARAT KELAYAKAN</span></a>
        </li>
        <?php } ?>
        <li>
          <a class="" href="../application/appJawatan.php " style="pointer-events: none"><span class="sidebar-mini-hide" >PERMOHONAN PENGECUALIAN DARIPADA KEHENDAK MENDAPATKAN TAULIAH ATAS NAMA JAWATAN</span></a>
        </li>
        <li>
          <a class="" href="../application/appPenganjur.php "><span class="sidebar-mini-hide">PERMOHONAN PENGECUALIAN DARIPADA KEHENDAK MENDAPATKAN TAULIAH OLEH PENGANJUR</span></a>
        </li>

      </ul>
    </li>
      <li>
        <a class="" href="../test/TestList.php"><i class="fa fa-tasks"></i><span class="sidebar-mini-hide">UJIAN</span></a>
      </li>
      <li>
        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-comments "></i><span class="sidebar-mini-hide">TEMU DUGA</span></a>
          <ul>
            <li>
              <a class="" href="../interview/ListInterview.php"><span class="sidebar-mini-hide">KEHADIRAN TEMU DUGA</span></a>
            </li>
            <li>
              <a class="" href="../interview/tatacaratemuduga.php"><span class="sidebar-mini-hide">TATACARA TEMU DUGA</span></a>
            </li>
          </ul>
      </li>
      <li>
        <a class="" href="../perakuan/SenaraiPerakuan.php"><i class="fa fa-certificate"></i><span class="sidebar-mini-hide">PERAKUAN TAULIAH</span></a>
      </li>
      <li>
        <a class="" href="../attendancekehadiran/listattendance.php"><i class="fa fa-check-square-o"></i><span class="sidebar-mini-hide">KEHADIRAN CERAMAH</span></a>
      </li>
      <li>
        <a class="" href="../attendance_temuduga/listattendance.php"><i class="fa fa-check-square-o"></i><span class="sidebar-mini-hide">REKOD KEHADIRAN TEMU DUGA</span></a>
      </li>
      <!-- <li>
        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-comments "></i><span class="sidebar-mini-hide">ADUAN</span></a>
          <ul>
            <li>
              <a class="" href="../complaint/carianaduan.php"><span class="sidebar-mini-hide">DAFTAR ADUAN</span></a>
            </li>
            <li>
              <a class="" href="../complaint/aduandiri.php"><span class="sidebar-mini-hide">SENARAI ADUAN</span></a>
            </li>
          </ul>
      </li> -->
      <li>
          <a class="nav-submenu" data-toggle="nav-submenu" href=""><i class="fa fa-comments "></i><span class="sidebar-mini-hide">ADUAN</span></a>
          <ul>
            <!-- For Orang Awam -->
            <li>
              <a href="../objection/senaraipbns.php">DAFTAR ADUAN</a>
            </li>
            <li>
              <a href="../objection/semakanaduan.php">SEJARAH ADUAN</a>
            </li>

            <!-- For PBNS -->
            <!-- Check if pbns -->
            <?php 
            $querycheckpbns = mysqli_query($connect, "SELECT * FROM jt_profile_type WHERE id_profile = '$id_profile' AND id_lkp_profile_type = '3' AND id_lkp_profile_status = '4'");
            $rowjpt = mysqli_fetch_assoc($querycheckpbns);
            if (mysqli_num_rows($querycheckpbns) > 0) {            
            ?>
            <li>              
              <a href="../objection/complaintaction.php">ADUAN PBNS</a>
            </li>
            <?php } ?>
          </ul>
      </li>                  
    </ul>
</div>