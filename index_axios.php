<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Axios call -> Vue use</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0-beta1/css/bootstrap.min.css' integrity='sha512-o/MhoRPVLExxZjCFVBsm17Pkztkzmh7Dp8k7/3JrtNCHh0AQ489kwpfA3dPSHzKDe8YCuEhxXq3Y71eb/o6amg==' crossorigin='anonymous' />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <style>
        <?php
        include 'css/index.css';
        include 'css/the_header.css';
        include 'css/main.css';
        ?>
    </style>
</head>

<body>
    <div id="app">
        <div class="container-fluid full-body-dimension">
            <div class="row">
                <div class="col">
                    <?php include 'sections/the_header.php' ?>
                </div>
            </div>
            <div class="container custom-container">
                <div class="row row-cols-5">
                    <div class="col main-section">
                        <div v-for="album in albums" class="col main-section">
                            <div class="card-container-custom">
                                <div class="card-img-container">
                                    <img :src="album.poster" :alt="album.title">
                                </div>
                                <div class="card-body-custom">
                                    <h5 class="card-title-custom">{{album.title}} </h5>
                                    <p class="card-custom-text author"> {{album.author}} </p>
                                    <p class="card-custom-text year">{{album.year}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vue_sections/vuejs.js"></script>
</body>

</html>