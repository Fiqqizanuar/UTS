<?php
echo "<table border='1'>"; // buka tabel

for ($i=1; $i<=10; $i++) { // loop untuk baris
  if ($i % 2 == 1) { // kondisi untuk baris ganjil
    echo "<tr style='background-color: green;'>"; // beri warna hijau pada baris ganjil
  } else {
    echo "<tr>"; // baris genap tanpa warna
  }
  
  for ($j=1; $j<=5; $j++) { // loop untuk kolom
    echo "<td>"; // buka sel
    
    // hitung nilai untuk sel
    $nilai = ($i - 1) * 5 + $j;
    
    echo $nilai; // tampilkan nilai
    
    echo "</td>"; // tutup sel
  }
  
  echo "</tr>"; // tutup baris
}

echo "</table>"; // tutup tabel
?>
