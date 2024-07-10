<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/apodo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="contenedor">
        <?php
        include "../components/return/return.php"
        ?>
        <section class="contenido">
            <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <video autoplay loop class="video-carousel d-block w-100">
                            <source src="../assets/video/video.mp4" type="video/mp4">
                        </video>
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item">
                        <video autoplay loop class="video-carousel d-block w-100">
                            <source src="../assets/video/video.mp4" type="video/mp4">
                        </video>
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item">
                        <video autoplay loop class="video-carousel d-block w-100">
                            <source src="../assets/video/video.mp4" type="video/mp4">
                        </video>
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                    <div class="carousel-item">
                        <video autoplay loop class="video-carousel d-block w-100">
                            <source src="../assets/video/video.mp4" type="video/mp4">
                        </video>
                        <div class="carousel-caption d-none d-md-block"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="galeria">
            <div class="galeria_contenedor">
                <h1><b>Creatividad a su maximo resplendor</b></h1>
                <div class="links-video active" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">
                    <h5>Doris</h5>
                    <p>Esta carta se podra abrir en</p>
                </div>
                <div class="links-video " data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 1">
                    <h5>Whezzy</h5>
                    <p>Esta carta se podra abrir en</p>
                </div>
                <div class="links-video " data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 2">
                    <h5>Whezzy</h5>
                    <p>Esta carta se podra abrir en</p>
                </div>
                <div class="links-video " data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3">
                    <h5>Whezzy</h5>
                    <p>Esta carta se podra abrir en</p>
                </div>
                
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/185c8297e9.js" crossorigin="anonymous"></script>
</body>

</html>