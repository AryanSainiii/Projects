<?php

namespace App\Models;

use CodeIgniter\Model;

class Users extends Model{
    protected $table='user_data';
    protected $primaryKey='id';
    protected $allowedFields=['first_name','last_name','email','password'];

    public function getData()
    {
        return $this->findAll();
    }
}
?>