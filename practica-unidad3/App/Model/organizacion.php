<?php 
namespace App\Model;

use App\Model\Model;
class Organizacion extends Model
{
    function __construct($con)
    {
        parent::__construct($con);
        $this->table="organizacion";

    }
}
?>