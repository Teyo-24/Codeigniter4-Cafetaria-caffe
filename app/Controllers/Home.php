<?php

namespace App\Controllers;

use App\Models\About;
use App\Models\Activity;
use App\Models\Article;
use App\Models\Product;
use App\Models\Slider;

class Home extends BaseController
{
    public function index(): string
    {
        $model_slider = new Slider();
        $model_product = new Product();
        $model_activity = new Activity();
        $model_about = new About();

        $slide = $model_slider->findAll();
        $product = $model_product->findAll();
        $activity = $model_activity->findAll();
        $about = $model_about->findAll();
        return view('landing/landing', compact('slide', 'product', 'activity', 'about'));
    }

    // public function app()
    // {
    //     // Membuat instance dari model About
    //     $aboutModel = new About();

    //     // Mengambil semua data dari tabel about
    //     $data['about'] = $aboutModel->find('favicon_website');

    //     // Mengirimkan data ke view layouts/app
    //     return view('layouts/app', $data);
    // }


    public function product()
    {
        $product = new Product();
        $data = $product->findAll();
        return view('landing/product', compact('data'));
    }

    public function article()
    {
        $article = new Article();
        $data = $article->findAll();
        return view('landing/article', compact('data'));
    }

    public function activity()
    {
        $activity = new Activity();
        $data = $activity->findAll();
        return view('landing/activity', compact('data'));
    }

    public function about()
    {
        $about = new About();
        $data = $about->findAll();
        return view('landing/about', compact('data'));
    }

    public function contact()
    {
        $about = new About();
        $data = $about->findAll();
        return view('landing/contact', compact('data'));
    }

    public function detail_product()
    {
        return view('detail/detail_product');
    }

    public function detail_article($id_artikel)
    {
        $detail_artikel = new Article();

        // menampilkan detail yang dipilih
        $data['tb_artikel'] = $detail_artikel->find($id_artikel);

        //menampilkan anouther artikel
        $data['another_artikel'] = $detail_artikel->where('id_artikel !=', $id_artikel)->findAll();

        return view('detail/detail_article', $data);
    }

    public function detail_activity($id_aktivitas)
    {
        $detail_activity =  new Activity();
        $data['aktivitas'] = $detail_activity->find($id_aktivitas);
        return view('detail/detail_activity', $data);
    }
}
