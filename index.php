<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>POM MINI TONO</title>

  <!-- CSS Style -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <header>
    <h1><b>POM MINI TONO</b></h1>
  </header>
  <form name="fform" method="post" action="fungsi/proses.php">
    <div class="fuel-options">
      <label>
        <input type="radio" name="jenis" value="Pertalite" required />
        <img src="https://mypertamina.id/uploads/data/6984d564b58942a54a92dd8081f7c019.png" alt="Pertalite"
          style="width: 300px; height: 150px;" />
        <span>Pertalite - <i>Rp. 10.000</i></span>
      </label>
      <label>
        <input type="radio" name="jenis" value="Pertamax" required />
        <img src="https://pertaminaretail.com/wp-content/uploads/2019/10/pertamax.png" alt="Pertamax"
          style="width: 300px; height: 150px;" />
        <span>Pertamax - <i>Rp. 15.000</i></span>
      </label>
    </div>
    <br />
    <label for="harga">Masukan Jumlah Uang (Rp)</label>
    <input type="number" id="amount" name="harga" min="1" required /><br />
    <div class="button-container">
      <button type="submit" id="catat"><b>Catat Transaksi</b></button>
      <button type="reset" id="lihat"><b>Batal Transaksi</b></button>
    </div>
    <a href="fungsi/lihat.php" style="text-decoration: none; color: blue;"><p><i>Lihat Riwayat Transaksi</i></p></a>
  </form>
  <footer>
    <p>&copy; 2024 Created By Wildan Mursalin Rizqia</p>
  </footer>
</body>
</html>