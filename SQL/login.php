<?
$db = new PDO("mysql:host=localhost;dbname=shop;charset=utf8", "root", "", 
[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
?>

<form method="POST">
	<input type="text" name="login" placeholder="Login"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<button type="submit" name="login-btn">Войти</button>
</form>

<?
if (isset($_POST["login-btn"])) {
	$errors = [];
	$login = trim(htmlspecialchars($_POST["login"]));
	$password = trim(htmlspecialchars($_POST["password"]));
	
	$sql = "SELECT login, password FROM User WHERE login = '".$login."'";
	$result = $db->query($sql);
	$user = $result->fetch();
	
	if (!$user) {
		$errors[] = "User is not found";
	} else {
		if ($user["password"] == md5($password)) {
			header("Location: main.php");
		} else {
			$errors[] = "Incorrect password";
		}
	}
	
	if (!empty($errors)) {
		echo '<p style="color:red;">'.implode("; ", $errors).'</p>';
	}
}

