<?php
 include "config.php";
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Data Mahasiswa</title>
</head>
<body>

<div class="container my-3 py-5 text-center">    
    <div class="row mb-5">
        <div class="col">
        <?php
            $sql = mysqli_query($mysqli,"SELECT * from `mahasiswa`");

            while($hasil = mysqli_fetch_array($sql)){
            echo "
            <div class='row'>
                <div class='col-lg-3 col-md-6'>
                    <div class='card'>
                        <div class='card-body'>
                                <img class='img-fluid rounded-circle w-50 m-1' src='img_avatar1.png' alt='' style='margin: auto; display: block'>
                                    <h3 class='card-title'>$hasil[nama_mh]</h3>
                                    <p class='card-text m-1'>$hasil[nim] </p>
                                    <p class='card-text m-1'>$hasil[no_tlp] </p>
                                    <p class='card-text m-1'>$hasil[email] </p>
                            <div class='d-flex flex-row justify-content-center'>
                                <div class='p-4'>
                                    
                                </div>
                            </div>                
                        </div>
                    </div>
                </div>
            </div>";    

        }
        ?>
        </div>
    </div>
</div>
    
</body>
</html>