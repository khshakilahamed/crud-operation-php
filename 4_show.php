<?php 
    $id = $_GET['id'];

    $conn = mysqli_connect('localhost', 'root', '', 'sms');
    
    // $sql = 'SELECT * FROM student ';

    $sql = "SELECT * FROM student WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $std = mysqli_fetch_assoc($result);

    // echo $std['id'];
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
                <a href="./1_index.php" class="btn btn-info">Students</a>
            </div>
            <div class="col-md-9">
                <h2>Student Information</h2>
                <hr>
                <table class="table">
                    <tr>
                        <th width="100" class="text-right">Name:</th>
                        <th><?php echo $std['name'] ?></th>
                    </tr>
                    <tr>
                        <td class="text-right">Class_Id:</td>
                        <td><?php echo $std['class_id'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-right">Age:</td>
                        <td><?php echo $std['age'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-right">Phone:</td>
                        <td><?php echo $std['phone'] ?></td>
                    </tr>
                    <tr>
                        <td class="text-right">Address:</td>
                        <td><?php echo $std['address'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>