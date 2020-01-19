<?php
print ("<h3>Tugas 4 PHP</h3>");

echo "<b>Soal 1:</b><br>";
$harga_beli = 8000;
$harga_jual = 7500;
$profitperekor = 300;
echo "Seorang petani membeli beberapa ekor anak kambing dengan harga Rp. $harga_beli.<br>";
echo "Dia jual dengan harga Rp. $harga_jual dan mendapat keuntungan $profitperekor rupiah untuk tiap ekor anak kambing.<br>";
echo "Berapa ekor anak kambing yang ia beli?<br><br>";
echo "<b>Jawaban: </b><br>";
$profittotal = $harga_jual-$harga_beli;
$jumlahkambing = $profittotal/$profitperekor;
$jumlahkambing = number_format($jumlahkambing,0);
echo "Anak kambing yang ia beli sebanyak <b>$jumlahkambing</b> ekor.<br>";

echo "<br><br><br>";

echo "<b>Soal 2:</b><br>";
$saluran = 523;
$volume_total = 8891;
echo "Suatu pintu air di suatu tempat mempunyai $saluran cabang saluran, dalam satu minggu terpakai $volume_total liter air.<br>";
echo "Berapa liter air rata-rata yang dipakai oleh tiap-tiap keluarga dalam waktu itu?<br><br>";
echo "<b>Jawaban: </b><br>";
$rata2minggu = $volume_total / $saluran;
$rata2hari = $rata2minggu/7;
$rata2hari = number_format($rata2hari,2);
echo "Maka air rata-rata yang dipakai oleh tiap-tiap keluarga adalah <b>$rata2minggu</b> liter/minggu atau <b>$rata2hari</b> liter/hari.<br>";

?>
