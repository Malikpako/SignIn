<?php include 'function.php';

if (isset($_POST['hidden'])) {
    $inloggen = new mysqli('localhost', 'root', '', 'signIn');
    $Username = $_POST['username'];
    $Password = $_POST['password'];
    $sql = "SELECT * FROM `registration` WHERE `username`='" . $Username . "'AND `password`='" . $Password . "'";
    $result = $conn->query($sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $extra = 'welcome.php';
        header("Location: $extra");
    } else {
        $extra1 = 'registreren.php';
        header("Location: $extra1");
    }
}
?>   

<html>
    <head>
        <meta charset="UTF-8">
        <link rel = "stylesheet" type = "text/css" href="SignUp.css">
        <title></title>
    </head>
    <body>
        
        <h2>Login Form</h2>

<form action="/action_page.php">
  <div class="imgcontainer">
      <img src="images.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
      
    </body>
</html>
