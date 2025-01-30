<?php namespace App\Controller;

use App\Utils\Utils;
use App\Model\Model;
use App\Model\Miembro;
use App\Model\Unidad;
use PDO;

class MiembroController
{
    public function cargarLogin() {
        Utils::render('login');
    }

    public function login(){
        session_start();
        $con = Utils::getConnection();

        $nombre = $_POST['nombre'];
        $contrasenia = $_POST['contrasenia'];
        $stmt = $con->prepare("SELECT idmiembro, contrasenia FROM miembro WHERE nombre = :nombre");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->execute();
        $miembro = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($miembro && password_verify($contrasenia, $miembro['contrasenia'])) {
            $_SESSION['user_id'] = $miembro['idmiembro'];
            Utils::redirect('/listaOrganizaciones/1');
            exit;
        } else {
            $error = "Credenciales incorrectas";
            Utils::render('login', compact('error'));
        }
        
    }

    public function cargarRegistro()
    {
        $con = Utils::getConnection();
        $unidadM = new Unidad($con);
        $unidades = $unidadM->cargarIds("organizacion");

        $datos = compact("unidades");

        Utils::render('registro', $datos);
    }

    public function registro() {
        $miembro=$_POST;
        $miembro["contrasenia"] = password_hash($miembro["contrasenia"], PASSWORD_DEFAULT);
        $con = Utils::getConnection();
        //Creamos el modelo
        $miembroM = new Miembro($con);
        //Cargamos los entrenadores
        $miembro = $miembroM->insertar($miembro);

        Utils::redirect('/');
    }

}
?>