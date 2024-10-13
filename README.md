- Depedency

    1. PHP Version : > 7.3
    2. Laravel Framework Version : > 8.75
    3. Menggunakan basis data MYSQL

- Langkah Instalasi

    1. Clone project repository ini.
    2. Jalankan “composer install” untuk menginstall dependensi PHP.
    3. Ubah nama file .env.example menjadi .env.
    4. Generate APP KEY dengan perintah “php artisan key:generate”.
    5. Buat database terlebih dahulu. Setelah itu sesuaikan port, username, dan password database pada file .env. Jalankan perintah "php artisan migrate --seed" di terminal atau CMD project untuk membuat kolom dari migrasi di database dan menambahkan data pada database seeder agar dapat digunakan untuk login.
    7. Jalankan server dengan perintah php artisan serve.
    8. Mulailah login dengan menggunakan :
       
           email : nusalendraa@gmail.com
           password : password

- Penjelasan Project

  Pada project ini, saya telah membuat dua tabel utama, yaitu guru dan siswa, dengan relasi one-to-many. Relasi ini mengindikasikan bahwa satu guru dapat memiliki banyak siswa, sementara seorang siswa hanya berhubungan dengan satu guru. Selain itu, saya menggunakan Laravel Breeze sebagai sistem autentikasi yang disediakan oleh Laravel. Laravel Breeze memberikan solusi autentikasi dasar yang cepat dan ringan untuk login dan registrasi. Saya juga menggunakan SweetAlert untuk menampilkan pop-up peringatan dan error handling.

- Database Design
  ![drawSQL-image-export-2024-10-13 (1)](https://github.com/user-attachments/assets/64d3e95e-1432-4c8e-a727-b960e4ccc934)

- Screenshot Aplikasi

  1. Tampilan Login
  ![Screenshot from 2024-10-13 11-42-25](https://github.com/user-attachments/assets/52903510-f591-4479-90b1-e32fd3b1d914)
  2. Tampilan Register
  ![Screenshot from 2024-10-13 11-44-29](https://github.com/user-attachments/assets/1bec5c23-362f-43a6-b285-98d1a10e680c)
  3. Tampilan Index Guru
  ![image](https://github.com/user-attachments/assets/6ded0e3b-fbd4-43b2-9a7e-e0eb30be371e)
  4. Tampilan Create Form Guru
  ![image](https://github.com/user-attachments/assets/24be8488-f391-41f2-b5e2-491366cdf431)
  5. Tampilan Edit Form Guru
  ![image](https://github.com/user-attachments/assets/e3be9bb1-2e2a-4821-a1ba-27f379fcb3b1)
  6. Tampilan Detail Guru
  ![image](https://github.com/user-attachments/assets/3e83c9c0-0682-43fa-adf7-4bc63f9b69c8)
  7. Tampilan Create Form Siswa
  ![image](https://github.com/user-attachments/assets/157682fc-47a9-40b6-942b-efe55924fc1c)
  8. Tampilan Edit Form Siswa
  ![image](https://github.com/user-attachments/assets/9ea730f8-3b46-46e7-bd2f-8854af229e26)
  
      
