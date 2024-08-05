document.addEventListener("DOMContentLoaded", () => {
    const thumbnails = document.querySelectorAll(".thumbnail");
    const mainImage = document.getElementById("main-image");
    const zoomResult = document.getElementById("zoom-result");

    thumbnails.forEach(thumbnail => {
        thumbnail.addEventListener("click", () => {
            // Cambia la imagen principal a la URL de la miniatura clickeada
            mainImage.src = thumbnail.dataset.full;

            // Actualiza el fondo del zoom result con la imagen seleccionada
            zoomResult.style.backgroundImage = `url(${thumbnail.dataset.full})`;

            // Remueve la clase 'selected' de todas las miniaturas y añade a la seleccionada
            thumbnails.forEach(thumb => thumb.classList.remove("selected"));
            thumbnail.classList.add("selected");
        });
    });

    mainImage.addEventListener("mousemove", function(e) {
        const rect = mainImage.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const xPercent = (x / mainImage.width) * 100;
        const yPercent = (y / mainImage.height) * 100;

        zoomResult.style.display = "block";
        zoomResult.style.backgroundPosition = `${xPercent}% ${yPercent}%`;
        zoomResult.style.backgroundSize = `${mainImage.width * 2}px ${mainImage.height * 2}px`;
    });

    mainImage.addEventListener("mouseleave", function() {
        zoomResult.style.display = "none";
    });
});
