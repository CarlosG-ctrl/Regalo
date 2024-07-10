function doglaugh() {
    let images = ['../img/dog/doglaughing1.svg', '../img/dog/doglaughing1.svg'];
    let audios = ['./doglaugh.wav']; // nombres de los archivos de audio

    // Función para cambiar la imagen y programar el siguiente cambio
    function changeImage(index) {
        // Obtener el elemento de imagen
        let imgElement = document.getElementById('myImage');
        // Cambiar la fuente de la imagen
        imgElement.src = images[index];

        // Calcular el índice de la próxima imagen
        let nextIndex = (index + 1) % images.length;

        // Llamar a la función de cambio de imagen después de 1 segundo
        setTimeout(function () {
            changeImage(nextIndex);

        }, 200); // 1000 milisegundos = 1 segundo
    }

    // Llamar a la función de cambio de imagen 10 veces, comenzando desde el índice 0
    for (let i = 0; i < 11; i++) {
        setTimeout(function () {
            changeImage(0); // Comenzar con la primera imagen (índice 0)
        }, i); // 2000 milisegundos = 2 segundos (para un ciclo completo de img1 e img2)
    }
}
window.addEventListener('load', function () {
    let song = document.getElementById('song');

    song.addEventListener('ended', doglaugh)
})