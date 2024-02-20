<?php

namespace App\Models;

use CodeIgniter\Model;

class Cart extends Model{
    protected $table='cart_2';
    protected $primaryKey='id';
    protected $allowedFields=['id','user_id','session_id','product_name','price','quantity','total','tax','product_id','product_image'];
    public function getData($session_id)
    {
        $result = $this->where(['cart_2.session_id' => $session_id])->findAll();
        return $result;
        return $this->findAll();
    }
    public function get_rows($session_id)
    {
        $result = $this->where(['cart_2.session_id' => $session_id])->findAll();
        $rowcount = count($result);
        return $rowcount;
    }
}
?>