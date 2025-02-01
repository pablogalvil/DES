<!DOCTYPE html>
<html lang="en">
    <?php 
    use App\utils\Utils;
    include 'auth.php';
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Organizaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color:rgb(137, 255, 235);
        }
        .navbar .nav-link {
            color:rgb(0, 0, 0);
            margin-right: 15px;
        }
        .navbar .nav-link:hover {
            color: rgb(255, 252.4647887324, 215);
        }
        .navbar .navbar-brand {
            font-weight: bold;
            color:rgb(0, 0, 0);
        }
        .navbar .navbar-brand:hover {
            color: rgb(255, 252.4647887324, 215);
        }
        .margen{
            margin-top: 60px;
        }
        a{
            margin-left: 10px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".load-organization").click(function(event) {
            event.preventDefault();  // Evita que el enlace haga una recarga de la página

            var orgId = $(this).data("id");  // Obtiene el ID de la organización
            var url = "/organizaciones/" + orgId;  // Construye la URL para la petición

            $.ajax({
                url: "/organizaciones/" + orgId,
                type: "GET",
                headers: { "X-Requested-With": "XMLHttpRequest" },
                success: function(response) {
                    $("#organization-content").html(response);
                },
                error: function(xhr) {
                    if (xhr.status === 401) { 
                        // Si la sesión expiró, recargar la página para redirigir al login
                        alert("Tu sesión ha expirado. Serás redirigido al login.");
                        window.location.href = "/";
                    } else {
                        $("#organization-content").html("<p>Error al cargar la organización.</p>");
                    }
                }
            });
        });
    });
    </script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Organizaciones</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/unidades">Unidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/locales">Locales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rivalidades">Rivalidades</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h1 class="margen text-center">Lista de Organizaciones</h1>
        <a href="/organizaciones/crear" class="btn btn-success mb-3">Agregar Nueva Organizacion</a>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Numero de Rivales</th>
                    <th>Pais</th>
                    <th>Territorio</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($organizaciones as $organizacion): ?>
                <tr>
                    <td><?= $organizacion['idorganizacion'] ?></td>
                    <td><a href="/organizaciones/<?= $organizacion['idorganizacion'] ?>" class="btn btn-link btn-sm load-organization" data-id="<?= $organizacion['idorganizacion'] ?>"><?= $organizacion['nombre'] ?></a></td>
                    <td><?= $organizacion['numrivales'] ?></td>
                    <td><?= $organizacion['pais'] ?></td>
                    <td><?= $organizacion['territorio']?></td>
                    <td>
                        <a href="/organizaciones/<?= $organizacion['idorganizacion'] ?>/modificar" class="btn btn-warning btn-sm">Editar</a>
                        <a href="/organizaciones/<?= $organizacion['idorganizacion'] ?>/eliminar" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <?php 
        if($pagina > 1){
            echo "<a href='/listaOrganizaciones/".($pagina-1)."' class='btn btn-dark btn-sm'>Anterior</a>";
        }

        for($i = 1; $i <= $totalPaginas; $i++){
            if($i == $pagina){
                echo "<a href='/listaOrganizaciones/$i' class='btn btn-success btn-sm'>$i</a>";
            } else {
                echo "<a href='/listaOrganizaciones/$i' class='btn btn-link btn-sm'>$i</a>";
            }
        }
        
        if($pagina < $totalPaginas){
            echo "<a href='/listaOrganizaciones/".($pagina+1)."' class='btn btn-dark btn-sm'>Siguiente</a>";
        }
        ?>
        <br>
        <div id="organization-content">
            <!-- Aquí se cargará el contenido de la organización -->
        </div>
        <a href='/logout' class='btn btn-danger btn-sm'>Cerrar sesión</a>
    </div>
</body>
</html>