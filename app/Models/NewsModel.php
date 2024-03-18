<?php

namespace App\Models;

use CodeIgniter\Model;

// Kelas NewsModel mewarisi kelas Model dari CodeIgniter
class NewsModel extends Model
{
    // Variabel $table digunakan untuk mendefinisikan tabel yang digunakan oleh model ini
    protected $table = 'news';

    // Variabel $allowedFields mendefinisikan field apa saja yang dapat diisi dalam tabel
    // Ini adalah bagian dari fitur mass assignment protection di CodeIgniter
    //Pembahasan poin 7 pada Create News Items (Bangun aplikasi pertama Anda)
    protected $allowedFields = ['title', 'slug', 'body'];
    //...

    // Fungsi getNews digunakan untuk mengambil data berita
    // Jika parameter $description bernilai false, maka fungsi akan mengembalikan semua berita
    // Jika parameter $description memiliki nilai, maka fungsi akan mencari berita dengan deskripsi yang sesuai
    public function getNews($description = false)
    {
        if ($description === false) {
            return $this->findAll();
        }

        return $this->where(['description' => $description])->first();
    }
}