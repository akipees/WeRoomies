<?php

namespace App\Controllers;
use App\Models\UserssModel;
use App\Models\OwneruserModel;
use App\Models\AdminuserModel;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/login');
    }

    public function ahome()
    {
        return view('admin/home');
    }

    public function ohome()
    {
        return view('owner/home');
    }

    public function alogin()
    {
        return view('admin/loginadmin');
    }

    public function ologin()
    {
        return view('owner/loginowner');
    }

    public function clogin()
    {
        return view('pages/welcome_message');
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

    public function register()
    {
        helper(['form','url']);

        $validation = \Config\Services::validation();
        $check = $this->validate([
            'Email' => 'required',
            'Password' => 'required',
            'CPassword' => 'required|matches[Password]'
        ]);
        if(!$check)
        {
            return view('pages/registration',['validation'=>$this->validator]);
        }
        else{
            $model = new UserssModel();
            $data = [
                'Email' => $this->request->getVar('Email'),
                'Password' => $this->request->getVar('Password'),
            ];
            $model->insert($data);
            return $this->response->redirect(site_url('/clogin'));
        }
    }

    public function login()
    {
        $model = new UserssModel();
        $result = $model->where('Email',$this->request->getVar('Email'))->first();
        if($result!=null)
        {
            if($result['Password'] == $this->request->getVar('Password'))
            {
                return $this->response->redirect(site_url('/home'));
            }
            else
            {   
                echo "Invalid Email/Password";
                return $this->response->redirect(site_url('/clogin'));
            }
        }
        else
        {
            echo "Invalid Email/Password";
            return view('pages/welcome_message');
        }
    }

    public function oregister()
    {
        helper(['form','url']);

        $validation = \Config\Services::validation();
        $check = $this->validate([
            'Email' => 'required',
            'Password' => 'required',
            'CPassword' => 'required|matches[Password]'
        ]);
        if(!$check)
        {
            return view('owner/registration',['validation'=>$this->validator]);
        }
        else{
            $model = new OwneruserModel();
            $data = [
                'Email' => $this->request->getVar('Email'),
                'Password' => $this->request->getVar('Password'),
            ];
            $model->insert($data);
            return $this->response->redirect(site_url('/loginowner'));
        }
    }

    public function ownerlogin()
    {
        $model = new OwneruserModel();
        $result = $model->where('Email',$this->request->getVar('Email'))->first();
        if($result!=null)
        {
            if($result['Password'] == $this->request->getVar('Password'))
            {
                return $this->response->redirect(site_url('/ohome'));
            }
            else
            {   
                echo "Invalid Email/Password";
                return $this->response->redirect(site_url('/loginowner'));
            }
        }
        else
        {
            echo "Invalid Email/Password";
            return view('owner/loginowner');
        }
    }

    public function adminlogin()
    {
        $model = new AdminuserModel();
        $result = $model->where('Email',$this->request->getVar('Email'))->first();
        if($result!=null)
        {
            if($result['Password'] == $this->request->getVar('Password'))
            {
                return $this->response->redirect(site_url('/ahome'));
            }
            else
            {   
                echo "Invalid Email/Password";
                return $this->response->redirect(site_url('/loginadmin'));
            }
        }
        else
        {
            echo "Invalid Email/Password";
            return view('admin/loginadmin');
        }
    }

    public function reg()
    {
        return view('owner/registration');
    }
        
}
