@extends('front.layouts.master')
@section('page_title', "shop list")
@section('content')

<div class="site-wrapper" id="top">
    <section class="breadcrumb-section">
        <h2 class="sr-only">Site Breadcrumb</h2>
        <div class="container">
            <div class="breadcrumb-contents">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <main class="inner-page-sec-padding-bottom">
        <div class="container">
            <div class="shop-toolbar mb--30">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-2 col-sm-6">
                        <!-- Product View Mode -->
                        <div class="product-view-mode">
                            <a href="#" class="sorting-btn active" data-target="grid-four">
                                <span class="grid-four-icon active">
                                    <i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
                                </span>
                            </a>

                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
                        <div class="sorting-selection">
                            <span>Sort By:</span>
                            <select class="form-control nice-select sort-select mr-0">
                                <option value="" selected="selected">Default Sorting</option>
                                <option value="">Sort
                                    By:Name (A - Z)</option>
                                <option value="">Sort
                                    By:Name (Z - A)</option>
                                <option value="">Sort
                                    By:Price (Low &gt; High)</option>
                                <option value="">Sort
                                    By:Price (High &gt; Low)</option>
                                <option value="">Sort
                                    By:Rating (Highest)</option>
                                <option value="">Sort
                                    By:Rating (Lowest)</option>
                                <option value="">Sort
                                    By:Model (A - Z)</option>
                                <option value="">Sort
                                    By:Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-toolbar d-none">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-2 col-sm-6">
                        <!-- Product View Mode -->
                        <div class="product-view-mode">
                            <a href="#" class="sorting-btn active" data-target="grid"><i class="fas fa-th"></i></a>
                            <a href="#" class="sorting-btn" data-target="grid-four">
                                <span class="grid-four-icon active">
                                    <i class="fas fa-grip-vertical"></i><i class="fas fa-grip-vertical"></i>
                                </span>
                            </a>
                            <a href="#" class="sorting-btn" data-target="list "><i class="fas fa-list"></i></a>
                        </div>
                    </div>


                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt--10 mt-md--0 ">
                        <div class="sorting-selection">
                            <span>Sort By:</span>
                            <select class="form-control nice-select sort-select mr-0">
                                <option value="" selected="selected">Default Sorting</option>
                                <option value="">Sort
                                    By:Name (A - Z)</option>
                                <option value="">Sort
                                    By:Name (Z - A)</option>
                                <option value="">Sort
                                    By:Price (Low &gt; High)</option>
                                <option value="">Sort
                                    By:Price (High &gt; Low)</option>
                                <option value="">Sort
                                    By:Rating (Highest)</option>
                                <option value="">Sort
                                    By:Rating (Lowest)</option>
                                <option value="">Sort
                                    By:Model (A - Z)</option>
                                <option value="">Sort
                                    By:Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shop-product-wrap with-pagination row space-db--30 shop-border grid-four">
                <div class="col-lg-4 col-sm-6">
                    <div class="product-card">
                        <div class="product-grid-content">
                            <div class="product-header">
                                <a href="" class="author">
                                    Epple
                                </a>
                                <h3><a href="{{route('client.productDetails')}}">Here Is A Quick Cure For Book</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="{{asset('assets/front/image/products/product-2.jpg')}}"" alt="">
                                    <div class="hover-contents">
                                        <a href="{{route('client.productDetails')}}" class="hover-image">
                                            <img src="{{asset('assets/front/image/products/product-1.jpg')}}"" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="{{route('client.cart')}}" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="{{route('client.wishList')}}" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.html" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-content">
                            <div class="card-image">
                                <img src="{{asset('assets/front/image/products/product-3.jpg')}}"" alt="">
                            </div>
                            <div class="product-card--body">
                                <div class="product-header">
                                    <a href="" class="author">
                                        Gpple
                                    </a>
                                    <h3><a href="{{route('client.productDetails')}}" tabindex="0">Qpple cPad with Retina Display
                                            MD510LL/A</a></h3>
                                </div>
                                <article>
                                    <h2 class="sr-only">Card List Article</h2>
                                    <p>More room to move. With 80GB or 160GB of storage and up to 40 hours of
                                        battery life, the new iPod classic
                                        lets you enjoy
                                        up to 40,000 songs or..</p>
                                </article>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="btn-block">
                                    <a href="" class="btn btn-outlined">Add To Cart</a>
                                    <a href="" class="card-link"><i class="fas fa-heart"></i> Add To Wishlist</a>
                                    <a href="" class="card-link"><i class="fas fa-random"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-card">
                        <div class="product-grid-content">
                            <div class="product-header">
                                <a href="" class="author">
                                    Lpple
                                </a>
                                <h3><a href="{{route('client.productDetails')}}">Simple Things You To Save BOOK</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="{{asset('assets/front/image/products/product-4.jpg')}}"" alt="">
                                    <div class="hover-contents">
                                        <a href="{{route('client.productDetails')}}" class="hover-image">
                                            <img src="{{asset('assets/front/image/products/product-5.jpg')}}"" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="{{route('client.cart')}}" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="{{route('client.wishList')}}" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.html" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-content">
                            <div class="card-image">
                                <img src="{{asset('assets/front/image/products/product-6.jpg')}}"" alt="">
                            </div>
                            <div class="product-card--body">
                                <div class="product-header">
                                    <a href="" class="author">
                                        fpple
                                    </a>
                                    <h3><a href="{{route('client.productDetails')}}" tabindex="0">Apple iPad with Retina Display
                                            MD510LL/A</a></h3>
                                </div>
                                <article>
                                    <h2 class="sr-only">Card List Article</h2>
                                    <p>More room to move. With 80GB or 160GB of storage and up to 40 hours of
                                        battery life, the new iPod classic
                                        lets you enjoy
                                        up to 40,000 songs or..</p>
                                </article>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="btn-block">
                                    <a href="" class="btn btn-outlined">Add To Cart</a>
                                    <a href="" class="card-link"><i class="fas fa-heart"></i> Add To Wishlist</a>
                                    <a href="" class="card-link"><i class="fas fa-random"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-card">
                        <div class="product-grid-content">
                            <div class="product-header">
                                <a href="" class="author">
                                    Cpple
                                </a>
                                <h3><a href="{{route('client.productDetails')}}">3 Ways Create Better BOOK With</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="{{asset('assets/front/image/products/product-7.jpg')}}"" alt="">
                                    <div class="hover-contents">
                                        <a href="{{route('client.productDetails')}}" class="hover-image">
                                            <img src="{{asset('assets/front/image/products/product-8.jpg')}}"" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="{{route('client.cart')}}" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="{{route('client.wishList')}}" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.html" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-content">
                            <div class="card-image">
                                <img src="{{asset('assets/front/image/products/product-7.jpg')}}"" alt="">
                            </div>
                            <div class="product-card--body">
                                <div class="product-header">
                                    <a href="" class="author">
                                        Apple
                                    </a>
                                    <h3><a href="{{route('client.productDetails')}}" tabindex="0">Apple iPad with Retina Display
                                            MD510LL/A</a></h3>
                                </div>
                                <article>
                                    <h2 class="sr-only">Card List Article</h2>
                                    <p>More room to move. With 80GB or 160GB of storage and up to 40 hours of
                                        battery life, the new iPod classic
                                        lets you enjoy
                                        up to 40,000 songs or..</p>
                                </article>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="btn-block">
                                    <a href="" class="btn btn-outlined">Add To Cart</a>
                                    <a href="" class="card-link"><i class="fas fa-heart"></i> Add To Wishlist</a>
                                    <a href="" class="card-link"><i class="fas fa-random"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-card">
                        <div class="product-grid-content">
                            <div class="product-header">
                                <a href="" class="author">
                                    Rpple
                                </a>
                                <h3><a href="{{route('client.productDetails')}}">Simple Things You To Save BOOK</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="{{asset('assets/front/image/products/product-8.jpg')}}"" alt="">
                                    <div class="hover-contents">
                                        <a href="{{route('client.productDetails')}}" class="hover-image">
                                            <img src="{{asset('assets/front/image/products/product-7.jpg')}}"" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="{{route('client.cart')}}" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="{{route('client.wishList')}}" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.html" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-content">
                            <div class="card-image">
                                <img src="{{asset('assets/front/image/products/product-8.jpg')}}"" alt="">
                            </div>
                            <div class="product-card--body">
                                <div class="product-header">
                                    <a href="" class="author">
                                        Apple
                                    </a>
                                    <h3><a href="{{route('client.productDetails')}}" tabindex="0">Apple iPad with Retina Display
                                            MD510LL/A</a></h3>
                                </div>
                                <article>
                                    <h2 class="sr-only">Card List Article</h2>
                                    <p>More room to move. With 80GB or 160GB of storage and up to 40 hours of
                                        battery life, the new iPod classic
                                        lets you enjoy
                                        up to 40,000 songs or..</p>
                                </article>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="btn-block">
                                    <a href="" class="btn btn-outlined">Add To Cart</a>
                                    <a href="" class="card-link"><i class="fas fa-heart"></i> Add To Wishlist</a>
                                    <a href="" class="card-link"><i class="fas fa-random"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-card">
                        <div class="product-grid-content">
                            <div class="product-header">
                                <a href="" class="author">
                                    Gpple
                                </a>
                                <h3><a href="{{route('client.productDetails')}}">How Deal With Very Bad BOOK</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="{{asset('assets/front/image/products/product-9.jpg')}}"" alt="">
                                    <div class="hover-contents">
                                        <a href="{{route('client.productDetails')}}" class="hover-image">
                                            <img src="{{asset('assets/front/image/products/product-10.jpg')}}"" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="{{route('client.cart')}}" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="{{route('client.wishList')}}" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.html" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-content">
                            <div class="card-image">
                                <img src="{{asset('assets/front/image/products/product-9.jpg')}}"" alt="">
                            </div>
                            <div class="product-card--body">
                                <div class="product-header">
                                    <a href="" class="author">
                                        Apple
                                    </a>
                                    <h3><a href="{{route('client.productDetails')}}" tabindex="0">Apple iPad with Retina Display
                                            MD510LL/A</a></h3>
                                </div>
                                <article>
                                    <h2 class="sr-only">Card List Article</h2>
                                    <p>More room to move. With 80GB or 160GB of storage and up to 40 hours of
                                        battery life, the new iPod classic
                                        lets you enjoy
                                        up to 40,000 songs or..</p>
                                </article>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="btn-block">
                                    <a href="" class="btn btn-outlined">Add To Cart</a>
                                    <a href="" class="card-link"><i class="fas fa-heart"></i> Add To Wishlist</a>
                                    <a href="" class="card-link"><i class="fas fa-random"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-card">
                        <div class="product-grid-content">
                            <div class="product-header">
                                <a href="" class="author">
                                    Rtpple
                                </a>
                                <h3><a href="{{route('client.productDetails')}}">The Hidden Mystery Behind</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="{{asset('assets/front/image/products/product-10.jpg')}}"" alt="">
                                    <div class="hover-contents">
                                        <a href="{{route('client.productDetails')}}" class="hover-image">
                                            <img src="{{asset('assets/front/image/products/product-9.jpg')}}"" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="{{route('client.cart')}}" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="{{route('client.wishList')}}" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.html" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-content">
                            <div class="card-image">
                                <img src="{{asset('assets/front/image/products/product-10.jpg')}}"" alt="">
                            </div>
                            <div class="product-card--body">
                                <div class="product-header">
                                    <a href="" class="author">
                                        Apple
                                    </a>
                                    <h3><a href="{{route('client.productDetails')}}" tabindex="0">Apple iPad with Retina Display
                                            MD510LL/A</a></h3>
                                </div>
                                <article>
                                    <h2 class="sr-only">Card List Article</h2>
                                    <p>More room to move. With 80GB or 160GB of storage and up to 40 hours of
                                        battery life, the new iPod classic
                                        lets you enjoy
                                        up to 40,000 songs or..</p>
                                </article>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="btn-block">
                                    <a href="" class="btn btn-outlined">Add To Cart</a>
                                    <a href="" class="card-link"><i class="fas fa-heart"></i> Add To Wishlist</a>
                                    <a href="" class="card-link"><i class="fas fa-random"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-card">
                        <div class="product-grid-content">
                            <div class="product-header">
                                <a href="" class="author">
                                    Upple
                                </a>
                                <h3><a href="{{route('client.productDetails')}}">Little Known Ways To Rid Yourself</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="{{asset('assets/front/image/products/product-11.jpg')}}"" alt="">
                                    <div class="hover-contents">
                                        <a href="{{route('client.productDetails')}}" class="hover-image">
                                            <img src="{{asset('assets/front/image/products/product-12.jpg')}}"" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="{{route('client.cart')}}" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="{{route('client.wishList')}}" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.html" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-content">
                            <div class="card-image">
                                <img src="{{asset('assets/front/image/products/product-11.jpg')}}"" alt="">
                            </div>
                            <div class="product-card--body">
                                <div class="product-header">
                                    <a href="" class="author">
                                        Apple
                                    </a>
                                    <h3><a href="{{route('client.productDetails')}}" tabindex="0">Apple iPad with Retina Display
                                            MD510LL/A</a></h3>
                                </div>
                                <article>
                                    <h2 class="sr-only">Card List Article</h2>
                                    <p>More room to move. With 80GB or 160GB of storage and up to 40 hours of
                                        battery life, the new iPod classic
                                        lets you enjoy
                                        up to 40,000 songs or..</p>
                                </article>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="btn-block">
                                    <a href="" class="btn btn-outlined">Add To Cart</a>
                                    <a href="" class="card-link"><i class="fas fa-heart"></i> Add To Wishlist</a>
                                    <a href="" class="card-link"><i class="fas fa-random"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="product-card">
                        <div class="product-grid-content">
                            <div class="product-header">
                                <a href="" class="author">
                                    Bpple
                                </a>
                                <h3><a href="{{route('client.productDetails')}}">Qple GPad with Retina Sisplay</a></h3>
                            </div>
                            <div class="product-card--body">
                                <div class="card-image">
                                    <img src="{{asset('assets/front/image/products/product-2.jpg')}}"" alt="">
                                    <div class="hover-contents">
                                        <a href="{{route('client.productDetails')}}" class="hover-image">
                                            <img src="{{asset('assets/front/image/products/product-1.jpg')}}"" alt="">
                                        </a>
                                        <div class="hover-btns">
                                            <a href="{{route('client.cart')}}" class="single-btn">
                                                <i class="fas fa-shopping-basket"></i>
                                            </a>
                                            <a href="{{route('client.wishList')}}" class="single-btn">
                                                <i class="fas fa-heart"></i>
                                            </a>
                                            <a href="compare.html" class="single-btn">
                                                <i class="fas fa-random"></i>
                                            </a>
                                            <a href="#" data-toggle="modal" data-target="#quickModal" class="single-btn">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-list-content">
                            <div class="card-image">
                                <img src="{{asset('assets/front/image/products/product-2.jpg')}}"')}}"" alt="">
                            </div>
                            <div class="product-card--body">
                                <div class="product-header">
                                    <a href="" class="author">
                                        Apple
                                    </a>
                                    <h3><a href="{{route('client.productDetails')}}" tabindex="0">Apple iPad with Retina Display
                                            MD510LL/A</a></h3>
                                </div>
                                <article>
                                    <h2 class="sr-only">Card List Article</h2>
                                    <p>More room to move. With 80GB or 160GB of storage and up to 40 hours of
                                        battery life, the new iPod classic
                                        lets you enjoy
                                        up to 40,000 songs or..</p>
                                </article>
                                <div class="price-block">
                                    <span class="price">£51.20</span>
                                    <del class="price-old">£51.20</del>
                                    <span class="price-discount">20%</span>
                                </div>
                                <div class="rating-block">
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star star_on"></span>
                                    <span class="fas fa-star "></span>
                                </div>
                                <div class="btn-block">
                                    <a href="" class="btn btn-outlined">Add To Cart</a>
                                    <a href="" class="card-link"><i class="fas fa-heart"></i> Add To Wishlist</a>
                                    <a href="" class="card-link"><i class="fas fa-random"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination Block -->
            <div class="row pt--30">
                <div class="col-md-12">
                    <div class="pagination-block">
                        <ul class="pagination-btns flex-center">
                            <li><a href="" class="single-btn prev-btn ">|<i class="zmdi zmdi-chevron-left"></i> </a>
                            </li>
                            <li><a href="" class="single-btn prev-btn "><i class="zmdi zmdi-chevron-left"></i> </a>
                            </li>
                            <li class="active"><a href="" class="single-btn">1</a></li>
                            <li><a href="" class="single-btn">2</a></li>
                            <li><a href="" class="single-btn">3</a></li>
                            <li><a href="" class="single-btn">4</a></li>
                            <li><a href="" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i></a>
                            </li>
                            <li><a href="" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i>|</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog" aria-labelledby="quickModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="product-details-modal">
                            <div class="row">
                                <div class="col-lg-5">
                                    <!-- Product Details Slider Big Image-->
                                    <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
                                        <div class="single-slide">
                                            <img src="{{asset('assets/front/image/products/product-details-1.jpg')}}"')}}"" alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img src="{{asset('assets/front/image/products/product-details-2.jpg')}}"')}}"" alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img src="{{asset('assets/front/image/products/product-details-3.jpg')}}"')}}"" alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img src="{{asset('assets/front/image/products/product-details-4.jpg')}}"')}}"" alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img src="{{asset('assets/front/image/products/product-details-5.jpg')}}"')}}"" alt="">
                                        </div>
                                    </div>
                                    <!-- Product Details Slider Nav -->
                                    <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two" data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                                        <div class="single-slide">
                                            <img src="{{asset('assets/front/image/products/product-details-1.jpg')}}"')}}"" alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img src="{{asset('assets/front/image/products/product-details-2.jpg')}}"')}}"" alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img src="{{asset('assets/front/image/products/product-details-3.jpg')}}"')}}"" alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img src="{{asset('assets/front/image/products/product-details-4.jpg')}}"')}}"" alt="">
                                        </div>
                                        <div class="single-slide">
                                            <img src="{{asset('assets/front/image/products/product-details-5.jpg')}}"')}}"" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 mt--30 mt-lg--30">
                                    <div class="product-details-info pl-lg--30 ">
                                        <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                                        <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                                        <ul class="list-unstyled">
                                            <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                            <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a>
                                            </li>
                                            <li>Product Code: <span class="list-value"> model1</span></li>
                                            <li>Reward Points: <span class="list-value"> 200</span></li>
                                            <li>Availability: <span class="list-value"> In Stock</span></li>
                                        </ul>
                                        <div class="price-block">
                                            <span class="price-new">£73.79</span>
                                            <del class="price-old">£91.86</del>
                                        </div>
                                        <div class="rating-widget">
                                            <div class="rating-block">
                                                <span class="fas fa-star star_on"></span>
                                                <span class="fas fa-star star_on"></span>
                                                <span class="fas fa-star star_on"></span>
                                                <span class="fas fa-star star_on"></span>
                                                <span class="fas fa-star "></span>
                                            </div>
                                            <div class="review-widget">
                                                <a href="">(1 Reviews)</a> <span>|</span>
                                                <a href="">Write a review</a>
                                            </div>
                                        </div>
                                        <article class="product-details-article">
                                            <h4 class="sr-only">Product Summery</h4>
                                            <p>Long printed dress with thin adjustable straps. V-neckline and wiring
                                                under the Dust with ruffles at the bottom
                                                of the
                                                dress.</p>
                                        </article>
                                        <div class="add-to-cart-row">
                                            <div class="count-input-block">
                                                <span class="widget-label">Qty</span>
                                                <input type="number" class="form-control text-center" value="1">
                                            </div>
                                            <div class="add-cart-btn">
                                                <a href="" class="btn btn-outlined--primary"><span class="plus-icon">+</span>Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="compare-wishlist-row">
                                            <a href="" class="add-link"><i class="fas fa-heart"></i>Add to Wish
                                                List</a>
                                            <a href="" class="add-link"><i class="fas fa-random"></i>Add to
                                                Compare</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="widget-social-share">
                                <span class="widget-label">Share:</span>
                                <div class="modal-social-share">
                                    <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                                    <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<!--=================================
  Brands Slider
===================================== -->
<section class="section-margin">
    <h2 class="sr-only">Brand Slider</h2>
    <div class="container">
        <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
            <div class="single-slide">
                <img src="{{asset('assets/front/image/others/brand-1.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('assets/front/image/others/brand-2.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('assets/front/image/others/brand-3.jpg')}}"" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('assets/front/image/others/brand-4.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('assets/front/image/others/brand-5.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('assets/front/image/others/brand-6.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('assets/front/image/others/brand-1.jpg')}}" alt="">
            </div>
            <div class="single-slide">
                <img src="{{asset('assets/front/image/others/brand-2.jpg')}}" alt="">
            </div>
        </div>
    </div>
</section>
@endsection