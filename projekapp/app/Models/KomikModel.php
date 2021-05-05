<?php

namespace App\Models;

use CodeIgniter\Model;
use phpDocumentor\Reflection\Types\This;

class KomikModel extends Model
{
    protected $table = 'komik';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul', 'harga', 'jml_pesan'];

    public function getKomik($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
