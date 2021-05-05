<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Penjualan extends BaseController
{
    protected $KomikModel;
    protected $db, $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->KomikModel = new KomikModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Transaksi Komik Dan Novel',
            'komik' => $this->KomikModel->getKomik()
        ];
        return view('/komik&novel', $data);
    }

    public function beli($slug)
    {
        $data = [
            'title' => 'Transaksi Pembelian Komik Dan Novel',
            'komik' => $this->KomikModel->getKomik($slug),
        ];
        return view('komik&novel/beli', $data);
    }

    public function update()
    {
        session()->setFlashdata('pesan', 'Terimakasih sudah membeli.');
        return redirect()->to('/komiknovel');
    }
}
