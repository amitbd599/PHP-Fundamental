<!-- //A cookie is created with the setcookie() function. -->

<!-- Syntax

setcookie(name, value, expire, path, domain, secure, httponly); -->

<?php

$cookie_name = "user";
$cookie_value = "John xsxssDoe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "No Data";
    } else {

        echo $_COOKIE[$cookie_name];
    }

    ?>

</body>

</html>