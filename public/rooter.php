<?php

require "../vendor/autoload.php";

$router = new AltoRouter();

// echo __DIR__;
$router->map("GET", "/home", function(){
	require __DIR__ . "/views/home.php";
});
$router->map("GET", "/blog", function(){
	require __DIR__ . "/views/blog.php";
});
$router->map("GET", "/contact", function(){
	require __DIR__ . "/views/contact.php";
});

$match = $router->match();
print_r($match);

if (isset($match)) {
	$match["target"]();
}

// if (isset($_SERVER["REQUEST_URI"])) {
//     $page = $_SERVER["REQUEST_URI"];
// }else{
// 	$page = "/home";
// }

// if ($page === "/blog") {
// 	require("views/blog.php");
// }
// if ($page === "/home") {
// 	require("views/home.php");
// }
// if ($page === "/contact") {
// 	require("views/contact.php");
// }
// if ($page !== "/contact" && $page !== "/blog" && $page !== "/home") {
// 	require("views/error404.php");
// }
?>