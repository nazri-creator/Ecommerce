# 🛒 Laravel Ecommerce

## 📌 Deskripsi
Laravel Ecommerce adalah aplikasi sederhana berbasis Laravel yang dibuat sebagai tugas kuliah. Project ini berfokus pada fitur dasar Create dan Read (CRUD sederhana) untuk produk, termasuk pengelolaan variant, image, dan size pada setiap produk.

---

## 🚀 Fitur

- Menampilkan daftar produk (Read)
- Menambahkan produk baru (Create)
- Detail produk
  - Variant produk
  - Size produk
  - Image produk
- Tampilan menggunakan Tailwind CSS

---

## 📸 Screenshot

### Halaman Product
![Product](public/img/product.png)

### Detail Produk
![Detail](public/img/detail.png)

---
## 🛠️ Tech Stack

- Laravel
- PHP
- Blade Template
- Tailwind CSS
- MySQL
- Composer
- NPM

---

## ⚙️ Instalasi & Setup

```bash
git clone https://github.com/username/laravel-ecommerce.git
cd laravel-ecommerce

composer install
npm install

cp .env.example .env
php artisan key:generate

php artisan migrate

npm run dev
php artisan serve