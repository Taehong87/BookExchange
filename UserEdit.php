<!doctype html>

<html>
    <head>

        <meta charset="utf-8">
        <title>Untitled Document</title>

    </head>

    <body>

        <?php
            if ($_FILES["profpic"])
            {
            $pathname = "images/" . $_FILES['profpic']['name'];
            move_uploaded_file($_FILES['profpic']['tmp_name'], $pathname);
            }
        ?>

        <?php
            include("Connect_Database.php")
        ?>

        <?php
        $userUpdate = "UPDATE users SET cin = '" .
        $_POST["id"] .
        "' WHERE id = '2'";

        $result = mysqli_query($connect, $userUpdate);
    	header("Location: Main.php");


        ?>

    </body>

</html>