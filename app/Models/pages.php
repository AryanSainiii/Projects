<?php

namespace App\Models;

use CodeIgniter\Model;

class Pages extends Model{
    protected $table='pages';
    protected $primaryKey='id';
    protected $allowedFields=['page_name','menu_name','page_type','menu_id','description'];

    public function getData()
    {
        $this->join('menus','menus.id = pages.menu_id','INNER');

         $this->select('menus.menu_name');

          $this->select('pages.*');
        return $this->orderBy('id','DESC')->findAll();
    }
    public function pageConnectWithValue($id){
         $result = $this->where(['pages.id' => $id])->first();
        return $result;
    }
}
?>