<?
$db = new PDO("mysql:host=localhost;dbname=my_magazine;charset=utf8", "root", "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
?>

<form method="POST">
	<input type="text" name="name" placeholder="Sector Name"><br>
	<button type="submit" name="add-sector" disabled>Add Sector</button>
</form>

<script>
	let field = document.querySelector("input[name='name']");
	let btn = document.querySelector("button[name='add-sector']");
	field.addEventListener("input", function(){
		if (field.value.length > 0) {
			btn.removeAttribute("disabled");
		} else {
			btn.setAttribute("disabled", true);
		}
	});
</script>

<?
if (isset($_POST["add-sector"])) {
	$sectorName = trim(htmlspecialchars($_POST["name"]));
	if (strlen($sectorName) > 0) {
		$result = $db->query("INSERT INTO Sector (name) VALUE ('$sectorName')");
		if ($result) {
			echo "Success";
		} else {
			echo "Error";
		}
	} else {
		echo "Error";
	}
}
