<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candy Paradise</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

    <!-- Primary Navigation -->
    <div class="header-main">

        <div class="container">

        <a href="index.php" class="header-logo">
            <img src="./assets/Logo.png" alt="Candy Paradise logo" width="150" height="90">
        </a>

        <div class="header-search-container">

            <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

            <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
            </button>

        </div>
     
      <form action="#" class="font-size-14 font-rale">
                <a href="wish_list.php" class="py-2 rounded-pill color-primary-bg" >
                <span class="font-size-16 px-2 text-white"><i class="fa fa-heart" aria-hidden="true"></i>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('wishlist')); ?></span>
                </a>
            </form>

    </button>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
</div>
        </div>

        <nav class="desktop-navigation-menu">

        <div class="container">

        <ul class="desktop-menu-category-list">

            <li class="menu-category">
            <a href="index.php" class="menu-title">Home</a>
            </li>


            <li class="menu-category">
            <a href="categories.php" class="menu-title">Products</a>

            </li>

            

            <li class="menu-category">
            <a href="contact.php" class="menu-title">Contact</a>
            </li>

            <li class="menu-category">
            <a href="about.php" class="menu-title">About</a>
            </li>

        </ul>

        </div> 

        </nav>

        <div class="mobile-bottom-navigation">

        <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
        </button>

        <button class="action-btn">
        <ion-icon name="bag-handle-outline"></ion-icon>

        <span class="count">0</span>
        </button>

        <button class="action-btn">
        <ion-icon name="home-outline"></ion-icon>
        </button>

        <button class="action-btn">
        <ion-icon name="heart-outline"></ion-icon>

        <span class="count">0</span>
        </button>

        <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
        </button>

        </div>

            
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>
<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
