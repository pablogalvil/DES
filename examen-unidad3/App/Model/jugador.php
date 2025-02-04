<?php 
namespace App\Model;

use App\Model\Model;
class Jugador extends Model
{
    function __construct($con)
    {
        parent::__construct($con);
        $this->table="jugador";

    }
}


?>