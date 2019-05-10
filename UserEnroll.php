<!doctype html>

<html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
<link rel="stylesheet" href="custom.css">
        <meta charset="utf-8">
        <title>User Enroll Page</title>
    </head>

    <body>

            <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">User Enroll Page</h5>
            <form class="form-signin" action="UserInsert.php" method="post">
              <div class="form-label-group">
                <input type="text" id="inputName" name="name" class="form-control" placeholder="Name" required autofocus>
                <label for="inputName">Name</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required>
                <label for="inputEmail">Email</label>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputCIN" name="cin" class="form-control" placeholder="CIN" required>
                <label for="inputCIN">CIN</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="submit">Enroll</button>
              </form>
              <hr class="my-4">            
          </div>
        </div>
      </div>
    </div>
  </div>

        <!-- <p align="center"> User Enroll Page </p>

        <form action="UserInsert.php" method="post">
        <table align="center">
 
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" /></td>
            </tr>
        
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" /></td>
            </tr>
        
            <tr>
                <td>CIN</td>
                <td><input type="text" name="cin" /></td>
            </tr>

            <tr>
                <td><input type="submit" value="submit" /></td>
            </tr>

        </form>
 -->
    </body>

</html>