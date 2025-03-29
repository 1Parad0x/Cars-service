<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<?php
require("partials/header.php")
?>
<body>
    <?php
    if($_SERVER['REQUEST_METHOD' ] == "POST") {
        $name = $_POST["name"];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        if (empty($name)) {
            echo "";
        } else {
            echo "<h1>Meno - $name</h1>";
            echo "<h1>Email - $email</h1>";
            echo "<h1>Subject - $subject</h1>";
        }
    }
    ?>
</body>
<?php
require("partials/footer.php")
?>
</html>