<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/detalle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <audio src="../assets/audio/win.wav" id="song" autoplay></audio>
    <style>
        .doglaughing1 {
            width: 300px;
            height: auto;
            position: absolute;
            bottom: -130px;
            /* Ajusta según tu necesidad */
            right: 100px;
            /* Ajusta según tu necesidad */
            z-index: 10;
            /* Asegúrate de que esté por encima del carrusel */
            animation: arrima 3s infinite linear;
        }
        @keyframes arrima {
            0%{
                bottom: -130px;
            }
            100%{
                transform: translateY(-130px);
            }
        }
    </style>
    <img src="../assets/img/dog/doglaughing1.svg" class="doglaughing1" id="myImage" alt="">

    <div id="carouselExampleCaptions" class="carousel slide">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="./quien_es.php"><img class="img-carousel" src="../assets/img/carousel/2.jpg"  alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Quien es</h5>
                    <p>Esto es una sección de quien es Kevin para mí.</p>
                </div>
            </div>
            <div class="carousel-item">
                <a href="./apodo.php"><img class="img-carousel" src="../assets/img/carousel/3.jpg"  alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Apodo</h5>
                    <p>Unas cuantas razones del porqué sus apodos y su valor para mí.</p>
                </div>
            </div>
            <div class="carousel-item">
                <a href="./aceptacion.php"><img class="img-carousel" src="../assets/img/carousel/4.jpg"  alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Aceptación</h5>
                    <p>Un espacio para hacer entender cosas malucas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <a href="./carta.php"><img class="img-carousel" src="../assets/img/carousel/1.jpg" alt="..."></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Carta</h5>
                    <p>Esta carta se podra abrir en <span id="countdown"></span></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="../assets/js/simplyCountdown.min.js.js"></script>
    <script src="../assets/js/countdown.js"></script>
    <script src="../assets/js/detalle.js"></script>
</body>

</html>