// Simulación de verificación de recomendaciones
let hasRecommendations = false; // Cambia esto a true si hay recomendaciones disponibles

if (hasRecommendations) {
    document.getElementById('no-recommendations').style.display = 'none'; // Oculta la tarjeta de no recomendaciones
    document.getElementById('recommendations-container').style.display = 'block'; // Muestra las recomendaciones
} else {
    document.getElementById('no-recommendations').style.display = 'block'; // Muestra la tarjeta de no recomendaciones
    document.getElementById('recommendations-container').style.display = 'none'; // Oculta las recomendaciones
}