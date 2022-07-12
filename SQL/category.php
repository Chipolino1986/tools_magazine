<?
$db = new PDO("mysql:host=localhost;dbname=my_magazine;charset=utf8", "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

$dbSectors = $db->query("SELECT id, name FROM Sector");
$sectors = $dbSectors->fetchAll();

?>

<form method="POST">
	<select name="sector-id">
		<? foreach ($sectors as $sector) { ?>
			<option value="<?= $sector["id"] ?>"><?= $sector["name"] ?></option>
		<? } ?>
	</select>
	<br>
	<input type="text" name="name" placeholder="Category Name"><br>
	<button type="submit" name="add-category" disabled>Add Category</button>
</form>

<script>
	let field = document.querySelector("input[name='name']");
	let btn = document.querySelector("button[name='add-category']");
	field.addEventListener("input", function(){
		if (field.value.length > 0) {
			btn.removeAttribute("disabled");
		} else {
			btn.setAttribute("disabled", true);
		}
	});
</script>

<?
if (isset($_POST["add-category"])) {
	$categoryName = trim(htmlspecialchars($_POST["name"]));
	$sectorId = (int)$_POST["sector-id"];
	if (strlen($categoryName) > 0) {
		$result = $db->query("INSERT INTO Category (name, sector_id) VALUE ('$categoryName', $sectorId)");
		if ($result) {
			echo "Success";
		} else {
			echo "Error";
		}
	} else {
		echo "Error";
	}
}
