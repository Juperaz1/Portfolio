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

        helper('form');

        return view('templates/header', $data)
            . view('home')
            . view('templates/footer');
    }    

    public function projets()
    {
        $data = [
            'title' => 'Projets',
            'description' => 'Page de projets du site'
        ];
        return view('templates/header', $data)
            . view('projets')
            . view('templates/footer');
    }

    public function certifications()
    {
        $data = [
            'title' => 'Certifications',
            'description' => 'Page de certifications du site'
        ];
        return view('templates/header', $data)
            . view('certifications')
            . view('templates/footer');
    }

    public function veille()
    {
        $data = [
            'title' => 'Veille technologique',
            'description' => 'Page de veille technologique du site'
        ];
        return view('templates/header', $data)
        . view('veille')
        . view('templates/footer');
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'description' => 'Page de contact du site'
        ];
        return view('templates/header', $data)
        . view('contact')
        . view('templates/footer');
    }
}
