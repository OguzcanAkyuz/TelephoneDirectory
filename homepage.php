<?php 

session_start();

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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> 
		<script type="text/javascript" src="js/center.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ca1a78a35e.js" crossorigin="anonymous"></script>
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
<style> .container h2 { 
  color: #17a2b8!important;
}
 </style> 
    <title>Telephone Directory</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><i class="fa-solid fa-address-book"></i>Directory</a>
  <button class="navbar-toggler" class="event-listener" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" class="event-listener"  href="kisiekle.php"><i class='fa-solid fa-user-plus'></i>Person Add<span class="sr-only">(current)</span></a>
       
      </li>
  
 
    </ul>
    
  </div>
</nav>

  <div class="content">
    
    <div class="container">
      <h2 class="mb-5"><i class="fa-sharp fa-solid fa-users"></i>PERSONS</h2>


      <form > 
      <div class="table-responsive custom-table-responsive">
      <div class="formAlani">
				<label  for="searchperson"><i class="fa-solid fa-magnifying-glass"></i><span><div></div></span></label>
				<input id="searchbar" type="text" name="search" onkeyup="search_person()"  id="search" />
			</div>
      </form>

        <table class="table custom-table">
          <thead>
            <tr class="th-color">  

           
              <th scope="col" id="Id"></th>
						  <th scope="col" abbr="Name">Name</th>
						  <th scope="col" abbr="Surname">Surname</th>
						  <th scope="col" abbr="PhoneNumber"> <i class='fa-solid fa-phone'></i>Phone Number</th>
						  <th scope="col" abbr="PhoneNumber(2)"> <i class='fa-solid fa-phone'></i> Phone Number(2)</th>
              <th scope="col" abbr="Update"><i class='fa-solid fa-pen-to-square'></i>Update</th>
              <th scope="col" abbr="Delete"><i class='fa-solid fa-trash'></i>Delete</th>
        
            </tr>
          </thead>
          <tbody>
      


              <?php 
                    include "database.php";
                    $dc= $db -> prepare("SELECT * FROM persons");
                    $dc -> execute();
                    $print = $dc -> fetchAll(PDO::FETCH_ASSOC);
                    					$adet=0;
                    					foreach ($print as $row) {
                    							$adet++;
                                  echo" <tr scope='row' class='nameler'>                               
                                  <td>".$adet."</td>
                                  <td><a >".$row['Name']."</a></td>
                                  <td>".$row['Surname']." </td>
                                  <td><a href='tel:".$row['PhoneNumber']."'>    <i class='fa-solid fa-phone'></i>" .$row['PhoneNumber']."</a>                             </td>
                                  <td><a href='tel:".$row['HomeNumber']."'>    <i class='fa-solid fa-phone'></i>" .$row['HomeNumber']."</a>                             </td>
                                  <td> <a type='text' class='event-listener' href=update1.php?Id=".$row['Id'] ." > <i class='fa-solid fa-pen-to-square'></i> Update </i></a>              </td>
                                  <td> <a data-toggle='modal' class='event-listener'  data-target='#deletemodal".$row['Id'] ."'href='#'> <i class='fa-solid fa-trash'> </i> Delete</a>              </td>
                             
                                      <!-- Modal -->
                                      <div class='modal fade' id='deletemodal".$row['Id'] ."' tabindex='-1' aria-labelledby='deletemodal' aria-hidden='true'>
                                      <div class='modal-dialog'>
                                        <div class='modal-content'>
                                          <div class='modal-header'>
                                            <h5 class='modal-title' id='deletemodal'>".$row['Name']. " ".$row['Surname']."</h5>
                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                              <span aria-hidden='true'>&times;</span>
                                            </button>
                                          </div>
                                          <div class='modal-body'>
                                          Are you sure you want to delete?
                                          </div>
                                          <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>
                                            <a type='button' href=delete.php?Id=".$row['Id'] ." class='btn btn-primary'>Delete</a>
                                          </div>
                                        </div>
                                      </div>
                                      </div>
                                </tr> 
                                <tr class='spacer'><td colspan='100'></td></tr>
                                " ;
                                } 
                                
              ?>
           
        

          </tbody>
        </table>
      </div>


    </div>
 


  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/search.js"></script>
    <script src="js/eventlistener.js"></script>
  </body>
</html>