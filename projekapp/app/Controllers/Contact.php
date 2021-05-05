<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Call Center',
                    'hubungi' => '081333942065',
                    'alamat' => 'jl.Batubara No.5',
                    'kota' => 'Kota Malang',
                ],
                [
                    'tipe' => 'Kantor Pusat',
                    'hubungi' => '081562',
                    'alamat' => 'jl.Agung Indah No.12',
                    'kota' => 'Kota Malang'
                ]
            ]
        ];
        return view('user/contact', $data);
    }
}
