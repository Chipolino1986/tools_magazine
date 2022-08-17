<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Добавить сектор в БД</title>
</head>
<body>
	
</body>
</html>
<?
// $db = new PDO("mysql:host=localhost;dbname=my_magazine;charset=utf8", "root", "", 
// [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

require_once '../connect.php';

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
