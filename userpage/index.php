<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from template.hasthemes.com/antomi/antomi/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 10:28:35 GMT -->
<head>
    <?php include "layout/header.php"; ?>
</head>

<body>
    <!--Offcanvas menu area start-->
    <?php include 'layout/menu-mobile.php'; ?>
    <!--Offcanvas menu area end-->

    <!--header area start-->
    <?php include "layout/menu-header.php"; ?>
    <!--header area end-->

    <!--slider area start-->
    <section class="slider_section slider_s_three mb-60 mt-20">
        <div class="slider_area slider3_carousel owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider9.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="slider_content slider_c_three color_white">
                                <h3>new collection</h3>
                                <h1>new Arrivals <br> cellphone new model 2019</h1>
                                    <p>discount <span> -30% off</span> this week</p>
                                    <a class="button" href="shop.html">DISCOVER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider10.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="slider_content slider_c_three color_white">
                                <h3>new collection</h3>
                                <h1>happy summer <br> vagetable organic food 2019</h1>
                                    <p>discount <span> -30% off</span> this week</p>
                                    <a class="button" href="shop.html">DISCOVER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider11.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="slider_content slider_c_three color_white">
                                <h3>new collection</h3>
                                <h1>new collection <br> sport clothes for men,s</h1>
                                    <p>discount <span> -30% off</span> this week</p>
                                    <a class="button" href="shop.html">DISCOVER NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--slider area end-->

    <!--shipping area start-->
    <div class="shipping_area mb-60">
        <div class="container">
            <div class="shipping_inner">
                <?php
                    $arrImg = array("assets/img/about/shipping1.png",
                                    "assets/img/about/shipping2.png",
                                    "assets/img/about/shipping3.png",
                                    "assets/img/about/shipping4.png",
                                    "assets/img/about/shipping5.png");
                    
                    for($i = 0; $i < 5; $i++){
                        echo '<div class="single_shipping">
                                <div class="shipping_icone">
                                    <img src='.$arrImg[$i].' alt="">
                                </div>
                                <div class="shipping_content">
                                    <h4>Free Delivery</h4>
                                    <p>For all oders over $120</p>
                                </div>
                            </div>';
                    }
                ?>
            </div>
        </div>
    </div>
    <!--shipping area end-->

    <!--home section bg area start-->
    <div class="home_section_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-12 order-lg-2">
                    <!--product area start-->
                    <div class="product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product_header row">
                                    <div class="section_title col-xl-auto col-12">
                                        <h2>Featured Products</h2>
                                    </div>
                                    <div class="product_tab_btn col-xl-auto col-12 mt-md-3 mt-xl-0">
                                        <ul class="nav" role="tablist" id="nav-tab">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#Computer" role="tab" aria-controls="Computer" aria-selected="true">
                                                    Computer
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#Networking" role="tab" aria-controls="Networking" aria-selected="false">
                                                    Networking
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#Computer2" role="tab" aria-controls="Computer2" aria-selected="false">
                                                    Computer & Networking
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#Audio" role="tab" aria-controls="Audio" aria-selected="false">
                                                    Television & Audio
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="Computer" role="tabpanel">
                                <div class="product_carousel product_style product_column4 owl-carousel">
                                    <?php
                                        for($i = 0; $i < 6; $i++){
                                            echo '<div class="product_items">';
                                                for($j = 0; $j < 2; $j++){
                                                    echo '<article class="single_product">
                                                        <figure>
                                                            <div class="product_thumb">
                                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($i+1).'.jpg" alt=""></a>
                                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($i+2).'.jpg" alt=""></a>
                                                                <div class="label_product">
                                                                    <span class="label_sale">Sale</span>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product_content">
                                                                <div class="product_content_inner">
                                                                    <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                                                    <div class="price_box">
                                                                        <span class="old_price">$86.00</span>
                                                                        <span class="current_price">$79.00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="add_to_cart">
                                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                    </article>';
                                                }
                                            echo '</div>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Networking" role="tabpanel">
                                <div class="product_carousel product_style product_column4 owl-carousel">
                                    <?php
                                        for($i = 0; $i < 5; $i++){
                                            echo '<div class="product_items">';
                                                for($j = 0; $j < 2; $j++){
                                                    echo '<article class="single_product">
                                                            <figure>
                                                                <div class="product_thumb">
                                                                    <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($i+8).'.jpg" alt=""></a>
                                                                    <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($i+9).'.jpg" alt=""></a>
                                                                    <div class="label_product">
                                                                        <span class="label_sale">Sale</span>
                                                                    </div>
                                                                    <div class="action_links">
                                                                        <ul>
                                                                            <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product_content">
                                                                    <div class="product_content_inner">
                                                                        <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                                                        <div class="price_box">
                                                                            <span class="old_price">$86.00</span>
                                                                            <span class="current_price">$79.00</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="add_to_cart">
                                                                        <a href="cart.html" title="Add to cart">Add to cart</a>
                                                                    </div>
                                                                </div>
                                                            </figure>
                                                        </article>';
                                                }
                                            echo '</div>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Computer2" role="tabpanel">
                                <div class="product_carousel product_style product_column4 owl-carousel">
                                    <?php
                                        for($i = 0; $i < 5; $i++){
                                            echo '<div class="product_items">';
                                                for($j = 0; $j < 2; $j++){
                                                    echo '<article class="single_product">
                                                        <figure>
                                                            <div class="product_thumb">
                                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($i+17).'.jpg" alt=""></a>
                                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($i+18).'.jpg" alt=""></a>
                                                                <div class="label_product">
                                                                    <span class="label_sale">Sale</span>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product_content">
                                                                <div class="product_content_inner">
                                                                    <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                                                    <div class="price_box">
                                                                        <span class="old_price">$86.00</span>
                                                                        <span class="current_price">$79.00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="add_to_cart">
                                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                    </article>';
                                                }
                                            echo '</div>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Audio" role="tabpanel">
                                <div class="product_carousel product_style product_column4 owl-carousel">
                                <?php
                                        for($i = 0; $i < 5; $i++){
                                            echo '<div class="product_items">';
                                                for($j = 0; $j < 2; $j++){
                                                    echo '<article class="single_product">
                                                        <figure>
                                                            <div class="product_thumb">
                                                                <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($i+15).'.jpg" alt=""></a>
                                                                <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($i+16).'.jpg" alt=""></a>
                                                                <div class="label_product">
                                                                    <span class="label_sale">Sale</span>
                                                                </div>
                                                                <div class="action_links">
                                                                    <ul>
                                                                        <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                                        <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                        <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product_content">
                                                                <div class="product_content_inner">
                                                                    <h4 class="product_name"><a href="product-details.html">Eodem modo vel mattis ante facilisis nec porttitor efficitur</a></h4>
                                                                    <div class="price_box">
                                                                        <span class="old_price">$86.00</span>
                                                                        <span class="current_price">$79.00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="add_to_cart">
                                                                    <a href="cart.html" title="Add to cart">Add to cart</a>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                    </article>';
                                                }
                                            echo '</div>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product area end-->

                    <!--banner area start-->
                    <div class="banner_area mb-55">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <figure class="single_banner">
                                    <div class="banner_thumb">
                                        <a href="shop.html"><img src="assets/img/bg/banner4.jpg" alt=""></a>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <figure class="single_banner">
                                    <div class="banner_thumb">
                                        <a href="shop.html"><img src="assets/img/bg/banner5.jpg" alt=""></a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <!--banner area end-->

                    <!--product area start-->
                    <div class="small_product_area mb-55">
                        <div class="row">
                            <div class="col-12">
                                <div class="product_header row">
                                    <div class="section_title col-xl-auto col-12">
                                        <h2>Best Selling Products</h2>
                                    </div>
                                    <div class="product_tab_btn col-xl-auto col-12 mt-md-3 mt-xl-0">
                                        <ul class="nav" role="tablist" id="nav-tab2">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#Fashion2" role="tab" aria-controls="Fashion2" aria-selected="true">
                                                    Fashion & Clothing
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#Games2" role="tab" aria-controls="Games2" aria-selected="false">
                                                    Games & Consoles
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#Headphone2" role="tab" aria-controls="Headphone2" aria-selected="false">
                                                    Headphone & Speaker
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#Mobile2" role="tab" aria-controls="Mobile2" aria-selected="false">
                                                    Mobile & Tablets
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="Fashion2" role="tabpanel">
                                <div class="product_carousel small_p_container small_product_column2 owl-carousel">
                                    <?php
                                        for($i = 0; $i < 4; $i++){
                                            echo '<div class="product_items">';
                                                for($j = 0; $j < 2; $j++){
                                                    echo '<figure class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($j+1).'.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($j+2).'.jpg" alt=""></a>
                                                        </div>
                                                        <div class="product_content">
                                                            <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                                            <div class="product_rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price_box">
                                                                <span class="old_price">$86.00</span>
                                                                <span class="current_price">$79.00</span>
                                                            </div>
                                                            <div class="product_cart_button">
                                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
            
                                                        </div>
                                                    </figure>';
                                                }
                                            echo '</div>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Games2" role="tabpanel">
                                <div class="product_carousel small_p_container  small_product_column2 owl-carousel">
                                <?php
                                        for($i = 0; $i < 4; $i++){
                                            echo '<div class="product_items">';
                                                for($j = 0; $j < 2; $j++){
                                                    echo '<figure class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($j+3).'.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($j+4).'.jpg" alt=""></a>
                                                        </div>
                                                        <div class="product_content">
                                                            <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                                            <div class="product_rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price_box">
                                                                <span class="old_price">$86.00</span>
                                                                <span class="current_price">$79.00</span>
                                                            </div>
                                                            <div class="product_cart_button">
                                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
            
                                                        </div>
                                                    </figure>';
                                                }
                                            echo '</div>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Headphone2" role="tabpanel">
                                <div class="product_carousel small_p_container  small_product_column2 owl-carousel">
                                <?php
                                        for($i = 0; $i < 4; $i++){
                                            echo '<div class="product_items">';
                                                for($j = 0; $j < 2; $j++){
                                                    echo '<figure class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($j+4).'.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($j+5).'.jpg" alt=""></a>
                                                        </div>
                                                        <div class="product_content">
                                                            <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                                            <div class="product_rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price_box">
                                                                <span class="old_price">$86.00</span>
                                                                <span class="current_price">$79.00</span>
                                                            </div>
                                                            <div class="product_cart_button">
                                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
            
                                                        </div>
                                                    </figure>';
                                                }
                                            echo '</div>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Mobile2" role="tabpanel">
                                <div class="product_carousel small_p_container  small_product_column2 owl-carousel">
                                    <?php
                                        for($i = 0; $i < 4; $i++){
                                            echo '<div class="product_items">';
                                                for($j = 0; $j < 2; $j++){
                                                    echo '<figure class="single_product">
                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($j+13).'.jpg" alt=""></a>
                                                            <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($j+14).'.jpg" alt=""></a>
                                                        </div>
                                                        <div class="product_content">
                                                            <h4 class="product_name"><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                                            <div class="product_rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                    <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="price_box">
                                                                <span class="old_price">$86.00</span>
                                                                <span class="current_price">$79.00</span>
                                                            </div>
                                                            <div class="product_cart_button">
                                                                <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
            
                                                        </div>
                                                    </figure>';
                                                }
                                            echo '</div>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product area end-->

                    <!--banner area start-->
                    <div class="banner_area banner_style2 mb-55">
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <figure class="single_banner">
                                    <div class="banner_thumb">
                                        <a href="shop.html"><img src="assets/img/bg/banner6.jpg" alt=""></a>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <figure class="single_banner">
                                    <div class="banner_thumb">
                                        <a href="shop.html"><img src="assets/img/bg/banner7.jpg" alt=""></a>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <figure class="single_banner">
                                    <div class="banner_thumb">
                                        <a href="shop.html"><img src="assets/img/bg/banner8.jpg" alt=""></a>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <!--banner area end-->

                    <!--product area start-->
                    <div class="product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product_header row">
                                    <div class="section_title col-xl-auto col-12">
                                        <h2>New Arrivals</h2>
                                    </div>
                                    <div class="product_tab_btn col-xl-auto col-12 mt-md-3 mt-xl-0">
                                        <ul class="nav" role="tablist" id="nav-tab3">
                                            <li>
                                                <a class="active" data-toggle="tab" href="#Computer3" role="tab" aria-controls="Computer3" aria-selected="true">
                                                    Computer
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#Networking2" role="tab" aria-controls="Networking2" aria-selected="false">
                                                    Networking
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#Networking3" role="tab" aria-controls="Networking3" aria-selected="false">
                                                    Computer & Networking
                                                </a>
                                            </li>
                                            <li>
                                                <a data-toggle="tab" href="#Audio2" role="tab" aria-controls="Audio2" aria-selected="false">
                                                    Television & Audio
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="Computer3" role="tabpanel">
                                <div class="product_carousel product_style product_column4 owl-carousel">
                                    <?php
                                        for($i = 0; $i < 6; $i++){
                                            echo '<article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($i+1).'.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($i+2).'.jpg" alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_content_inner">
                                                            <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                                            <div class="price_box">
                                                                <span class="old_price">$80.00</span>
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add_to_cart">
                                                            <a href="cart.html" title="Add to cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </article>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Networking2" role="tabpanel">
                                <div class="product_carousel product_style product_column4 owl-carousel">
                                    <?php
                                        for($i = 0; $i < 6; $i++){
                                            echo '<article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($i+4).'.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($i+5).'.jpg" alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_content_inner">
                                                            <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                                            <div class="price_box">
                                                                <span class="old_price">$80.00</span>
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add_to_cart">
                                                            <a href="cart.html" title="Add to cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </article>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Networking3" role="tabpanel">
                                <div class="product_carousel product_style product_column4 owl-carousel">
                                    <?php
                                        for($i = 0; $i < 6; $i++){
                                            echo '<article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($i+9).'.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($i+10).'.jpg" alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_content_inner">
                                                            <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                                            <div class="price_box">
                                                                <span class="old_price">$80.00</span>
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add_to_cart">
                                                            <a href="cart.html" title="Add to cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </article>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Audio2" role="tabpanel">
                                <div class="product_carousel product_style product_column4 owl-carousel">
                                    <?php
                                        for($i = 0; $i < 6; $i++){
                                            echo '<article class="single_product">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($i+4).'.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($i+5).'.jpg" alt=""></a>
                                                        <div class="label_product">
                                                            <span class="label_sale">Sale</span>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                                <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                                <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product_content">
                                                        <div class="product_content_inner">
                                                            <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                                            <div class="price_box">
                                                                <span class="old_price">$80.00</span>
                                                                <span class="current_price">$70.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="add_to_cart">
                                                            <a href="cart.html" title="Add to cart">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </article>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product area end-->

                </div>

                <div class="col-xl-3 col-lg-4 col-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget mb-5">
                        <div class="widget_list widget_products">
                            <h3>Deals Of The Month</h3>
                            <div class="product_carousel product_style product_sidebar_slider owl-carousel">
                                <?php
                                    for($i = 0; $i < 6; $i++){
                                        echo '<article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($i+1).'.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($i+2).'.jpg" alt=""></a>
                                                    <div class="label_product">
                                                        <span class="label_sale">Sale</span>
                                                    </div>
                                                    <div class="action_links">
                                                        <ul>
                                                            <li class="wishlist"><a href="wishlist.html" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true" data-tippy="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>
                                                            <li class="compare"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-tippy="Add to Compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            <li class="quick_button"><a href="#" data-tippy-placement="top" data-tippy-arrow="true" data-tippy-inertia="true"  data-bs-toggle="modal" data-bs-target="#modal_box" data-tippy="quick view"><i class="ion-ios-search-strong"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_content_inner">
                                                        <h4 class="product_name"><a href="product-details.html">Natus erro at congue massa commodo sit Natus erro</a></h4>
                                                        <div class="price_box">
                                                            <span class="old_price">$80.00</span>
                                                            <span class="current_price">$70.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add_to_cart">
                                                        <a href="cart.html" title="Add to cart">Add to cart</a>
                                                    </div>
                                                </div>
                                            </figure>
                                        </article>';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="widget_list widget_categories">
                            <h3>Product categories</h3>
                            <div class="categories_sidebar_slider owl-carousel">
                                <?php
                                    for($i = 0; $i < 3; $i++){
                                        echo '<div class="categories_sidebar_slide">';
                                        for($j = 0; $j < 3; $j++){
                                            echo '<div class="single_categories_product">
                                                <div class="categories_product_content">
                                                    <h4><a href="shop.php"> Cells & Tablets</a></h4>
                                                    <p>12 Products</p>
                                                </div>
                                                <div class="categories_product_thumb">
                                                    <a href="shop.php"><img src="assets/img/s-product/category'.($j+1).'.jpg" alt=""></a>
                                                </div>
                                            </div>';
                                        }
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="widget_list widget_banner">
                            <figure class="single_banner">
                                <div class="banner_thumb">
                                    <a href="shop.html"><img src="assets/img/bg/banner9.jpg" alt=""></a>
                                </div>
                            </figure>
                        </div>
                        <div class="widget_list widget_products">
                            <h3>Popular Products</h3>
                            <div class="recent_product_container">
                                <?php
                                    for($i = 0; $i < 3; $i++){
                                        echo '<article class="recent_product_list">
                                                <figure>
                                                    <div class="product_thumb">
                                                        <a class="primary_img" href="product-details.html"><img src="assets/img/product/product'.($i+9).'.jpg" alt=""></a>
                                                        <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product'.($i+10).'.jpg" alt=""></a>
                                                    </div>
                                                    <div class="product_content">
                                                        <h4><a href="product-details.html">Aliquam lobortis pellentesque</a></h4>
                                                        <div class="product_rating">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="price_box">
                                                            <span class="old_price">$70.00</span>
                                                            <span class="current_price">$65.00</span>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </article>';
                                    }
                                ?>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>

            </div>
        </div>

        <!--product area start-->
        <div class="small_product_area small_product_style2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="small_product_list">
                            <div class="section_title">
                                <h2>Computer & Networking</h2>
                            </div>
                            <div class="product_carousel small_p_container  product_column1 owl-carousel">
                                <?php
                                    for($i = 0; $i < 3; $i++){
                                        echo '<div class="product_items">';
                                        for($j = 0; $j < 3; $j++){
                                            echo '<figure class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="assets/img/product/product9.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product10.jpg" alt=""></a>
                                                </div>
                                                <div class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">$82.00</span>
                                                        <span class="current_price">$78.00</span>
                                                    </div>
                                                    <div class="product_cart_button">
                                                        <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    </div>

                                                </div>
                                            </figure>';
                                        }
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="small_product_list">
                            <div class="section_title">
                                <h2>Games & Consoles</h2>
                            </div>
                            <div class="product_carousel small_p_container  product_column1 owl-carousel">
                                <?php
                                    for($i = 0; $i < 3; $i++){
                                        echo '<div class="product_items">';
                                        for($j = 0; $j < 3; $j++){
                                            echo '<figure class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="assets/img/product/product1.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product2.jpg" alt=""></a>
                                                </div>
                                                <div class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">$82.00</span>
                                                        <span class="current_price">$78.00</span>
                                                    </div>
                                                    <div class="product_cart_button">
                                                        <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    </div>

                                                </div>
                                            </figure>';
                                        }
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="small_product_list">
                            <div class="section_title">
                                <h2>Mobile & Tablets</h2>
                            </div>
                            <div class="product_carousel small_p_container  product_column1 owl-carousel">
                                <?php
                                    for($i = 0; $i < 3; $i++){
                                        echo '<div class="product_items">';
                                        for($j = 0; $j < 3; $j++){
                                            echo '<figure class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="assets/img/product/product13.jpg" alt=""></a>
                                                    <a class="secondary_img" href="product-details.html"><img src="assets/img/product/product14.jpg" alt=""></a>
                                                </div>
                                                <div class="product_content">
                                                    <h4 class="product_name"><a href="product-details.html">Porro quisquam eget feugiat pretium posuere maximus</a></h4>
                                                    <div class="product_rating">
                                                        <ul>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="old_price">$82.00</span>
                                                        <span class="current_price">$78.00</span>
                                                    </div>
                                                    <div class="product_cart_button">
                                                        <a href="cart.html" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                    </div>

                                                </div>
                                            </figure>';
                                        }
                                        echo '</div>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--product area end-->
    </div>
    <!--home section bg area end-->

    <!--footer area start-->
    <?php include "layout/footer.php"; ?>
    <!--footer area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig5.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/product6.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/product9.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/product14.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Sit voluptatem rhoncus sem lectus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price" >$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->
</body>


<!-- Mirrored from template.hasthemes.com/antomi/antomi/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 10:28:35 GMT -->
</html>