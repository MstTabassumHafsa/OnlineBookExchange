<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Online Book Exchanging System</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- header section start -->
    <header class="header">

        <div class="header-1">

            <a href = "#" class ="logo"><i class="fas fa-book"></i>BookExchange</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for ="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <!-- <a href="#" class="fas fa-shopping-cart"></a> -->
                <div class="cart-icon"><i class="fas fa-shopping-cart"></i>
                <span>0</span> 
                </div>
                <!-- <div id="login-btn" class="fas fa-user"></div> -->
                <div id="login-btn" ></div>
                <p><a href="register_form.php" class="fas fa-user"></a></p>
            </div>
        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">home</a>
                <a href="#featured">featured</a>
                <a href="#arrivals">arrivals</a>
                <a href="#reviews">reviews</a>
                <!-- <a href="#contact">contact</a> -->
                <a href="contact_form.php">contact</a>
                <a href="#blogs">blogs</a>
            </nav>
        </div>

        
    </header>
    <!-- header section end -->

    <!-- bottom navbar -->
    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fas fa-list"></a>
        <a href="#arrivals" class="fas fa-tags"></a>
        <a href="#reviews" class="fas fa-comments"></a>
        <a href="#blogs" class="fas fa-blog"></a>
    </nav>

<!-- login form -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <!-- <form action="">
        <h3>sign in</h3>
        <span>username</span>
        <input type="email" name="" class="box" placeholder="enter your email">
        <span>password</span>
        <input type="password" name="" class="box" placeholder="enter your password">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>forget password ? <a href="#">click here</a></p>
        <p>Don't have an account ? <a href="#">create one</a></p>
    </form> -->
</div>

<!-- home section starts -->

<section class="home" id="home"> <!-- slider_container -->

    <div class="row"> <!-- container -->
        
        <div class="content">
            <h3>upto 75% off</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam sit, excepturi placeat quo dicta consequatur accusamus voluptates itaque autem fugiat.</p>
            <a href="#" class="btn">shop now</a>
        </div>
    
        <div class="swiper books-slider">  <!-- swiper card-slider-->
            <div class="swiper-wrapper">   <!-- swiper-wraper -->
                <a href="#" class="swiper-slide"><img src="image/book-1.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-2.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-3.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-4.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-5.png" alt=""></a>
                <a href="#" class="swiper-slide"><img src="image/book-6.png" alt=""></a>
            </div>
            <img src="image/stand.png"  class="stand" alt="">
        </div>
    </div>

</section>

<!-- home section ends -->
<!-- icons section starts -->
 <section class="icons-container">

    <div class="icons">
        <i class="fas fa-plane"></i>
        <div class="content">
            <h3>free shipping</h3>
            <p>order over $100</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-lock"></i>
        <div class="content">
            <h3>secure payment</h3>
            <p>100% secure payment</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-redo-alt"></i>
        <div class="content">
            <h3>easy returns</h3>
            <p>10 day returns</p>
        </div>
    </div> 
    
    <div class="icons">
        <i class="fas fa-headset"></i>
        <div class="content">
            <h3>24/7 support</h3>
            <p>call us anytime</p>
        </div>
    </div> 

 </section>

<!-- icons section ends -->

