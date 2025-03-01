<?php
require_once "./config/app.php";
require_once "./autoload.php";
if (isset($_GET['views'])) {
    $url = explode("/", $_GET['views']);
} else {
    $url = ["login"];
}
?>


<!doctype html>
<html lang="en">

<?php   require_once  "./app/views/inc/header.php"?>
<body>


<?php   require_once  "./app/views/inc/script.php"?>

</body>
</html>
