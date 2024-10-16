<?php
// Variabel sederhana
$nama = "Ardian Syah";
$umur = 19;
$tinggi = 174;
$mahasiswa = true;

// Operator aritmatika
$a = 10;
$b = 5;
$hasil_tambah = $a + $b;
$hasil_kurang = $a - $b;
$hasil_kali = $a * $b;
$hasil_bagi = $a / $b;
$hasil_modulus = $a % $b;

// Operator perbandingan
$lebih_besar = $a > $b;
$lebih_kecil = $a < $b;
$sama_dengan = $a == $b;
$tidak_sama_dengan = $a != $b;

// Operator logika
$dan = ($a > 0) && ($b > 0);
$atau = ($a > 0) || ($b < 0);
$tidak = !$mahasiswa;

// Menampilkan hasil
echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . " tahun<br>";
echo "Tinggi: " . $tinggi . " cm<br>";
echo "Mahasiswa: " . ($mahasiswa ? "Ya" : "Tidak") . "<br>";
echo "Hasil tambah: " . $hasil_tambah . "<br>";
echo "Hasil logika AND: " . ($dan ? "True" : "False") . "<br>";
