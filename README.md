# Laravel  + JWT Auth 
Sebuah Project yang di buat menggunakan Framework Laravel 
dan menggunakan JWT Auth sebagai implementasi penggunaan REST API.
Untuk bagian frontend saya menggunakan React dan Axios untuk memperoses data dari API Laravel, Dan tentu menggunakan Tailwind sebagai frontend css saja.


## Spesifikasi 
| Versi Php | Versi Composer| Description                |
| :-------- | :-------     | :------------------------- |
| `8.3.7`   | `2.7.1`      | **Required**. Harus Menggunakan Php 8.3 |


## Installasi

Install jwt-auth with composer install

```bash
  composer install
  cd jwt-auth
```
> **INFO**: 
Jika Kalian Menggunakan Laragon Jalankan Langsung dengan Menuliskan halaman Urlnya misalkan : `nama-project.test` dan Jika Menggunakan XAMPP dan `php artisan serve` cukup jalankan `localhost:8000` 


    
## API Reference

#### Post User Baru
```http
   POST: /api/register
```
|Key | Value| Description|
|:-------| :------| :---------|
|`name ` | `required`| `Harus Di Isi`|
|`email` | `required`| `Harus Di Isi`|
|`password`|`required`|`Harus Di Isi`|

#### Post User Baru
```http
   POST: /api/login
```
|Key | Value| Description|
|:-------| :------| :---------|
|`name ` | `required`| `Harus Di Isi`|
|`email` | `required`| `Harus Di Isi`|
|`password`|`required`|`Harus Di Isi`|

#### Get all User

```http
  GET: /api/user
```

| Key       | Value    |               
| :-------- | :------- | 
| `Accept`  | `application/json`
| `Content-Type` |`application/json`
| `Authorization`  | Bearer `<spasi>` Token

**IMPORTANT:**
>Jangan Lupa untuk merubah Url arahanya sesuai dengan Web server
Yang di Pakai ! Kalau Nggak bakalan error. 


