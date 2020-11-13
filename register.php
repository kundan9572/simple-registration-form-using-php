<?php 
$date = new DateTime($birthdayDate);

$now = new DateTime();
$interval = $now->diff($date);
$age = $interval->y;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <form name="registration" method="post" action="registration.php">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="text" class="form-control" id="phone" aria-describedby="phone">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Date of Birth</label>
    <input type="text" class="form-control" id="birthdayDate" aria-describedby="birthdayDate">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="text" class="form-control" id="age" aria-describedby="age  ">
    <!-- <l1>Date of Birth <input value="<?= $person->dob; ?>" type="date" name="dob" required></l1>  -->

  </div>
    
  
   <button type="submit" class="btn btn-primary">Submit</button>
   <button type="submit" class="btn btn-primary">EDIT</button>
   <button type="submit" class="btn btn-primary">Delete</button>
</form>
</body>
</html>