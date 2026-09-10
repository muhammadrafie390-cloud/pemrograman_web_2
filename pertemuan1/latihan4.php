<?php
$nilai = 80;

echo "<h2>Status Kelulusan</h2>";
echo "Nilai Anda: " . $nilai . "<br>";

if ($nilai >= 75) {
    echo "Selamat! Anda dinyatakan <strong>LULUS</strong>.";
} else {
    echo "Mohon maaf, Anda <strong>TIDAK LULUS</strong>.";
}
?>