const expand_btn = document.querySelector(".expand-btn");
const mainContent = document.getElementById("main-content"); // Asegúrate de que este sea el id correcto

expand_btn.addEventListener("click", () => {
  document.body.classList.toggle("collapsed");
  
  // Alternar la clase de atenuación en el contenido
  if (!document.body.classList.contains("collapsed")) {
    mainContent.classList.add("attenuate"); // Añadir atenuación si se despliega
  } else {
    mainContent.classList.remove("attenuate"); // Quitar atenuación si se colapsa
  }
});

// Función para cargar home.html al cargar index.html
window.addEventListener('DOMContentLoaded', function() {
  // Cargar el contenido de home.html al cargar la página
  fetch('home.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('main-content').innerHTML = data;
    })
    .catch(error => console.error('Error al cargar home.html:', error));
});

// Evento para el enlace de Home (si necesitas recargar el contenido al hacer clic en Home)
document.getElementById('home-link').addEventListener('click', function(event) {
  event.preventDefault(); // Evitar que el enlace recargue la página
  
  // Cargar el contenido de home.html en el div con id "main-content"
  fetch('home.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('main-content').innerHTML = data;
    })
    .catch(error => console.error('Error al cargar home.html:', error));
});

// Evento para el enlace de Home
document.getElementById('home-link').addEventListener('click', function(event) {
  event.preventDefault(); // Evitar que el enlace recargue la página
  
  // Cargar el contenido de home.html en el div con id "main-content"
  fetch('home.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('main-content').innerHTML = data;
    })
    .catch(error => console.error('Error al cargar home.html:', error));
});

// Evento para el enlace de datForm
document.getElementById('load-dataform').addEventListener('click', function(event) {
  event.preventDefault(); // Evitar que el enlace recargue la página
  
  // Cargar el contenido de dataForm.html en el div con id "main-content"
  fetch('dataForm.html')
      .then(response => response.text())
      .then(data => {
          document.getElementById('main-content').innerHTML = data;
      })
      .catch(error => console.error('Error al cargar dataForm:', error));
});

// Evento para el enlace de Recommendations
document.getElementById('load-recommendations').addEventListener('click', function(event) {
  event.preventDefault(); // Evitar que el enlace recargue la página

  // Cargar el contenido de recommendations.html en el div con id "main-content"
  fetch('recommendations.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('main-content').innerHTML = data;
    })
    .catch(error => console.error('Error al cargar recommendations:', error));
});

// Evento para el enlace de Reports
document.getElementById('load-reports').addEventListener('click', function(event) {
  event.preventDefault(); // Evitar que el enlace recargue la página

  // Cargar el contenido de reports.html en el div con id "main-content"
  fetch('reports.html')
    .then(response => response.text())
    .then(data => {
      document.getElementById('main-content').innerHTML = data;
    })
    .catch(error => console.error('Error al cargar reports:', error));
});

// Evento para el enlace de load-mentors
document.getElementById('load-mentors').addEventListener('click', function(event) {
  event.preventDefault(); // Evitar que el enlace recargue la página

  // Cargar el contenido de mentors.html en el div con id "main-content"
  fetch('mentors.html')
      .then(response => response.text())
      .then(data => {
          document.getElementById('main-content').innerHTML = data;
      })
      .catch(error => console.error('Error al cargar mentors:', error));
});


