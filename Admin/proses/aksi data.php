<?php
              $page = (isset($_GET['page']))? $_GET['page'] : "main";
              switch ($page) {
              case 'edit-dokter' : include "../menu/edit dokter.php"; break;
              case 'edit-pasien' : include "../menu/edit pasien.php"; break;
              case 'hapus-dokter' : include "hapus dokter.php"; break;
              case 'hapus-pasien' : include "hapus pasien.php"; break;
              case 'main' :
              default : include '../menu/lihat dokter.php';
			}
?>
