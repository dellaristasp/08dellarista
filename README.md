# Della Rista Setiawan Putri_220102080

# Apa itu FrameWork?
Framework adalah sebuah kerangka kerja yang digunakan untuk membantu developer dalam mengembangkan kode aplikasi secara konsisten.

# Apa itu CodeIgniter?
Codeigniter adalah salah satu framework untuk membuat website dengan bahasa pemrograman PHP.
Codeigniter terkenal dengan konsep MVC-nya. MVC merupakan singkatan dari Model–View–Controller.

# Keunggulan CodeIgniter:
1. **Ringan dan Cepat**: Framework dengan ukuran kecil dan performa tinggi.
2. **Konfigurasi Minimal**: Membutuhkan sedikit konfigurasi untuk memulai.
3. **Tanpa Penggunaan Command Line**: Tidak memerlukan penggunaan baris perintah.
4. **Fleksibel dalam Penulisan Kode**: Tidak ada aturan kode yang ketat.
5. **Tidak Memaksa Templating Language**: Tidak memerlukan pembelajaran bahasa templating khusus.
6. **Solusi yang Sederhana**: Menolak kompleksitas untuk pengembangan yang mudah dipahami.
7. **Dokumentasi Lengkap**: Didukung oleh dokumentasi yang jelas dan komprehensif.

# Persyaratan Server
## PHP dan Ekstensi yang Dibutuhkan
PHP versi 7.4 atau lebih baru diperlukan, dengan ekstensi PHP berikut diaktifkan:
intl
mbstring
json

# Ekstensi PHP Opsional
##Ekstensi PHP berikut sebaiknya diaktifkan pada server Anda:
mysqlnd (jika Anda menggunakan MySQL)
curl (jika Anda menggunakan CURLRequest)
imagick (jika Anda menggunakan kelas Image ImageMagickHandler)
gd (jika Anda menggunakan kelas Image GDHandler)
simplexml (jika Anda memformat XML)

# Kredit
Kredit
CodeIgniter awalnya dikembangkan oleh EllisLab. Kerangka kerja ini ditulis untuk kinerja di dunia nyata, dengan banyak kelas pustaka, helper, dan sub-sistem asli dipinjam dari basis kode ExpressionEngine. Selama bertahun-tahun, dikembangkan dan dipelihara oleh EllisLab, Tim Pengembangan ExpressionEngine, dan sekelompok anggota komunitas yang disebut Tim Reactor.


