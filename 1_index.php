<?php 
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'sms');
    $sql = "SELECT * FROM student";
    $result = mysqli_query($conn, $sql);
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
                <a href="2_insert.php" class="btn btn-info">New Student</a>
            </div>
            <div class="col-md-9">

                <?php if(isset($_SESSION['success'])) { ?>
                    <div class="alert alert-primary" role="alert">
                        Added successfully
                    </div>
                <?php } ?>

                <h2>Student list</h2>
                <hr>
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Class_id</th>
                        <th>Age</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php 
                            while($row = mysqli_fetch_assoc($result)){ ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['class_id'] ?></td>
                                <td><?php echo $row['age'] ?></td>
                                <td>
                                    <a href="4_show.php?id=<?php echo $row['id']; ?>" class="btn btn-info">View</a>
                                    <a href="6_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                                    <a onclick="return confirm('Are you sure?')" href="5_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php   
                        }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<?php 
    unset($_SESSION['success']);
?>