<?php 

    session_start();
    if(!isset($_SESSION['login'])){
        header("Location: 8_login.php");
    }

    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'sms');
    $sql = "SELECT * FROM student WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    $std = mysqli_fetch_assoc($result);


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
            <div class="col-md-3">
                <a href="./1_index.php" class="btn btn-info">Student List</a>
            </div>
            <div class="col-md-9">
                <div class="d-flex justify-content-between">
                    <h2>Edit Student</h2>
                    <a  href="10_logout.php">
                        <button class="btn btn-warning">Logout</button>
                    </a>
                </div>
                <hr>

                <form action="./7_update.php?id=<?php echo $id ?>" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $std['name']?>" placeholder="Student Name" require>
                    </div>
                    <div class="mb-3">
                        <label for="class" class="form-label">Class</label>
                        <input type="text" name="class_id" id="class" class="form-control" value="<?php echo $std['class_id']?>" placeholder="Student Class" require>
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="text" name="age" id="age" class="form-control" value="<?php echo $std['age']?>" placeholder="Student Age" require>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $std['phone']?>" placeholder="Student Phone" require>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" value="<?php echo $std['address']?>" placeholder="Student Address" >
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>