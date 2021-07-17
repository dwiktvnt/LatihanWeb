<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<div class="navbar">
    <ul class="nav navbar-nav">
        <?php
        include "fungsi_menu.php";
        session_start();
        $_SESSION['leveluser']="admin";
        buat_menu("dashboard", "home", "Dashboard", array("admin", "author"));
        buka_dropdown("book", "Content", array("admin", "author"));
        buat_submenu("content1", "Content 1", array("admin", "author"));
        buat_submenu("content2", "Content 2", array("admin", "author"));
        buat_submenu("content3", "Content 3", array("admin", "author"));
        tutup_dropdown(array("admin", "author"));
        buat_menu("About", "file", "About", array("admin", "author"));
        ?>
    </ul>
</div>