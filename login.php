<?php 
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //smth was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

        //read
        
        $query = "select * from users where user_name = '$user_name' limit 1";

        $result = mysqli_query($con, $query);

        if($result){
          if($result && mysqli_num_rows($result) >0){
            
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password){
              $_SESSION['user_id'] = $user_data['user_id'];
              header("Location: index.php");
              die;
            }
          }
        }
        echo "Wrong username or password";
    }
    else{
        echo "Please Enter Valid Information!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="styles.css"<?php echo time(); ?>"/>
    <title>Sign In-Davit Khubulia</title>
  </head>
  <body>
  
    <section id="log">
      <div class="log-in-container">
        <form method="POST">

        <div class="log">Login</div>
        <label for="user_name" class="label">Enter User Name</label>
          <input id="text" type="text" name="user_name"> <br><br>
          <label for="user_name" class="label">Enter A Password</label>
          <input id="text" type="password" name="password"> <br><br>

          <input id="button" type="submit" value="Log In"><br><br>
          <a href="signup.php">Click To Sign Up</a><br><br></br>
        </form>
     
    </section>
    
  </body>
</html>

</body>
</html>