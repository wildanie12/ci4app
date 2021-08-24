<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebProgrammingUNPAS',
        ];
        return view('/pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('/pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jln abc no. 123',
                    'kota' => 'Tangerang'
                ],
                [
                    'tipe' => 'Sekolah',
                    'alamat' => 'Jln Purijatake no. 255',
                    'kota' => 'Tangerang'
                ]
            ]
        ];

        return view('/pages/contact', $data);
    }
}
