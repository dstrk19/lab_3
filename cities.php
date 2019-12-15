<html>
<head>
    <meta charset="UTF-8">
    <title>cities</title>
    <style>
        .but:hover {
            background-color: DeepSkyBlue !important;
            cursor: pointer;
            text-decoration: underline;
            transform: scale(1.1);
        }
    </style>
</head>
<body background="fon.jpg" style="background-size: cover;"link="#FF1493" vlink="#C71585">
<?php
$id = $_GET['id'];
if ($id == 1502709){ ?>

<?php }?>
<?php
$dsn = new PDO("pgsql:host=localhost;dbname=countries;user=postgres;password='iana10000'");

$limit = 20;
$page = 1;
if ($_GET['page']) {
    $page = $_GET['page'];
}
$offset = ($page-1)*$limit;
$sql = "SELECT count(*) from _cities where region_id=$id";
$stmt = $dsn->prepare($sql);
$stmt->execute();
$res = $stmt->fetch();
$count = $res['count'];
$sql = "SELECT title_ru, city_id from _cities where region_id=$id order by title_ru limit $limit offset $offset";
$countries = $dsn->query($sql);

echo "<table border='0' align='center' color: pink;'>";

foreach ($countries as $cit) {
    echo "<tr><td><a href='langcity.php?id=" . $cit["city_id"] . "'>" . $cit["title_ru"] . "</a></td>";
    echo "<td>" . $cit["city_id"] . "</td></tr>";
}
echo "</table>";


for ($i = 1; $i <= $count / $limit; $i++) {
    ?>
         <a href="/cities.php?id=<?php echo $id ?>&page=<?php echo $i ?>"><?php echo $i ?> </a>
    <?
}
?>
<div align="left"><a href="index.php"><button type="button"  class="but" style="padding: 20px; background: MediumVioletRed; color: pink; border-radius: 5px; border-color: pink; transition: 0.2s">Вернуться на первую страницу</button></a></div>
</body>
</html>
