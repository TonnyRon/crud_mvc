<?php
require_once "./config/app.php";
require_once "./autoload.php";
require_once  "./app/views/inc/session_start.php";
if (isset($_GET['views'])) {
    $url = explode("/", $_GET['views']);
} else {
    $url = ["login"];
}
?>


<!doctype html>
<html lang="en">

<?php   require_once  "./app/views/inc/header.php";?>
<body>


<?php   require_once  "./app/views/inc/script.php";?>


<script>
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Something went wrong!",
        footer: '<a href="#">Why do I have this issue?</a>'
    });
</script>


</body>
</html>
