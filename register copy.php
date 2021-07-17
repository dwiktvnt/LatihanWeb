<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                    include "latihanForm.php";
                    buka_form("#", 1, "edit");
                    buat_textbox("Username", "nama", "", "10");
                    buat_textbox("Password", "password", "", "10", "password");
                    tutup_form("#");
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