<?php

// name attribute of the input field goes inside the
// square brackets of $_POST superglobal
$name = $_POST["name"];
$email = $_POST["email"];

echo "Your name is ". $name . " and you email id is ". $email . " ";
echo "Hello";
?>