# Installasi
### Installasi Manual
1. Install Manual CodeIgniter 4 dari [sini](https://codeigniter.com/).
2. Ekstrak project ke root folder pada penyimpanan.
3. Jalankan server dengan masuk ke dalam root project, buka code editor (Visual Studio Code), lalu Terminal, kemudian ketik:
   ```bash
   $ cd nama-root
   $ php spark serve

# Installasi dengan Composer
1. Buka folder root yang digunakan untuk menyimpan CodeIgniter, klik kanan, lalu buka folder tersebut lewat Terminal.
2. Ketikkan :
   ```bash
   $ composer create-project codeigniter4/appstarter nama-project
4. Jalankan server :
   ```bash
   $ cd nama-root
   $ php spark serve

# Panduan Membangun Aplikasi Pertama

## Ikhtisar

Tutorial ini akan mengenalkan Anda pada framework CodeIgniter4 dan prinsip dasar arsitektur MVC. Anda akan diajak membangun sebuah aplikasi CodeIgniter dasar langkah demi langkah.

Jika Anda belum familiar dengan PHP, tidak masalah! Anda dapat memulai dengan mempelajari Tutorial PHP dari W3Schools sebelum melanjutkan.

Dalam tutorial ini, Anda akan membuat sebuah aplikasi berita sederhana. Anda akan memulai dengan menulis kode yang dapat memuat halaman statis, kemudian membuat bagian berita yang membaca berita dari database, dan terakhir menambahkan formulir untuk membuat berita baru di database.

Tutorial ini akan fokus pada hal-hal berikut:
- Dasar-dasar Model-View-Controller (MVC)
- Dasar-dasar routing
- Validasi formulir
- Melakukan kueri dasar ke database menggunakan Model CodeIgniter

### Memulai

#### Langkah Pertama: Instalasi CodeIgniter

Anda bisa mengunduh CodeIgniter secara manual, tapi lebih baik menggunakan cara yang direkomendasikan yaitu dengan menginstal paket AppStarter melalui Composer. Cukup ketik perintah berikut di baris perintah:

```
composer create-project codeigniter4/appstarter myCI4app
```
<img width="1120" alt="Screen Shot 2024-03-18 at 09 39 39" src="https://github.com/dellaristasp/08dellarista/assets/134635732/0c4ed58e-874f-4e08-a6fa-56fc5aed01a9">

### Menjalankan Aplikasi

#### Menyiapkan Mode Pengembangan

Secara default, CodeIgniter akan berjalan di mode produksi. Kita akan mengubahnya menjadi mode pengembangan agar lebih nyaman saat kita mengembangkan aplikasi. Caranya adalah dengan menyalin atau mengganti nama file `env` menjadi `.env`, lalu buka file tersebut dan ubah baris `CI_ENVIRONMENT` menjadi `development`.

<img width="509" alt="Screen Shot 2024-03-18 at 09 51 51" src="https://github.com/dellaristasp/08dellarista/assets/134635732/e53d96be-09f9-4703-943f-f318685855b4">

#### Memulai Server

Anda bisa langsung melihat aplikasi Anda di browser dengan menjalankan server bawaan PHP menggunakan perintah:

```
php spark serve
```
<img width="794" alt="Screen Shot 2024-03-18 at 09 42 19" src="https://github.com/dellaristasp/08dellarista/assets/134635732/db42a586-404e-4a4a-a2da-9a84da7864d5">

### Halaman Selamat Datang

Kunjungi URL berikut di browser Anda:

[http://localhost:8080](http://localhost:8080)

<img width="878" alt="Screen Shot 2024-03-18 at 09 46 29" src="https://github.com/dellaristasp/08dellarista/assets/134635732/18278084-5ed1-4f31-b161-926446fb0a8e">

Anda akan disambut dengan halaman selamat datang yang menandakan bahwa aplikasi Anda sudah berjalan dengan baik.

# Debugging

## Debug Toolbar

Saat Anda berada dalam mode pengembangan, Anda akan melihat ikon CodeIgniter di pojok kanan bawah aplikasi Anda. Klik ikon tersebut dan Anda akan melihat toolbar debug.

Toolbar ini berisi beberapa item yang membantu yang dapat Anda gunakan selama pengembangan. Ini tidak akan pernah muncul dalam lingkungan produksi. Mengklik salah satu tab di bagian bawah akan menampilkan informasi tambahan. Mengklik X di sebelah kanan toolbar akan meminimalkannya menjadi kotak kecil dengan ikon CodeIgniter di dalamnya. Jika Anda mengkliknya, toolbar akan muncul kembali.

<img width="1457" alt="Screen Shot 2024-03-18 at 10 01 00" src="https://github.com/dellaristasp/08dellarista/assets/134635732/271d5b9e-c9f1-4266-93fd-6cf1b981b1f5">

## Error Pages

Selain itu, CodeIgniter memiliki beberapa halaman kesalahan yang membantu saat Anda menemui pengecualian atau kesalahan lain dalam program Anda. Buka file app/Controllers/Home.php dan ubah beberapa baris untuk membuat kesalahan (menghapus titik koma atau kurung kurawal harus cukup!). Anda akan melihat tampilan seperti ini:

<img width="1451" alt="Screen Shot 2024-03-18 at 10 04 45" src="https://github.com/dellaristasp/08dellarista/assets/134635732/f7137737-f308-4c64-8502-3a3364b2812f">


Ada beberapa hal yang perlu diperhatikan di sini:

- Saat mengarahkan kursor ke header merah di bagian atas, akan muncul tautan pencarian yang membuka DuckDuckGo.com di tab baru dan mencari pengecualian.
- Mengklik tautan argumen pada setiap baris di Backtrace akan memperluas daftar argumen yang diteruskan ke panggilan fungsi tersebut.

## Menetapkan Aturan Routing

Routing mengaitkan URI dengan metode controller. Sebuah controller hanyalah sebuah kelas yang membantu untuk men-delegasikan pekerjaan. Kita akan membuat controller nanti.

Mari atur aturan routing. Buka file routes yang terletak di `app/Config/Routes.php`.

Satu-satunya direktif rute yang ada di sana untuk memulai adalah:

```php
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
```
<img width="913" alt="Screen Shot 2024-03-18 at 10 22 43" src="https://github.com/dellaristasp/08dellarista/assets/134635732/397d764b-1f41-4e7d-92e1-ae8460ef32ad">

Direktif ini menyatakan bahwa setiap permintaan masuk tanpa konten yang spesifik harus ditangani oleh metode index() di dalam controller Home.

Tambahkan baris berikut, setelah direktif rute untuk '/'.

```php
use App\Controllers\Pages;

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
```
<img width="929" alt="Screen Shot 2024-03-18 at 10 24 48" src="https://github.com/dellaristasp/08dellarista/assets/134635732/e617a2bf-303d-4eee-9958-44ee81e80bc8">

CodeIgniter membaca aturan rutingnya dari atas ke bawah dan mengarahkan permintaan ke aturan yang cocok pertama. Setiap aturan adalah ekspresi reguler (sisi kiri) yang dipetakan ke nama controller dan metode (sisi kanan). Ketika permintaan masuk, CodeIgniter mencari yang cocok pertama, dan memanggil controller dan metode yang sesuai, mungkin dengan argumen.

Di sini, aturan kedua dalam objek `$routes` cocok dengan permintaan GET ke jalur URI `/pages`, dan memetakkannya ke metode index() dari kelas Pages.

Aturan ketiga dalam objek `$routes` cocok dengan permintaan GET ke segmen URI menggunakan placeholder (:segment), dan meneruskan parameter ke metode view() dari kelas Pages.

# Membuat Controller Halaman

Buatlah sebuah file di `app/Controllers/Pages.php` dengan kode berikut.

```php
<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        // ...
    }
}
```
<img width="931" alt="Screen Shot 2024-03-18 at 10 35 00" src="https://github.com/dellaristasp/08dellarista/assets/134635732/c8806f2c-ced3-4d5b-b3cf-c21d7442bdb1">

Anda telah membuat sebuah kelas bernama Pages, dengan sebuah metode view() yang menerima satu argumen bernama $page. Ini juga memiliki metode index(), sama seperti controller default yang ditemukan di `app/Controllers/Home.php`; metode tersebut menampilkan halaman selamat datang CodeIgniter.

Kelas Pages memperluas kelas BaseController yang memperluas kelas CodeIgniter\Controller. Ini berarti bahwa kelas Pages yang baru dapat mengakses metode-metode dan properti-properti yang didefinisikan dalam kelas CodeIgniter\Controller (system/Controller.php).

Controller adalah yang akan menjadi pusat setiap permintaan ke aplikasi web Anda. Seperti kelas PHP lainnya, Anda merujuknya dalam controller Anda sebagai $this.

# Membuat Tampilan

Sekarang setelah Anda telah membuat metode pertama Anda, saatnya untuk membuat beberapa template halaman dasar. Kita akan membuat dua "tampilan" (template halaman) yang bertindak sebagai header dan footer halaman kita.

Buat header di `app/Views/templates/header.php` dan tambahkan kode berikut:

```html
<!doctype html>
<html>
<head>
    <title>Panduan CodeIgniter</title>
