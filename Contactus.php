<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contactus.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <title>Contact Us</title>
    <link rel="icon" type="image/png" href="assets/favicon.png">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="rowheader v-center">
                <div class="header-item item-left">
                    <div class="logo">
                        <a href="Home.php"><img src="assets/logo.png" /></a>
                    </div>
                </div>
                <div class="header-item item-right">
                    <a href="mailto:contact@walzixdigitals.com"><i class="headerlink">contact@walzixdigitals.com</i></a>
                    <!-- mobile menu trigger -->
                    <a class="headerlink" href="tel:+923352835019"><i class="headerlink">+923352835019</i></a>
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column" style=" background-image: linear-gradient(to right, #005665 , #00788d);">
            <div class="left">
                <h2 style="text-align: center;margin-bottom: 5px !important; font-weight:700">KARACHI</h2>
                <p style="margin-top: 0px;font-weight:500">A8, Bait-ul-Furqan Building, Block
                    13-C, Gulshan-e-Iqbal, Karachi.
                </p>
            </div>
            <br>
            <br>
            <br>
            <br>
            <img style="align-items: center;" src="assets/dubai_location-copy.png">
            <!-- <h2 style="text-align: center;">MEL NYC DXB</h2> -->


        </div>
        <div class="column" style="background-color:#FFF;">
            <br>
            <br>
            <br>
            <div class="contact-fields">
                <h1 style="color: black;">Let's Start a Project Together</h1>
                <div class="form">
                    <form action="/action_page.php">
                        <div class="col-75">
                            <input type="text" id="fname" name="fullname" placeholder="Full Name">

                            <input type="text" id="email" name="email" placeholder="E-mail">

                            <input type="text" id="number" name="number" placeholder="+92 3132166047">

                            <input type="text" id="company" name="company" placeholder="Company">

                            <select id="project" name="project">
                                <option value="australiaa">Select Project Type</option>
                                <option value="australia">xyz</option>
                                <option value="canada">xyz</option>
                                <option value="usa">xyz</option>
                            </select>
                            <textarea id="subject" name="subject" placeholder="Describe your project needs." style="height:100px;"></textarea>
                            <input type="submit" value="Get in Touch">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>