<?php

namespace App\Controllers\Landing;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LandingController extends BaseController
{
    public function index()
    {
        return view('landing/landing');
    }

    public function product()
    {
        return view('landing/product');
    }

    public function article()
    {
        return view('landing/article');
    }
    public function activity()
    {
        return view('landing/activity');
    }
}
