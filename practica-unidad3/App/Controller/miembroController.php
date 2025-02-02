<?php namespace App\Controller;

use App\Utils\Utils;
use App\Model\Model;
use App\Model\Miembro;
use App\Model\Unidad;
use PDO;

class MiembroController
{
    /**
     * Funcion que carga el formulario de login
     * @return void (carga la vista)
     */
    public function cargarLogin() {
        Utils::render('login');
    }

    /**
     * Funcion que verifica que el usuario exista y si es correcto lo redirige a la pagina de organizaciones
     * @return void
     */
    public function login(){
        //Iniciamos la sesion
        session_start();
        //Nos conectamos a la bd
        $con = Utils::getConnection();

        //Guardamos los datos del formulario de login
        $correo = $_POST['correo'];
        $contrasenia = $_POST['contrasenia'];

        //Creamos el modelo y llamamos a la funcion para cargar el id y la contraseña del miembro
        $miembroM = new Miembro($con);
        $miembro = $miembroM->cargarMiembro($con, $correo);

        if ($miembro['validado'] == 0) { 
            $error = "Debes validar tu cuenta. Revisa tu correo.";
            Utils::render('login', compact('error'));
            return;
        }else{
            //Comprobamos si el miembro existe y si la contraseña es correcta
            if ($miembro && password_verify($contrasenia, $miembro['contrasenia'])) {
                //Guardamos el id del miembro en la sesion
                $_SESSION['user_id'] = $miembro['idmiembro'];
                //Redirigimos a la pagina de organizaciones
                Utils::redirect('/listaOrganizaciones/1');
                exit;
            } else {
                //Si no existe o la contraseña es incorrecta mostramos un error y recargamos la vista
                $error = "Credenciales incorrectas";
                Utils::render('login', compact('error'));
            }
        }
        
    }

    /**
     * Funcion que carga el formulario de registro
     * @return void (carga la vista)
     */
    public function cargarRegistro()
    {
        //Nos conectamos a la bd
        $con = Utils::getConnection();

        //Creamos el modelo y llamamos a la funcion para cargar los ids de las unidades
        $unidadM = new Unidad($con);
        $unidades = $unidadM->cargarIds("organizacion");

        //Compactamos los datos que necesita la vista para luego pasarselos
        $datos = compact("unidades");

        //Cargamos la vista con los datos
        Utils::render('registro', $datos);
    }

    /**
     * Funcion que recibe los datos del formulario de registro y los inserta en la bd
     * @return void
     */
    public function registro() {
        //Nos conectamos a la bd
        $con = Utils::getConnection();

        //Creamos el modelo
        $miembroM = new Miembro($con);

        //Guardamos los datos del formulario
        $miembro=$_POST;

        //Miramos si el email es valido
        if ($miembroM->buscarEmail($con, $miembro["correo"])) {
            $error = "El correo ya esta registrado";
            Utils::render('registro', compact('error'));
            exit;
        }

        //Encriptamos la contraseña
        $miembro["contrasenia"] = password_hash($miembro["contrasenia"], PASSWORD_DEFAULT);

        // Generamos un código único de validación
        $miembro["codigovalidacion"] = bin2hex(random_bytes(16));
        
        // Inicializamos el usuario como no validado
        $miembro["validado"] = 0;

        // Enviar el correo de validación
        $miembroM->enviarCorreoValidacion($miembro["correo"], $miembro["codigovalidacion"]);

        //Insertamos el miembro
        $miembro = $miembroM->insertar($miembro);

        //Redirigimos a la pagina de validar
        Utils::redirect('/validar');
    }

    function validar() {
        Utils::render('validar');
    }

    function validate() {
        $con = Utils::getConnection();

        $codigo = $_GET["codigo"];
        
        $miembrosM = new Miembro($con);
        $existe = $miembrosM->buscarCodigo($con, $codigo);

        if($existe) {
            $miembroM = new Miembro($con);
            $miembroM->validarMiembro($con, $codigo);
            $exito = "Cuenta validada con exito";
            Utils::render('login', compact('exito'));
        } else {
            $error = "Error al validar";
            Utils::render('registro', $error);
        }
    }

    /**
     * Funcion que cierra la sesion
     * @return void (Redirige al login)
     */
    public function logout() {
        //Iniciamos la sesion
        session_start();
        //Destruimos la sesion
        session_unset();
        session_destroy();
        //Redirigimos al login
        Utils::redirect('/');
        exit;
    }

}
?>