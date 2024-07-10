<?php

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
session_start();
$_SESSION['usuario'] = $usuario;

include('../../conexion.php');

$consulta = "SELECT * FROM user where nombre='$usuario' and clave='$clave' ";
$resultado = mysqli_query(conectar(), $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location:../../pages/detalle.php");
} else {
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const audio = new Audio('../audio/doglaugh.wav');
    const botonReproducir = document.getElementById('submit');

    botonReproducir.addEventListener('click', function() {
        if (audio.paused) {
            audio.play();
            botonReproducir.textContent = 'Pausar Audio';
        } else {
            audio.pause();
            botonReproducir.textContent = 'Reproducir Audio';
        }
    });
});
</script>
    <?php
    
    header("Location: ../../index.php");
    
    ?>

<?php
}

mysqli_free_result($resultado);
mysqli_close(conectar())
?>