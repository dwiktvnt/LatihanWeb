<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<nav class="navbar bg-light" style="background-color: #79B4B7;">
    <ul class="nav flex-column">
        <a class="navbar-brand" href="#">Menu</a>
        <?php


        buat_menu("dashboard", "home", "Dashboard", array("admin", "author"));
        buka_dropdown("list-alt", "Artikel");
        buat_submenu("artikel", "Artikel");
        buat_submenu("kategori", "Kategori");
        buat_submenu("tag", "Tag");
        tutup_dropdown();

        buat_menu("artikel", "list-alt", "Artikel", array("author"));
        buat_menu("halaman", "file", "Halaman", array("admin", "author"));
        buat_menu("komentar", "comment", "Komentar", array("admin", "author"));
        buat_menu("media", "picture", "Media", array("admin"));
        buat_menu("user", "user", "User", array("admin", "author"));

        buat_menu("modul", "tasks", "Modul");
        buka_dropdown("th-list", "Tampilan");
        buat_submenu("template", "Template");
        buat_submenu("menu", "Menu");
        buat_submenu("widget", "Widget");
        tutup_dropdown();
        buat_menu("setting", "wrench", "Setting");
        buat_menu("backuprestore", "floppy-save", "Backup dan Restore");
        ?>
    </ul>
</nav>