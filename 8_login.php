<?php 
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <br>
      <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" >

                <?php if(isset($_SESSION['error'])) { ?>
                    <div class="alert alert-primary" role="alert">
                        Wrong Email and Password
                    </div>
                <?php } ?>

                <?php if(isset($_SESSION['reg_msg'])) { ?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $_SESSION['reg_msg'];?>
                    </div>
                <?php } ?>

                <h2>Login</h2>
                <hr>

                <form action="./9_confirmLogin.php" method="POST" >
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    </div>
                    <a href="./11_registration.php" style="text-decoration:none"><p>Create an Account</p></a>

                    <button type="submit" class="btn btn-primary">Log in</button>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>


<?php 
    unset($_SESSION['error']);
    unset($_SESSION['reg_msg']);
?>