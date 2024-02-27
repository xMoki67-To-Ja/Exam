<?php
$num = $_POST['numer_karetki'];
$imie1 = $_POST['r1'];
$imie2 = $_POST['r2'];
$imie3 = $_POST['r3'];
$polaczenie = mysqli_connect("localhost","root","","ee09");
$query = "INSERT INTO `ratownicy`(`id`, `nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES ('','$num','$imie1','$imie2','$imie3')";
mysqli_query($polaczenie, $query);
mysqli_close($polaczenie);
echo("Do bazy zostało wysłane zapytanie: $query");
?>