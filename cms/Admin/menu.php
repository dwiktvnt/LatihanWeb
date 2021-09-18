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
    </div>
  </div>
</nav>