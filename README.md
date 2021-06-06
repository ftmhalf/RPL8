# PickDress


# Anggota Kelompok 8 (Paralel 1):
1. Fatimah Alfiatul Jannah (G64190014) Back End Developer
2. Nadira Nazla (G64190035) UI/UX Designer
3. Fathin Humaira (G64190070) Front End Developer

# Asisten Praktikum:
1. Indah Puspita
2. Qoriatul Khairunnisa

# About The App
PickDress adalah situs yang menyediakan ide kepada pengguna khususnya wanita, baik remaja maupun dewasa mengenai busana apa yang akan dipakai. Terdapat beribu-ribu mix & match busana yang tersedia mulai dari untuk keperluan acara formal maupun non-formal. Situs ini sangat mudah digunakan, pengguna hanya perlu mengunjungi kategori yang sesuai dengan kebutuhan lalu PickDress akan menampilkan berbagai macam ide berpakaian.

# User Analysis
User story
1. Sebagai [pengunjung website], agar dapat melihat rekomendasi kombinasi baju sesuai kategori yang saya inginkan, saya dapat memilih kategori yang saya inginkan pada daftar kategori dan melihat kumpulan kombinasi baju pada kategori yang saya inginkan.
2. Sebagai [pengguna yang belum terdaftar], agar dapat menggunakan fitur aplikasi secara lebih lengkap, saya dapat membuat akun dengan cara mengetikkan nama email serta password dalam kotak sign up yang sudah disediakan.
3. Sebagai [pengguna terdaftar], agar dapat menggunakan fitur aplikasi secara lebih lengkap, saya dapat login dengan cara mengetikkan nama email serta password dalam kotak sign up yang sudah disediakan.
4. Sebagai [pengguna terdaftar], agar dapat sewaktu-waktu melihat kembali kombinasi baju yang saya sukai, saya dapat menambahkan kombinasi baju yang saya sukai ke dalam daftar favorit.
5. Sebagai [pengguna terdaftar], agar dapat mangatur kombinasi baju yang saya sukai, saya dapat menghapus kombinasi baju yang saya tidak lagi saya sukai dari dalam daftar favorit saya.
6. Sebagai [pengguna website], agar dapat mengirimkan saran untuk PickDress, saya dapat mengisi survey yang disediakan PickDress.

# Spesifikasi Teknis Lingkungan Pengembangan
1. Hardware 
  - Processor: Intel Core i5-8250U 1.6GHz 
  - Memory: 4 GB DDR4 
  - Graphics Card: NVIDIA GeForce MX150 with 2 GB VRAM 
  - Storage: 1000 GB HDD 

2. Software 
  - Text Editor: Sublime Text 3 dan vscode 
  - Operating System: Windows 10 
  - Database: MySQL 
  - Server: Apache 

3. More
  - Collaboration Platform: Github, Trello 
  - PHP, Javascript, CSS, HTML, Bootstrap
  - Visual Editing: Figma

# Hasil dan Pembahasan
1. Use Case Diagram
![UseCasePD](https://user-images.githubusercontent.com/55395896/120894098-ef4dec00-c640-11eb-8a92-375cf8db6241.png)

2. Activity Diagram
##Create account
![signup dg](https://user-images.githubusercontent.com/55395896/120924861-fa1b8600-c6ff-11eb-96c4-f70b76a06c4c.png)
##Login
![Uploading login.png…]()



3. Class Diagram
4. Entity Relationship Diagram
5. Arsitektur Sistem
6. Fungsi Utama yang Dikembangkan
    - Pada fitur Home Page, terdapat beberapa outfit pilihan yang sedang menjadi tren sehingga user dapat mengetahui outfit apa saja yang sedang menjadi tren.
    - Pada fitur kategori, terdapat kategori outfit yang bervariasi. User dapat memilih kategori yang diinginkan pada daftar kategori dan melihat kumpulan kombinasi baju pada kategori yang diinginkan.
    - Pada fitur pencarian, user dapat mencari outfit dengan keyword sesuai dengan outfit yang diinginkan.
    - Pada fitur Favorite, user yang sudah log in dapat menyimpan outfit yang disukai sehingga user dapat melihat lagi outfit yang sudah tersimpan.
    - Pada fitur Delete, user dapat menghapus outfit yang pernah disukai.
    - Pada fitur Sign Up, user dapat membuat akun agar dapat menggunakan situs seara lebih lengkap dengan mendaftarkan e-mail dan password.
    - Pada fitur Log In, user yang telah memiliki akun dapat menggunakan situs seara lebih lengkap dengan mendaftarkan e-mail dan password.
7. Fungsi CRUD
  - Create
    - User: User membuat akun PickDress dengan menginput username, email, dan password
    - Admin: Admin membuat dress baru dengan menginput judul dress, gambar, deskripsi, kategori, dan keyword yang sesuai
  - Read
    - User: User dapat melihat berbagai macam dress sesuai kategori yang sudah di-fetch dari database
    - Admin: Admin dapat membaca seluruh data kecuali password user yang sudah dienkripsi
  - Update
    - User: User dapat mengupdate username dan email dengan cara mengeditnya di halaman profile
    - Admin: Admin dapat mengupdate list dress dan user
  - Delete
    - User: User dapat menghapus dress yang tadinya sudah dimasukkan ke halaman favorit
    - Admin: Admin dapat menghapus list dress

# Hasil Implementasi
1. Screenshot sistem
2. Link Aplikasi

# Testing (test case)
  #### User Register
  ![Screenshot (120)](https://user-images.githubusercontent.com/78713826/120924083-1f0dfa00-c6fc-11eb-9ff5-0496092c08f5.png)
  #### User Login
  ![Screenshot (119)](https://user-images.githubusercontent.com/78713826/120924053-f554d300-c6fb-11eb-82bd-09845a8ff5a2.png)
  #### User Favorit
  ![Screenshot (122)](https://user-images.githubusercontent.com/78713826/120924214-b3785c80-c6fc-11eb-8f28-0fede8fd6a11.png)
  #### User Profile
  ![Screenshot (124)](https://user-images.githubusercontent.com/78713826/120924512-4b2a7a80-c6fe-11eb-8bf4-9b65ea90dc37.png)

  
# Saran untuk Pengembangan Selanjutnya
1. 
