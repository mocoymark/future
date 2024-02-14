<?php
include_once "dbconfig.php";
$id = $_GET['id'];

if(isset($_POST['update'])){
  $username  = $_POST['username'];
  $lastname  = $_POST['password'];
  $number    = $_POST['phone'];

 $sql = "UPDATE `users` SET `firstname`='$username',`lastname`='$lastname',`number`='$number' WHERE id=$id";

  $result = mysqli_query($conn, $sql);

  if($result){
    header('location: read.php?msg=Record updated successfully');
  }
  else{
    echo "<div class='alert alert-danger'>Error in Registration </div>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

 <title>Update</title>
 <style>
        .form-border {
            border: 1px solid #ccc; /* Adjust the border properties as needed */
            padding: 20px; /* Add padding for spacing */
            border-radius: 5px; /* Optional: Add rounded corners */
            background-color: 	#A9A9A9;
        }
          .form-class {
            border: 1px solid #ccc; /* Adjust the border properties as needed */
            padding: 20px; /* Add padding for spacing */
            border-radius: 5px; /* Optional: Add rounded corners */
            background-color: red;
        }
                .custom-hr {
            border: none;
            height: 2px;
            background-color: #FF5733; /* Change to the desired color */
        }

    </style>
</head>
<body> <br>
 <figure class="text-center col-md-6 container">
  <blockquote class="blockquote center">
    <p>Future Back-end Developer.</p>
    <hr class="custom-hr" >
  </blockquote>
  <figcaption >
    Update opreation
  </figcaption>
</figure>
<?php
$sql = "SELECT * FROM `users` WHERE id= $id LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="row justify-content-center">
            <div class="col-md-4 form-border">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" value="<?php echo $row['firstname'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" value="<?php echo $row['lastname'] ?>" >
                    </div>
                    <div class="form-group">
                        <label for="formNumber">Form Number</label>
                        <input type="text" name="phone" class="form-control" id="formNumber" value="<?php echo $row['number'] ?>">
                    </div><br>
                    
                    <button type="submit" name="update" class="btn btn-secondary">Update</button>
                    <a href="read.php" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
 </div>
</body>
</html>