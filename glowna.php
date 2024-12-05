<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silka główna strona</title>
    <link rel="stylesheet" href="css/silka_styl.css">
</head>
<body>
    <header id="baner">
        <div id="menu-icon">☰</div>
        <nav id="nav-bar">
            <ul id="menu">
                <li><a href="#home">Strona główna</a></li>
                <li><a href="#about">O nas</a></li>
                <li><a href="#services">Usługi</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </nav>
        <div id="logo">
            <img src="grafika/logo.jpg" alt="logo">
        </div>
    </header>
    <main>
        <!-- Główna zawartość strony -->
    </main>
    <footer>
        <div class="footerContainer">
            <div class="footerNav">
                <ul>
                    <li><a href="glowna.html">Home</a></li>
                    <li><a href="https://linktr.ee/beatbuddy">About Us</a></li>
                </ul>
            </div>
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2024; Designed by <span class="designer">SCI</span></p>
        </div>
    </footer>
    <script>
        // Obsługa kliknięcia na ikonę menu
        document.getElementById("menu-icon").addEventListener("click", () => {
            const navBar = document.getElementById("nav-bar");
            const menuIcon = document.getElementById("menu-icon");
            navBar.classList.toggle("active");
            menuIcon.classList.toggle("active");
        });
    </script>
</body>
</html>
