<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <title>Tambah Mahasiswa</title>
</head>
<body>
 <h1>Tambah Mahasiswa</h1>

 <form action="/mahasiswa" method="POST">
 @csrf

 <label for="nim">NIM:</label><br>
 <input type="text" id="nim" name="nim" required><br><br>

 <label for="nama">Nama:</label><br>
 <input type="text" id="nama" name="nama" required><br><br>

 <label for="jurusan">Jurusan:</label><br>
 <select id="jurusan" name="jurusan">
 <option value="Teknik Informatika">Teknik Informatika</option>
 <option value="Sistem Informasi">Sistem Informasi</option>
 <option value="Teknik Komputer">Teknik Komputer</option>
 </select><br><br>

 <button type="submit">Simpan</button>
 </form>

 <br>
 <a href="/mahasiswa">Kembali ke Daftar</a>
</body>
</html>