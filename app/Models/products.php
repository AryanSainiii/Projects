<?php

namespace App\Models;

use CodeIgniter\Model;

class Products extends Model{
    protected $table='product';
    protected $primaryKey='id';
    protected $allowedFields=['product_name','price','quantity','description','image'];

    public function getData()
    {
        return $this->findAll();
    }
    public function product_byid($id)
    {
        $result = $this->where(['product.category' => $id])->findAll();
        return $result;
    }
    public function product_bysub_cat($sub_category)
    {
        $result = $this->where(['product.sub_category' => $sub_category])->findAll();
        return $result;
    }
    public function sub_cat($sub_category)
    {
        $result = $this->where(['product.sub_category' => $sub_category])->findcolumn('category');
        return $result;
    }
    public function validation($date)
    {
        $start_date = '';
        $end_date = '';
        $previous_week = '';
        switch($date)
        {
            case 'Today':
                $start_date = date("y-m-d");
                $end_date = date("y-m-d");
                break;
            case 'Yesterday':
                $start_date = date("y-m-d",strtotime("-1 days"));
                $end_date = date("y-m-d");
                break;
            case 'This_week':
                $start_date = date("y-m-d",strtotime("-7 days"));
                $end_date = date("y-m-d");
                break;
            case 'Last_week':
                $start_date = date("y-m-d",strtotime("-14 days"));
                $end_date = date("y-m-d",strtotime("-7 days"));
                break;
            case 'This_month':
                $start_date = date("y-m-1");
                $end_date = date("y-m-30");
                break;
            case 'Last_month':
                $start_date = date("y-m-1",strtotime("-1 month"));
                $end_date = date("y-m-30",strtotime("-1 month"));
                break; 
            case 'All_products':
                $result = $this->findAll();
                return $result;                  

        }
        if(!empty($start_date))
        {
            $result = $this->where("date(product.created_at) Between '" .$start_date."' AND '".$end_date."'")->findAll();
            return $result;
        }
    }
    public function date($start_date,$end_date)
    {
        $start_date = $start_date;
        $end_date = $end_date;
        if(!empty($start_date))
        {
            $result = $this->where("date(product.created_at) Between '" .$start_date."' AND '".$end_date."'")->findAll();
            return $result;
        }
    }
}
?>