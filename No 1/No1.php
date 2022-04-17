<?php

$No			= array("1","2","3");
$judul_buku	= array("Pemrograman Web Dengan Laravel","Belajar Mandiri Python","Microsoft Word untuk Penulisan Ilmiah");
$Pengarang	= array("Budi Sutejo", "Ahmad Arifin","Edi Rahmadi");
$tahun		= array("2019","2010","2015");


// hitung total array
$totalArray = count($No);
 
echo "<table border='2'>";
echo "<tr>";
echo "<th>NO</th>";
echo "<th>JUDUL BUKU</th>";
echo "<th>PENGARANG</th>";
echo "<th>TAHUN</th>";
echo "</tr>";
// looping datanya
for ($i=0; $i < $totalArray; $i++) { 
  echo "<tr>";
  echo "<td>$No[$i]</td>";
  echo "<td>$judul_buku[$i]</td>";
  echo "<td>$Pengarang[$i]</td>";
  echo "<td>$tahun[$i]</td>";
  echo "</tr>";
}
echo "</table>";
echo "Muhammad Alwi Shihab - 20050974072";
?>