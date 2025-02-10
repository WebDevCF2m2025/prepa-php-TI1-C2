<?php
# reda-prefo-php\view\homepageView.php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./assets/favicon.ico" type="(image/x-icon)" />
    <link rel="stylesheet" href="./style/main.css" />
    <link rel="stylesheet" href="./style/home.css" />
    <link rel="stylesheet" href="./style/navbar.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />

    <title>Home</title>
  </head>
  <body>
    <header>
      <nav>
       <?php
include "inc/navIncView.php";
       ?>
      </nav>
    </header>
    <section class="home">
      <div class="home-img">
        <img src="./assets/Betterimage.ai_1732386030717.jpeg" alt="" />
      </div>
      <div class="home-content">
        <h1>Hey, it's <span>Reda</span></h1>
        <h3 class="typing-text">i'm a <span class="type-text"></span></h3>
        <p>Ask me anything i will make it work !</p>
        <div class="social-icon">
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://github.com/redasnkrs" target="_blank"
            ><i class="fa-brands fa-github"></i
          ></a>
          <a href="https://x.com/redasnkrs" target="_blank"
            ><i class="fa-brands fa-twitter"></i
          ></a>
        </div>
      </div>
    </section>

    <footer><?php
include "inc/footerIncView.php";
       ?></footer>
  </body>
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <script>
    let typed = new Typed(".type-text", {
      strings: ["Web Developer", "Software Engineer", "Designer"],
      typeSpeed: 200,
      backSpeed: 50,
      loop: true,
    });
  </script>
</html>
