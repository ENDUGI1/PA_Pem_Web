<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HATTRICK CLOTHES</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- css -->
    <link rel="stylesheet" href="style.css" />
    <!-- <link rel="stylesheet" href="search.css" /> -->
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">HATTRICK<span> CLOTHES</span>.</a>
      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About us</a>
        <a href="#catalog">Products</a>
        <a href="#stocks">Catalogs</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart-button"><i data-feather="shopping-bag"></i></a>
        <a href="#" button class="lightMode" onclick="ubahWarna()"
          ><i data-feather="moon"> </i><i data-feather="sun"></i
        ></a>
        <a href="login.php" id="login"><i data-feather="log-in"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- Search Form Start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="Search...">
        <label for="search-box"><i data-feather ="search"></i></label>
      </div>
      <!-- Search Form End -->


      <!-- Shopping cart Start -->
      <div class="shopping-cart">
        <div class="cart-item">
          <img src=img/clothes/clothes2.jpg alt="clothes1">
          <div class="item-detail">
            <h3>Clothes1</h3>
            <div class="item-price">IDR 130K </div>
          </div>
          <i data-feather="trash-2" class = "remove-item"></i>
        </div>
        <div class="cart-item">
          <img src=img/clothes/clothes2.jpg alt="clothes1">
          <div class="item-detail">
            <h3>Clothes1</h3>
            <div class="item-price">IDR 130K </div>
          </div>
          <i data-feather="trash-2" class = "remove-item"></i>
        </div>
        <div class="cart-item">
          <img src=img/clothes/clothes2.jpg alt="clothes1">
          <div class="item-detail">
            <h3>Clothes1</h3>
            <div class="item-price">IDR 130K </div>
          </div>
          <i data-feather="trash-2" class = "remove-item"></i>
        </div>
      </div>
      <!-- Shopping cart End -->

    </nav>

    <!-- Navbar end -->

    <!-- Hero Section Start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Discover Streetwear Excellence with Hattrick <span>Clothes</span></h1>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt,
          architecto.
        </p>
        <a href="#" id="tombol" class="cta">Buy Now</a>
      </main>
    </section>

    <!-- Hero Section End -->

    <!-- About Section Start -->

    <section id="about" class="about">
      <h2><span>About</span> Us</h2>

      <div class="row">
        <div class="about-img">
          <img src="./img/aboutme-bg.JPG" alt="About Me" />
        </div>
        <div class="content">
          <h3>Hello Hattrickans</h3>
          <p>
            My name is <span id="button1">Ahmad Nur Fauzan</span>, and I am a
            student majoring in Informatics at Mulawarman University,
            specifically in the Informatics program.
          </p>
          <p>
            We would like to create an interactive and engaging streetwear
            clothing website as part of a practical assignment for my website
            programming course. We hope that all the knowledge We acquire will be
            beneficial for both myself and others.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Products Section Start -->
    <section id="catalog" class="catalog">
      <h2><span>Our</span> Products</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi dolore
        fugit, provident fuga
      </p>
      <div class="row">
        <div class="catalog-card">
          <img
            src="./img/catalog/shirt2.png"
            alt="kemeja"
            class="catalog-card-img"
          />
          <h3 class="catalog-card-title">Shirt</h3>
          <p class="catalog-card-price">START FROM IDR 130K</p>
        </div>
        <div class="catalog-card">
          <img
            src="./img/catalog/pants.png"
            alt="celana"
            class="catalog-card-img"
          />
          <h3 class="catalog-card-title">Trousers</h3>
          <p class="catalog-card-price">START FROM IDR 110K</p>
        </div>
        <div class="catalog-card">
          <img
            src="./img/catalog/sepatu.png"
            alt="sepatu"
            class="catalog-card-img"
          />
          <h3 class="catalog-card-title">Shoes</h3>
          <p class="catalog-card-price">START FROM IDR 140K</p>
        </div>
        <div class="catalog-card">
          <img
            src="./img/catalog/hat.png"
            alt="topi"
            class="catalog-card-img"
          />
          <h3 class="catalog-card-title">Hat</h3>
          <p class="catalog-card-price">START FROM IDR 60K</p>
        </div>
        <div class="catalog-card">
          <img src="./img/catalog/bag.png" alt="tas" class="catalog-card-img" />
          <h3 class="catalog-card-title">Bag</h3>
          <p class="catalog-card-price">START FROM IDR 90K</p>
        </div>
      </div>
    </section>
    <!-- Products Section End -->


    <!-- barang ready Section Start -->
    <section class="clothes" id="clothes">
      <h2><span>Available </span>Clothes</h2>
      <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Alias beatae perferendis consequuntur molestiae.
      </p>

      <div class = "row">
        <div class ="clothes-card">
          <div class="clothes-icons">
            <a href="#"><i data-feather= "shopping-bag"></i></a>
            <a href="#"><i data-feather= "eye"></i></a>
          </div>
          <div class="clothes-image">
            <img src="img/clothes/clothes1.jpg" alt="Clothes 1" >
          </div>
          <div class="clothes-content">
            <h3>T-shirt Music Art </h3>
            <div class=clothes-stars>
              <i data-feather = "star" class = star-full></i>
              <i data-feather = "star" class = star-full></i>
              <i data-feather = "star" class = star-full></i>
              <i data-feather = "star" class = star-full></i>
              <i data-feather = "star"></i>
            </div>
            <div class="clothes-price">IDR 130K <span>IDR 150K </span> </div>
          </div>
        </div>
      </div>

    </section>
    <!-- barang read Section End -->



    <!-- Contact Section Start -->
    <section id="contact" class="contact">
      <h2><span>Contact</span> Us</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores
        blanditiis laboriosam consequatur error deserunt facere?
      </p>
      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127647.35784689346!2d116.841748!3d-1.1746029999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df14710964d9c91%3A0xcaa6ec96c2aea6d2!2sBalikpapan%2C%20Kota%20Balikpapan%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1696180856907!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data data-feather="user"></i>
            <input type="text" placeholder="Name" />
          </div>
          <div class="input-group">
            <i data data-feather="mail"></i>
            <input type="text" placeholder="Email" />
          </div>
          <div class="input-group">
            <i data data-feather="phone"></i>
            <input type="text" placeholder="Num HP" />
          </div>
          <button type="submit" class="btn">Send Message</button>
          <!-- <div class="popup">
            <img src="/img/checked.png">
            <h2>Thank You!</h2>
            <p>Your details has been successfully submitted.</p>
            <button type="button">OK</button>
          </div> -->
        </form>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>

        <a href="#"><i data-feather="facebook"></i></a>

        <a href="#"><i data-feather="twitter"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About Us</a>
        <a href="#catalog">Catalogs</a>
        <a href="#contact">Contact</a>
      </div>

      <div class="credit">
        <p>Created By <a href="">B1 KEL 5</a>. | &copy; 2023.</p>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Feather icon -->
    <script>
      feather.replace();
    </script>

    <!-- Javascript -->
    <script src="script.js"></script>
    

  </body>
</html>
