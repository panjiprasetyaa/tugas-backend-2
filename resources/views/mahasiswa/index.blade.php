<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Daftar Mahasiswa</title>
 <style>
 body { font-family: Arial, sans-serif; margin: 40px; }
 table { border-collapse: collapse; width: 100%; max-width: 600px; }
 th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
 th { background-color: #4CAF50; color: white; }
 tr:nth-child(even) { background-color: #f2f2f2; }
 </style>
</head>
<body>
 <h1>Daftar Mahasiswa</h1>

 <table>
 <thead>
 <tr>
 <th>NIM</th>
 <th>Nama</th>
 <th>Jurusan</th>
 </tr>
 </thead>
 <tbody>
 @foreach ($mahasiswa as $mhs)
 <tr>
 <td>{{ $mhs['nim'] }}</td>
 <td>{{ $mhs['nama'] }}</td>
 <td>{{ $mhs['jurusan'] }}</td>
 </tr>
 @endforeach
 </tbody>
 </table>

 <p>Total mahasiswa: {{ count($mahasiswa) }}</p>
</body>
</html>
