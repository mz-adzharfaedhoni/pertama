<?php
$nasabah = "kelas2";

if ($nasabah == "vip") {
  echo "Anda mendapatkan kartu atm, akses M-Banking, dan buku tabungan.";
} else if ($nasabah == "kelas1") {
  echo "Anda mendapatkan kartu atm dan buku tabungan.";
} else if ($nasabah == "kelas2") {
  echo "Anda mendapatkan kartu atm dan buku tabungan.";
} else {
  echo "Kategori nasabah tidak valid.";
}
?>


