<?php 

include('functions/init.php');

if(isset($_COOKIE['email'])) {

    unset($_COOKIE['email']);

    setcookie("email", "", time()-31557600);
}

session_destroy();

redirect('index.php');


?>