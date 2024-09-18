<?php

namespace App\Controllers;
use App\Models\FlatModel;
use App\Models\PropertyMasterTypeModel;
use App\Controllers\BaseController;

class FlatController extends BaseController
{
    private $flat = '' ;
    private $property=null;
    public function __construct(){
      
        $this->flat = new FlatModel(); 
        $this->property=new PropertyMasterTypeModel();
       
              
    }
    public function index()
    {
      
       $data['flats']=$this->flat->findAll();
       $data['property']=$this->property->findAll();
        return view('flat/index',$data);
    }

    public function create(){
       
       
        $data['property']=$this->property->findAll();
    //    dd($data);
              
        return view('flat/create',$data);
    }

     public function edit($id){
         $data['flat']=$this->flat->find($id);
         $data['property']=$this->property->findAll();
         return view('flat/edit',$data);
     }

    public function save(){
       
        $data = [
         
            'pmt_id' => $this->request->getVar('pmt_id'),
            'owner_id' => $this->request->getVar('owner_id'),
            'No_of_Bedrooms'  => $this->request->getVar('No_of_Bedrooms'),
            'Bathroom_Type'  => $this->request->getVar('Bathroom_Type'),
            'Area'  => $this->request->getVar('Area'),          
            'Address'  => $this->request->getVar('Address'),
            'TimePeriod'  => $this->request->getVar('TimePeriod'),
        ];

        $this->flat->insert($data);    
        $session = session(); 
        $session->setFlashdata('msg', 'Flat Successfully Added');   
        return $this->response->redirect(site_url('/flat'));
    }

    public function update(){
        
        $id = $this->request->getVar('id');
       
       $data = [
        'pmt_id' => $this->request->getVar('pmt_id'),
        'owner_id' => $this->request->getVar('owner_id'),
        'No_of_Bedrooms'  => $this->request->getVar('No_of_Bedrooms'),
        'Bathroom_Type'  => $this->request->getVar('Bathroom_Type'),
        'Area'  => $this->request->getVar('Area'),          
        'Address'  => $this->request->getVar('Address'),
        'TimePeriod'  => $this->request->getVar('TimePeriod'),
       ];
    //    dd($id);
       
       $this->flat->update($id, $data);        
       return $this->response->redirect(site_url('/flat'));
   }

   public function delete($id){

    $data['flat'] = $this->flat->where('id', $id)->delete($id);
    return $this->response->redirect(site_url('/flat'));

   }
}