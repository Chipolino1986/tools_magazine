<?
session_start();
$productId = $_GET["PRODUCT_ID"];
$cart = $_SESSION["cart_test"] ?: [];
if (in_array($productId, $cart)) {
	foreach ($cart as $cartItemKey => $cartItem) {
		if ($cartItem == $productId) {
			unset($cart[$cartItemKey]);
		}
	}
}
$_SESSION["cart_test"] = $cart;
