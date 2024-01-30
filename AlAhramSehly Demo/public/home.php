<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family= :wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../style.css" />

    <script type="text/javascript">
      (function (I, L, T, i, c, k, s) {
        if (I.iticks) return;
        I.iticks = { host: c, settings: s, clientId: k, cdn: L, queue: [] };
        var h = T.head || T.documentElement;
        var e = T.createElement(i);
        var l = I.location;
        e.async = true;
        e.src = (L || c) + "/client/inject-v2.min.js";
        h.insertBefore(e, h.firstChild);
        I.iticks.call = function (a, b) {
          I.iticks.queue.push([a, b]);
        };
      })(
        window,
        "https://cdn-v1.intelliticks.com/prod/common",
        document,
        "script",
        "https://app.intelliticks.com",
        "xr43yJN8XpucPNKYF_c",
        {}
      );
    </script>

    <title>AL_AHRAM SEHLY</title>
  </head>
  <body>
    <section class="header">
      <!--hmtl for logo and nva bar -->
      <a href="#" class="logo">
        <img src="../project_images/logo.png" class="LOGO" alt="LOGO" />
        <h2 class="logotext">hram Sehly</h2></a
      >
      <div>
        <!--div for nav bar creation  -->
        <ul class="navbar">
          <li><a class="active" href="home.html"> Home </a></li>
          <li class="dropdown">
            <a href="../products.php" class="trigger-drop"> Shop </a>
          </li>
          <li><a href="../Aboutus.html">About&nbsp;Us </a></li>
          <li><a href="../contactus.html">Contact </a></li>
          <li><a href="../login_form.php" id="Signup">Sign&nbsp;Up </a></li>
          <!-- <li><a href="index.php">Contact</a></li> -->
          <li>
            <a href="../cart.php"
              ><i class="fa-solid fa-cart-shopping fa-bounce fa-lg"></i
            ></a>
          </li>
        </ul>
      </div>
    </section>
    <section class="hero">
      <div class="hero-left-text">
        <h2>Find Your Signature Scent</h2>
        <h1>Timeless Elegance and Captivating Scents</h1>
        <p class="flash">
          <snap>Flash Sale Alert </snap>: Don't Miss Out on Limited Quantity
          Offers
        </p>
        <button  onclick="window.location.href = '../products.php'">
          <div class="default-button">
            <span>Start</span>
          </div>
          <div class="hover-button">
            <span>Shop Now</span>
          </div>
        </button>
      </div>
      <div class="hero-right-picture">
        <img src="../heroBig.png" class="hero-img" />
      </div>
    </section>
    <section class="feature" class="section-p1">
      <div class="text-cont">
        <div class="row">
          <div class="col">
            <div class="animate">
              <h2 class="categories">Shop our categories</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="feature-grid">
        <div class="feature">
          <div class="feature-box">
            <h2 class="Watches-heading">Watches</h2>
            <h2 class="Watches-heading-none">Watches</h2>
            <div class="feature-box-1"></div>
            <div class="feature-box-2"></div>
            <a class="takealook-heading-none" href="../products.php"> Take a Look </a>
            <div>
              <img
                class="feature-img"
                src="../project_images/Men_section/watch.png"
              />
            </div>
          </div>
        </div>
        <div class="feature">
          <div class="feature-box">
            <h2 class="Watches-heading">Perfumes</h2>
            <h2 class="Watches-heading-none">Perfumes</h2>
            <div class="feature-box-1"></div>
            <div class="feature-box-2"></div>
            <a class="takealook-heading-none" href="../products.php"> Take a Look </a>
            <div>
              <img
                class="feature-img"
                src="../project_images/Men_section/perfum-removebg-preview.png"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="Prouduct1" class="section-p1">
      <h2 class="New-Arrival">New Arrival</h2>
      <p class="summer-products">
        Best summer Products to start your summer with style
      </p>
      <div class="products-grid">
        <div class="product-card">
          <div class="badge">Hot</div>
          <div class="product-tumb">
            <img
              src="../project_images/Men_section/perfume2-removebg-preview.png"
              alt=""
            />
          </div>
          <div class="product-details">
            <span class="product-catagory">Man,Perfume</span>
            <h4><a href="">Jaguar classic black</a></h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero,
              possimus nostrum!
            </p>
            <div class="product-bottom-details">
              <div class="product-price"><small>$230.99</small>$96.99</div>
              <div class="product-links">
                <a href=""><i class="fa fa-heart"></i></a>
                <a href="../products.php"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="badge">Hot</div>
          <div class="product-tumb">
            <img src="../project_images/Men_section/watch3.png" alt="" />
          </div>
          <div class="product-details">
            <span class="product-catagory">Watch,Man</span>
            <h4><a href="">Orient watch</a></h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero,
              possimus nostrum!
            </p>
            <div class="product-bottom-details">
              <div class="product-price"><small>$230.99</small>$96.99</div>
              <div class="product-links">
                <a href=""><i class="fa fa-heart"></i></a>
                <a href="../products.php"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="badge">Hot</div>
          <div class="product-tumb">
            <img src="../project_images/Men_section/perfume1.png" alt="" />
          </div>
          <div class="product-details">
            <span class="product-catagory">Women,Perfume</span>
            <h4><a href="">guerlain perfume</a></h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero,
              possimus nostrum!
            </p>
            <div class="product-bottom-details">
              <div class="product-price"><small>$230.99</small>$96.99</div>
              <div class="product-links">
                <a href=""><i class="fa fa-heart"></i></a>
                <a href="../products.php"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="product-card">
          <div class="badge">Hot</div>
          <div class="product-tumb">
            <img src="../project_images/Men_section/watch2.png" alt="" />
          </div>
          <div class="product-details">
            <span class="product-catagory">Women,Watch</span>
            <h4><a href="">Orient Contemporary</a></h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero,
              possimus nostrum!
            </p>
            <div class="product-bottom-details">
              <div class="product-price"><small>$230.99</small>$96.99</div>
              <div class="product-links">
                <a href=""><i class="fa fa-heart"></i></a>
                <a href="../products.php"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-m1">
      <div class="left-img">
        <img
          src="../project_images/Men_section/Perfume-Section.jpg"
          class="black-perfume"
        />
      </div>
      <div class="right-text">
        <h2 class="fragrance">
          Ahram <br />
          <span class="sehly"> Sehly</span> <br /><span> FRAGRANCES </span>
        </h2>
        <div class="handwriting">
          <img
            src="../project_images/Men_section/handwriting.png"
            class="handwriting-img"
          />
        </div>
        <div class="line-available">
          <div class="line"></div>
          <p class="available">(AVAILABLE NOW)</p>
        </div>
        <p class="perfume-section-text">
          Step into a world of fragrance enchantment with our Perfume
          Collection. Immerse yourself in a symphony of captivating scents that
          exude timeless allure.
        </p>
      </div>
    </section>
    <section class="section-m1">
      <div class="right-text">
        <h2 class="fragrance">
          Unforgettable <br />
          <span class="sehly"> Luxury </span> <br /><span> Experience </span>
        </h2>
        <div class="timeless">
          <img
            src="../project_images/Men_section/timeless.png"
            class="handwriting-img"
          />
        </div>
        <div class="line-available">
          <div class="line"></div>
          <p class="available">(AVAILABLE NOW)</p>
        </div>
        <p class="perfume-section-text">
          Discover a world of timeless elegance in our Watches section. Immerse
          yourself in the artistry of exceptional craftsmanship and precision
          engineering.
        </p>
      </div>
      <div class="left-img">
        <img
          src="../project_images/Men_section/watchbanner.png"
          class="black-perfume"
        />
      </div>
    </section>
    <footer class="footer">
      <div class="container grid grid--footer">
        <div class="logo-col">
          <a href="#" class="footer-logo">
            <img
              class="logo-pic"
              alt="Omnifood logo"
              src="../project_images/A%20logo.png"
            />
            <p class="hramSehly">hram Sehly</p>
          </a>

          <ul class="social-links">
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-instagram"></ion-icon
              ></a>
            </li>
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-facebook"></ion-icon
              ></a>
            </li>
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-twitter"></ion-icon
              ></a>
            </li>
          </ul>

          <p class="copyright">
            Copyright &copy; 2027 by Alahramsehly, Inc. All rights reserved.
          </p>
        </div>
        <div class="address-col">
          <p class="footer-heading">Contact us</p>
          <address class="contacts">
            <p class="address">
              Gamal Abdel Nasser St Shebin El-Kom - Menoufia Next to Banque
              Misr<br />
            </p>
            <p>
              <a class="footer-link" href="tel:0103 080 3740">0103 080 3740</a
              ><br />
              <a class="footer-link" href="mail:alahramsehly@gmail.com"
                >alahramsehly@gmail.com</a
              >
            </p>
          </address>
        </div>
        <nav class="nav-col">
          <p class="footer-heading">Account</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">Create account</a></li>
            <li><a class="footer-link" href="#">Sign in</a></li>
            <li><a class="footer-link" href="#">iOS app</a></li>
            <li><a class="footer-link" href="#">Android app</a></li>
          </ul>
        </nav>

        <nav class="nav-col">
          <p class="footer-heading">Company</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">About Alahramsehly</a></li>
            <li><a class="footer-link" href="#">For Business</a></li>
            <li><a class="footer-link" href="#">Careers</a></li>
          </ul>
        </nav>

        <nav class="nav-col">
          <p class="footer-heading">Resources</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">Shoping directory </a></li>
            <li><a class="footer-link" href="#">Help center</a></li>
            <li><a class="footer-link" href="#">Privacy & terms</a></li>
          </ul>
        </nav>
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
