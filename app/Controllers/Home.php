<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function plants(): string
    {
        return view('plants');
    }

    public function gallery(): string
    {
        return view('gallery');
    }

    public function about(): string
    {
        return view('about');
    }

    public function tropicalPlants(): string
    {
        return view('tropical_plants');
    }
     
    public function tanamanobat(): string
    {
        return view('tanaman_obat');
    }

       public function tanamanlangka(): string
    {
        return view('tanaman_langka');
    }

}