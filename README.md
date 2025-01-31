# Laravel 8 - Barbatos Swalayan

## Screenshots

![preview img](/preview.png)

Tema : Market Place 

Nama Aplikasi : Swalayan

Tentang Aplikasi : Aplikasi kami yaitu "Swalayan" merupakan aplikasi yang bergerak dalam bidang Market Place atau jual / beli barang. aplikasi ini memberikan fitur yang nantinya user bisa melakukan penjualan dan juga pembelian barang, ada pula admin yang mengatur user - user yang sudah terdaftar. nantinya user bisa memasukan barang ke keranjang dan langsung membelinya, lalu user juga bisa melakukan metode pembayaran secara non - tunai.


## Run Locally



Clone the project

```bash
  git clone https://github.com/RezaMarchyana203040079/barbatos_project project-name
```

Go to the project directory

```bash
  cd project-name
```

-   Copy .env.example file to .env and edit database credentials there

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan artisan migrate:fresh --seed
```


tambahkan folder images yang didalamnya ada folder images, products, categories, slides di folder storage -> app -> public
```bash
    php artisan storage:link
```


#### Login

-   email = admin@example.com
-   password = 123
