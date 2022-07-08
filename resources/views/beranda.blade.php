<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>NGEKOST</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href=" {{asset('..\picture\styles.css')}} " />

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <section id="title" style="background-image: url('../picture/img/bg.png')">
        <header class="container-fluid">
            <!-- Nav Bar -->

            <nav class="navbar fixed-top navbar-expand-lg">
                <a class="navbar-brand" href=""><img src="assets/img/logo.png" alt="" />LOGO</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars fa-1x"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav menu">
                        <li class="nav-item">
                            <a class="nav-link active" href=" {{ url ('beranda') }} ">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ url ('data-penyewa') }} ">Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">News & Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Gallery</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto login">
                        <li class="nav-item login-item">
                            <a class="nav-link" href=" {{ route('login') }} ">Login</a>
                        </li>

                    </ul>
                </div>
            </nav>

            <div class="col-lg-12 heading">
                <h1 class="big-heading">NgeKost Mewah Harga Murah</h1>
            </div>
        </header>

        <!-- CONTENT YANG NEMPEL SAMA NAVBAR DI AWAL -->

        <!-- 
        <div class="col-lg-6">
          <img class="title-image" src="images/iphone6.png" alt="iphone-mockup">
        </div> -->
    </section>

    <!-- DISINI CONTENT -->
    <section class="container-fluid search">
        <div class="col-lg-3 side">
            <img src=" {{asset('..\picture\img\woman.png')}} " alt="" class="girl-img" />
        </div>

        <div class="col-lg-6 searching-section">
            <h3 class="search-title">Temukan kost favoritmu di Malang!</h3>
            <p>Pastikan Anda menemukan kost yang diinginkan</p>
            <div>
                <input class="search-input" type="search" placeholder="Cari kost" aria-label="Search" />
            </div>
        </div>

        <div class="col-lg-3 side">
            <img src=" {{asset('..\picture\img\plants.png')}} " alt="" class="plant-img" />
        </div>
    </section>


    <section class="container-fluid">
        <div class="col-lg-12 lokasi-title">
            <h2 class="section-title">RUANGAN TERPOPULER</h2>
        </div>

        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src=" {{asset('..\picture\img\kamar1.png')}} " alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Simple</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src=" {{asset('..\picture\img\kamar2.png')}} " alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Industrial</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src=" {{asset('..\picture\img\kamar3.png')}} " alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Homi</h5>
                </div>
            </div>
        </div>

        <div class="card-group card-group2">
            <div class="card">
                <img class="card-img-top" src=" {{asset('..\picture\img\kamar4.png')}} " alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Santai</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src=" {{asset('..\picture\img\kamar5.png')}} " alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Minimalis</h5>
                </div>
            </div>
        </div>

        </div>








    </section>

</body>
<!-- FOOTER -->
<footer>
    <div class="foot-pos">
        <p class="company">COMPANY</p>
        <p class="category">CATEGORY</p>
        <p class="for-cafe">FOR KOST</p>
        <p class="for-you">FOR YOU</p>
        <p class="contact-us">CONTACT US</p>
        <p class="about-us">ABOUT US</p>
        <p class="outdoor">OUTDOOR</p>
        <p class="add-cafe">ADD KOST</p>
        <p class="privacy">PRIVACY</p>
        <p class="gmail">NgeKost@gmail.com</p>
        <p class="gmail-2"></p>
        <p class="ig"></p>
        <p class="vintage">VINTAGE</p>
        <p class="cafe-profile">KOST PROFILE</p>
        <p class="term">TERM</p>
        <p class="ngekost">NgeKost</p>
        <p class="live-music">LIVE MUSIC</p>
        <p class="security">SECURITY</p>
        <p class="sitemap">SITEMAP</p>
    </div>
</footer>

</html>