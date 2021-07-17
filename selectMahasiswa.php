<?php
include "config.php";

$sql = mysqli_query($mysqli,"SELECT * from `mahasiswa`");

while($data = mysqli_fetch_array($sql)){
    echo "NIM ".$data['nim']."<br>";
    echo "Nama ".$data['nama_mh']."<br>";
    echo "No Tlp ".$data['no_tlp']."<br>";
    echo "Email ".$data['email']."<br>";
    echo "<br>";
}

?>

card