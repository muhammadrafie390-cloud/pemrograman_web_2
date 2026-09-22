<html>
<body>

<?php
// Bagian 1: Array $x
$x = array("one", "two", "three");
foreach ($x as $value) {
    echo $value . "<br />";
}

// Bagian 2: Array $b
$b["sayur"] = "wortel";
$b["daging"] = "ayam";
$b["utama"] = "nasi";
$jumlah = sizeof($b);
print "Jumlah array b = $jumlah <br>";
// variabel $jumlah akan bernilai 3 (karena hanya ada 3 elemen)
?>

</body>
</html>