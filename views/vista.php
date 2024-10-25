<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Panel De Admin</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Panel</h1>
        </div>
        <ul>
            <li><span>Dashboard</span></li>
            <li><span>Estudiantes</span></li>
            <li><span>Profesores</span></li>
            <li><span>Universidades</span></li>
            <li><span>Recomendaciones</span></li> <!-- Corregido de "Notas" a "Recomendaciones" -->
            <li><span>Ayuda</span></li>
            <li><span>Configuraciones</span></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Buscar..">
                    <button type="submit"><img src="imagen/search.png" alt="Buscar"></button>
                </div>
                <div class="user">
                    <a href="agregar.php" class="btn">Agregar</a>
                    <img src="imagen/notifications.png" alt="Notificaciones">
                    <div class="img-case">
                        <img src="imagen/user.png" alt="Usuario">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Estudiantes</h3>
                    </div>
                    <div class="icon-case">
                        <img src="imagen/students.png" alt="Ícono Estudiantes" style="height: 70px;">
                    </div>
                </div>
                
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Universidades</h3>
                    </div>
                    <div class="icon-case">
                        <img src="imagen/school.png" alt="Ícono Universidades" style="height: 70px;">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>35</h1>
                        <h3>Recomendaciones</h3> 
                    </div>
                    <div class="icon-case">
                        <img src="imagen/recomendaciones.png" alt="Ícono Recomendaciones" style="height: 70px;">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Estudiantes y Recomendaciones</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Nombres</th>
                            <th>Universidades</th>
                            <th>Recomendaciones</th>
                            <th>Opciones</th>
                        </tr>
                        
                        <?php
                        include('conexion.php');

                        try {
                            // Modificar la consulta para obtener el ID del estudiante
                            $stmt = $conn->prepare("
                                SELECT e.id, e.nombre, e.universidad, r.recomendacion 
                                FROM estudiantes e 
                                LEFT JOIN recomendaciones r ON e.id = r.estudiante_id
                            ");
                            $stmt->execute();
                            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            
                            foreach ($result as $row) {
                                echo "<tr>
                                        <td>" . htmlspecialchars($row['nombre']) . "</td>
                                        <td>" . htmlspecialchars($row['universidad']) . "</td>
                                        <td>" . htmlspecialchars($row['recomendacion']) . "</td>
                                        <td><a href='editar.php?id=" . htmlspecialchars($row['id']) . "' class='btn'>Editar</a></td>
                                      </tr>";
                            }
                        } catch (PDOException $e) {
                            echo "Error al obtener los datos: " . htmlspecialchars($e->getMessage());
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