<!-- featured section starts -->

    <section class="featured" id="featured">

        <h1 class="heading"><span>featured books</span></h1>  <!-- section-heading -->

        <div class="swiper featured-slider">

            <div class="swiper-wrapper"> <!-- card--list -->

                <div class="swiper-slide box" id="item1"> <!-- card -->
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-1.png" alt="">
                    </div>
                    <div class="content"> <!-- card-price -->
                        <h3 class="card--title">featured books 1</h3>
                        <div class="price">$10.00 <span>$20.99</span></div>
                        <i class="btn">add to chart</i> <!-- class="add-to-cart" = "btn" -->
                    </div>
                </div>

                <div class="swiper-slide box" id="item2">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3 class="card--title">featured books 2</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <i class="btn">add to chart</i> <!-- class="fa-solid fa-plus add-to-cart" = "btn" -->
                        <!-- <a href="#" class="btn">add to chart</a> -->
                    </div>
                </div>

                <div class="swiper-slide box" id="item3">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3 class="card--title">king saviuors</h3>
                        <div class="price">$11.00 <span>$20.99</span></div>
                        <i class="btn">add to chart</i> <!-- class="fa-solid fa-plus add-to-cart" = "btn" -->
                        <!-- <a href="#" class="btn">add to chart</a> -->
                    </div>
                </div>

                <div class="swiper-slide box" id="item4">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3 class="card--title">featured books 4</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <i class="btn">add to chart</i> <!-- class="fa-solid fa-plus add-to-cart" = "btn" -->
                        <!-- <a href="#" class="btn">add to chart</a> -->
                    </div>
                </div>

                <div class="swiper-slide box" id="item5">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3 class="card--title">featured books 5</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <i class="btn">add to chart</i> <!-- class="fa-solid fa-plus add-to-cart" = "btn" -->
                        <!-- <a href="#" class="btn">add to chart</a> -->
                    </div>
                </div>

                <div class="swiper-slide box" id="item6">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3 class="card--title">featured books 6</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <i class="btn">add to chart</i> <!-- class="fa-solid fa-plus add-to-cart" = "btn" -->
                        <!-- <a href="#" class="btn">add to chart</a> -->
                    </div>
                </div>

                <div class="swiper-slide box" id="item7">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3 class="card--title">featured books 7</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <i class="btn">add to chart</i> <!-- class="fa-solid fa-plus add-to-cart" = "btn" -->
                        <!-- <a href="#" class="btn">add to chart</a> -->
                    </div>
                </div>

                <div class="swiper-slide box" id="item8">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3 class="card--title">featured books 8</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <i class="btn">add to chart</i> <!-- class="fa-solid fa-plus add-to-cart" = "btn" -->
                        <!-- <a href="#" class="btn">add to chart</a> -->
                    </div>
                </div>

                <div class="swiper-slide box" id="item9">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-9.png" alt="">
                    </div>
                    <div class="content">
                        <h3 class="card--title">featured books 9</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <i class="btn">add to chart</i> <!-- class="fa-solid fa-plus add-to-cart" = "btn" -->
                        <!-- <a href="#" class="btn">add to chart</a> -->
                    </div>
                </div>

                <div class="swiper-slide box" id="item10">
                    <div class="icons">
                        <a href="#" class="fas fa-search"></a>
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3 class="card--title">featured books 10</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <i class="btn">add to chart</i> <!-- class="fa-solid fa-plus add-to-cart" = "btn" -->
                        <!-- <a href="#" class="btn">add to chart</a> -->
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
  
        </div>

    </section>

<!-- featured section ends -->

<!-- cart sidebar section starts -->
    
    <div class="sidebar" id="sidebar">
        
        <div class="sidebar-close">
            <i class="fa-solid fa-close"></i>
        </div>
        
        <div class="cart-menu">
            <h3>my cart</h3>
            <div class="cart-items"></div>
        </div>   

        <div class="sidebar--footer">
            <div class="total--amount">
                <h5>total</h5>
                <div class="cart-total">$0.00</div>
            </div>
            <button class="checkout-btn">checkout</button> <!-- class="checkout-btn" or btn -->
        </div>

    </div>

<!-- cart sidebar section ends -->

<section class="newsletter">

    <form action="">
        <h3>Subscribe for latest updates</h3>
        <input type="email" name="" class="box" placeholder="enter your email">
        <input type="submit" value="Subscribe" class="btn">
    </form>

</section>

<!-- newsletter section ends -->

<!-- arrivals section starts -->

    <section class="arrivals" id="arrivals">
    
        <h1 class="heading"><span>new arrivals</span></h1>
        
        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="image/book-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="image/book-2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="image/book-3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="image/book-4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="image/book-5.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>
        
        <div class="swiper arrivals-slider">

            <div class="swiper-wrapper">

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="image/book-6.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="image/book-7.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="image/book-8.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="image/book-9.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="swiper-slide box">

                    <div class="image">
                        <img src="image/book-10.png" alt="">
                    </div>
                    <div class="content">
                        <h3>new arrivals</h3>
                        <div class="price">$15.99 <span>$20.99</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>

            </div>

        </div>

    </section>

