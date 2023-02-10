<?php

include "../classes/User.php";

$user = new User;

// $_FILE holds an array of items upload to the current script via the HTTP POST method
$user->update($_POST, $_FILES);



?>