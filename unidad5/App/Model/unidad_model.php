<?php 
namespace App\Model;

use App\Model\Model;
class Unidad extends Model
{
    function __construct($con)
    {
        parent::__construct($con);
        $this->table="unidad";

    }
}

?>