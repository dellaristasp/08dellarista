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
## Ekstensi PHP berikut sebaiknya diaktifkan pada server kita:
mysqlnd (jika kita menggunakan MySQL)
curl (jika kita menggunakan CURLRequest)
imagick (jika kita menggunakan kelas Image ImageMagickHandler)
gd (jika kita menggunakan kelas Image GDHandler)
simplexml (jika kita memformat XML)

# Kredit
Kredit
CodeIgniter awalnya dikembangkan oleh EllisLab. Kerangka kerja ini ditulis untuk kinerja di dunia nyata, dengan banyak kelas pustaka, helper, dan sub-sistem asli dipinjam dari basis kode ExpressionEngine. Selama bertahun-tahun, dikembangkan dan dipelihara oleh EllisLab, Tim Pengembangan ExpressionEngine, dan sekelompok anggota komunitas yang disebut Tim Reactor.

# Installasi
## Installasi Manual
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
## Ringkasan

Tutorial ini akan mengenalkan kita pada framework CodeIgniter4 dan prinsip dasar arsitektur MVC. kita akan diajak membangun sebuah aplikasi CodeIgniter dasar langkah demi langkah.

Jika kita belum familiar dengan PHP, tidak masalah! kita dapat memulai dengan mempelajari Tutorial PHP dari W3Schools sebelum melanjutkan.

Dalam tutorial ini, kita akan membuat sebuah aplikasi berita sederhana. kita akan memulai dengan menulis kode yang dapat memuat halaman statis, kemudian membuat bagian berita yang membaca berita dari database, dan terakhir menambahkan formulir untuk membuat berita baru di database.

Tutorial ini akan fokus pada hal-hal berikut:
- Dasar-dasar Model-View-Controller (MVC)
- Dasar-dasar routing
- Validasi formulir
- Melakukan kueri dasar ke database menggunakan Model CodeIgniter

## Langkah Pertama: Instalasi CodeIgniter

Kita bisa mengunduh CodeIgniter secara manual, tapi lebih baik menggunakan cara yang direkomendasikan yaitu dengan menginstal paket AppStarter melalui Composer. Cukup ketik perintah berikut di baris perintah:

```
composer create-project codeigniter4/appstarter myCI4app
```
<img width="1120" alt="Screen Shot 2024-03-18 at 09 39 39" src="https://github.com/dellaristasp/08dellarista/assets/134635732/0c4ed58e-874f-4e08-a6fa-56fc5aed01a9">

## Menjalankan Aplikasi

## Menyiapkan Mode Pengembangan

Secara default, CodeIgniter akan berjalan di mode produksi. Kita akan mengubahnya menjadi mode pengembangan agar lebih nyaman saat kita mengembangkan aplikasi. Caranya adalah dengan menyalin atau mengganti nama file `env` menjadi `.env`, lalu buka file tersebut dan ubah baris `CI_ENVIRONMENT` menjadi `development`.

<img width="509" alt="Screen Shot 2024-03-18 at 09 51 51" src="https://github.com/dellaristasp/08dellarista/assets/134635732/e53d96be-09f9-4703-943f-f318685855b4">

## Memulai Server

kita bisa langsung melihat aplikasi kita di browser dengan menjalankan server bawaan PHP menggunakan perintah:

```
php spark serve
```
<img width="794" alt="Screen Shot 2024-03-18 at 09 42 19" src="https://github.com/dellaristasp/08dellarista/assets/134635732/db42a586-404e-4a4a-a2da-9a84da7864d5">

## Halaman Selamat Datang

Kunjungi URL berikut di browser kita:

