<!DOCTYPE html>

<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="Header.css">

<body>
    <nav class="navbar">
        <!-- LOGO -->
        <img class="logo" src="assets/logo.png" />
        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
            <!-- USING CHECKBOX HACK -->
            <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label>
            <!-- NAVIGATION MENUS -->
            <div class="menu">
                <li class="services">
                    <a href="/">Services</a>

                    <ul class="dropdown">
                        <li><a href="/">IOS Development</a></li>
                        <li><a href="/">Android App Development</a></li>
                        <li><a href="/">Web App Development</a></li>
                        <li><a href="/">Game Development</a></li>
                        <li><a href="/">Blockchain Development</a></li>
                    </ul>
                </li>
                <li><a href="/">Solutions</a></li>
                <li><a href="/">Work</a></li>
                <li><a href="/">About</a></li>
                <li><a href="/">Contact</a></li>
                <button class="menu-button"><a href="/">Get A Quote</a></button>
            </div>
        </ul>
    </nav>
</body>
</head>

</html>