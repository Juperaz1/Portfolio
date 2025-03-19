<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class PagesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Accueil',
            'description' => 'Page d\'accueil du site'
        ];

        return view('templates/header', $data)
            . view('home')
            . view('templates/footer');

            helper('form');
    }    




}

