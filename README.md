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
##Ekstensi PHP berikut sebaiknya diaktifkan pada server kita:
mysqlnd (jika kita menggunakan MySQL)
curl (jika kita menggunakan CURLRequest)
imagick (jika kita menggunakan kelas Image ImageMagickHandler)
gd (jika kita menggunakan kelas Image GDHandler)
simplexml (jika kita memformat XML)

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

Tutorial ini akan mengenalkan kita pada framework CodeIgniter4 dan prinsip dasar arsitektur MVC. kita akan diajak membangun sebuah aplikasi CodeIgniter dasar langkah demi langkah.

Jika kita belum familiar dengan PHP, tidak masalah! kita dapat memulai dengan mempelajari Tutorial PHP dari W3Schools sebelum melanjutkan.

Dalam tutorial ini, kita akan membuat sebuah aplikasi berita sederhana. kita akan memulai dengan menulis kode yang dapat memuat halaman statis, kemudian membuat bagian berita yang membaca berita dari database, dan terakhir menambahkan formulir untuk membuat berita baru di database.

Tutorial ini akan fokus pada hal-hal berikut:
- Dasar-dasar Model-View-Controller (MVC)
- Dasar-dasar routing
- Validasi formulir
- Melakukan kueri dasar ke database menggunakan Model CodeIgniter

### Memulai

#### Langkah Pertama: Instalasi CodeIgniter

kita bisa mengunduh CodeIgniter secara manual, tapi lebih baik menggunakan cara yang direkomendasikan yaitu dengan menginstal paket AppStarter melalui Composer. Cukup ketik perintah berikut di baris perintah:

```
composer create-project codeigniter4/appstarter myCI4app
```
<img width="1120" alt="Screen Shot 2024-03-18 at 09 39 39" src="https://github.com/dellaristasp/08dellarista/assets/134635732/0c4ed58e-874f-4e08-a6fa-56fc5aed01a9">

### Menjalankan Aplikasi

#### Menyiapkan Mode Pengembangan

Secara default, CodeIgniter akan berjalan di mode produksi. Kita akan mengubahnya menjadi mode pengembangan agar lebih nyaman saat kita mengembangkan aplikasi. Caranya adalah dengan menyalin atau mengganti nama file `env` menjadi `.env`, lalu buka file tersebut dan ubah baris `CI_ENVIRONMENT` menjadi `development`.

<img width="509" alt="Screen Shot 2024-03-18 at 09 51 51" src="https://github.com/dellaristasp/08dellarista/assets/134635732/e53d96be-09f9-4703-943f-f318685855b4">

#### Memulai Server

kita bisa langsung melihat aplikasi kita di browser dengan menjalankan server bawaan PHP menggunakan perintah:

```
php spark serve
```
<img width="794" alt="Screen Shot 2024-03-18 at 09 42 19" src="https://github.com/dellaristasp/08dellarista/assets/134635732/db42a586-404e-4a4a-a2da-9a84da7864d5">

### Halaman Selamat Datang

Kunjungi URL berikut di browser kita:

