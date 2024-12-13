<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL . '/css/reset.css' ?>" >
    <link rel="stylesheet" href="<?= URL . '/css/styles.css' ?>">
    <title>Moody Studio</title>
</head>
<body>
    <header>
        <section class="section">
            <div class="section-header">
                <h1 class="roboto-bold">MOODY STUDIO</h1>
                <div class="flex-container-buttons">
                    <img src="./img/icons/search.svg" alt="nav search icon">
                    <img src="./img/icons/user.svg" alt="nav user icon">
                    <img src="./img/icons/cart.svg" alt="nav cart icon">
                    <img src="./img/icons/favorites.svg" alt="nav favorites icon">
                </div>
            </div>
            <hr class="divisor-line">
            <nav class="main-nav roboto-bold">
                <a href="#" class="link_active">HOME</a>
                <a href="#">STORE</a>
                <a href="#">ACCESORIES</a>
                <a href="#">BRAND</a>
                <a href="#">PAGES</a>
                <a href="#">ABOUT US</a>
                <a href="#">NEWS</a>
                <a href="#">CONTACT US</a>
            </nav>
            <hr class="divisor-line">
        </section>
    </header>
    <main>
        <section class="section-full">
            <div class="section flex-container">
                <img class="section-full-img" src="./img/products/main-section-product.png" alt="Producto Seccion Full Principal">
                <div class="section-full-flex">
                    <h3 class="roboto-bold section-full-title_secondary">HOT DEALS THIS WEEK</h3>
                    <h1 class="roboto-bold section-full-title">SALE UP 50% MODERN FURNITURE</h1>
                    <button class="btn btn-secondary roboto-bold">VIEW NOW</button>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="grid-container">
                <div class="grid-item1">
                    <div class="card-large">
                        <img  src="./img/products/large-card-product.png" alt="">
                        <div class="card-large-elements">
                            <h3 class="roboto-bold">INY VINTAGE CHAIR</h3>
                            <button class="btn btn-secondary roboto-bold">VIEW DETAILS</button>
                        </div>
                    </div>
                </div>
                <div class="grid-item2">
                    <div class="card-large">
                        <img   src="./img/products/large-card-product_2.png" alt="">
                        <div class="card-large-elements">
                            <h3 class="roboto-bold">LARGE TERRACOTA VASE</h3>
                            <button class="btn btn-secondary roboto-bold">VIEW DETAILS</button>
                        </div>
                    </div>
                </div>
                <div class="grid-item3">
                    <div class="card">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/LINEN BEACH TOWEL.png" alt="">
                        <div class="card-elements">
                            <h5 class="roboto-bold">Linen Beach Towel</h5>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$30</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item4">
                    <div class="card">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/SQUARE CLEAR GLASS BOX.png" alt="">
                        <div class="card-elements">
                            <h5 class="roboto-bold">Square Clear Glass Box</h5>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$10</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item5">
                    <div class="card">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/4-pack Small Ceramic Plates.png" alt="">
                        <div  class="card-elements">
                            <h5 class="roboto-bold">4-Pack Small Ceramic Plates</h5>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$30</p>
                        </div>
                    </div>                    
                </div>
                <div class="grid-item6">
                    <div class="card">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/Large Clear Glass Box.png" alt="">
                        <div class="card-elements">
                            <h5 class="roboto-bold">Large Clear Glass Box</h5>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$35</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item7">
                    <div class="card">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/Round Jute Placemat.png" alt="">
                        <div class="card-elements">
                            <h5 class="roboto-bold">Round Jute Placemat</h5>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$8</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item8">
                    <div class="card">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/Metal Wire Basket.png" alt="">
                        <div class="card-elements">
                            <h5 class="roboto-bold">Metal Wire Basket</h5>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$30</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item9">
                    <div class="card">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/Plastic Chair.jpg" alt="">
                        <div class="card-elements">
                            <h5 class="roboto-bold">Plastic Chair</h5>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$15</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item10">
                    <div class="card">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/Plant.jpg" alt="">
                        <div class="card-elements">
                            <h5 class="roboto-bold">Plant</h5>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$12</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-full section-full-secondary">
            <div class="section-full-flex">
                <h1 class="roboto-bold section-full-title">BEDSHEET SETS</h1>
                <h3 class="roboto-bold section-full-title_secondary">$50.00</h3>
                <p class="roboto-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                <button class="btn btn-secondary roboto-bold">VIEW DETAILS</button>
            </div>
        </section>
        <section class="section flex-container-column">
            <div class="section-header">
                <h2 class="roboto-bold">Top Rating</h2>
            </div>
            <div class="grid-container-rating">
                <div class="grid-item-rating1">
                    <div class="card-rating">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/Tray with Foot.png" alt="Product Image">
                        <div class="card-rating-elements">
                            <span class="roboto-bold">Tray with Foot</span>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$20</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item-rating2">
                    <div class="card-rating">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/Twill Seat Cushion.png" alt="Product Image">
                        <div class="card-rating-elements">
                            <span class="roboto-bold">Twill Seat Cushion</span>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$15</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item-rating3">
                    <div class="card-rating">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/Fluted Beverage Glass.png" alt="Product Image">
                        <div class="card-rating-elements">
                            <span class="roboto-bold">Fluted Beverage Glass</span>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$36</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item-rating4">
                    <div class="card-rating">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/Ceramic Egg Cup.png" alt="Product Image">
                        <div class="card-rating-elements">
                            <span class="roboto-bold">Ceramic Egg Cup</span>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$10</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item-rating5">
                    <div class="card-rating">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/Small Bamboo Box.png" alt="Product Image">
                        <div class="card-rating-elements">
                            <span class="roboto-bold">Small Bamboo Box</span>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$5</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item-rating6">
                    <div class="card-rating">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/Metal Cutlery Basket.png" alt="Product Image">
                        <div class="card-rating-elements">
                            <span class="roboto-bold">Metal Cutlery Basket</span>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$26</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item-rating7">
                    <div class="card-rating">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/4-pack Ceramic Cups.png" alt="Product Image">
                        <div class="card-rating-elements">
                            <span class="roboto-bold">4-pack Ceramic Cups</span>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$40</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item-rating8">
                    <div class="card-rating">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/2-pack Linen Napkins.png" alt="Product Image">
                        <div class="card-rating-elements">
                            <span class="roboto-bold">2-pack Linen Napkins</span>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$13</p>
                        </div>
                    </div>
                </div>
                <div class="grid-item-rating9">
                    <div class="card-rating">
                        <div class="card-actions">
                            <img src="./img/icons/cart.svg" alt="add-cart">
                            <img src="./img/icons/favorite_resize.svg" alt="add-favorite">
                            <img src="./img/icons/view.svg" alt="view-details">
                        </div>
                        <img class="card-image" src="./img/products/Glazed Stoneware Plate.png" alt="Product Image">
                        <div class="card-rating-elements">
                            <span class="roboto-bold">Glazed Stoneware Plate</span>
                            <div class="product-calification">
                                <img class="product-calification-colored" src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                                <img src="./img/icons/star.svg" alt="star-icon">
                            </div>
                            <p class="roboto-bold">$12</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary roboto-bold btn-rating">LOAD MORE PRODUCTS</button>
        </section>
        <section class="section">
            <div class="newsletter">
                <div class="newsletter-text">
                    <h3 class="roboto-bold">SING UP FOR THE NEWSLETTER</h3>
                    <p class="roboto-light">Subscribe for the latest stories and promotions</p>
                </div>
                <div class="newsletter-input">
                    <input class="input" type="email" placeholder="Enter your e-mail address">
                    <button class="btn btn-primary"><img src="./img/icons/mail.svg" alt="Mail Icon"></button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        
    </footer>

</body>

<script src="<?= URL . '/js/frontend/front_homepage.js' ?>"></script>
</html>