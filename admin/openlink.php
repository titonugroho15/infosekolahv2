<?php
  error_reporting(0);
  switch($_GET['p'])
  {
      case '' :       
      if(!file_exists ("dashboard.php")) die ("Maaf Halaman Tidak Ditemukan!"); 
      include "dashboard.php";   break;

      //siswa
    case 'inputsiswa' :        
      if(!file_exists ("tambahsiswa.php")) die ("Maaf Halaman Tidak Ditemukan!"); 
      include "tambahsiswa.php";  break;
    case 'editsiswa' :        
      if(!file_exists ("editsiswa.php")) die ("Maaf Halaman Tidak Ditemukan"); 
      include "editsiswa.php";  break;
    case 'updatesiswa' :        
      if(!file_exists ("updatesiswa.php")) die ("Maaf Halaman Tidak Ditemukan"); 
      include "updatesiswa.php";  break; 
    
    //guru
    case 'inputguru' :        
      if(!file_exists ("tambahguru.php")) die ("Maaf Halaman Tidak Ditemukan!"); 
      include "tambahguru.php";  break;
    case 'editguru' :        
      if(!file_exists ("editguru.php")) die ("Maaf Halaman Tidak Ditemukan"); 
      include "editguru.php";  break; 
    case 'updateguru' :        
      if(!file_exists ("updateguru.php")) die ("Maaf Halaman Tidak Ditemukan"); 
      include "updateguru.php";  break; 
  

  //berita
    case 'inputberita' :        
      if(!file_exists ("tambahberita.php")) die ("Maaf Halaman Tidak Ditemukan!"); 
      include "tambahberita.php";  break;
    case 'editberita' :        
      if(!file_exists ("editberita.php")) die ("Maaf Halaman Tidak Ditemukan"); 
      include "editberita.php";  break; 
    case 'updateberita' :        
      if(!file_exists ("updateberita.php")) die ("Maaf Halaman Tidak Ditemukan"); 
      include "updateberita.php";  break; 

       //siswa
    case 'inputeskul' :        
      if(!file_exists ("tambaheskul.php")) die ("Maaf Halaman Tidak Ditemukan!"); 
      include "tambaheskul.php";  break;
    case 'editeskul' :        
      if(!file_exists ("editeskul.php")) die ("Maaf Halaman Tidak Ditemukan"); 
      include "editeskul.php";  break;
    case 'updateeskul' :        
      if(!file_exists ("updateeskul.php")) die ("Maaf Halaman Tidak Ditemukan"); 
      include "updateeskul.php";  break; 

       //menu
    case 'dataguru' :        
      if(!file_exists ("dguru.php")) die ("Maaf Halaman Tidak Ditemukan"); 
      include "dguru.php";  break;
    case 'berita' :        
      if(!file_exists ("dberita.php")) die ("Maaf Halaman Tidak Ditemukan"); 
      include "dberita.php";  break; 
     case 'ekstrakulikuler' :        
      if(!file_exists ("deskul.php")) die ("Maaf Halaman Tidak Ditemukan"); 
      include "deskul.php";  break; 
       case 'datasiswa' :        
      if(!file_exists ("dsiswa.php")) die ("Maaf Halaman Tidak Ditemukan!"); 
      include "dsiswa.php";  break;
  }
?>