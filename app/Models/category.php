<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model{
    protected $table='categories';
    protected $primaryKey='id';
    protected $allowedFields=['image','name','parent_id','tax'];

    public function getData()
    {
        return $this->findAll();
    }
    public function sub_category($id)
    {
        $result = $this->where(['categories.parent_id' => $id])->findAll();
        return $result;
    }
    public function sub_category_parent($parent_id)
    {
        $result = $this->where(['categories.parent_id' => $parent_id])->findAll();
        return $result;
    }
}
?>