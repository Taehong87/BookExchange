<!doctype html>

<html>

    <head>
        <meta charset="utf-8">
        <title>Profile Page</title>
    </head>

    <body>
        <?php
            include("MainMenu.php");
        ?>

        <?php
            include("Connect_Database.php")
        ?>

        <table align = "center">

            <tr>
            
                <td>Name:</td>
                <td><?php print $_GET['name']; ?></td>

            </tr>

            <tr>

                <td>Email:</td>
                <td><?php print $_GET['email']; ?></td>

            </tr>

            <tr>

                <td>CIN:</td>
                <td><?php print $_GET['cin']; ?></td>

            </tr>

            <tr>

                <td>Nickname:</td>
                <td><?php print $_GET['nickname']; ?></td>

            </tr>

            <tr>

                <td>Profile Picture:</td>
                <td><img src="<?php print $_GET['profpic'];?>" height=75 width=75 ></td>

            </tr>

        </table>        
    
        <a href = EditProfile.php align = "center"> Edit Profile <a>
        <a href = History.php align = "center"> History <a>

    </body>

</html>