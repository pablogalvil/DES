<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario basico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-lg">
        <!-- Para enviar los datos de un formulario hay que definir el modo de envio, get mete las variables
        En la url, post las lleva invisibles, con action marcamos la pagina destino de los datos-->
        <form method="get" action="respuesta_simple.php">
            <div class="mb-3 mt-4 col-sm-5">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="Ayuda de email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 col-sm-5">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="chkRecuerdame">
                <label class="form-check-label" for="chkRecuerdame">Recuerdame</label>
            </div>
            <div class="mb-3 col-sm-2">
                <label class="form-check-label" for="edad">Edad</label>
                <select class="form-select" aria-label="Default select example" id="edad" name="edad">
                    <option selected>Open this select menu</option>
                    <?php
                    //Realizo un bucle en php que vaya la i desde 1 a 120
                    //En cada repetición eescribira un value para  rellenar
                    //las edades del select
                    for ($i = 1; $i <= 120; $i++) {
                        print "<option value=$i>$i</option>\n"; //Ponemos \n para que no quede uno detrás de otro al ver el código fuente de la página.
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-check-label" for="sexo">Sexo : </label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="masculino">
                    <label class="form-check-label" for="masculino">
                        Masculino
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sexo" id="femenino">
                    <label class="form-check-label" for="femenino">
                        Femenino
                    </label>
                </div>
            </div>
            <div class="mb-3 col-sm-5">
                <label for="imagen" class="form-label">Imagen de perfil</label>
                <input class="form-control" type="file" id="imagen" name="imagen">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color de fondo</label>
                <input type="color" class="form-control form-control-color" id="color" name="color" value="#99cc99" title="Choose your color">
            </div>
            <div class="mb-3 col-sm-6">
                <label for="txtObervaciones" class="form-label">Observaciones</label>
                <textarea class="form-control" id="txtObervaciones" name="txtObervaciones" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>