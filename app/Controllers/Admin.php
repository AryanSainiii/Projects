<?php

namespace App\Controllers;

use App\Models\Users;
use App\Models\Category;
use App\Models\pages;
use App\Models\menus;
use App\Models\products;


class Admin extends BaseController
{
    public $data;
    public function __construct()
    {
        $model= new pages;
        $this->data['page'] = $model->getData();
        $model= new menus;
        $this->data['menus'] = $model->findAll();
        $model= new Users();
    }
    public function index(): string
    {   
        return view('admin/main',$this->data);
    }
    
    public function users()
    {
        $model= new Users();
        $this->data['user'] = $model->findAll();
        return view('admin/manageuser' , $this->data);
    }
    public function user_update()
    {
        $model = new Users();
        $id=$this ->request->getvar('record_id');
        $data=['first_name'=>$this->request->getvar('first_name'),'last_name'=>$this->request->getvar('last_name'),'email'=>$this ->request->getvar('email'),];
        $model->update($id,$data);
        return redirect()->to('Admin/users');

    }
    public function user_delete()
    {
        $model = new Users();
        $id=$this->request->getvar('edit_id');
        $model->where('id',$id)->delete();
        return redirect()->to('Admin/users');
    }
    public function user_insert()
    {
    $model = new Users();
    $data=['first_name'=>$this->request->getvar('first_name'),
    'last_name'=>$this->request->getvar('last_name'),
    'email'=>$this ->request->getvar('email'),];
    $model->insert($data);
    return redirect()->to('Admin/users');
    }
    
// category...........................section.................................................
    public function category()
    {
        $model = new Category();
        $this->data['category'] = $model->findAll();
        return view('admin/category', $this->data);
    }
    public function add_category()
    {
        $model = new Category();
        $data=['name'=>$this->request->getvar('category_name'),
        'parent_id'=>$this->request->getvar('parent_id'),
        'image' =>$this->request->getvar('image')];
        

        $filename = '';
        $file = $this->request->getFile('image') ?? "";
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $imgext = strtolower(pathinfo($file->getName(), PATHINFO_EXTENSION));
                if (in_array($imgext, ["jpg", "png", "jpeg", "pdf", "docx"])) {
                    $filename = $file->getRandomName();
                    $file->move('assets/Product', $filename);
                    }
        }
        if($filename != ''){
            $data['image'] = $filename;
            $model->insert($data);
        return redirect()->to('Admin/category');
    }
}
    public function edit_cat()
    {
        $model = new Category();
        $id=$this ->request->getvar('cat_record_id');
        $data=['parent_id'=>$this->request->getvar('parent_id'),'name'=>$this->request->getvar('category_name')];
        $filename = '';
        $file = $this->request->getFile('image') ?? "";
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $imgext = strtolower(pathinfo($file->getName(), PATHINFO_EXTENSION));
                if (in_array($imgext, ["jpg", "png", "jpeg", "pdf", "docx"])) {
                    $filename = $file->getRandomName();
                    $file->move('assets/Product', $filename);
                    }
        }
        if($filename != ''){
            $data['image'] = $filename;
        }
        $model->update($id,$data);
        return redirect()->to('Admin/category');
    }
    
    public function cat_delete()
    {
        $id = $this->request->getvar('delete_cat');
        $model =  new Category();
        $child= $model->where('parent_id',$id)->countAllResults();
        if($child==0)
        {
            $model->where('id',$id)->delete();
            return redirect()->to('Admin/category');
        }
        else
        {
            $session = session();
            $session ->setFlashdata('error', 'Do not able to delete parent because its child exist! First delete the child..');
            return redirect()->to('Admin/category')->withInput();
        }
    }

    // --------------------------- manage pages  -----------------------------
    public function getPageById() {
        $id = $this->request->getvar('id');
        $model = new pages();
        $result = $model->where('id', $id)->first();
        echo json_encode($result);
    }
    public function prac_page()
    {
        $model= new pages;
        $id = $this->request->getvar('id');
        $this->data['page'] = $model->pageConnectWithValue($id);
        $this->data['page_all'] = $model->getData();
         return view('admin/view_page',$this->data);
    }
    
    public function pages()
    {
        $model= new pages;
        $this->data['page'] = $model->getData();
        return view('admin/pages',$this->data);
    }
    public function add_pages()
    {
        $model = new pages;
        $data=['page_name'=>$this->request->getvar('page_name'),'page_type'=>$this->request->getvar('type'),'description'=>$this->request->getvar('description'),'menu_id'=>$this->request->getvar('menu_id')];
        $model->insert($data);
        return redirect()->to('admin/pages');
    }
    public function edit_pages()
    {
        $model = new pages;
        $id = $this->request->getvar('page_record_id');
        $data =['page_name'=>$this->request->getvar('edit_page_name'),'page_type'=>$this->request->getvar('edit_type'),'description'=>$this->request->getvar('edit_description'),'menu_id'=>$this->request->getvar('edit_menu_id')];
        $model->update($id,$data);
        return redirect()->to('admin/pages');
    }
    // ------------------------------------ Manage Products -------------------------------------------
    public function products()
    {
        $date = $this->request->getGet('date');
        $start_date = $this->request->getGet('start_date');
        $end_date = $this->request->getGet('end_date');
        $model = new products;
        if(isset($date) && $start_date == null)
        {
            $this->data['products'] = $model->validation($date); 
            return view('admin/products', $this->data);
        }
        elseif(isset($start_date))
        {
            $this->data['products'] = $model->date($start_date,$end_date); 
            return view('admin/products', $this->data);
        }
        else{
        $this->data['products'] = $model->findAll();
        return view('admin/products', $this->data);
        }
    }
    
}