<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Category;
use App\Models\Products;
use App\Models\Cart;

class Home extends BaseController
{
    public $session;
    public $session_id;
    public function __construct()
    {
        $model = new Cart();
        $this->session = \config\services::session();
        $this->session_id = session_id();
        $this->data['rows'] =$model->get_rows($this->session_id);
        $this->data['Cart'] = $model->getData($this->session_id);
    }
    // ------------------------------------------ Register & login ------------------------------------
    public function register()
    {
        return view('home/register');
    }
    public function login()
    {
        return view('home/login');
    }
    public function logout()
    {
        session_destroy();
        return view('home/register');
    }
    public function loginaction()
    {
        $data=[
            'email' => $this->request->getPost('email'),
            'password' => md5($this->request->getPost('password'))
        ];
        $model = new Users();
        $result = $model->where($data)->first();

        if(isset($result["id"]))
        {
            $this->session -> set("user_name", $result["first_name"]);
            return redirect()->to('admin/index');
        }
        else{
            $session = session();
            $session ->setFlashdata('error', 'please enter valid email and password');
            return redirect()->to('admin/index')->withInput();
        }
    }
    public function registerAction(){
        
        $model = new Users();
        $data = ['first_name' => $this->request->getvar('first_name'),
        'last_name'=> $this->request->getvar('last_name'),
        'email' => $this->request->getvar('email'),
        'password' => md5($this->request->getvar('password')),
        ];
        $model->insert($data);
       return redirect()->to('admin/index');
       
    }
    // ----------------------------------------- dashboard --------------------------------------------
    public function dashboard()
    {
        $id= $this->request->getvar('id');
        $sub_category= $this->request->getvar('sub_cat');
        $model = new Category();
        $this->data['category_all'] = $model->findAll();
        if(isset($id))
        {
            $this->data['sub_category'] = $model->sub_category($id); 
        }
        $model = new Products();
        if(isset($id))
        {
            $this->data['products'] = $model->product_byid($id);
        }
        elseif(isset($sub_category))
        {
            $this->data['products'] = $model->product_bysub_cat($sub_category);
            $array = $model->sub_cat($sub_category);
            $parent_id=reset($array);
            $model = new Category();
            $this->data['sub_category'] = $model->sub_category_parent($parent_id);
        }
        else
        {  
            $this->data['products'] = $model->findAll();
        }
        return view('home/index',$this->data);
    }
    public function product_view($id)
    {
        $model = new Products();
        $this->data['product'] = $model->where('id',$id)->findAll();
        return view('home/product_view',$this->data);
    }
    // ------------------------------------------ Cart ------------------------------------------------

    public function cart()
    {
        return view('home/cart', $this->data);
    }

    public function cart_2()
    {
        $model = new Cart();
        $session_id = $this->session_id;
        $id =  $this->request->getvar('productt_id');
        $check = $model->where('session_id',$session_id)->where('product_id',$id)->findAll();
        if(empty($check))
    {
        $model = new Cart();
        $data = ['session_id'=> $this->session_id ,
        'product_id'=> $this->request->getvar('productt_id'),
        'product_name'=> $this->request->getvar('product_name'),
        'product_image'=> $this->request->getvar('image'),
        'price'=> $this->request->getvar('price'),
        'quantity'=> $this->request->getvar('quantity'),
        'total'=> $this->request->getvar('price')*$this->request->getvar('quantity')];
        $model->insert($data);
        return redirect()->to('home/cart');
        
    }
    else{
        $cart_array = $model->where('product_id',$id)->where('session_id',$session_id)->findcolumn('id');
        $cart_id = implode($cart_array);
        $quantity = $model->where('product_id',$id)->where('session_id',$session_id)->findcolumn('quantity');
        $data = ['quantity'=> implode($quantity) +1, 'total'=> (implode($quantity)+1)*$this->request->getvar('price') ];
        $model->update($cart_id,$data);
        return redirect()->to('home/cart');
    }
    }
    public function edit_cart($cart_id='',$qty='')
    {
        $model = new Cart();
        $price = $model->where('id',$cart_id)->findcolumn('price');
        $data = ['quantity'=> $qty , 'total'=> $qty * implode($price) ];
        $model->update($cart_id,$data);
        return redirect()->to('home/cart');
    }
    // ---------------------------------------- checkout-----------------------------------------------
    public function checkout()
    {
    if(isset($_SESSION['user_name'])) 
    {
        return view('home/checkout',$this->data);
    }
    else{
        return view('home/register');
    }
    }
    public function filter()
    {
        $id= $this->request->getvar('id');
        $sub_category= $this->request->getvar('sub_cat');
        $model = new Category();
        $this->data['category_all'] = $model->findAll();
        $this->data['sub_category'] = $model->findAll(); 
        
        $model = new Products();
        if(isset($id))
        {
            $this->data['products'] = $model->product_byid($id);
        }
        elseif(isset($sub_category))
        {
            $this->data['products'] = $model->product_bysub_cat($sub_category);
            $array = $model->sub_cat($sub_category);
            $parent_id=reset($array);
            $model = new Category();
            $this->data['sub_category'] = $model->sub_category_parent($parent_id);
        }
        else
        {  
            $this->data['products'] = $model->findAll();
        }
        return view('home/filter',$this->data);
    }
    
}
?>