<!-- arrivals section ends -->

<!-- deal section starts -->

    <section class="deal">

        <div class="content">

            <h3>deal of the day</h3>
            <h1>upto 50% off</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit officia ab deserunt dignissimos architecto! Accusamus soluta quos eius quo dolorem?</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="image">
            <img src="image/deal-img.jpg" alt="">
        </div>
    </section>

<!-- deal section ends -->

<!-- reviews section starts -->

<section class="reviews" id="reviews">

    <h1 class="heading"><span>client's reviews</span></h1>

    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">

                <img src="image/pic-1.png" alt="">
                <h3>Mst. Tabassum Hafsa</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quidem natus excepturi, minima aliquam dolorum?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>

            </div>

            <div class="swiper-slide box">

                <img src="image/pic-2.png" alt="">
                <h3>Mst. Tabassum Hafsa</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus quidem natus excepturi, minima aliquam dolorum?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                
            </div>

            <div class="swiper-slide box">

                <img src="image/pic-3.png" alt="">
                <h3>Mst. Tabassum Hafsa</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus quidem natus excepturi, minima aliquam dolorum?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                
            </div>

            <div class="swiper-slide box">

                <img src="image/pic-4.png" alt="">
                <h3>Mst. Tabassum Hafsa</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus quidem natus excepturi, minima aliquam dolorum?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                
            </div>

            <div class="swiper-slide box">

                <img src="image/pic-5.png" alt="">
                <h3>Mst. Tabassum Hafsa</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus quidem natus excepturi, minima aliquam dolorum?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                
            </div>

            <div class="swiper-slide box">

                <img src="image/pic-6.png" alt="">
                <h3>Mst. Tabassum Hafsa</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus quidem natus excepturi, minima aliquam dolorum?</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                
            </div>

        </div>

    </div>

</section>


<!-- reviews section ends -->

<!-- blogs section starts -->

<section class="blogs" id="blogs">

    <h1 class="heading"><span>our blogs</span></h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">

                <div class="image">
                    <img src="image/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A, facere.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">

                <div class="image">
                    <img src="image/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A, facere.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">

                <div class="image">
                    <img src="image/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A, facere.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">

                <div class="image">
                    <img src="image/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A, facere.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide box">

                <div class="image">
                    <img src="image/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <h3>blog title goes here</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. A, facere.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>pur location</h3>
                <a href="#"><i class="fas fa-map-marker-alt"></i> bangladesh</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> india</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> nepal</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> USA</a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> France</a>
            </div>
    
            <div class="box">
                <h3>quick links</h3>
                <a href="#"><i class="fas fa-arrow-right"></i> home</a>
                <a href="#"><i class="fas fa-arrow-right"></i> featured</a>
                <a href="#"><i class="fas fa-arrow-right"></i> arrivals</a>
                <a href="#"><i class="fas fa-arrow-right"></i> reviews</a>
                <a href="#"><i class="fas fa-arrow-right"></i> contact</a>
                <a href="#"><i class="fas fa-arrow-right"></i> blogs</a>
            </div>
    
            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-arrow-right"></i> account info</a>
                <a href="#"><i class="fas fa-arrow-right"></i> odered items</a>
                <a href="#"><i class="fas fa-arrow-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-arrow-right"></i> payment method</a>
                <a href="#"><i class="fas fa-arrow-right"></i> our services</a>
            </div>
    
            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +111-222-333</a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-333</a>
                <a href="#"><i class="fas fa-envelope"></i> htabassum@gmail.com</a>
                <img src="image/worldmap.png" class="map" alt="">
            </div>
            
        </div>

        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>
    
        <div class="credit"> credited by <span>Mst. web designer</span> | all rights reserved! </div>
    
    </section>

<!-- footer section ends -->

<!-- loader -->

<!-- <div class="loader-container">
    <img src="image/loader-img.gif" alt="">
</div> -->





































































<div class="content">
    <!-- Content to enable scrolling -->
</div>

    <!-- Font Awesome icon library -->
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link     -->
    <script src="js/script.js"></script>
</body>
</html>