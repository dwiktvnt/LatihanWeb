<?php
 include "config.php";
?>
<!DOCTYPE html>

<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class= "container my-3 py-5 text-center">
    <div class="row mb-5">
        <div class="col">
            <h1>Data Mahasiswa</h1>
        </div>
    </div>        
    <?php
            $sql = mysqli_query($mysqli,"SELECT * from `mahasiswa`");

            while($hasil = mysqli_fetch_array($sql)){
            echo "
            <div class='row mb-5'>
                <div class='col-md-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <img class='banner-image' src='banner.png' style='width: 100%'>
                            <img class='img-fluid rounded-circle w-50 mb-3' src='img_avatar1.png' alt=''>
                                    <h3 class='card-title text-center'>$hasil[nama_mh]</h3>
                                    <p class='card-text m-1'>$hasil[nim] </p>
                                    <p class='card-text m-1'>$hasil[no_tlp] </p>
                                    <p class='card-text m-1'>$hasil[email] </p>
                                    <div class='d-flex flex-row justify-content-center'>
                                        <div class='p-4'>
                                            <a href='#'>
                                                <i class='fa fa-facebook'></i>
                                            </a>
                                        </div>
                                        <div class='p-4'>
                                            <a href='#'>
                                                <i class='fa fa-twitter'></i>
                                            </a>
                                        </div>
                                        <div class='p-4'>
                                            <a href='#'>
                                                <i class='fa fa-instagram'></i>
                                            </a>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>";    

        }
        ?>
</div>
    
</body>
</html>