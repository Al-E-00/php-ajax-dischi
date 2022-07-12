<?php 
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous'/>
    <style>
        <?php
        include 'css/index.css';
        include 'css/the_header.css';
        include 'css/main.css';
        ?>
    </style>
</head>
<body>
    <div class="container-fluid full-body-dimension">
        <div class="row">
            <div class="col">
                <?php include 'sections/the_header.php' ?>
            </div>
        </div>
        <div class="container custom-container">
            <div class="row row-cols-5">
                <div class="col main-section">
                    <?php include 'sections/main.php' ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>