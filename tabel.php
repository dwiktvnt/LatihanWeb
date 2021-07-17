
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<body>
<div class="row">
    <div class="col-md-4 bg-primary">
    </div>
    <div class="col-md-4 bg-primary">
    <?php

include "latihanForm.php";
echo "<h1>Form Mahasiswa</h1>";

buka_form("#",1,"edit");
buat_textbox("NIM", "nim","","10");
buat_textbox("NamaMahasiswa", "nama","","10");
buat_textbox("No.Telepon", "tlp","","10");
buat_textbox("Email", "email","","10","email");
//$list = array();
//$list[] = array('val'=>'islam','cap'=>'ISLAM');
//$list[] = array('val'=>'kristen','cap'=>'KRISTEN');
//$list[] = array('val'=>'katolik','cap'=>'KATOLIK');
//$list[] = array('val'=>'hindu','cap'=>'HINDU');
//buat_combobox("Agama", "agama", $list, "islam");
tutup_form("#")

?>
    </div>
    <div class="col-md-4 bg-primary">
    </div>

</div>



</body>