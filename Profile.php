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

        
        <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">My Profile</h5>
              <hr class="my-2">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-lg">Name: </label>
                    <label class="col-sm-8 col-form-label col-form-label-lg"><?php print $_GET['name']; ?></label>
                </div>
                <hr class="my-8">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-lg">Email: </label>
                    <label class="col-sm-8 col-form-label col-form-label-lg"><?php print $_GET['email']; ?></label>
                </div>
                <hr class="my-8">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-lg">CIN: </label>
                    <label class="col-sm-8 col-form-label col-form-label-lg"><?php print $_GET['cin']; ?></label>
                </div>
                <hr class="my-8">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-lg">Nickname: </label>
                    <label class="col-sm-8 col-form-label col-form-label-lg"><?php print $_GET['nickname']; ?></label>
                </div>
                <hr class="my-8">
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label col-form-label-lg">Profile Picture: </label>
                    <img src="<?php print $_GET['profpic'];?>" height=75 width=75 >
                </div>

              <hr class="my-8">
              <div class="row">
                <a class="btn btn-outline-primary col-sm-4" href="EditProfile.php" role="button">Edit Profile</a>
               <a class="col-sm-4"></a>

                <a class="btn btn-outline-secondary col-sm-4" href="History.php" role="button">History</a>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    </body>

</html>