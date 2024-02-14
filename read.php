<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" 
 referrerpolicy="no-referrer" />

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
 <title>Read</title>
 <style>
        .form-border {
            border: 1px solid #ccc; /* Adjust the border properties as needed */
            padding: 10px; /* Add padding for spacing */
            border-radius: 5px; /* Optional: Add rounded corners */
            background-color: paleturquoise;
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
        .selector {
    font-weight: normal; /* or font-weight: 400; */
}

    </style>
</head>
<body>
 <br>
 <div class="container ">
 <figure class="text-center col-md-6 container ">
  <blockquote class="blockquote center ">
    <p>Future Back-end Developer.</p>
    <hr class="custom-hr" >
  </blockquote>
  <figcaption >
    Read opreation
  </figcaption>
</figure>
</div>
<div class="container col-md-8 ">
  <?php
 if(isset($_GET['msg'])){
  $msg = $_GET['msg'];
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  '.$msg.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>' ;
 }
 ?>
 <a href="create.php" class="btn btn-primary">Add New</a>
<hr>
<table class="table table-striped text-sm text-center ">
  <thead class="table-dark">
    <tr>
      <th >#</th>
      <th >Username</th>
      <th >Password</th>
      <th>Phone Number</th>
      <th >Action</th>
    </tr>
  </thead>
  <tbody class="selector">
   <?php
   include_once "dbconfig.php";
   $sql = "SELECT * FROM `users`";
   $result = mysqli_query($conn, $sql);

   while($row = mysqli_fetch_assoc($result)){
    ?>
      <tr >
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['firstname'] ?></td>
      <td><?php echo $row['lastname'] ?></td>
      <td><?php echo $row['number'] ?></td>
       <td>
        <a href="update.php?id=<?php echo $row['id']?>" class="btn btn-info" >Edit</i></a>
       <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger" >Delete</i></a>
       </td> 
    </tr>
    <?php
    
   }
   
   ?>
    
     </tbody>
</table>
</div>
</body>
</html>