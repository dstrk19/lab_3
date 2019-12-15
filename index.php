<html>
<head>
    <meta charset="UTF-8">
    <title>Список областей Украины</title>
</head>
<body background="fon.jpg" style="background-size: cover;" link="#FF1493" vlink="#C71585">
<?php
$dsn = new PDO("pgsql:host=localhost;dbname=countries; user=postgres;password='iana10000'");
$sql = "SELECT title_ru, region_id from _regions where country_id=2";
$countries = $dsn->query($sql);
echo "<table border='0' align='center'>";
foreach ($countries as $key => $reg) {
    echo "<tr><td><a href='cities.php?id=". $reg["region_id"] ."'>".$reg["title_ru"]."</a></td>";
    echo "<td>".$reg["region_id"]."</td></tr>";
}
echo "</table>";
?>
</body>
</html>
