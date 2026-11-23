function controlcookies() {
    // Guardamos en localStorage que las cookies han sido aceptadas
    localStorage.setItem('controlcookie', '1');
    
    // Ocultamos el banner de cookies
    const cookieBanner = document.getElementById('cookie1');
    if (cookieBanner) {
        cookieBanner.style.display = 'none';
    }
}

// Comprobar al cargar la página si ya se aceptaron las cookies
document.addEventListener("DOMContentLoaded", function() {
    if (localStorage.getItem('controlcookie')) {
        const cookieBanner = document.getElementById('cookie1');
        if (cookieBanner) {
            cookieBanner.style.display = 'none';
        }
    }
});