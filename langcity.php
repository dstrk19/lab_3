<html>
<head>
    <meta charset="UTF-8">
    <title>Город на разных языках</title>
    <style>
        .but:hover {
            background-color: DeepSkyBlue !important;
            cursor: w-resize;
            text-decoration: blink;
        }
    </style>
</head>
<body background="fon.jpg" style="background-size: cover;" link="#FF1493" vlink="#C71585">
<?php
$id = $_GET['id'];
$dsn = new PDO("pgsql:host=localhost;dbname=countries;user=postgres;password='iana10000'");
$sql = "SELECT title_ru,
 title_ua,
 title_be,
 title_en,
 title_es,
 title_pt,
 title_de,
 title_fr,
 title_it,
 title_pl,
 title_ja,
 title_lt,
 title_lv,
 title_cz from _cities where city_id = $id";
$countries = $dsn->query($sql);
echo "<table border='' align='center' style='border-radius: 5px; border-color: MediumSlateBlue; color: Indigo'>";
foreach ($countries as $key => $cit) {
    echo "<tr>
    <td>".$cit["title_ru"]."</td>
    <td>".$cit["title_ua"]."</td>
    <td>".$cit["title_be"]."</td>
    <td>".$cit["title_en"]."</td>
    <td>".$cit["title_es"]."</td>
    <td>".$cit["title_pt"]."</td>
    <td>".$cit["title_de"]."</td>
    <td>".$cit["title_fr"]."</td>
    <td>".$cit["title_it"]."</td>
    <td>".$cit["title_pl"]."</td>
    <td>".$cit["title_ja"]."</td>
    <td>".$cit["title_lt"]."</td>
    <td>".$cit["title_lv"]."</td>
    <td>".$cit["title_cz"]."</td>
    </tr>";
}
echo "</table>";
?>
<div align="left"><a href="index.php"><button type="button"  class="but" style="padding: 5px; background: MediumVioletRed; color: pink; border-radius: 5px; border-color: pink; transition: 0.2s">Вернуться на первую страницу</button></a></div>
</body>
</html>