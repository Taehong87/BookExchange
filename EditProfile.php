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

<div class="container">
<h1 class="my-4"></h1>
<div class="row">
<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
<div class="card card-signin my-5">
<div class="card-body">
<h4 class="card-title text-center">Edit Profile</h4>
<hr class="my-8">
<form action="UserEdit.php?<?php print $name_email_id; ?>" enctype="multipart/form-data" method="post">
<div class="form-group row">
<label class="col-sm-4 col-form-label col-form-label-sm">Name: </label>
<div class="col-sm-8">
<input type="text" class="form-control" name="name" value="<?php
                                        print $_GET['name'];
                                        ?>"/>
</div>
</div>
<div class="form-group row">
<label class="col-sm-4 col-form-label col-form-label-sm">Email: </label>
<div class="col-sm-8">
<input type="text" class="form-control" name="email" value="<?php
                                        print $_GET['email'];
                                        ?>"/>
</div>
</div>
<div class="form-group row">
<label class="col-sm-4 col-form-label col-form-label-sm">CIN:</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="cin" value="<?php
                                    print $_GET['cin'];
                                    ?>"/>
</div>
</div>
<div class="form-group row">
<label class="col-sm-4 col-form-label col-form-label-sm">Nickname: </label>
<div class="col-sm-8">
<input type="text"  class="form-control" name="nickname" value="<?php
                                    print $_GET['nickname'];
                                    ?>"/>
</div>
</div>
<div class="form-group row">
<label class="col-sm-4 col-form-label col-form-label-sm">Profile Picture: </label>
<div class="col-sm-8">
<img src="<?php print $_GET['profpic'];?>" height=75 width=75 >
<input type="file" name="profpic"/>
</div>
</div>
<!-- <input type="submit" value="Update" /> -->
<button class="btn btn-outline-primary col text-center" type="submit" value="Update">Update</button>
</form>
<hr class="my-4">
</div>
</div>
</div>
</div>
</div>
</body>

</html>