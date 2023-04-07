<?php
for ($i = 0; $i < 4; $i++) { // perulangan untuk 4 minggu ke depan
  $nextTuesday = strtotime("next Tuesday", strtotime("+$i week")); // menghitung tanggal hari Selasa pada minggu ke-$i
  echo date("l, d F Y", $nextTuesday) . "<br>"; // menampilkan tanggal yang sudah dihitung
}
?>