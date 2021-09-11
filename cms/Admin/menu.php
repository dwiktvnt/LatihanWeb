<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ADMINISTRATOR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php
        include "../Library/fungsi_menu.php";
        session_start();
        $_SESSION['leveluser'] = "admin";
        buat_menu("dashboard", "home", "Dashboard", array("admin", "author"));
        buka_dropdown("book", "Content", array("admin", "author"));
        buat_submenu("content1", "Content 1", array("admin", "author"));
        buat_submenu("content2", "Content 2", array("admin", "author"));
        buat_submenu("content3", "Content 3", array("admin", "author"));
        tutup_dropdown(array("admin", "author"));
        buat_menu("About", "file", "About", array("admin", "author"));
        buat_menu("", "user", "Admin", array("admin"));


        ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container-fluid ">
  <div class="col-sm-6 col-md-2">
    <?php include "menu2.php"; ?>
  </div>
</div>
<div class="container-fluid ">
  <div class="col-sm-6 col-md-10">
    <?php include "artikel.php"; ?>
  </div>
</div>

<div class="container-fluid ">
  <div class="footer">
    <p>Copyright &copy; Dwi. All right reserved.</p>
    </footer>
  </div>