<?php
echo "<head><title>Data Transaksi</title></head>";
$fp = fopen("data_transaksi.txt", "r");
echo "<table border='0' width='80%' align='center'>";

echo '<h1 style="text-align: center; margin-bottom: 50px;">DATA TRANSAKSI</h1>';



while ($isi = fgets($fp, 2048)) {
    $pisah = explode("|", $isi);

    if (count($pisah) >= 3) {
        echo "<tr><td><strong>Bahan Bakar</strong></td><td>: $pisah[0]</td></tr>";
        echo "<tr><td><strong>Jumlah Nominal</strong></td><td>: $pisah[1]</td></tr>";
        echo "<tr><td><strong>Jumlah Liter</strong></td><td>: $pisah[2]</td></tr>";
        echo "<tr><td><strong>Waktu</strong></td><td>: $pisah[3]</td></tr>
        <tr><td colspan='2'><hr></td></tr>";
    }
}

fclose($fp);
echo "</table>";
echo "<div align='center'><a href='../index.php'>Klik Disini</a> Untuk Melakukan Transaksi</div>";
?>
