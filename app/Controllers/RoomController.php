<?php

namespace App\Controllers;
use App\Models\RoomModel;
use App\Models\FlatModel;
use App\Models\PropertyMasterTypeModel;
use App\Controllers\BaseController;

class RoomController extends BaseController
{
    private $room = '' ;
    private $flat = null ;
    private $property = null;
    public function __construct(){
      
        $this->room = new RoomModel(); 
        $this->flat = new FlatModel(); 
        $this->property = new PropertyMasterTypeModel();
             
    }
    public function index()
    {
       $data['rooms']=$this->room->findAll();
        return view('room/index',$data);
    }

    public function create(){
        $data['property']=$this->property->findAll();
        $data['flat']=$this->flat->findAll();
        return view('room/create');
    }

     public function edit($id){
         $data['room']=$this->room->find($id);
  
         return view('room/edit',$data);
     }

    public function save(){
       
        $data = [
            'pmt_id' => $this->request->getVar('pmt_id'),
            'Flat_id' => $this->request->getVar('Flat_id'),
            'HotWater_Service'  => $this->request->getVar('HotWater_Service'),
            'ROWater_Service'  => $this->request->getVar('ROWater_Service'),
            'No_of_Beds'  => $this->request->getVar('No_of_Beds'),
            'Capacity_of_peoples'  => $this->request->getVar('Capacity_of_peoples'),                    
            'FloorNo'  => $this->request->getVar('FloorNo'),
            'Address'  => $this->request->getVar('Address'),
            'Bathroom_Type'  => $this->request->getVar('Bathroom_Type'),
            'RoomAllocation'  => $this->request->getVar('RoomAllocation'),
            'TimePeriod'  => $this->request->getVar('TimePeriod'),
        ];

        $this->room->insert($data);    
        $session = session(); 
        $session->setFlashdata('msg', 'Room Successfully Added');   
        return $this->response->redirect(site_url('/room'));
    }

    public function update(){
        
        $id = $this->request->getVar('id');
       
       $data = [
            'pmt_id' => $this->request->getVar('pmt_id'),
            'Flat_id' => $this->request->getVar('Flat_id'),
            'HotWater_Service'  => $this->request->getVar('HotWater_Service'),
            'ROWater_Service'  => $this->request->getVar('ROWater_Service'),
            'No_of_Beds'  => $this->request->getVar('No_of_Beds'),
            'Capacity_of_peoples'  => $this->request->getVar('Capacity_of_peoples'),                    
            'FloorNo'  => $this->request->getVar('FloorNo'),
            'Address'  => $this->request->getVar('Address'),
            'Bathroom_Type'  => $this->request->getVar('Bathroom_Type'),
            'RoomAllocation'  => $this->request->getVar('RoomAllocation'),
            'TimePeriod'  => $this->request->getVar('TimePeriod'),
       ];
       
       
       $this->room->update($id, $data);        
       return $this->response->redirect(site_url('/room'));
   }

   public function delete($id){

    $data['room'] = $this->room->where('id', $id)->delete($id);
    return $this->response->redirect(site_url('/room'));

   }
}