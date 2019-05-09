<!doctype html>

<html>

    <head>

        <meta charset="utf-8">
        <title>Edit Profile</title>

    </head>

    <body>

    <?php
	    include("MainMenu.php");
    ?>

    <form action="UserEdit.php?<?php print $name_email_id; ?>" enctype="multipart/form-data" method="post">
    
        <table align = "center">
        
        <tr>
            <td>Name: </td>
            <td>
                <input type="text" name="name" value="<?php
									print $_GET['name'];
									?>"/>
            </td>

        </tr>

        <tr>
            <td>Email: </td>
            <td>
                <input type="text" name="email" value="<?php
									print $_GET['email'];
									?>"/>
            </td>

        </tr>

        <tr>
            <td>CIN: </td>
            <td>
                <input type="text" name="cin" value="<?php
									print $_GET['cin'];
									?>"/>
            </td>

        </tr>

        <tr>
            <td>Nickname: </td>
            <td>
                <input type="text" name="nickname" value="<?php
									print $_GET['nickname'];
									?>"/>
            </td>

        </tr>

        <tr>
            <td>ProfilePic: </td>


        </tr>

        <tr>

            <td><input type="file" name="profpic"/></td>
            <td><img src="<?php print $_GET['profpic'];?>" height=75 width=75 ></td>

        </tr>

        <tr>
            <td><input type="submit" value="Update" /></td>
        <tr>

    </form>

    </body>

</html>