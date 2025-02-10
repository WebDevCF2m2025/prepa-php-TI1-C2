<?php
# reda-prefo-php\view\homepageView.php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
include "inc/metaIncView.php";
    ?>

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
