<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
 <!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Home</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"><link rel="stylesheet" href="style.CSS">

</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <input type="checkbox" name="" id="checkbox">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="#home">Home</a></li>
                <li><a href="#sellers">Shop</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="#news">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="logout.php">Signout
                <?php echo htmlspecialchars($_SESSION["username"]); ?>
                </a></li>
            </ul>
            <div class="logo">
                <img src="LOGO.png" alt="" style="width: 200px; height: auto;">
            </div>            
        </div>
    </nav>
    <section id="home">
        <div class="home_page ">
            <div class="home_img ">
                <img src="https://static.dezeen.com/uploads/2016/03/supreme-paris-store-by-brinkworth_dezeen_1568_1.jpg" alt="img ">
            </div>
            <div class="home_txt ">
                <h2><small>Let's find more homes</small></h2>
                <div class="home_label ">
                    <p>for all things second-hand.</p>
                </div>
                <button><a href="#sellers">SHOP NOW</a><i class='bx bx-right-arrow-alt'></i></button>
                <div class="home_social_icons">
                    <a href="https://www.facebook.com/malvarouxxx"
                    target="_blank"><i class='bx bxl-facebook'></i></a>
                    <a href=""><i class='bx bxl-twitter'></i></a>
                    <a href=""><i class='bx bxl-pinterest'></i></a>
                    <a href=""><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="collection">
        <div class="collections container">
            <div class="content">
                <img src="IMG_CLOTHING 01.jpg" alt="img" />
                <div class="img-content">
                    <p>Clothing</p>
                    <button><a href="#sellers">SHOP NOW</a></button>
                </div>
            </div>
            <div class="content2">
                <img src="IMG_PANTS 01.jpg" alt="img" />
                <div class="img-content2">
                    <p>Pants</p>
                    <button><a href="#sellers02">SHOP NOW</a></button>
                </div>
            </div>
            <div class="content3">
                <img src="IMG_ACCESSORIES 01.jpg" alt="img" />
                <div class="img-content3">
                    <p>Accessories</p>
                    <button><a href="#sellers03">SHOP NOW</a></button>
                </div>
            </div>
        </div>
    </section>
    <section id="sellers">
        <div class="seller container">
            <h2>Clothing</h2>
            <div class="best-seller">
            <div class="best-p1">
    <form action="cart.php" method="POST">
        <img src="IMG_CLOTHING 02.jpg" alt="img">
        <div class="best-p1-txt">
            <div class="name-of-p" name="Item_name">
                <p>Coziest® "Harley" Mesh Jersey Shirt (L)</p>
            </div>
            <div class="rating">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
            </div>
            <div class="price" name="price">
                ₱550
            </div>
            <div class="buy-now">
                <button type="submit" name="Add_To_Cart">Add to cart</button>
            </div>
        
            <input type="hidden" name="product_id" value="1">
            <input type="hidden" name="product_name" value="Coziest® 'Harley' Mesh Jersey Shirt (L)">
            <input type="hidden" name="product_price" value="550">
            <input type="hidden" name="product_image" value="IMG_CLOTHING 02.jpg">
        </div>
    </form>
