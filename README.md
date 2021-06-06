![pickdress](https://user-images.githubusercontent.com/55394643/120928939-fcd2a700-c710-11eb-9eb4-e8e123b3edac.png)

# Paralel 1

# Kelompok 8 
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
<br>![usecase2](https://user-images.githubusercontent.com/55395896/120927008-7bc3e180-c709-11eb-87f0-c600006645ce.png)</br>

2. Activity Diagram
### Create account
![signup dg](https://user-images.githubusercontent.com/55395896/120924861-fa1b8600-c6ff-11eb-96c4-f70b76a06c4c.png)

### Login
![login](https://user-images.githubusercontent.com/55395896/120924878-1cad9f00-c700-11eb-9037-b63b4a9a2a3a.png)

### View Dress
![view](https://user-images.githubusercontent.com/55395896/120929510-82efed00-c713-11eb-9adf-c3a6791157d1.png)


### Add to Favorite
![addfav png2](https://user-images.githubusercontent.com/55395896/120929522-8c795500-c713-11eb-9633-56f84e187c67.png)


### Remove from Favorite
![delfav1](https://user-images.githubusercontent.com/55395896/120929488-6e135980-c713-11eb-8a42-93344d9f6d83.png)



### edit profile



3. Class Diagram

![class](https://user-images.githubusercontent.com/55395896/120925164-85494b80-c701-11eb-9baf-50252a8b235e.png)


4. Entity Relationship Diagram
![Untitled Diagram-Page-1](https://user-images.githubusercontent.com/55394643/120926977-6484f400-c709-11eb-960d-9d63e4ebcb0d.jpg)

6. Arsitektur Sistem
![Untitled Diagram-Page-2 (1)](https://user-images.githubusercontent.com/55394643/120927179-23d9aa80-c70a-11eb-8b31-a85319675911.jpg)


8. Fungsi Utama yang Dikembangkan
    - Pada fitur Home Page, terdapat beberapa outfit pilihan yang sedang menjadi tren sehingga user dapat mengetahui outfit apa saja yang sedang menjadi tren.
    - Pada fitur Categories, terdapat kategori outfit yang bervariasi. User dapat memilih kategori yang diinginkan pada daftar kategori dan melihat kumpulan kombinasi baju pada kategori yang diinginkan.
    - Pada fitur Favorite, user yang sudah log in dapat menyimpan outfit yang disukai sehingga user dapat melihat lagi outfit yang sudah tersimpan.
    - Pada fitur Delete, user dapat menghapus outfit yang pernah disukai.
    - Pada fitur Sign Up, user dapat membuat akun agar dapat menggunakan situs seara lebih lengkap dengan mendaftarkan e-mail dan password.
    - Pada fitur Log In, user yang telah memiliki akun dapat menggunakan situs seara lebih lengkap dengan mendaftarkan e-mail dan password.
9. Fungsi CRUD
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
    <br>[PickDress](http://pickdress.herokuapp.com)</br>

# Testing (test case)
  #### User Register
  ![Screenshot (144)](https://user-images.githubusercontent.com/78713826/120929624-ee39bf00-c713-11eb-87c6-88a8a9af39f8.png)

  #### User Login
  ![Screenshot (143)](https://user-images.githubusercontent.com/78713826/120929617-e843de00-c713-11eb-88d9-b062b7962066.png)

  #### User Favorit
  ![Screenshot (145)](https://user-images.githubusercontent.com/78713826/120929631-f3970980-c713-11eb-995e-0ad2f9c29313.png)

  #### User Profile
  ![Screenshot (146)](https://user-images.githubusercontent.com/78713826/120929639-f98cea80-c713-11eb-950c-05cb6396ffe5.png)


  
# Saran untuk Pengembangan Selanjutnya
Situs yang kami buat masih jauh dari sempurna dikarenakan waktu dan keterbatasan di sana-sini. Oleh karena itu, selanjutnya ada beberapa fitur yang kami harap dapat kami terapkan ke dalam situs kami, yaitu :
1. User dapat melakukan mix and match sesuai keinginan. Dengan fitur ini, user dapat mengganti set outfit yang ada dengan selera user masing-masing mulai dari aksesoris rambut hingga alas kaki. Bahkan user dapat mengunggah outfit yang dimilikinya untuk kemudian dipadukan dalam fitur ini.
2. Fitur forum yang dapat digunakan oleh user untuk berdiskusi terkait fashion, baik berupa saran, kritik, ataupun rekomendasi.
3. Fitur most favorite outfits yang akan menampilkan beberapa set outfit yang paling banyak disukai oleh user sehingga user lain dapat menjadikan set tersebut sebagai bahan rekomendasi.
4. Fitur share yang memungkinkan user untuk membagikan outfit yang diinginkan kepada orang lain.
5. Fitur search & filter dapat digunakan user untuk mencari outfit sesuai dengan kata kunci yang dimasukkan. User bahkan dapat menggunakan filter untuk menyaring outfit dengan kriteria yng diinginkan.
