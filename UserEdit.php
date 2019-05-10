<!doctype html>

<html>
    <head>

        <meta charset="utf-8">
        <title>Untitled Document</title>

    </head>

    <body>

        <?php
            include("Connect_Database.php")
        ?>

        <?php
            if ($_FILES["profpic"])
            {
            $pathname = "images/" . $_FILES['profpic']['name'];
            move_uploaded_file($_FILES['profpic']['tmp_name'], $pathname);
            }
        ?>

        
        <?php
            //Check if more than "images/" 
            if (strlen($pathname) <= 7) 
            {
            $pathname = $_GET["profpic"];
            }

        ?> 

        <?php
        $userUpdate = "UPDATE users SET 
        name = '" .
        $_POST["name"] .
        "',
        email = '" .
        $_POST["email"] .
        "',
        cin = '" .
        $_POST["cin"] .
        "',
        nickname = '" .
        $_POST["nickname"] .
        "',
        profpic = '" .
        $pathname .
        "' WHERE id = '" .
        $_GET["id"] .
        "'";

        $result = mysqli_query($connect, $userUpdate);
        
        $searchUser = "select * from users where id = '" . 
        $_GET["id"] . 
        "'";
        
        session_destroy();
        
        //print $searchUser;
        $results = mysqli_query($connect, $searchUser);
        $data = mysqli_fetch_assoc($results);
        //print $data["id"];
    
        if (mysqli_num_rows($results) > 0) 
        {
            session_start();
            $_SESSION['name'] = $data["name"];
            $_SESSION['email'] = $data["email"];
            $_SESSION['id'] = $data["id"];
            $_SESSION['cin'] = $data["cin"];
            $_SESSION['nickname'] = $data['nickname'];
            $_SESSION['profpic'] = $data['profpic'];
            print $_SESSION["id"];
            header("Location: Main.php");
            exit;
        }

        ?>

    </body>

</html>