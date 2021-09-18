<?php
include "../Library/config.php";
if (isset($_GET['password'])) {
    $pass1 = $_GET['password'];
    $pass2 = $_GET['password2'];

    if ($pass1 == $pass2) {
        $passMD = md5($pass1);
        $nama = $_GET['nama'];
        $sql = "INSERT INTO `registrasi` ( `nama`, `password`) VALUES ('$nama', '$passMD')";
        $mysqli->query($sql);

        header("location: login.php");
    } else {
        echo '<div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Password Salah!</strong> Password Harus Sama</a>.
      </div>';
    }
}

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <div class="countener-fluid">
        <div class='col-md-4 form-register'>
            <div class='card'>
                <div class='card-body'>
                    <div class="card-header">
                        <h1>Form Register</h1>
                    </div>
                    <?php
                    include "../Library/latihanForm.php";
                    buka_form("register.php", 1, "edit");
                    buat_textbox("Username", "nama", "", "10");
                    buat_textbox("Password", "password", "", "10", "password");
                    buat_textbox("Re Password", "password2", "", "10", "password");
                    tutup_form("login.php", "Save", "Back");
                    ?>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: grey;
        }

        .card {
            border-radius: 20px;
        }

        .form-register {
            margin: auto;

        }

        .countener-fluid {
            margin-top: 100px;
        }
    </style>

</body>