<?php 
session_start();
    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //smth was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];
        
        if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){

            //SAVE
            $user_id = random_num(20);
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;
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
    <title>Sign Up-Davit Khubulia</title>
  </head>
  <body>
   
    <section id="log">
      <div class="log-in-container">
        <form method="POST">

        <div class="log">Sign Up</div>
          
          <label for="user_name" class="label">Enter User Name</label>
          <input id="text" type="text" name="user_name"> <br><br>
          <label for="password" class="label">Enter A Password</label>
          <input id="text" type="password" name="password"> <br><br>
          <input id="button" type="submit" value="Sign Up"><br><br>
          <a href="index.php">Click To Log In</a><br><br></br>
        </form>
     
    </section>
    
  </body>
</html>

</body>
</html>