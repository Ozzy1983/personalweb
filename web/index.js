document.addEventListener("DOMContentLoaded", function () {
    const elementos = document.querySelectorAll(".hidden");

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show"); // Agrega la clase 'show' cuando aparece en pantalla
                observer.unobserve(entry.target); // Deja de observar el elemento después de aparecer
            }
        });
    }, {
        threshold: 0.2 // Se activará cuando el 20% del elemento sea visible
    });

    elementos.forEach(elemento => observer.observe(elemento));
});
