<h1 align="center">SIMADA</h1>
<h3 align="center">(Sistem Informasi Manajemen Akademik Dasar)</h3><br>

<p align="center">
  <img src="public/images/logo unsulbar.jpg" alt="Logo Unsulbar" width="150" height="auto"><br><br>
</p>

<p align="center">
  <strong>Nama :</strong> Harlinda <br>
  <strong>NIM :</strong> D0223345
</p>
<br><br>

<p align="center">
  Framework Web laravel <br>
  2025
</p>
<br>

## Tentang Cookify

SIMADA adalah aplikasi web berbasis framework Laravel yang bertujuan untuk mempermudah pengelolaan data akademik, terutama dalam manajemen data guru, siswa, dan mata pelajaran.

### Role dan fitur-fiturnya

#### 1. Admin (Pengelola aplikasi)

- Manajemen data Guru, Siswa, Mata Pelajaran
- Melihat dan mengelola pendaftaran siswa ke mata pelajaran

#### 2. Guru (Pengajar)

- Melihat daftar siswa dan mata pelajaran yang diampu

#### 3. Siswa (Pelajar)

- Melihat jadwal atau daftar mata pelajaran yang diambil

<br>

### Tabel-tabel database beserta field dan tipe datanya
<br>

#### Tabel 1 (Pengguna)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| name | string | Nama pengguna |
| email | string | Email pengguna |
| password | string | Password pengguna |
| peran | enum | Admin/Guru/Siswa |
<br>

#### Tabel 2 (Guru)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| pengguna_id | unsignedBigInteger | Relasi ke Pengguna |
| nip | string | Nomor induk pegawai |
| nama | string | Nama guru |
| mapel_utama | string | mata pelajaran utama |
<br>

#### Tabel 3 (siswa)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| pengguna_id | unsignedBigInteger | relasi ke pengguna |
| nis | string | nomor induk siswa |
| nama | string | Nama siswa |
| kelas | string | kelas yang ditempati siswa |
| tanggal_lahir | date | tanggal lahir siswa |
| alamat | string | alamat siswa |

<br>

#### Tabel 4 (mata_pelajaran)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| nama_mapel | string | Nama mata pelajaran |
| Kode_mapel | string | kode unik |
| Guru_id | unsignedBigInteger | Relasi ke tabel guru |
<br>

#### Tabel 5 (pendaftaran mapel)

| Nama Field | Tipe Data | Keterangan |
|-------|-----------|------------|
| Siswa_id | unsignedBigInteger | Relasi ke siswa |
| Mata_pelajaran_id | unsignedBigInteger |Relasi ke mapel |
<br>

### Jenis-jenis Relasi

- Pengguna ke Guru (One-to-One)
- Pengguna ke Siswa (One-to-One)
- Guru ke Pendaftaran Mapel (One-to-Many)
- Siswa ke Pendaftaran Mapel (One-to-Many)
- Mata Pelajaran ke Pendaftaran Mapel (One-to-Many)

