<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/carta.css">
    <link rel="stylesheet" href="../components/return/return.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    include "../components/return/return.php";
    
    ?>
    <main>
        <div class="container-letter">
            <div class="cover"></div>
            <span class="heart">🥳</span>
            <p class="paper" id="mainMessage">
                ¡HOY ES UN GRAN DÍA!<br>Donde culmina tu etapa joven, pero comienza una nueva etapa llena de nuevos fracasos para llegar a tus metas exitosas, una nueva etapa llamada la vejez prematura.
            </p>
            <div class="letter"></div>
        </div>
        <div class="options">
            <!-- Button trigger modal -->
            <button type="button" id="open" data-bs-target="#staticBackdrop">Abrir</button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Feliz Cumpleaños</h1>
                        </div>
                        <div class="modal-body">
                            <p>¡HOY ES UN GRAN DÍA!<br>Donde culmina tu etapa joven, pero comienza una nueva etapa llena de nuevos fracasos para llegar a tus metas exitosas, una nueva etapa llamada la vejez prematura.<br>¡¡¡FELIZ CUMPLEAÑOS WIRI EL PERRO MALICIOSO!!!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-bs-dismiss="modal" id="close">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="burbujas">
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
            <div class="burbuja"></div>
        </div>
    </main>
    <script src="../assets/js/carta.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>