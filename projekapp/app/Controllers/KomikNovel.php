<?php

namespace App\Controllers;

use App\Models\KomikModel;

class KomikNovel extends BaseController
{
    public function __construct()
    {
        $this->KomikModel = new KomikModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Komik Dan Novel',
            'komik' => $this->KomikModel->getKomik()
        ];

        return view('komik&novel/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Komik dan Novel',
            'komik' => $this->KomikModel->getKomik($slug)
        ];
        return view('komik&novel/detail', $data);
    }
    public function create()
    {
        // session();
        $data = [
            'title'      => 'From Tambah Data Komik dan Novel',
            'validation' => \Config\Services::validation()
        ];
        return view('komik&novel/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules'  => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required'  => '{field} Harap diisi',
                    'is_unique' => '{field} Buku sudah terdaftar'
                ]
            ],
            'harga' => [
                'rules'  => 'required',
                'errors' => [
                    'required'  => '{field} Harap diisi',
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024],
                            is_image[sampul],
                            mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in'  => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {

            // $validation = \Config\Services::validation();
            // return redirect()->to('/Komik/create')->withInput()->with('validation',$validation);
            redirect()->to('/Komik&novel/create')->withInput();
        }
        //ambil gamabar
        $fileSampul = $this->request->getFile('sampul');
        //apabila tidak ada gambar yang diupload
        if ($fileSampul->getError() == 4) {
            $namaSampul = 'defaultbook.jpg';
        } else {
            //generate nama sampul random
            $namaSampul = $fileSampul->getRandomName();
            //pindahkan folder gambar
            $fileSampul->move('img', $namaSampul);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->KomikModel->save([
            'judul'    => $this->request->getVar('judul'),
            'slug'     => $slug,
            'penulis'  => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'harga'    => $this->request->getVar('harga'),
            'sampul'   => $namaSampul
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');
        return redirect()->to('/komiknovel');
    }

    public function delete($id)
    {
        //cari gamabr berdasarkan id
        $komik = $this->KomikModel->find($id);
        //cek jika file gambarnya default.jpg
        if ($komik['sampul'] != 'defaultbook.jpg') {
            //hapus gambar
            unlink('img/' . $komik['sampul']);
        }

        $this->KomikModel->delete($id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus.');
        return redirect()->to('/komiknovel');
    }

    public function edit($slug)
    {
        $data = [
            'title'      => 'From Ubah Data Komik dan Novel',
            'validation' => \Config\Services::validation(),
            'komik'      => $this->KomikModel->getKomik($slug)
        ];
        return view('/komik&novel/edit', $data);
    }

    public function update($id)
    {
        //cek judul
        $komiklama = $this->KomikModel->getKomik($this->request->getVar('slug'));
        if ($komiklama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[komik.judul]';
        }

        if (!$this->validate([
            'judul' => [
                'rules'  => $rule_judul,
                'errors' => [
                    'required'  => '{field} Harap diisi',
                    'is_unique' => '{field} Buku sudah terdaftar'
                ]
            ],
            'harga' => [
                'rules'  => 'required',
                'errors' => [
                    'required'  => '{field} Harap diisi',
                ]
            ],
            'sampul' => [
                'rules' => 'max_size[sampul,1024],
                            is_image[sampul],
                            mime_in[sampul,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in'  => 'Yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/Komik&novel/edit/' . $this->request->getVar('slug'))
                ->withInput();
        }
        $fileSampul = $this->request->getFile('sampul');

        //cek gambar apakah tetap gambar lama
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            //generate nama file random
            $namaSampul = $fileSampul->getRandomName();
            //pindahkan gambar
            $fileSampul->move('img', $namaSampul);
            //hapus file yang lama
            unlink('img/' . $this->request->getVar('sampulLama'));
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->KomikModel->save([
            'id'       => $id,
            'judul'    => $this->request->getVar('judul'),
            'slug'     => $slug,
            'penulis'  => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'harga'    => $this->request->getVar('harga'),
            'sampul'   => $namaSampul
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Diubah.');
        return redirect()->to('/komiknovel');
    }
}