[http://localhost:8080](http://localhost:8080)

<img width="878" alt="Screen Shot 2024-03-18 at 09 46 29" src="https://github.com/dellaristasp/08dellarista/assets/134635732/18278084-5ed1-4f31-b161-926446fb0a8e">

kita akan disambut dengan halaman selamat datang yang menkitakan bahwa aplikasi kita sudah berjalan dengan baik.

## Debugging

### Debug Toolbar

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

# Static Page

## Controller Page

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

## View

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

## Menambahkan Logika ke Controller

Di dalam folder pages di app/Views/, kita akan menemukan dua file bernama home.php dan about.php di dalam app/Views/pages/.

### home.php

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

### about.php

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
lalu kita akan melihat tampilan yang terhubung ke Kontroler Pages.php (metode public function view($page = 'home')) yang diarahkan pada file Route.php. Seperti : 
<img width="1465" alt="Screen Shot 2024-03-18 at 11 35 43" src="https://github.com/dellaristasp/08dellarista/assets/134635732/95781832-df96-436e-873a-261ed24b8c5d">
<img width="846" alt="Screen Shot 2024-03-18 at 11 36 31" src="https://github.com/dellaristasp/08dellarista/assets/134635732/98dceacc-0b2d-43fa-ad85-beac96f0d4a0">

# News Section
## Buat Database dengan nama ci4
## Buat tabel :
```
CREATE TABLE news (
    id INT AUTO_INCREMENT,
    title VARCHAR(128) NOT NULL,
    description VARCHAR(128) NOT NULL,
    body TEXT NOT NULL,
    PRIMARY KEY (id)
);
```
```
INSERT INTO news (title, description, body) VALUES
('Peluncuran Novel Terbaru', 'Novel fiksi dari penulis muda', 'Sebuah novel fiksi terbaru yang ditulis oleh penulis muda akan diluncurkan minggu depan di sebuah acara khusus di toko buku lokal.'),
('Wawancara dengan Pemenang Hadiah Sastra', 'Penulis menerima penghargaan prestisius', 'Kami akan mewawancarai pemenang hadiah sastra terkemuka minggu depan untuk mendiskusikan karyanya dan pengaruhnya pada dunia sastra.'),
('Rilis Film Dokumenter Terbaru', 'Dokumenter tentang lingkungan hidup', 'Film dokumenter terbaru yang menyoroti isu-isu lingkungan hidup akan dirilis secara online minggu depan. Film ini telah mendapatkan banyak perhatian sejak trailer pertamanya dirilis.');
```
Maka tampilannya akan menjadi seperti ini di database : 
<img width="1131" alt="Screen Shot 2024-03-18 at 11 49 47" src="https://github.com/dellaristasp/08dellarista/assets/134635732/13413fdc-382f-4409-a629-15d7d6f442af">

Hubungkan ke Database pada file .env hilangkan comment (#) dan ganti database

```
#--------------------------------------------------------------------
# DATABASE
#--------------------------------------------------------------------

database.default.hostname = localhost
database.default.database = ci4
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.DBPrefix =
database.default.port = 3306
```
<img width="567" alt="Screen Shot 2024-03-18 at 11 54 24" src="https://github.com/dellaristasp/08dellarista/assets/134635732/aab4b6f1-2f85-459f-99f7-5ed1471d2dc8">

Buat Model News Buka direktori app/Models dan buat file baru bernama NewsModel.php dan tambahkan kode berikut

```
<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
}
```

## Tambahkan Metode `getNews()` ke dalam Model

Untuk mengambil semua posting dari basis data kita, kita membutuhkan sebuah metode dalam model kita. Untuk melakukan ini, kita akan menggunakan lapisan abstraksi basis data yang disertakan dengan CodeIgniter - Query Builder - yang digunakan dalam kelas CodeIgniter\Model. Hal ini memungkinkan kita untuk menulis 'query' sekali dan membuatnya berfungsi pada semua sistem basis data yang didukung. Kelas Model juga memungkinkan kita untuk dengan mudah bekerja dengan Query Builder dan menyediakan beberapa alat tambahan untuk membuat pengolahan data menjadi lebih sederhana. Tambahkan kode berikut ke dalam model Anda.

```php
public function getNews($slug = false)
{
    if ($slug === false) {
        return $this->findAll();
    }

    return $this->where(['slug' => $slug])->first();
}
```
<img width="789" alt="Screen Shot 2024-03-18 at 12 57 19" src="https://github.com/dellaristasp/08dellarista/assets/134635732/cd5d8fd7-5578-4448-adb5-e89990cf7ae8">

Dengan kode ini, Anda dapat melakukan dua kueri yang berbeda. Anda dapat mengambil semua catatan berita, atau mendapatkan sebuah item berita berdasarkan slug-nya. Anda mungkin telah memperhatikan bahwa variabel $slug tidak di-escape sebelum menjalankan kueri; Query Builder akan melakukan ini untuk Anda.

Dua metode yang digunakan di sini, yaitu `findAll()` dan `first()`, disediakan oleh kelas CodeIgniter\Model. Mereka sudah tahu tabel mana yang akan digunakan berdasarkan properti $table yang kita atur di kelas NewsModel sebelumnya. Mereka adalah metode pembantu yang menggunakan Query Builder untuk menjalankan perintah mereka pada tabel saat ini, dan mengembalikan sebuah array hasil dalam format pilihan Anda. Dalam contoh ini, `findAll()` mengembalikan sebuah array dari array.

## Menambahkan Routing Rules Ubah file app/Config/Routes.php , sehingga terlihat seperti berikut:
```
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Pages;
use App\Controllers\News; // Tambah baris ini

$routes->get('news', [News::class, 'index']);           // Tambah baris ini
$routes->get('news/(:segment)', [News::class, 'show']); // Tambah baris ini

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
```
<img width="769" alt="Screen Shot 2024-03-18 at 13 00 41" src="https://github.com/dellaristasp/08dellarista/assets/134635732/b5677388-a58b-4340-8acb-31ac12db2431">

##  Tambahkan News Controller - Buat controller baru di `app/Controllers/News.php` .
<img width="843" alt="Screen Shot 2024-03-18 at 13 08 25" src="https://github.com/dellaristasp/08dellarista/assets/134635732/6393f7fc-9fdd-4e5c-a2f2-d42d1ccea6de">

##  Buat tampilan untuk `app/Views/news/index.php`
<img width="814" alt="Screen Shot 2024-03-18 at 13 10 32" src="https://github.com/dellaristasp/08dellarista/assets/134635732/8abb9f59-e9b6-4226-a95b-8aa3a9bbcc74">

## Lengkapi Method `News::show()` pada `app/controllers/News.php`
<img width="783" alt="Screen Shot 2024-03-18 at 13 11 27" src="https://github.com/dellaristasp/08dellarista/assets/134635732/a570916f-12ee-403f-a4ed-6e098cafa2c7">

## Membuat tampilan terkait di `app/Views/news/view.php`
<img width="774" alt="Screen Shot 2024-03-18 at 13 12 22" src="https://github.com/dellaristasp/08dellarista/assets/134635732/58c489d0-f9de-45b4-a6f9-ede9d3458c8d">

# Create New Items
## 1. Aktifkan Filter CSRF
Buka file `app/Config/Filters.php` dan perbarui $methods properti seperti berikut:
<img width="552" alt="Screen Shot 2024-03-18 at 13 16 53" src="https://github.com/dellaristasp/08dellarista/assets/134635732/d953a758-225d-41bd-a3e5-f0d29edbebc7">

## 2. Menambahkan Routing Rules
Menambahkan rule tambahan ke file `app/Config/Routes.php` .
<img width="737" alt="Screen Shot 2024-03-18 at 13 18 03" src="https://github.com/dellaristasp/08dellarista/assets/134635732/fc8254f6-ff83-40db-bc12-4dbd62ee888e">

## 3. Membuat form
Buat tampilan baru di `app/Views/news/create.php` :
<img width="828" alt="Screen Shot 2024-03-18 at 13 19 06" src="https://github.com/dellaristasp/08dellarista/assets/134635732/80b979fb-d3cd-451e-8e06-6f4bd1404fba">

## 4. News Controller
Tambahkan `News::new()` pada `app/controllers/News.php` untuk Menampilkan Formulir.
Pertama, buatlah metode untuk menampilkan form HTML yang telah buat.
<img width="637" alt="Screen Shot 2024-03-18 at 13 38 25" src="https://github.com/dellaristasp/08dellarista/assets/134635732/1fe86773-4282-4c28-997e-442f0e96f01d">

## 5. Tambahkan `News::create()` pada `app/controllers/News.php` untuk Membuat Items Berita
<img width="747" alt="Screen Shot 2024-03-18 at 13 40 31" src="https://github.com/dellaristasp/08dellarista/assets/134635732/ef1ec8fb-cc8e-4d9a-aadf-e54ce5e3672e">

## 6. Buat tampilan di `app/Views/news/success.php` dan tulis pesan sukses.
<img width="359" alt="Screen Shot 2024-03-18 at 13 41 36" src="https://github.com/dellaristasp/08dellarista/assets/134635732/5702d7e0-d8ae-4b7e-a9fb-9f194f479108">

## 7. Edit `NewsModel` → `app/Models/NewsModel.php` untuk memberikannya daftar bidang yang dapat diperbarui di `$allowedFields` properti.
From :
<img width="552" alt="Screen Shot 2024-03-18 at 13 45 17" src="https://github.com/dellaristasp/08dellarista/assets/134635732/099d669e-16b4-46f4-ba54-98fb156ca797">
To :
<img width="830" alt="Screen Shot 2024-03-18 at 13 45 45" src="https://github.com/dellaristasp/08dellarista/assets/134635732/fb3e4b39-c52e-4dfb-bf89-1ab6c45ba211">

## HASILNYA :
<img width="526" alt="Screen Shot 2024-03-18 at 13 48 02" src="https://github.com/dellaristasp/08dellarista/assets/134635732/1760d3b0-1027-45da-b2f7-98e5fad38d1a">

# CodeIgniter4 Overview
## AutoLoading
Namespace pada CodeIgniter 4 adalah cara untuk mengorganisir kelas-kelas, fungsi, dan konstanta ke dalam ruang nama yang terisolasi.

- Memeriksa konfigurasi namespace
  ```php spark namespaces```
<img width="843" alt="Screen Shot 2024-03-18 at 13 58 54" src="https://github.com/dellaristasp/08dellarista/assets/134635732/e95fdb31-446f-416e-bce3-37c65ada82b1">

- Terdapat custom Namespace atau membuat `Namespace` baru. Masuk ke `app/Config/autoload.php`
  ```
  public $psr4 = [
  APP_NAMESPACE => APPPATH, // For custom app namespace
  'Config'      => APPPATH . 'Config',
  // Pembahasan CodeIgniter4 poin 3 AutoLoad
  'MyApp'       => APPPATH . 'MyApp' // Custom Namespace baru
    ];
  ```

- Buat Folder `MyApp` pada Folder `app/` dan file `MyClass.php` didalam folder `MyApp`. Isi file `MyClass.php` :
```
  <?php

namespace App\MyApp;

class MyClass
{
    public function sayHello()
    {
        echo "Hello from MyClass in MyApp!";
    }
}
```

- Lalu cek namespace :
<img width="844" alt="Screen Shot 2024-03-18 at 14 08 44" src="https://github.com/dellaristasp/08dellarista/assets/134635732/e5b644a9-7600-4d2c-ad49-b2e3982f42c1">
Telah muncul namespace baru yaitu `MyApp` yang telah kita buat tadi.

# Factories
Factories atau Pabrik adalah alat yang memungkinkan pengguna membuat objek atau instance dari kelas-kelas tertentu secara dinamis.
- Command Line untuk menghapus file cache
```
php spark cache:clear
```
<img width="612" alt="Screen Shot 2024-03-18 at 14 15 11" src="https://github.com/dellaristasp/08dellarista/assets/134635732/38172cac-1fd6-4487-b309-55b4ea5d3456">

## - Cara Mengaktifkan Konfigurasi Caching Batalkan komentar pada kode berikut di `public/index.php` : ##

<img width="670" alt="Screen Shot 2024-03-18 at 14 17 25" src="https://github.com/dellaristasp/08dellarista/assets/134635732/53780b66-4546-4fba-966f-e0e6aa0aef82">
To :

```
<?php
// Check PHP version.
$minPhpVersion = '7.4'; // If you update this, don't forget to update `spark`.
if (version_compare(PHP_VERSION, $minPhpVersion, '<')) {
    $message = sprintf(
        'Your PHP version must be %s or higher to run CodeIgniter. Current version: %s',
        $minPhpVersion,
        PHP_VERSION
    );

    exit($message);
}
```
```
// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Ensure the current directory is pointing to the front controller's directory
if (getcwd() . DIRECTORY_SEPARATOR !== FCPATH) {
    chdir(FCPATH);
}

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */
```
```
// Load our paths config file
// This is the line that might need to be changed, depending on your folder structure.
require FCPATH . '../app/Config/Paths.php';
// ^^^ Change this line if you move your application folder

$paths = new Config\Paths();

// Location of the framework bootstrap file.
require rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';

// Load environment settings from .env files into $_SERVER and $_ENV
require_once SYSTEMPATH . 'Config/DotEnv.php';
(new CodeIgniter\Config\DotEnv(ROOTPATH))->load();

// Define ENVIRONMENT
if (!defined('ENVIRONMENT')) {
    define('ENVIRONMENT', env('CI_ENVIRONMENT', 'development'));
}
```
```
// Pembahasan CodeIgniter4 Overview Poin Factories
// Load Config Cache
$factoriesCache = new \CodeIgniter\Cache\FactoriesCache();
$factoriesCache->load('config');
// ^^^ Uncomment these lines if you want to use Config Caching.
// ...

/*
 * ---------------------------------------------------------------
 * GRAB OUR CODEIGNITER INSTANCE
 * ---------------------------------------------------------------
 *
 * The CodeIgniter class contains the core functionality to make
 * the application run, and does all the dirty work to get
 * the pieces all working together.
 */

$app = Config\Services::codeigniter();
$app->initialize();
$context = is_cli() ? 'php-cli' : 'web';
$app->setContext($context);
```
```
/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is set up, it's time to actually fire
 * up the engines and make this app do its thang.
 */

$app->run();

// Pembahasan CodeIgniter4 Overview Poin Factories
// Save Config Cache
$factoriesCache->save('config');
// ^^^ Uncomment this line if you want to use Config Caching.
// ...

// Exits the application, setting the exit code for CLI-based applications
// that might be watching.
exit(EXIT_SUCCESS);
```

# Controllers
<img width="483" alt="Screen Shot 2024-03-18 at 14 26 28" src="https://github.com/dellaristasp/08dellarista/assets/134635732/a61160c1-2252-4f82-a986-e431273b7fff">
Misalnya, dalam file `Controllers News.php`, saya berada pada kelas News yang terhubung dengan rute `$routes->get('news', [News::class, 'index']);` dalam file `Route.php`. Di dalam metode `index()` dari kelas ini, perintah `return view('news/index')` terhubung dengan folder templates yang terdapat di dalam direktori Views untuk menampilkan header dan footer. Ini merujuk pada pemanggilan file `index.php`.

#  URI Routing
Pada file `app/Config/Routes.php` terdapat route yang akan dijalankan atau ditetapkan, diantaranya :
```
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
```
## Contoh Basic Routing
### `app/Config/Routes/php`

  <img width="624" alt="Screen Shot 2024-03-18 at 14 24 18" src="https://github.com/dellaristasp/08dellarista/assets/134635732/75ab34b9-be78-4401-a139-210f02dc0ebb">
  
### Menuju ke `app/controllers/News.php`

# Working with HTTP Requests
## Apa itu HTTP?
HTTP adalah singkatan dari HyperText Transfer Protocol, yang merupakan protokol yang digunakan untuk pertukaran data di web.
- Request Contoh pada Browser : Blok terlebih dahulu misal teks, lalu tekan shorcut CTRL + SHIFT + I pilih tab Network → Refresh Halaman → Pilih request yang ada.
```
GET / HTTP/1.1
Host codeigniter.com
Accept: text/html
User-Agent: Chrome/46.0.2490.80
```
