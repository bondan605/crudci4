<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' =>  'Home | BondanOfficial'
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'alamat' => 'Perumahan Bintoro Asri Blok H No.56, Desa Jogoloyo, Kecamatan Wonosalam, Kabupaten Demak',
            'wa' => '0895358166791'
        ];
        return view('pages/contact', $data);
    }
}
