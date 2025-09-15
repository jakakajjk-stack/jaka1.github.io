<!DOCTYPE html>
<html>
<head>
  <title>CV Jaka</title>
  <style>
    body {
      font-family: Verdana, sans-serif;
      background: linear-gradient(to right, #e0f7fa, #fff);
      padding: 20px;
    }
    .container {
      max-width: 600px;
      margin: auto;
      background-color: #fefefe;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h1 {
      text-align: center;
      color: #00796b;
    }
    .label {
      font-weight: bold;
      color: #004d40;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Profil Pribadi</h1>
    <?php
      // Data profil
      $nama = "Jaka";
      $ttl = "Cirebon, 10 Juni 2005";
      $alamat = "Cirebon, Jawa Barat";
      $sekolah = "STIMIK IKMI CIREBON";
      $jurusan = "Komputerisasi Akuntansi";
      $keahlian = ["HTML", "CSS", "Zahir"];

      // Tampilkan data
      echo "<p><span class='label'>Nama:</span> $nama</p>";
      echo "<p><span class='label'>Tempat, Tanggal Lahir:</span> $ttl</p>";
      echo "<p><span class='label'>Alamat:</span> $alamat</p>";
      echo "<p><span class='label'>Pendidikan:</span> $sekolah</p>";
      echo "<p><span class='label'>Jurusan:</span> $jurusan</p>";
      echo "<p><span class='label'>Keahlian:</span></p><ul>";
      foreach ($keahlian as $skill) {
        echo "<li>$skill</li>";
      }
      echo "</ul>";
    ?>
  </div>
</body>
</html>