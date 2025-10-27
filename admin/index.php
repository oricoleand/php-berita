<?php 
  ob_start();
  session_start();

  include "../config/config.php";

  if(!$_SESSION['user']) {
    header("location: login.php");
  }


  require_once "template/header.php";


?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        <?php 

          if(isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
              case 'home':
                include "dashboard/index.php";
                break;

              case 'tampil-beranda':
                include "beranda/data-beranda.php";
                break;

              case 'tambah-beranda':
                include "beranda/tambah-beranda.php";
                break;

              case 'hapus-beranda':
                include "beranda/hapus-beranda.php";
                break;

              case 'edit-beranda':
                include "beranda/edit-beranda.php";
                break;

              case 'tampil-berita':
                include "berita/data-berita.php";
                break;

              case 'tambah-berita':
                include "berita/tambah-berita.php";
                break;

              case 'hapus-berita':
                include "berita/hapus-berita.php";
                break;

              case 'edit-berita':
                include "berita/edit-berita.php";
                break;

                case 'tampil-pendidikan':
                include "pendidikan/data-pendidikan.php";
                break;

              case 'tambah-pendidikan':
                include "pendidikan/tambah-pendidikan.php";
                break;

              case 'hapus-pendidikan':
                include "pendidikan/hapus-pendidikan.php";
                break;

              case 'edit-pendidikan':
                include "pendidikan/edit-pendidikan.php";
                break;

              case 'tampil-olahraga':
                include "olahraga/data-olahraga.php";
                break;

                case 'tambah-olahraga':
                include "olahraga/tambah-olahraga.php";
                break;

              case 'hapus-olahraga':
                include "olahraga/hapus-olahraga.php";
                break;

              case 'edit-olahraga':
                include "olahraga/edit-olahraga.php";
                break;

              case 'tampil-teknologi':
                include "teknologi/data-teknologi.php";
                break;

                case 'tambah-teknologi':
                include "teknologi/tambah-teknologi.php";
                break;

              case 'edit-teknologi':
                include "teknologi/edit-teknologi.php";
                break;

              case 'hapus-teknologi':
                include "teknologi/hapus-teknologi.php";
                break;

              case 'tampil-politik':
                include "politik/data-politik.php";
                break;

                case 'tambah-politik':
                include "politik/tambah-politik.php";
                break;

              case 'hapus-politik':
                include "politik/hapus-politik.php";
                break;

              case 'edit-politik':
                include "politik/edit-politik.php";
                break;

              case 'user':
                include "akun/index.php";
                break;


              default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
            }
          } else {
            include "dashboard/index.php";
          }

         ?>

      </div>
      <!-- /. New Row -->
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<?php 

  require_once "template/footer.php";

?>