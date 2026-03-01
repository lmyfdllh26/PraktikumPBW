# Park Jong Seong Portfolio Website

## 📌 Deskripsi Project

Project ini merupakan website portofolio statis yang dibuat menggunakan HTML, CSS, dan Bootstrap 5.  
Website ini menampilkan profil seorang public figure dalam format portofolio digital dengan beberapa section utama, yaitu Home, About Me, dan Certificates.

Website dirancang dengan tampilan yang rapi, modern, serta responsif sehingga dapat diakses dengan baik melalui desktop maupun perangkat mobile.

---

## 🏠 Section Home (Hero Section)

Section Home merupakan tampilan utama saat website pertama kali dibuka.

Fitur yang terdapat pada section ini:
- Foto profil
- Nama lengkap
- Deskripsi singkat
- Background gradient
- Navbar navigasi

Struktur HTML yang digunakan:
- `<section>`
- `<img>`
- `<h1>`
- `<p>`

Section ini menggunakan class Bootstrap seperti:
- `vh-100`
- `d-flex`
- `align-items-center`
- `text-center`

Tujuan dari section ini adalah memberikan identitas utama dan kesan pertama kepada pengunjung website.

---

## 👤 Section About Me

Section About Me berisi informasi mengenai latar belakang dan kemampuan.

### 1️⃣ Deskripsi Diri

Berisi paragraf yang menjelaskan profil singkat, perjalanan karir, serta karakteristik utama.

Tag yang digunakan:
- `<h2>`
- `<p>`

---

### 2️⃣ Skills (Progress Bar Custom)

Menampilkan daftar kemampuan dalam bentuk progress bar dengan persentase.

Progress bar dibuat menggunakan:
- `<div>` dengan class khusus
- Properti CSS `width` untuk menentukan persentase
- Flexbox untuk mengatur posisi nama skill dan angka persentase
- CSS animation menggunakan `@keyframes`

Struktur utama:
- `.skill-box`
- `.skill-title`
- `.skill-bar`
- `.skill-fill`

Keunggulan:
- Tampilan lebih modern dibanding progress bar default Bootstrap
- Menggunakan animasi saat halaman dimuat
- Responsive

---

## 🏆 Section Certificates

Section Certificates menampilkan daftar pencapaian dalam bentuk card layout.

Fitur yang digunakan:
- Bootstrap Grid System (`container`, `row`, `col-md-4`)
- Bootstrap Card
- Class `g-4` untuk spacing antar card
- Efek hover menggunakan CSS

Layout:
- 3 card per baris pada layar desktop
- Otomatis menyesuaikan pada layar tablet dan mobile

Tujuan:
Menampilkan pencapaian atau pengalaman dalam bentuk visual yang rapi dan mudah dibaca.

---

## 🧭 Navbar

Navbar digunakan sebagai navigasi untuk berpindah antar section dalam satu halaman.

Fitur:
- Fixed Top
- Responsive (menggunakan navbar-toggler)
- Anchor link (`#home`, `#about`, `#certificates`)

Dibuat menggunakan komponen Bootstrap 5.

---

## 🎨 Styling dan Design

Website menggunakan:

- CSS custom untuk:
  - Gradient background
  - Styling skill bar
  - Hover effect pada card
  - Layout spacing
- Bootstrap 5 untuk:
  - Grid system
  - Navbar
  - Container
  - Responsive design

Website ini bersifat statis (tidak menggunakan database atau backend).

---

## 💻 Teknologi yang Digunakan

- HTML5
- CSS3
- Bootstrap 5

---

## 📱 Responsive Design

Website dirancang agar dapat menyesuaikan tampilan pada berbagai ukuran layar, seperti:

- Desktop
- Tablet
- Mobile

Responsive design dibantu dengan:
- Bootstrap Grid System
- Container dan Breakpoints
- Viewport meta tag

---

## 📸 Tampilan Website

Tambahkan screenshot berikut pada repository:

1. Tampilan Home Section
2. Tampilan About Me Section
3. Tampilan Skills
4. Tampilan Certificates Section

---


tampilan ui

<img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/65d625c3-8007-48dd-921e-4912a2076002" />


<img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/0d02df71-ef81-4704-a06a-140878821049" />


<img width="1600" height="900" alt="image" src="https://github.com/user-attachments/assets/2532ba3d-f406-440f-9a25-bc8bd401c609" />
