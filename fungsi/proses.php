<?php
echo "<head><title>POM MINI</title></head>";
$fp = fopen("data_transaksi.txt", "a+");

$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$liter = 0;
$waktu = date('l, d-m-Y');
;

if ($jenis == 'Pertalite') {
    $liter = $harga / 10000;
} else if ($jenis == 'Pertamax') {
    $liter = $harga / 15000;
}

fputs($fp, "$jenis | $harga | $liter liter | $waktu \n");
fclose($fp);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Transaksi</title>

    <!-- CSS Style -->
    <link rel="stylesheet" href="../css/style2.css">

</head>

<body>

    <body>
        <div class="container">
            <h1>TERIMA KASIH SUDAH MELAKUKAN TRANSAKSI!</h1>
            <div class="buttons">
                <button class="btn-transaksi-lagi" onclick="transaksiLagi()">Transaksi Lagi</button>
                <button class="btn-riwayat-transaksi" onclick="lihatRiwayat()">Lihat Riwayat Transaksi</button>
            </div>
        </div>

        <script>
            function transaksiLagi() {
                window.location.href = '../index.php';
            }

            function lihatRiwayat() {
                window.location.href = 'lihat.php';
            }
        </script>
    </body>
</body>

</html>