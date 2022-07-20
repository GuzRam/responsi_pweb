<?php
        $nama = $_POST['nama'];
        $umur = $_POST['umur'];
        $fp = fopen("dataSave.txt","a+");
        fputs($fp,"Nama = $nama".'<br>'."Umur = $umur\n".'<br>');
        fclose($fp);
?>