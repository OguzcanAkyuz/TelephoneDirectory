<?php session_start();

include 'database.php';

if(!$_SESSION['pw']){
  header('location:index.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="center.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ca1a78a35e.js" crossorigin="anonymous"></script>
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Directory</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="homepage.php"><i class="fa-solid fa-address-book"></i>Directory</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
 
    </ul>
      </nav>
      <form method="post" action="saveperson.php">

        <div class="saveperson-1">
          <div class="card-persons">  <h2> <i class="fa-sharp fa-solid fa-address-book"></i>NEW Person</h2></div>
          <label  class="form-label"><i class="fa-solid fa-user-plus"></i>Name</label>
          <input type="text" class="form-control" name="Name" required>
          <label  class="form-label"><i class="fa-solid fa-user-plus"></i>Surname</label>
          <input type="text" class="form-control" name="Surname" required>
          <label  class="form-label"><i class="fa-solid fa-phone"></i>Phone Number</label>
          <input type="text" class="form-control" name="PhoneNumber" required>
          <label class="form-label"><i class="fa-solid fa-phone"></i>Phone Number(2)</label>
          <input type="text" class="form-control" name="HomeNumber" required> <br>
        <button type="submit" class="btn btn-info" class="event-listener">Save</button>
        </div>
      
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
  <script src="js/eventlistener.js"></script>
</html>