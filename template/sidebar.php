<?php 
require'../config/koneksi.php';
session_start();
?>
 <!-- sidebar menu -->
 <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../assets/production/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>
                  <?php 
                  include'../config/koneksi.php';
                  $perintah = mysqli_query($conn,"SELECT * FROM user WHERE  username ='".$_SESSION['username']."'");
                  $data = mysqli_fetch_array($perintah);
                  {
                    echo "$data[fullname]";
                  }
                  ?>
                </h2>
              </div>
            </div>

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="../pages/dashboard.php"><i class="fa fa-home"></i> Beranda <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      
                    </ul>
                  </li>
                  <li><a href="../pages/datapengguna.php"><i class="fa fa-user"></i> Data Pengguna <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                    </ul>
                  </li>
                  <li><a href="../pages/datasurat.php"><i class="fa fa-envelope"></i> Data Surat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html"></a></li>
                      
                    </ul>
                  </li>
                  <li><a a href="../pages/datadisposisi.php"><i class="fa fa-university"></i> Data Disposisi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                    </ul>
                  </li>
                  </ul>
              </div>

            </div>
            <!-- /sidebar menu -->