<?php

namespace App\Controllers;

class Home extends BaseController
{
    /*public function index()
    {   //return view('welcome_message');
     echo view('front/head_view');
        echo view('front/navbar_view');
      
       //echo view('front/navbar_view');
       echo  view('front/principal');
       echo view('front/footer_view');
    }
    
    public function quienes_somos()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
       echo view('front/quienes_somos');
        echo view('front/srt-resumio');
      echo view('front/footer_view');
    }*/
     public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function principal()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function acerca_de()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }
    public function quienes_somos()
    {
        echo view('front/head_view');
        echo view('front/navbar_view');
        echo view('front/srt-resumio');
        echo view('front/footer_view');
    }
}

