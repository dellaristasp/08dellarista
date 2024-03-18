<?php
// Route untuk halaman Home
$routes->get('/', 'Home::index');
// Route untuk menampilkan form upload saat kita menautkan /upload pada URL dan proses upload file dari Controller Upload, method=index
$routes->get('upload', 'Upload::index');
$routes->post('upload/upload', 'Upload::upload');

// Route untuk menampilkan form dan proses form (Post data)
$routes->get('form', 'Form::index');
$routes->post('form', 'Form::index');

// Route untuk halaman News
use App\Controllers\News;

// Route untuk menampilkan daftar News (index)
$routes->get('news', [News::class, 'index']); // Tambah baris ini

// Route untuk menampilkan form create News
$routes->get('news/new', [News::class, 'new']); // Tambah baris ini (poin create News items)
// Route untuk memproses form create News dan menyimpan di database
$routes->post('news', [News::class, 'create']); // Tambah baris ini (poin create News items)

// Route untuk menampilkan detail suatu News berdasarkan Deskripsinya
$routes->get('news/(:segment)', [News::class, 'show']); // Tambah baris ini

// Route untuk halaman Pages
use App\Controllers\Pages;

// Route untuk menampilkan daftar Pages (index)
$routes->get('pages', [Pages::class, 'index']);
// Route untuk menampilkan halaman Pages sesuai deskripsinya
$routes->get('(:segment)', [Pages::class, 'view']);
