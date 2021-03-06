<?php 
session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Davit Khubulia</title>
  </head>
  <body>
    <!-- Navitgation bar -->
    <section id="nav-bar">
      <nav>
        <div class="logo">
          <h1>
            <a href="#"
              ><span class="logo-letter">D</span>avit
              <span class="logo-letter">Kh</span>ubulia</a
            >
          </h1>
        </div>
        <div class="nav-bar">
          <ul class="list">
            <li class="list-item">
              <a href="#nav-bar" class="home"
                ><span class="remove">Home</span>
              </a>
            </li>
            <li class="list-item">
              <a href="#about" class="about">About Me</a>
            </li>
            <li class="list-item">
              <a href="projects.html" class="project">Projects</a>
            </li>
            <li class="list-item">
              <a href="contact.html" class="contact"
                ><span class="remove">Contact</span></a
              >
            </li>
          </ul>
        </div>
      </nav>
    </section>
    <section id="main">
      <div class="main-section">
        <h1>Hello, <?php echo $user_data['user_name'];?></h1>
        <h1>Welcome to,</h1>
        <h1>My Personal Website!</h1>
        <a href="logout.php" type="button" class="cta">Log Out</a>
      </div>
    </section>
    <!-- About me section -->
    <section id="about">
      <h1 class="title">
        <span class="logo-letter">A</span>bout
        <span class="logo-letter">M</span>e
      </h1>
      <p class="about-me">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque
        laboriosam dolorem veniam voluptatum hic illo dicta doloribus
        dignissimos necessitatibus? Quos impedit at consequatur dolorem,
        doloremque labore. Illum sed perspiciatis ipsum! Itaque iste praesentium
        eius iure odio quaerat, mollitia nobis perferendis voluptatum. Molestiae
        provident perferendis et. Non provident aperiam sed exercitationem
        maxime tenetur officiis ipsa laboriosam veniam eum, cum quisquam
        repellat.
      </p>
      <div>
        <a href="contact.html" class="button">contact me</a>
      </div>
    </section>
    <footer>
      <a href="index.php">
        <h1>
          <span class="logo-letter">D</span>avit
          <span class="logo-letter">Kh</span>ubulia
        </h1>
      </a>
      <h2>Beginner Web Developer</h2>
      <div class="icons">
        <a href="#"
          ><img src="images/icons8-facebook-50.png" alt="facebook-icon"
        /></a>
        <a href="#"
          ><img src="images/icons8-twitter-50.png" alt="twitter-icon"
        /></a>
        <a href="#"><img src="images/icons8-mail-50.png" alt="mail-icon" /></a>
      </div>
      <p>?? Copyright @ 2021 Davit. All Rights Reserved</p>
    </footer>
    <script src="app.js"></script>
  </body>
</html>
