<!DOCTYPE html>
<html>
<body>

<?php
$kendaraan = array("Mobil", "Becak", "Truk");
rsort($kendaraan);

$clength = count($kendaraan);
for($x = 0; $x < $clength; $x++) {
  echo $kendaraan[$x];
  echo "<br>";
}
?>

</body>
</html>
