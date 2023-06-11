<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id',null,time() - 3600);
setcookie('key',null,time() - 3600);


header("Location: login_view.php");
exit;

?>