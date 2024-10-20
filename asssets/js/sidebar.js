const expand_btn = document.querySelector(".expand-btn");

let activeIndex;

expand_btn.addEventListener("click", () => {
  document.body.classList.toggle("collapsed");
});

// Función para cargar el contenido del home
function loadHomeContent() {
  const xhr = new XMLHttpRequest();
  xhr.open('GET', 'home.html', true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById('main-content').innerHTML = xhr.responseText;
    }
  };
  xhr.send();
}

// Agregar el evento de clic al cargar la página
window.onload = function() {
  loadHomeContent(); // Cargar contenido inicial
  const homeLink = document.querySelector('a[href="#home"]');
  if (homeLink) {
    homeLink.addEventListener('click', function(e) {
      e.preventDefault(); // Evitar el comportamiento predeterminado del enlace
      loadHomeContent(); // Cargar contenido de home
    });
  }
};