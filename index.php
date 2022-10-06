
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="login.css">
<script src="https://kit.fontawesome.com/ca1a78a35e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="center.css">
<style>   body{
    background-color: #efefef;
  } 
  .col-md-12{
  margin-left: 19px;
    margin-top: 230px;
}

</style>
<body>
    <div id="main">
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form"  method="post">
                            <h3 class="text-center text-info"><i class="fa-solid fa-right-to-bracket"></i>Login</h3>
                            <div class="form-group">
           
                                <label for="username" class="text-info"><i class="fa-solid fa-user-lock"></i>Username</label><br>
                                <input type="text" name="username" id="username" class="form-control" required >
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info"><i class="fa-solid fa-lock"></i>Password</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login" class="event-listener">
                            </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<?php 
include 'database.php';
session_start();
$_SESSION['pw']= FALSE;
if(isset($_POST['submit'])){
$un=$_POST['username'];
$pw=md5($_POST['password']);
$un = stripcslashes($un);
$pw = stripcslashes($pw);
$dc = $db -> prepare("SELECT * from user WHERE password ='$pw'");
$stmt = $db->prepare("SELECT * FROM user");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
if($row=$stmt->fetchAll()[0]) {
$md5password= md5($pw);


if($row['username'] == $un && $row['password'] == $pw ) {  

$_SESSION['pw'] = TRUE; 
header("refresh:1;url=homepage.php");

}else{  


    echo "Giriş yapılamadı. Lütfen kullanıcı adınızı ve şifrenizi kontrol edin";
}
}
}
