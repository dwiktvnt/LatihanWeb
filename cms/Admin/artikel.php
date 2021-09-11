<script type="text/javascript" src="../Plugin/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="js/tinymce_conf.js"></script>

<?php

$link = "?content=artikel";
$aksi = "edit";

include "../Library/latihanForm.php";

buka_form($link, 'id_artikel', strtolower($aksi));
buat_textbox("Judul Artikel", "Judul", 'judul', 10);
buat_textarea("Isi Artikel", "Isi", 'isi', "richtext");
tutup_form($link, "bebas", "bebas");

?>