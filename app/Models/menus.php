<?php

namespace App\Models;

use CodeIgniter\Model;

class Menus extends Model{
    protected $table='menus';
    protected $primaryKey='id';
    protected $allowedFields=['menu_name'];

    public function getData()
    {
        return $this->findAll();
    }
}
?>