</div>

                <div class="best-p1">
                <form action = "cart.php" method="POST">
                    <img src="IMG_CLOTHING 03.jpg" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p" name="Item_name">
                            <p>A$AP Rocky Embroidered Spell Out Multi Color Striped Graphic Ringer Tee Shirt (M)</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price" name="price">
                            ₱350
                        </div>
                        <div class="buy-now">
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        </div>
                        <input type="hidden" name="product_id" value="2">
                        <input type="hidden" name="product_name" value="A$AP Rocky Embroidered Spell Out Multi Color Striped Graphic Ringer Tee Shirt (M)">
                        <input type="hidden" name="product_price" value="350">
                        <input type="hidden" name="product_image" value="IMG_CLOTHING 03.jpg">
                        </form>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="IMG_CLOTHING 04.jpg" alt="img">
                    <div class="best-p1-txt">
                    <form action = "cart.php" method="POST">
                        <div class="name-of-p" name="Item_name">
                            <p>BAPE Flame Spell Out Double Sided Multi Logo Graphic Tee Shirt (S)</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price" name="price">
                            ₱300
                        </div>
                        <input type="hidden" name="product_id" value="3">
                        <input type="hidden" name="product_name" value="BAPE Flame Spell Out Double Sided Multi Logo Graphic Tee Shirt (S)">
                        <input type="hidden" name="product_price" value="300">
                        <input type="hidden" name="product_image" value="IMG_CLOTHING 04.jpg">
                        <div class="buy-now">
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="IMG_CLOTHING 05.jpg" alt="img">
                    <div class="best-p1-txt">
                    <form action = "cart.php" method="POST">
                        <div class="name-of-p" name="Item_name">
                            <p>Vintage Nike Embroidered Big Swoosh Logo Two Tone Graphic Polo Shirt (L)</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price" name="price">
                            ₱250
                        </div>
                        <input type="hidden" name="product_id" value="4">
                        <input type="hidden" name="product_name" value="Vintage Nike Embroidered Big Swoosh Logo Two Tone Graphic Polo Shirt (L)">
                        <input type="hidden" name="product_price" value="250">
                        <input type="hidden" name="product_image" value="IMG_CLOTHING 05.jpg">
                        <div class="buy-now">
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <section id="sellers02">
        <div class="seller container">
            <h2>Pants</h2>
            <div class="best-seller">
                <div class="best-p1">
                <form action = "cart.php" method="POST">
                    <img src="IMG_PANTS 01.jpg" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p" name="Item_name">
                            <p>Denim Bootcut</p>
                            <p>(Waist 28/Length 44)</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price" name="price">
                            ₱450
                        </div>
                        <input type="hidden" name="product_id" value="5">
                        <input type="hidden" name="product_name" value="Denim Bootcut">
                        <input type="hidden" name="product_price" value="450">
                        <input type="hidden" name="product_image" value="IMG_PANTS 01.jpg">
                        <div class="buy-now">
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="IMG_PANTS 02.jpg" alt="img">
                    <div class="best-p1-txt">
                    <form action = "cart.php" method="POST">
                        <div class="name-of-p" name="Item_name">
                            <p>"Cherokee" Camo Cargo</p>
                            <p>(Waist 32/Length 43/Thigh 22)</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price" name="price">
                            ₱500
                        </div>
                        <input type="hidden" name="product_id" value="6">
                        <input type="hidden" name="product_name" value="Cherokee Camo Cargo">
                        <input type="hidden" name="product_price" value="500">
                        <input type="hidden" name="product_image" value="IMG_CLOTHING 02.jpg">
                        <div class="buy-now">
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="IMG_PANTS 03.jpg" alt="img">
                    <div class="best-p1-txt">
                    <form action = "cart.php" method="POST">
                        <div class="name-of-p" name="Item_name">
                            <p>Black Baggy Fit</p>
                            <p>(Waist 34/Length 43/Thigh 20)</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price" name="price">
                            ₱400
                        </div>
                        <input type="hidden" name="product_id" value="7">
                        <input type="hidden" name="product_name" value="Black Baggy Fit">
                        <input type="hidden" name="product_price" value="400">
                        <input type="hidden" name="product_image" value="IMG_PANTS 03.jpg">
                        <div class="buy-now">
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="best-p1">
                <form action = "cart.php" method="POST">
                    <img src="IMG_PANTS 04.jpg" alt="img">
                    <div class="best-p1-txt">
                        <div class="name-of-p" name="Item_name">
                            <p>"Levis" Cargo</p>
                            <p>(Waist 32/Length 40/Thigh 22)</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price" name="price">
                            ₱300
                        </div>
                        <input type="hidden" name="product_id" value="8">
                        <input type="hidden" name="product_name" value="Levis Cargo">
                        <input type="hidden" name="product_price" value="300">
                        <input type="hidden" name="product_image" value="IMG_PANTS 04.jpg">
                        <div class="buy-now">
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <section id="sellers03">
        <div class="seller container">
            <h2>Accessories</h2>
            <div class="best-seller">
                <div class="best-p1">
                    <img src="IMG_ACCESSORIES 02.jpg" alt="img">
                    <div class="best-p1-txt">
                    <form action = "cart.php" method="POST">
                        <div class="name-of-p" name="Item_name">
                            <p>Coach Bag</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price" name="price">
                            ₱500
                        </div>
                        <input type="hidden" name="product_id" value="9">
                        <input type="hidden" name="product_name" value="Coach Bag">
                        <input type="hidden" name="product_price" value="500">
                        <input type="hidden" name="product_image" value="IMG_ACCESSORIES 02.jpg">
                        <div class="buy-now">
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="IMG_ACCESSORIES 03.jpg" alt="img">
                    <div class="best-p1-txt">
                    <form action = "cart.php" method="POST">
                        <div class="name-of-p" name="Item_name">
                            <p>9FIFTY White New Era Cap</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                        <div class="price" name="price">
                            ₱300
                        </div>
                        <input type="hidden" name="product_id" value="10">
                        <input type="hidden" name="product_name" value="9FIFTY White New Era Cap">
                        <input type="hidden" name="product_price" value="300">
                        <input type="hidden" name="product_image" value="IMG_ACCESSORIES 03.jpg">
                        <div class="buy-now">
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="IMG_ACCESSORIES 04.jpg" alt="img">
                    <div class="best-p1-txt">
                    <form action = "cart.php" method="POST">
                        <div class="name-of-p" name="Item_name">
                            <p>Versace Medusa Sunglasses</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price" name="price">
                            ₱100
                        </div>
                        <input type="hidden" name="product_id" value="11">
                        <input type="hidden" name="product_name" value="Versace Medusa Sunglasses">
                        <input type="hidden" name="product_price" value="100">
                        <input type="hidden" name="product_image" value="IMG_ACCESSORIES 04.jpg">
                        <div class="buy-now">
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        </div>
                    </form>
                    </div>
                </div>
                <div class="best-p1">
                    <img src="IMG_ACCESSORIES 05.jpg" alt="img">
                    <div class="best-p1-txt">
                    <form action = "cart.php" method="POST">
                        <div class="name-of-p" name="Item_name">
                            <p>Chrome Hearts Gold Necklace</p>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <div class="price" name="price">
                            ₱150
                        </div>
                        <input type="hidden" name="product_id" value="12">
                        <input type="hidden" name="product_name" value="Chrome Hearts Gold Necklace">
                        <input type="hidden" name="product_price" value="150">
                        <input type="hidden" name="product_image" value="IMG_ACCESSORIES 05.jpg">
                        <div class="buy-now">
                        <button type="submit" name="Add_To_Cart">Add to cart</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news">
        <div class="news-heading">
            <p>LATEST NEWS</p>
            <h2>Fashion New Trends</h2>
        </div>
        <div class="l-news container">
            <div class="l-news1">
                <div class="news1-img">
                    <img src="IMG_BLOG 01.jpg" alt="img">
                </div>
                <div class="news1-conte">
                    <div class="date-news1">
                        <p><i class='bx bxs-calendar'></i> 04 November 2024</p>
                        <h4>Check out Coziest newest “6IX” Anniversary Collection</h4>
                        <a href="https://www.facebook.com/coziestcoph/" target="_blank">read more</a>
                    </div>
                </div>
            </div>
            <div class="l-news2">
                <div class="news2-img">
                    <img src="IMG_BLOG 02.jpg" alt="img">
                </div>
                <div class="news2-conte">
                    <div class="date-news2">
                        <p><i class='bx bxs-calendar'></i> 04 November 2024</p>
                        <h4>Asia’s Most Stylish 2024: Meet the Filipino fashion icons who made the cut</h4>
                        <a href="https://www.tatlerasia.com/style/fashion/asias-most-stylish-2024-philippines" target="_blank">read more</a>
                    </div>
                </div>
            </div>
            <div class="l-news3">
                <div class="news3-img">
                    <img src="IMG_BLOG 03.jpg" alt="img">
                </div>
                <div class="news3-conte">
                    <div class="date-news3">
                        <p><i class='bx bxs-calendar'></i> 04 November 2024</p>
                        <h4>Bella Is Back! All Of The Supermodel’s Looks At The 2024 Cannes Film Festival</h4>
                        <a href="https://www.voguehk.com/en/article/fashion/bella-hadid-cannes-2024/" target="_blank">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact container">
        <form action="https://formspree.io/f/xzbowpjq" method="POST">
            <div class="form">
                <div class="form-txt">
                    <h4>INFORMATION</h4>
                    <h1>About Us</h1>
                    <span>Thriftzilla offers a carefully curated selection of clothing, and accessories, all at unbeatable prices.<br>Our mission is to promote recycling and reduce waste by giving pre-loved items a second chance. Each piece in our store has a story to tell, and we believe that shopping should be an adventure. Whether you're on the hunt for vintage gems, or trendy outfits, you’ll find something that speaks to your style and values.</span>
                    <h3>PHILIPPINES</h3>
                    <p>120 McArthur Highway, Valenzuela City, 1440 Metro Manila<br>+63 967-366-2201</p>
                </div>
            </div>
        </form>
    </div>
    </section>
    <footer>
        <div class="footer-container container">
            <div class="content_1">
                <img src="LOGO_02.png" alt="logo">
                
                
            </div>
            
            
                
            </div>
        </footer>
    </body>
    </body>
</html>