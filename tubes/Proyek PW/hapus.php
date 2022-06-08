<?php 

require 'functions.php';

$id_murid = $_GET['id_murid'];

if (hapus($id_murid) > 0 ){
    echo" <script> 
        
            alert('data berhasil dihapus!');
            document.location.href ='admin.php';
        
        </script> ";
}

?>