<?php
session_start();
$user = $_SESSION['user']; // Obtener los datos del usuario de la sesión
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>MentorHub!</title>
  <link rel="icon" href="/asssets/images/logo.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/asssets/css/styleSidebar.css">
</head>

<body>
  <nav class="sidebar">
    <div class="sidebar-top-wrapper">
      <div class="sidebar-top">
        <a href="#" class="logo__wrapper">
          <img src="/asssets/images/logo.png" alt="Logo" class="logo-small">
          <span class="hide">
            MentorHub!
          </span>
        </a>
      </div>
      <div class="expand-btn">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.00979 2.72L10.3565 7.06667C10.8698 7.58 10.8698 8.42 10.3565 8.93333L6.00979 13.28"
            stroke="#4A516D" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>
    </div>

    <div class="sidebar-links">
      <h2 class="sidebar-title">Principal</h2>
      <ul>
        <li>
          <a href="#home" title="Home" class="tooltip" id="home-link">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home" width="24" height="24"
              viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
              stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
              <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
              <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
            </svg>
            <span class="link hide">Inicio</span>
            <span class="tooltip__content">Inicio</span>
          </a>
        </li>
        <li>
          <a href="#mydata" title="mydata" class="tooltip" id="load-dataform">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
              </svg>
              <span class="link hide">Mis Datos</span>
              <span class="tooltip__content">Mis Datos</span>
          </a>
        </li>
        <li>
          <a href="#recommendations" title="Recommendations" class="tooltip" id="load-recommendations">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
            <rect x="2" y="2" width="12" height="12" fill="none" stroke="#4A516D" stroke-width="1.5"/>
                <polyline points="5,8 7,10 11,6" fill="none" stroke="#4A516D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="link hide">Recomendaciones</span>
            <span class="tooltip__content">Recomendaciones</span>
          </a>
        </li>
        <li>
          <a href="#report" title="Report" class="tooltip" id="load-reports">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
              <rect x="2" y="2" width="12" height="12" fill="none" stroke="#4A516D" stroke-width="1.5"/>
              <line x1="4" y1="5" x2="10" y2="5" stroke="#4A516D" stroke-width="1.5" />
              <line x1="4" y1="8" x2="10" y2="8" stroke="#4A516D" stroke-width="1.5" />
              <line x1="4" y1="11" x2="10" y2="11" stroke="#4A516D" stroke-width="1.5" />
            </svg>
            <span class="link hide">Informes</span>
            <span class="tooltip__content">Informes</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidebar-links">
      <h2 class="sidebar-title">Comunicación</h2>
      <ul>
        <li>
          <a href="#schedule" title="schedule" class="tooltip">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
              <path d="M4 13h3l3 3h4l3 -3h3"></path>
            </svg>
            <span class="link hide">Agendas</span>
            <span class="tooltip__content">Agendas</span>
          </a>
        </li>
        <li>
          <a href="#mentors" title="Mentores" class="tooltip" id="load-mentors">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24"
                  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                  stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                  <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                  <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
              </svg>
              <span class="link hide">Mentores</span>
              <span class="tooltip__content">Mentores</span>
          </a>
        </li>
        <li>
            <a href="#consultation" title="Consultation" class="tooltip">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                <circle cx="8" cy="6" r="4" fill="none" stroke="#4A516D" stroke-width="1.5" />
                <path d="M4 10H12" stroke="#4A516D" stroke-width="1.5" />
                <path d="M4 12H8" stroke="#4A516D" stroke-width="1.5" />
              </svg>
              <span class="link hide">Consultas</span>
              <span class="tooltip__content">Consultas</span>
            </a>
          </li>
      </ul>
    </div>

    <div class="sidebar-links bottom-links">
      <ul>
        <li>
          <a href="#settings" title="Settings" class="tooltip">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path
                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
              </path>
              <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
            </svg>
            <span class="link hide">Configuración</span>
            <span class="tooltip__content">Configuración</span>
          </a>
        </li>
        <li>
          <a href="#help" title="Help" class="tooltip">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
              stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
              <path d="M12 16v.01"></path>
              <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483"></path>
            </svg>
            <span class="link hide">Ayuda</span>
            <span class="tooltip__content">Ayuda</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="divider"></div>
    <div class="sidebar__profile">
      <div class="avatar__wrapper">
        <img class="avatar" src="/asssets/images/profile.jpg" alt="Profile Picture">
        <div class="online__status"></div>
      </div>
      <section class="avatar__name hide">
        <div class="user-name"><?php echo $user['email']; ?></div>
        <div class="email"><?php echo $user['email']; ?></div>
      </section>
      <a href="/php/logout.php" class="logout">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout" width="24" height="24"
          viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
          stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2"></path>
          <path d="M9 12h12l-3 -3"></path>
          <path d="M18 15l3 -3"></path>
        </svg>
      </a>
    </div>
    </div>
  </nav>

  <main id="main-content" class="content">
    <!-- Aquí se cargará dinámicamente el contenido-->
  </main>

  <script src="/asssets/js/sidebar.js"></script>
</body>
</html>