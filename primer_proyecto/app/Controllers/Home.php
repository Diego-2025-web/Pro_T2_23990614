<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        /*return view('front/navbar_view');*/
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal_1');
        echo view('front/footer_view');
    }
    
    public function quienes_somos(): string
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
}
}
