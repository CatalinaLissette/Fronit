document.addEventListener("DOMContentLoaded", function() {
    const dynamicText = document.querySelector('.dynamic-text');
    let isLibre = true;

    setInterval(function() {
        if (window.innerWidth <= 576) {
            // Para móviles, reducir el tamaño de la fuente en 1rem (16px)
            dynamicText.style.fontSize = isLibre ? "40px" : "38px"; // Ajuste dinámico entre 48px y 32px
        } else {
            // Para tabletas y pantallas más grandes
            dynamicText.style.fontSize = isLibre ? "80px" : "64px"; // Ajuste dinámico entre 80px y 64px
        }

        if (isLibre) {
            dynamicText.style.fontFamily = "'Great Vibes', cursive";
            dynamicText.style.letterSpacing = "10px";
        } else {
            dynamicText.style.fontFamily = "'Libre Baskerville', serif";
            dynamicText.style.letterSpacing = "3px";
        }
        isLibre = !isLibre;
    }, 1000); // Cambiar cada 1 segundo
});
