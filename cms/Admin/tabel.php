<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include "../Library/fungsi_tabel.php";
include "../Library/config.php";

$dataDariDatabase = $mysqli->query("SELECT * FROM `registrasi`");
$ids = 1;

buka_tabel(array("Nama"));
while ($data = $dataDariDatabase->fetch_array()) {
  $dataNamadDariDatabase = $data['nama'];
  $dataPassDariDatabase = $data['password'];
  $dataIdDariDatabase = $data['id'];

  isi_tabel($ids, array($dataNamadDariDatabase), "#", $dataIdDariDatabase);
  $ids += 1;
}
tutup_tabel();

?>