<?
$db = new PDO("mysql:host=localhost;dbname=my_magazine;charset=utf8", "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

$dbSectors = $db->query("SELECT id, name FROM Sector");
$sectors = $dbSectors->fetchAll();

echo "<h1>Список секторов:</h1>";
foreach ($sectors as $sector) { ?>
	<h2><a href="categories.php?sector_id=<?= $sector["id"] ?>"><?= $sector["name"] ?></a></h2>
<? }