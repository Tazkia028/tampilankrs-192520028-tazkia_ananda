<?php
    $nim = $_POST['nim'];
    $nama = ($_POST['nama']);
    $kode = ($_POST['kode']);
    $matkul = ($_POST['matkul']);
    $sks = ($_POST['sks']);
    $kelas = ($_POST['kelas']);
    $semester = ($_POST['semester']);

    echo "Data KRS Anda <br>"; 
    echo "NIM : ".$nim."<br>"; 
    echo "Nama : ".$nama."<br>"; 
    echo "Kode Matakuliah : ".$kode."<br>"; 
    echo "Nama Matakuliah : ".$matkul."<br>"; 
    echo "SKS : ".$sks."<br>"; 
    echo "Kelas : ".$kelas."<br>"; 
    echo "Semester : ".$semester."<br>"; 

?>