</head>
<body>

```
<img width="844" alt="Screen Shot 2024-03-18 at 10 41 25" src="https://github.com/dellaristasp/08dellarista/assets/134635732/675b275d-f880-4069-bb9b-8ba0ba8f0e16">
<img width="209" alt="Screen Shot 2024-03-18 at 10 50 47" src="https://github.com/dellaristasp/08dellarista/assets/134635732/014e69e8-1a4f-48c2-a889-c02318ce8a42">


Header ini berisi kode HTML dasar yang ingin Anda tampilkan sebelum memuat tampilan utama, bersama dengan sebuah judul. Ini juga akan menampilkan variabel $title, yang akan kita definisikan nanti di dalam controller. Sekarang, buat footer di `app/Views/templates/footer.php` yang berisi kode berikut:

```html
    <em>&copy; 2022</em>
</body>
</html>
```
<img width="504" alt="Screen Shot 2024-03-18 at 10 54 23" src="https://github.com/dellaristasp/08dellarista/assets/134635732/d798902a-8cc6-467c-953f-1f72eb079961">

Footer ini akan menampilkan hak cipta tahun 2022 di bagian bawah halaman :
<img width="940" alt="Screen Shot 2024-03-18 at 10 52 53" src="https://github.com/dellaristasp/08dellarista/assets/134635732/e9261841-3c83-4a86-b17d-b494814d172f">

