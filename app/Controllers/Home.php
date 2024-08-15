<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landing/landing');
        // return view('welcome_message');
    }

    public function product()
    {
        return view('landing/product');
    }

    public function article()
    {
        return view('landing/article');
    }

    public function detail_product()
    {
        return view('detail/detail_product');
    }

    public function detail_article()
    {
        return view('detail/detail_article');
    }

    public function activity()
    {
        return view('landing/activity');
    }

    public function detail_activity()
    {
        return view('detail/detail_activity');
    }

    public function about()
    {
        return view('landing/about');
    }

    public function contact()
    {
        return view('landing/contact');
    }
}
