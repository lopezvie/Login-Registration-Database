<html>
    <head>
        <title>Login Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Battleship Game">
    </head>
    <body>
        <?php
        include 'DatabaseClass.php';

        if (isset($_POST['submit'])) {
            $uid = $_POST['uid'];
            $pwd = $_POST['pwd'];

            $db->selectU($uid, $pwd);
        } else {
            echo "Invalid User";
            header("Location: loginPage.html");
        }
        ?>
    </body>
</html>