<?php include("data.php"); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Portal CV Kelompok</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Nunito:wght@400;600&display=swap" rel="stylesheet">
  <!-- Tombol Kirim CV -->
  <a href="form.php" class="upload-link">Kirim CV Anda</a>
  </head>
<body>
  <!-- Konten lainnya seperti grid dan card -->
</body>
  <h1>Portal CV Kelompok</h1>
  <p><h1>Selalu Always</h1></p>
  <div class="grid">
    <?php foreach ($anggota as $nama => $info): ?>
      <div class="card">
        <?php if (!empty($info['foto'])): ?>
          <img src="img/<?= $info['foto'] ?>" alt="<?= $nama ?>">
        <?php else: ?>
          <img src="img/default.jpg" alt="Foto tidak tersedia">
        <?php endif; ?>
        <h3><?= trim($nama) ?></h3>
        <p><strong>NIM:</strong> <?= trim($info['nim']) ?></p>
        <p><strong>Kelas:</strong> <?= $info['kelas'] ?></p>
        <?php if (isset($info['jabatan'])): ?>
  <p><strong>Jabatan:</strong> <?= $info['jabatan'] ?></p>
<?php endif; ?>

        <a href="cv/<?= strtolower($info['file']) ?>">Lihat CV</a>
      </div>
    <?php endforeach; ?>
  </div>
</body>
<script>
  const toggleBtn = document.getElementById('modeToggle');
  const body = document.body;
  const cards = document.querySelectorAll('.card');

  toggleBtn.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    body.classList.toggle('light-mode');

    cards.forEach(card => {
      card.classList.toggle('dark');
      card.classList.toggle('light');
    });

    const mode = body.classList.contains('light-mode') ? 'light' : 'dark';
    localStorage.setItem('theme', mode);
  });

  window.addEventListener('DOMContentLoaded', () => {
    const savedMode = localStorage.getItem('theme') || 'dark';
    body.classList.add(savedMode + '-mode');
    cards.forEach(card => card.classList.add(savedMode));
  });
</script>
</html>