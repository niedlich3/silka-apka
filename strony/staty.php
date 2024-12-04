<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/silka_styl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php
        require_once("php/laczenie-z-baza.php")
        funkcja($e)
    ?>
  <script src="php/laczenie-z-baza.php"></script>
   <div class="gora">
     <nav>
        <a href="glowna.html"><img src="grafika/logo_apka.png" class="logo" alt="logo"></a>

       <!-- <ul class="nav-links">
            <li><a href="profil.php?id=<?php echo $user_data['id']?>" class="text" style="color: white;">Hello, <?php echo $user_data['user_name']; ?></a></li>
            <li><a href="kalendarz.php">Kalendarz</a></li>
            <li><a href="social_feed.php">Znajomi</a></li> --> <!--tu trzeba zrobic tak jak profil -->
           <!-- <li class="btn" style="color: black;">
                <a href="login/logout.php" style="color: black;">Logout</a>
            </li>
    
        </ul> -->
        <div class ="listy">
        <div class="dropdown"> <!--To całe jest do rozwijanej listy, np zeby zrobic jedno dla silki, jedno dla uzykownika inp jedno dla social feeda czy cos-->
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Siłownia
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="silownia.php">Siłownia</a></li>
                <li><a class="dropdown-item" href="czlonkostwo.php">Członkostwo</a></li>
                
              </ul>
            </div>
            <div class="dropdown"> <!--To całe jest do rozwijanej listy, np zeby zrobic jedno dla silki, jedno dla uzykownika inp jedno dla social feeda czy cos-->
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Użytkownik
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profil.php">Profil</a></li>
                    <li><a class="dropdown-item" href="staty.php">Moje statystyki</a></li>
                    <li><a class="dropdown-item" href="kalendarz.php">Kalendarz</a></li>
                  </ul>
                </div>
                <div class="dropdown"> <!--To całe jest do rozwijanej listy, np zeby zrobic jedno dla silki, jedno dla uzykownika inp jedno dla social feeda czy cos-->
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Social Feed
                      </button>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="social-glowna.php">Strona główna</a></li>
                        <li><a class="dropdown-item" href="znajomi.php">Znajomi</a></li>
                        <li><a class="dropdown-item" href="#">Action three</a></li>
                      </ul>
                    </div>
                </div>
     </nav>

     <div class ="srodek"></div>




     <footer>
    <div class = "footerContainer">
     <div class = "footerNav">
      <ul>
        <li><a href = "glowna.html">Home</a></li>	
        <li><a href= "https://linktr.ee/beatbuddy">About Us</a></li>
    
      </ul>
     </div>
     
    </div>
    <div class = "footerBottom">
      <p>Copyright &copy;2024; Designed by <span class = "designer">SCI</span></p>
     </div>
    </footer>
</body>
</html>