[http://localhost:8080](http://localhost:8080)

<img width="878" alt="Screen Shot 2024-03-18 at 09 46 29" src="https://github.com/dellaristasp/08dellarista/assets/134635732/18278084-5ed1-4f31-b161-926446fb0a8e">

kita akan disambut dengan halaman selamat datang yang menkitakan bahwa aplikasi kita sudah berjalan dengan baik.

# Debugging

## Debug Toolbar

Saat kita berada dalam mode pengembangan, kita akan melihat ikon CodeIgniter di pojok kanan bawah aplikasi kita. Klik ikon tersebut dan kita akan melihat toolbar debug.

Toolbar ini berisi beberapa item yang membantu yang dapat kita gunakan selama pengembangan. Ini tidak akan pernah muncul dalam lingkungan produksi. Mengklik salah satu tab di bagian bawah akan menampilkan informasi tambahan. Mengklik X di sebelah kanan toolbar akan meminimalkannya menjadi kotak kecil dengan ikon CodeIgniter di dalamnya. Jika kita mengkliknya, toolbar akan muncul kembali.

<img width="1457" alt="Screen Shot 2024-03-18 at 10 01 00" src="https://github.com/dellaristasp/08dellarista/assets/134635732/271d5b9e-c9f1-4266-93fd-6cf1b981b1f5">

## Error Pages

Selain itu, CodeIgniter memiliki beberapa halaman kesalahan yang membantu saat kita menemui pengecualian atau kesalahan lain dalam program kita. Buka file app/Controllers/Home.php dan ubah beberapa baris untuk membuat kesalahan (menghapus titik koma atau kurung kurawal harus cukup!). kita akan melihat tampilan seperti ini:

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

# Membangun Aplikasi Pertama kita

**Static Page**

**Controller Page:**

Di dalam direktori app/Controllers, kita akan menemukan file Pages.php yang berisi kode sebagai berikut:

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
<img width="553" alt="Screen Shot 2024-03-18 at 11 05 56" src="https://github.com/dellaristasp/08dellarista/assets/134635732/8262e635-ac0b-4c6f-b236-32292bf8f476">

Buka file rute yang terletak di app/Config/Routes.php.

Tambahkan baris berikut untuk menghubungkan dengan Pages.php di Controllers.

```php
use App\Controllers\Pages;

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
```
<img width="676" alt="Screen Shot 2024-03-18 at 11 06 35" src="https://github.com/dellaristasp/08dellarista/assets/134635732/225e13b1-556f-450c-bf24-cb3c05ef0dde">

**Tampilan**

Di dalam folder baru bernama templates, kita akan menemukan file header.php di dalam folder app/Views.

Isi kode pada header.php:

```html
<!doctype html>
<html>
<head>
    <title>CodeIgniter Tutorial</title>
</head>
<body>
```
<img width="695" alt="Screen Shot 2024-03-18 at 11 31 29" src="https://github.com/dellaristasp/08dellarista/assets/134635732/cd4702e6-b00d-4f0f-9665-bc6e0d98fcc0">

Terdapat footer di app/Views/templates/footer.php

```html
<footer>ini footer</footer>
<em>&copy; 2024</em>
</body>
</html>
```
<img width="298" alt="Screen Shot 2024-03-18 at 11 32 16" src="https://github.com/dellaristasp/08dellarista/assets/134635732/e15042ab-f5cc-4c57-aa78-87c004ee8188">

**Menambahkan Logika ke Kontroler**

Di dalam folder pages di app/Views/, kita akan menemukan dua file bernama home.php dan about.php di dalam app/Views/pages/.

**home.php:**

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Selamat Datang di Halaman Utama</h1>
</body>
</html>
```
<img width="625" alt="Screen Shot 2024-03-18 at 11 18 35" src="https://github.com/dellaristasp/08dellarista/assets/134635732/14fb44a4-c9e3-4ad4-9e8b-015741cb24f2">

**about.php:**

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Halaman Ini</title>
</head>
<body>
    <h1>Tentang Saya</h1>
    <p>Ini adalah halaman tentang situs web.</p>
</body>
</html>
```
<img width="525" alt="Screen Shot 2024-03-18 at 11 19 20" src="https://github.com/dellaristasp/08dellarista/assets/134635732/63ce1b85-66c3-4514-8fa0-c13b7176c50a">

Di dalam file app/controllers/Pages.php:

```php
<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException; // Untuk mengimpor kelas PageNotFoundException

class Pages extends BaseController
{
    public function index()
    {
        // Menampilkan halaman utama (welcome_message.php)
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        // Mengecek apakah halaman yang diminta ada
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Jika tidak ada, lempar PageNotFoundException
            throw new PageNotFoundException($page);
        }

        // Mengatur judul halaman berdasarkan nama halaman
        $data['title'] = ucfirst($page); // Kapitalkan huruf pertama

        // Memuat template header, halaman statis (home, about), dan footer
        return view('templates/header', $data)
            . view('pages/' . $page, $data)
            . view('templates/footer');
    }
}
```
<img width="1213" alt="Screen Shot 2024-03-18 at 11 21 26" src="https://github.com/dellaristasp/08dellarista/assets/134635732/5eceb704-3a1a-485a-9f64-108701664563">

Buka URL: http://localhost:8080/home,
kita akan melihat tampilan yang terhubung ke Kontroler Pages.php (metode public function view($page = 'home')) yang diarahkan pada file Route.php. Seperti : 
<img width="1465" alt="Screen Shot 2024-03-18 at 11 35 43" src="https://github.com/dellaristasp/08dellarista/assets/134635732/95781832-df96-436e-873a-261ed24b8c5d">
<img width="846" alt="Screen Shot 2024-03-18 at 11 36 31" src="https://github.com/dellaristasp/08dellarista/assets/134635732/98dceacc-0b2d-43fa-ad85-beac96f0d4a0">

