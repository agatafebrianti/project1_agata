<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Pendaftaran Outdoor Reading Festival</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
                  url('https://images.unsplash.com/photo-1503264116251-35a269479413?auto=format&fit=crop&w=1470&q=80') no-repeat center center;
      background-size: cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .form-container {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 35px 45px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      max-width: 450px;
      width: 100%;
      backdrop-filter: blur(5px);
    }
    .form-container h2 {
      text-align: center;
      color: #2d6a4f;
      margin-bottom: 25px;
    }
    .form-group {
      margin-bottom: 18px;
    }
    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #1b4332;
    }
    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 14px;
    }
    .form-group button {
      width: 100%;
      padding: 12px;
      background-color: #2d6a4f;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .form-group button:hover {
      background-color: #1b4332;
    }
    @media (max-width: 500px) {
      .form-container {
        padding: 25px;
      }
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Pendaftaran Outdoor Reading Festival</h2>
    <form method="POST" action="proses_daftar.php">
      <div class="form-group">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" name="nama" id="nama" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
      </div>
      <div class="form-group">
        <label for="telepon">Nomor Telepon:</label>
        <input type="tel" name="telepon" id="telepon" required>
      </div>
      <div class="form-group">
        <label for="usia">Kategori Usia:</label>
        <select name="usia" id="usia" required>
          <option value="">-- Pilih Usia --</option>
          <option value="Remaja">Remaja</option>
          <option value="Dewasa">Dewasa</option>
        </select>
      </div>
      <div class="form-group">
        <label for="minat">Minat Buku:</label>
        <select name="minat" id="minat" required>
          <option value="">-- Pilih Minat Buku --</option>
          <option value="Fiksi">Fiksi</option>
          <option value="Non-Fiksi">Non-Fiksi</option>
          <option value="Pengembangan Diri">Pengembangan Diri</option>
          <option value="Pendidikan">Pendidikan</option>
          <option value="Ilmu Pengetahuan">Ilmu Pengetahuan</option>
        </select>
      </div>
      <div class="form-group">
        <button type="submit">Daftar Sekarang</button>
      </div>
    </form>
  </div>
</body>
</html>
