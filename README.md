# Laravel 8 - Barbatos Swalayan

## Screenshots

![preview img](/preview.png)

## Run Locally

Nama Kelompok : Barbatos

Reza Marchyana - 203040079 - Leader - Frontend Developer

Agung Septiana - 203040102 - Backend Developer

Yudha Permana - 203040101 - Backend Developer

Ray Gineung Pratidina Zunaidi - 203040099 - Frontend Developer

Raihan Anhar - 203040113 - Frontend Developer


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
