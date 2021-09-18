<?php

include "../Library/config.php";

if (isset($_GET['nama']) and isset($_GET['password'])) {
    $dataNamaDariInputUser = $_GET['nama'];
    $dataPassDariInputUser = md5($_GET['password']);
    $cek = 0;


    $dataDariDatabase = $mysqli->query("SELECT * FROM `registrasi`");
    while ($data = $dataDariDatabase->fetch_array()) {
        $dataNamaDariDatabase = $data['nama'];
        $dataPassDariDatabase = $data['password'];
        $dataEmailDariDatabase = $data['email'];
        $dataIdDariDatabase = $data['id'];


        if ($dataNamaDariDatabase == $dataNamaDariInputUser) {
            if ($dataPassDariDatabase == $dataPassDariInputUser) {
                header('location:index.php');
            } else {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Password Salah!</strong> Password Harus Sama</a>.
              </div>';
            }
        }
    }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <div class="countener-fluid">
        <div class='col-md-4 form-register'>
            <div class='card'>
                <div class='card-body'>
                    <div class="card-header">
                        <h1>Login</h1>
                    </div>
                    <?php
                    include "../Library/latihanForm.php";
                    buka_form("login.php", 1, "edit");
                    buat_textbox("Username", "nama", "", "10");
                    buat_textbox("Password", "password", "", "10", "password");
                    tutup_form("register.php", "Registrasi", "Login");
                    ?>
                </div>
            </div>
        </div>
    </div>

    <style>
        body {
            background-color: darkolivegreen;
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