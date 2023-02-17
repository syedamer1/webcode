<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['admin']))
{
  header('Location: adminpage.php');
}
?>
<html lang="en">

<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>login</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Numans');

    html,
    body {
      background-image: url('./images/bg.png');
      background-size: cover;
      background-repeat: no-repeat;
      height: 100%;
      font-family: 'Numans', sans-serif;
    }

    .container {
      height: 100%;
      align-content: center;
    }

    .card {
      height: 370px;
      margin-top: auto;
      margin-bottom: auto;
      width: 400px;
      background-color: rgba(0, 0, 0, 0.5) !important;
    }

    .social_icon span {
      font-size: 60px;
      margin-left: 10px;
      color: #FFC312;
    }

    .social_icon span:hover {
      color: white;
      cursor: pointer;
    }

    .card-header h3 {
      color: white;
    }

    .social_icon {
      position: absolute;
      right: 20px;
      top: -45px;
    }

    .input-group-prepend span {
      width: 50px;
      background-color: #FFC312;
      color: black;
      border: 0 !important;
    }

    input:focus {
      outline: 0 0 0 0 !important;
      box-shadow: 0 0 0 0 !important;

    }

    .remember {
      color: white;
    }

    .remember input {
      width: 20px;
      height: 20px;
      margin-left: 15px;
      margin-right: 5px;
    }

    .login_btn {
      color: black;
      background-color: #FFC312;
      width: 100px;
    }

    .login_btn:hover {
      color: black;
      background-color: white;
    }

    .links {
      color: white;
    }

    .links a {
      margin-left: 4px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Admin Login Page</h3>
        </div>
        <div class="card-body">
          <form action="" method="POST">
            <label for="email" style="color:white;margin-right:35px">Email:</label>
            <input type="email" id="email" name="email" required />
            <br />
            <label for="password" style="color:white;">Password:</label>
            <input type="password" id="password" name="password" required />
            <br /><br />
            <input type="submit" name="submit" value="Login" />
          </form>
          <a href="./home.php"><button>Go Back Home</button></a>
          <?php
include_once('config.php');
if(isset($_POST["submit"]))
{
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$pass = mysqli_real_escape_string($mysqli, $_POST['password']);
if(empty($email) || empty($pass)) {
				
  if(empty($name)) {
    echo "<div style='color:red'>Email field is empty.</div><br/>";
  }
  if(empty($pass)) {
    echo "<div style='color:red'>Password field is empty.</div><br/>";
  }
}
else
{
$result = mysqli_query($mysqli, "Select email,password from admin");
$check=true;
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    if($row["email"]==$email && $row["password"]==$pass)
    {
        session_start();
        $_SESSION["admin"] = "login";
        header('Location: adminpage.php');
    }
    else
    {
      $check=false;
    }
}
if($check==false)
{
echo "<div style='color:red'>Admin Not Found!</div><br/>";
}
}}
?>
          <form action="" method="POST">
            <br><label for="email" style="color:white;">Enter Student Email to reset password:</label>
            <input type="email" id="email" name="email" />
            <br />
            <input type="submit" name="submit2" value="Submit" />
          </form>
          <?php
$databaseHost = 'localhost';
$databaseName = 'emart';
$databaseUsername = 'root';
$databasePassword = ''; 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if(isset($_POST['submit2']))
{
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
if(empty($email)) {
				
    echo "<div style='color:red'>Email field is empty.</div><br/>";
}
else
{
$result = mysqli_query($mysqli, "Select * from student");
$check=true;
while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    if($row['email']==$email)
    {
        $query="UPDATE `admin` set password=987654";
        mysqli_query($mysqli,$query);
       
            echo "<div style='color:red'>Successfully! Updated Password.</div><br/>";       
            break;  
    }
    else
    {
      $check=false;
    }
}
if($check==false)
{
echo "<div style='color:red'>Student Not Found!</div><br/>";
}
}
}
?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>