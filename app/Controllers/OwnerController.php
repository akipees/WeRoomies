<?php

namespace App\Controllers;
use App\Models\OwnerModel;
use App\Controllers\BaseController;

class OwnerController extends BaseController
{
    private $owner = '' ;
    public function __construct(){
      
        $this->owner = new OwnerModel();       
    }

    public function index()
    {
        $data['owners']=$this->owner->findAll();
        return view('owner/index',$data);
    }

    public function create(){
        return view('owner/create');
    }

    public function edit($id){
        $data['owner']=$this->owner->find($id);
 
        return view('owner/edit',$data);
    }

    public function save(){
       
        $data = [
            // 'id' => $this->request->getVar('id'),
            'FullName' => $this->request->getVar('FullName'),
            'MobileNo' => $this->request->getVar('MobileNo'),
            'Age'  => $this->request->getVar('Age'),
            'Gender'  => $this->request->getVar('Gender'),
            'Email'  => $this->request->getVar('Email'),          
            'Address'  => $this->request->getVar('Address'),
        ];

        $this->owner->insert($data);    
        $session = session(); 
        $session->setFlashdata('msg', 'Owner Successfully Added');   
        return $this->response->redirect(site_url('/owner'));
    }

    public function update(){
        
        $id = $this->request->getVar('id');
       
       $data = [
            'FullName' => $this->request->getVar('FullName'),
            'MobileNo' => $this->request->getVar('MobileNo'),
            'Age'  => $this->request->getVar('Age'),
            'Gender'  => $this->request->getVar('Gender'),
            'Email'  => $this->request->getVar('Email'),          
            'Address'  => $this->request->getVar('Address'),
       ];
       
       
       $this->owner->update($id, $data);        
       return $this->response->redirect(site_url('/owner'));
   }

   public function delete($id){

    $data['owner'] = $this->owner->where('id', $id)->delete($id);
    return $this->response->redirect(site_url('/owner'));

   }

   public function view($page = 'index')
    {
        if (! is_file(APPPATH . 'Views/owner/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('admin/header', $data).view('owner/' . $page);
    }
}
