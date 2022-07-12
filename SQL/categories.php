<?
$db = new PDO("mysql:host=localhost;dbname=my_magazine;charset=utf8", "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

$sectorId = (isset($_GET["sector_id"])) ? $_GET["sector_id"] : 1;

$dbCategories = $db->query("SELECT id, name FROM Category WHERE sector_id = ".$sectorId);
$categories = $dbCategories->fetchAll();

echo "<h1>Список категорий:</h1>";
foreach ($categories as $category) { ?>
	<h2><a href="products_test.php?cat_id=<?= $category["id"] ?>&sector_id=<?= $sectorId ?>"><?= $category["name"] ?></a></h2>
<? } ?>

<h2><a href="index.php">Назад к списку секторов</a></h2>