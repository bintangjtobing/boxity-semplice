<div class="container-fluid">
    <div class="row">
        <div class="col-lg order-md-1 order-0">
            <!-- Start: Top Bar -->
            {{-- <div class="shop_products_top_filter">
                <div class="project-top-wrapper d-flex flex-wrap align-items-center">
                    <div class="project-top-left d-flex flex-wrap align-items-center">
                        <div class="project-search shop-search  global-shadow ">
                            <form action="/" class="d-flex align-items-center user-member__form">
                                <span data-feather="search"></span>
                                <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search"
                                    placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                        <span
                            class="project-result-showing fs-14 color-gray ml-xl-25 mr-xl-0 text-center mt-lg-0 mt-20">Showing
                            <span>1-8</span> of <span>86</span>
                            results</span>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">{{ ucfirst(Helper::changeRouteName()) }} Data</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <x-button-add href="{{ route('product_add_view') }}" />
                        </div>
                    </div>
                </div>
            </div>
            <!-- End: Top Bar -->
            <div class="tab-content mt-25" id="ap-tabContent">
                <div class="tab-pane fade show active" id="ap-overview" role="tabpanel"
                    aria-labelledby="ap-overview-tab">
                    <!-- Start: Shop Item -->
                    <div class="row product-page-list justify-content-center" id="data">

                        {{-- <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                            <div class="card product product--grid">
                                <div class="h-100">
                                    <div class="product-item">
                                        <div class="product-item__image">
                                            <span class="like-icon">
                                                <button type="button" class="content-center">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </span>
                                            <a href="#"><img class="card-img-top img-fluid"
                                                    src="img/glass-cup.png" alt="digital-chair"></a>
                                        </div>
                                        <div class="card-body px-20 pb-25 pt-20">
                                            <div class="product-item__body text-capitalize">
                                                <a href="product-details.html">
                                                    <h6 class="card-title">Leo sodales varius</h6>
                                                </a>
                                                <div class="d-flex align-items-center mb-10 flex-wrap">
                                                    <span class="product-desc-price">$200.00</span>
                                                    <span class="product-price">$100.00</span>
                                                    <span class="product-discount">50% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="stars-rating d-flex align-items-center flex-wrap">
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                    <span class="stars-rating__point">4.9</span>
                                                    <span class="stars-rating__review">
                                                        <span>778</span> Reviews</span>
                                                </div>
                                            </div>
                                            <div class="product-item__button d-flex mt-20 flex-wrap">
                                                <button
                                                    class="btn btn-default btn-squared btn-outline-light px-15 "><span
                                                        data-feather="shopping-bag"></span>
                                                    Add To Cart
                                                </button>
                                                <button class="btn btn-primary btn-default btn-squared border-0 ">buy
                                                    now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                            <div class="card product product--grid">
                                <div class="h-100">
                                    <div class="product-item">
                                        <div class="product-item__image">
                                            <span class="like-icon">
                                                <button type="button" class="content-center">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </span>
                                            <a href="#"><img class="card-img-top img-fluid" src="img/chair2.png"
                                                    alt="digital-chair"></a>
                                        </div>
                                        <div class="card-body px-20 pb-25 pt-20">
                                            <div class="product-item__body text-capitalize">
                                                <a href="product-details.html">
                                                    <h6 class="card-title">Hanging lamp berlingo</h6>
                                                </a>
                                                <div class="d-flex align-items-center mb-10 flex-wrap">
                                                    <span class="product-desc-price">$200.00</span>
                                                    <span class="product-price">$100.00</span>
                                                    <span class="product-discount">50% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="stars-rating d-flex align-items-center flex-wrap">
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                    <span class="stars-rating__point">4.9</span>
                                                    <span class="stars-rating__review">
                                                        <span>778</span> Reviews</span>
                                                </div>
                                            </div>
                                            <div class="product-item__button d-flex mt-20 flex-wrap">
                                                <button
                                                    class="btn btn-default btn-squared btn-outline-light px-15 "><span
                                                        data-feather="shopping-bag"></span>
                                                    Add To Cart
                                                </button>
                                                <button class="btn btn-primary btn-default btn-squared border-0 ">buy
                                                    now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                            <div class="card product product--grid">
                                <div class="h-100">
                                    <div class="product-item">
                                        <div class="product-item__image">
                                            <span class="like-icon">
                                                <button type="button" class="content-center">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </span>
                                            <a href="#"><img class="card-img-top img-fluid" src="img/chair.png"
                                                    alt="digital-chair"></a>
                                        </div>
                                        <div class="card-body px-20 pb-25 pt-20">
                                            <div class="product-item__body text-capitalize">
                                                <a href="product-details.html">
                                                    <h6 class="card-title">commodo adipiscing</h6>
                                                </a>
                                                <div class="d-flex align-items-center mb-10 flex-wrap">
                                                    <span class="product-desc-price">$200.00</span>
                                                    <span class="product-price">$100.00</span>
                                                    <span class="product-discount">50% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="stars-rating d-flex align-items-center flex-wrap">
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                    <span class="stars-rating__point">4.9</span>
                                                    <span class="stars-rating__review">
                                                        <span>778</span> Reviews</span>
                                                </div>
                                            </div>
                                            <div class="product-item__button d-flex mt-20 flex-wrap">
                                                <button
                                                    class="btn btn-default btn-squared btn-outline-light px-15 "><span
                                                        data-feather="shopping-bag"></span>
                                                    Add To Cart
                                                </button>
                                                <button class="btn btn-primary btn-default btn-squared border-0 ">buy
                                                    now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                            <div class="card product product--grid">
                                <div class="h-100">
                                    <div class="product-item">
                                        <div class="product-item__image">
                                            <span class="like-icon">
                                                <button type="button" class="content-center">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </span>
                                            <a href="#"><img class="card-img-top img-fluid" src="img/plate.png"
                                                    alt="digital-chair"></a>
                                        </div>
                                        <div class="card-body px-20 pb-25 pt-20">
                                            <div class="product-item__body text-capitalize">
                                                <a href="product-details.html">
                                                    <h6 class="card-title">Leo sodales varius</h6>
                                                </a>
                                                <div class="d-flex align-items-center mb-10 flex-wrap">
                                                    <span class="product-desc-price">$200.00</span>
                                                    <span class="product-price">$100.00</span>
                                                    <span class="product-discount">50% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="stars-rating d-flex align-items-center flex-wrap">
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                    <span class="stars-rating__point">4.9</span>
                                                    <span class="stars-rating__review">
                                                        <span>778</span> Reviews</span>
                                                </div>
                                            </div>
                                            <div class="product-item__button d-flex mt-20 flex-wrap">
                                                <button
                                                    class="btn btn-default btn-squared btn-outline-light px-15 "><span
                                                        data-feather="shopping-bag"></span>
                                                    Add To Cart
                                                </button>
                                                <button class="btn btn-primary btn-default btn-squared border-0 ">buy
                                                    now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                            <div class="card product product--grid">
                                <div class="h-100">
                                    <div class="product-item">
                                        <div class="product-item__image">
                                            <span class="like-icon">
                                                <button type="button" class="content-center">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </span>
                                            <a href="#"><img class="card-img-top img-fluid"
                                                    src="img/chair3.png" alt="digital-chair"></a>
                                        </div>
                                        <div class="card-body px-20 pb-25 pt-20">
                                            <div class="product-item__body text-capitalize">
                                                <a href="product-details.html">
                                                    <h6 class="card-title">Hanging lamp berlingo</h6>
                                                </a>
                                                <div class="d-flex align-items-center mb-10 flex-wrap">
                                                    <span class="product-desc-price">$200.00</span>
                                                    <span class="product-price">$100.00</span>
                                                    <span class="product-discount">50% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="stars-rating d-flex align-items-center flex-wrap">
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                    <span class="stars-rating__point">4.9</span>
                                                    <span class="stars-rating__review">
                                                        <span>778</span> Reviews</span>
                                                </div>
                                            </div>
                                            <div class="product-item__button d-flex mt-20 flex-wrap">
                                                <button
                                                    class="btn btn-default btn-squared btn-outline-light px-15 "><span
                                                        data-feather="shopping-bag"></span>
                                                    Add To Cart
                                                </button>
                                                <button class="btn btn-primary btn-default btn-squared border-0 ">buy
                                                    now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                            <div class="card product product--grid">
                                <div class="h-100">
                                    <div class="product-item">
                                        <div class="product-item__image">
                                            <span class="like-icon">
                                                <button type="button" class="content-center">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </span>
                                            <a href="#"><img class="card-img-top img-fluid" src="img/juse.png"
                                                    alt="digital-chair"></a>
                                        </div>
                                        <div class="card-body px-20 pb-25 pt-20">
                                            <div class="product-item__body text-capitalize">
                                                <a href="product-details.html">
                                                    <h6 class="card-title">commodo adipiscing</h6>
                                                </a>
                                                <div class="d-flex align-items-center mb-10 flex-wrap">
                                                    <span class="product-desc-price">$200.00</span>
                                                    <span class="product-price">$100.00</span>
                                                    <span class="product-discount">50% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="stars-rating d-flex align-items-center flex-wrap">
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                    <span class="stars-rating__point">4.9</span>
                                                    <span class="stars-rating__review">
                                                        <span>778</span> Reviews</span>
                                                </div>
                                            </div>
                                            <div class="product-item__button d-flex mt-20 flex-wrap">
                                                <button
                                                    class="btn btn-default btn-squared btn-outline-light px-15 "><span
                                                        data-feather="shopping-bag"></span>
                                                    Add To Cart
                                                </button>
                                                <button class="btn btn-primary btn-default btn-squared border-0 ">buy
                                                    now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                            <div class="card product product--grid">
                                <div class="h-100">
                                    <div class="product-item">
                                        <div class="product-item__image">
                                            <span class="like-icon">
                                                <button type="button" class="content-center">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </span>
                                            <a href="#"><img class="card-img-top img-fluid"
                                                    src="img/coffe-glass.png" alt="digital-chair"></a>
                                        </div>
                                        <div class="card-body px-20 pb-25 pt-20">
                                            <div class="product-item__body text-capitalize">
                                                <a href="product-details.html">
                                                    <h6 class="card-title">Leo sodales varius</h6>
                                                </a>
                                                <div class="d-flex align-items-center mb-10 flex-wrap">
                                                    <span class="product-desc-price">$200.00</span>
                                                    <span class="product-price">$100.00</span>
                                                    <span class="product-discount">50% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="stars-rating d-flex align-items-center flex-wrap">
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                    <span class="stars-rating__point">4.9</span>
                                                    <span class="stars-rating__review">
                                                        <span>778</span> Reviews</span>
                                                </div>
                                            </div>
                                            <div class="product-item__button d-flex mt-20 flex-wrap">
                                                <button
                                                    class="btn btn-default btn-squared btn-outline-light px-15 "><span
                                                        data-feather="shopping-bag"></span>
                                                    Add To Cart
                                                </button>
                                                <button class="btn btn-primary btn-default btn-squared border-0 ">buy
                                                    now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                            <div class="card product product--grid">
                                <div class="h-100">
                                    <div class="product-item">
                                        <div class="product-item__image">
                                            <span class="like-icon">
                                                <button type="button" class="content-center">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </span>
                                            <a href="#"><img class="card-img-top img-fluid"
                                                    src="img/boss-chair.png" alt="digital-chair"></a>
                                        </div>
                                        <div class="card-body px-20 pb-25 pt-20">
                                            <div class="product-item__body text-capitalize">
                                                <a href="product-details.html">
                                                    <h6 class="card-title">Montes scelerisque</h6>
                                                </a>
                                                <div class="d-flex align-items-center mb-10 flex-wrap">
                                                    <span class="product-desc-price">$200.00</span>
                                                    <span class="product-price">$100.00</span>
                                                    <span class="product-discount">50% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="stars-rating d-flex align-items-center flex-wrap">
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                    <span class="stars-rating__point">4.9</span>
                                                    <span class="stars-rating__review">
                                                        <span>778</span> Reviews</span>
                                                </div>
                                            </div>
                                            <div class="product-item__button d-flex mt-20 flex-wrap">
                                                <button
                                                    class="btn btn-default btn-squared btn-outline-light px-15 "><span
                                                        data-feather="shopping-bag"></span>
                                                    Add To Cart
                                                </button>
                                                <button class="btn btn-primary btn-default btn-squared border-0 ">buy
                                                    now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                            <div class="card product product--grid">
                                <div class="h-100">
                                    <div class="product-item">
                                        <div class="product-item__image">
                                            <span class="like-icon">
                                                <button type="button" class="content-center">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </span>
                                            <a href="#"><img class="card-img-top img-fluid"
                                                    src="img/only-juss.png" alt="digital-chair"></a>
                                        </div>
                                        <div class="card-body px-20 pb-25 pt-20">
                                            <div class="product-item__body text-capitalize">
                                                <a href="product-details.html">
                                                    <h6 class="card-title">Leo sodales varius</h6>
                                                </a>
                                                <div class="d-flex align-items-center mb-10 flex-wrap">
                                                    <span class="product-desc-price">$200.00</span>
                                                    <span class="product-price">$100.00</span>
                                                    <span class="product-discount">50% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="stars-rating d-flex align-items-center flex-wrap">
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                    <span class="stars-rating__point">4.9</span>
                                                    <span class="stars-rating__review">
                                                        <span>778</span> Reviews</span>
                                                </div>
                                            </div>
                                            <div class="product-item__button d-flex mt-20 flex-wrap">
                                                <button
                                                    class="btn btn-default btn-squared btn-outline-light px-15 "><span
                                                        data-feather="shopping-bag"></span>
                                                    Add To Cart
                                                </button>
                                                <button class="btn btn-primary btn-default btn-squared border-0 ">buy
                                                    now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                            <div class="card product product--grid">
                                <div class="h-100">
                                    <div class="product-item">
                                        <div class="product-item__image">
                                            <span class="like-icon">
                                                <button type="button" class="content-center">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </span>
                                            <a href="#"><img class="card-img-top img-fluid"
                                                    src="img/flip-chair.png" alt="digital-chair"></a>
                                        </div>
                                        <div class="card-body px-20 pb-25 pt-20">
                                            <div class="product-item__body text-capitalize">
                                                <a href="product-details.html">
                                                    <h6 class="card-title">Hanging lamp berlingo</h6>
                                                </a>
                                                <div class="d-flex align-items-center mb-10 flex-wrap">
                                                    <span class="product-desc-price">$200.00</span>
                                                    <span class="product-price">$100.00</span>
                                                    <span class="product-discount">50% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="stars-rating d-flex align-items-center flex-wrap">
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                    <span class="stars-rating__point">4.9</span>
                                                    <span class="stars-rating__review">
                                                        <span>778</span> Reviews</span>
                                                </div>
                                            </div>
                                            <div class="product-item__button d-flex mt-20 flex-wrap">
                                                <button
                                                    class="btn btn-default btn-squared btn-outline-light px-15 "><span
                                                        data-feather="shopping-bag"></span>
                                                    Add To Cart
                                                </button>
                                                <button class="btn btn-primary btn-default btn-squared border-0 ">buy
                                                    now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cus-xl-3 col-lg-6 col-md-11 col-12 mb-30 px-10">
                            <div class="card product product--grid">
                                <div class="h-100">
                                    <div class="product-item">
                                        <div class="product-item__image">
                                            <span class="like-icon">
                                                <button type="button" class="content-center">
                                                    <i class="lar la-heart icon"></i>
                                                </button>
                                            </span>
                                            <a href="#"><img class="card-img-top img-fluid" src="img/chair.png"
                                                    alt="digital-chair"></a>
                                        </div>
                                        <div class="card-body px-20 pb-25 pt-20">
                                            <div class="product-item__body text-capitalize">
                                                <a href="product-details.html">
                                                    <h6 class="card-title">commodo adipiscing</h6>
                                                </a>
                                                <div class="d-flex align-items-center mb-10 flex-wrap">
                                                    <span class="product-desc-price">$200.00</span>
                                                    <span class="product-price">$100.00</span>
                                                    <span class="product-discount">50% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="stars-rating d-flex align-items-center flex-wrap">
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star active"></span>
                                                    <span class="star-icon las la-star-half-alt active"></span>
                                                    <span class="stars-rating__point">4.9</span>
                                                    <span class="stars-rating__review">
                                                        <span>778</span> Reviews</span>
                                                </div>
                                            </div>
                                            <div class="product-item__button d-flex mt-20 flex-wrap">
                                                <button
                                                    class="btn btn-default btn-squared btn-outline-light px-15 "><span
                                                        data-feather="shopping-bag"></span>
                                                    Add To Cart
                                                </button>
                                                <button class="btn btn-primary btn-default btn-squared border-0 ">buy
                                                    now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- End: Shop Item -->
                </div>
            </div>
        </div><!-- End: .columns-2 -->
    </div>
</div>
<script>
    $(document).ready(function() {
        searchData();
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            getData(page);
        })
    });

    function editProduct(id) {
        window.location.href = `product/edit/` + id;
    }

    function getData(page) {
        let formData = $('#formFilter').serialize();

        $.ajax({
            url: `product/data?page=` + page,
            method: 'GET',
            data: formData,
            beforeSend: function(e) {
                $('#overlay').css("display", "block");
            },
            success: function(data) {
                $('#overlay').css("display", "none");
                $('#data').html(data);
            },
            error: function(error) {
                $('#overlay').css("display", "none");
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Something went wrong',
                    confirmButtonText: 'Close'
                })
            }
        })
    }

    function searchData() {
        let formData = $('#formFilter').serialize();

        $.ajax({
            url: `product/data`,
            method: 'GET',
            data: formData,
            beforeSend: function(e) {
                $('#overlay').css("display", "block");
            },
            success: function(data) {
                $('#overlay').css("display", "none");
                $('#data').html(data)
            },
            error: function(error) {
                $('#overlay').css("display", "none");
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Something went wrong',
                    confirmButtonText: 'Close'
                })
            }
        })
    }

    function deleteData(id) {
        var url = `product/delete/` + id;
        Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `${url}`,
                        method: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        beforeSend: function(e) {
                            $('#overlay').css("display", "block");
                        },
                        success: function(res, data) {
                            $('#overlay').css("display", "none");
                            if (res.status == true) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your data has been deleted.',
                                    'success'
                                )
                                searchData();
                            } else {
                                console.log(res);
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: res.error,
                                    confirmButtonText: 'Close'
                                })
                            }
                        },
                        error: function(error) {
                            $('#overlay').css("display", "none");
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Something went wrong',
                                confirmButtonText: 'Close'
                            })
                        }
                    })
                }
            });
    }
</script>
