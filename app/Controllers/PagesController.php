<?php

namespace App\Controllers;
use App\Models\RoomModel;
use App\Models\FlatModel;
use App\Models\PropertyMasterTypeModel;
use CodeIgniter\Exceptions\PageNotFoundException; 


class PagesController extends BaseController
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
        return view('welcome_message');
    }

    public function home()
    {
        return view('pages/home');
    }
    
    public function view($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }

    public function reg()
    {
        return view('pages/registration');
    }

    public function room()
    {
        $data['rooms']=$this->room->findAll();
        return view('pages/room',$data);
    }

    public function flat()
    {
        $data['flats']=$this->flat->findAll();
        return view('pages/flat',$data);
    }
    
}
?>