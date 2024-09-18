<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/index');
    }

    public function home()
    {
        return view('admin/dash');
    }

    public function view($page = 'dash')
    {
        if (! is_file(APPPATH . 'Views/admin/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('admin/header', $data).view('admin/' . $page);
    }

    public function header()
    {
        return view('admin/header');
    }
}
