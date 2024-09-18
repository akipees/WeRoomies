<?php

namespace App\Controllers;
use App\Models\CustomerModel;
use App\Controllers\BaseController;

class CustomerController extends BaseController
{
    private $customer = '' ;
    public function __construct(){
      
        $this->customer = new CustomerModel();       
    }

    public function index()
    {
        $data['customers']=$this->customer->findAll();
        return view('customer/index',$data);
    }

    public function clogin()
    {
        return view('customer/logincustomer');
    }

    public function create(){
        return view('customer/create');
    }

    public function edit($id){
        $data['customer']=$this->customer->find($id);
 
        return view('customer/edit',$data);
    }

    public function save(){
       
        $data = [
            //'id' => $this->request->getVar('id'),
            'FullName' => $this->request->getVar('FullName'),
            'MobileNo' => $this->request->getVar('MobileNo'),
            'Age'  => $this->request->getVar('Age'),
            'Gender'  => $this->request->getVar('Gender'),
            'Email'  => $this->request->getVar('Email'),          
            'Address'  => $this->request->getVar('Address'),
        ];

        $this->customer->insert($data);    
        $session = session(); 
        $session->setFlashdata('msg', 'Customer Successfully Added');   
        return $this->response->redirect(site_url('/customer'));
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
       
       
       $this->customer->update($id, $data);        
       return $this->response->redirect(site_url('/customer'));
   }

   public function delete($id){

    $data['customer'] = $this->customer->where('id', $id)->delete($id);
    return $this->response->redirect(site_url('/customer'));

   }
}
