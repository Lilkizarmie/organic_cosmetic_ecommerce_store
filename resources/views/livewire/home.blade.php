<div id="content">
    <section>
        <div class="row no-gutters">
            <div class="col-6">
                <div class="card border-0 banner banner-10 hover-zoom-in hover-shine">
                    <div class="card-img bg-img-cover-center" style="background-image: url('images/banner-51.jpg');">
                    </div>
                    <div
                        class="card-img-overlay d-inline-flex flex-column p-6 p-md-9 align-items-center justify-content-center bg-overlay-gradient-02">
                        <p class="card-text fs-16 fs-sm-18 fs-md-24 text-white mb-2">
                            Find Inspration
                        </p>
                        <h3
                            class="card-title fs-24 fs-sm-42 fs-md-68 text-white lh-129 mb-5 custom-font-02 font-weight-400 text-uppercase">
                            Bodycare</h3>
                        <div>
                            <a href="#"
                                class="btn btn-link btn-light bg-transparent text-white hover-white border-0 border-bottom rounded-0 p-0 fs-16 font-weight-600">
                                Discover Now
                                <svg class="icon icon-arrow-right">
                                    <use xlink:href="#icon-arrow-right"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card border-0 banner banner-10 hover-zoom-in hover-shine">
                    <div class="card-img bg-img-cover-center" style="background-image: url('images/banner-50.jpg');">
                    </div>
                    <div
                        class="card-img-overlay d-inline-flex flex-column p-6 p-md-9 align-items-center justify-content-center bg-overlay-gradient-02">
                        <p class="card-text fs-16 fs-sm-18 fs-md-24 text-white mb-2">
                            Find Inspration
                        </p>
                        <h3
                            class="card-title fs-24 fs-sm-42 fs-md-68 text-white lh-129 mb-5 custom-font-02 font-weight-400 text-uppercase">
                            skincare</h3>
                        <div>
                            <a href="#"
                                class="btn btn-link btn-light bg-transparent text-white hover-white border-0 border-bottom rounded-0 p-0 fs-16 font-weight-600">
                                Discover Now
                                <svg class="icon icon-arrow-right">
                                    <use xlink:href="#icon-arrow-right"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-lg-13 pt-10">
        <div class="container container-xl">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills justify-content-center mb-lg-9 mb-7" role="tablist">
                        <li class="nav-item px-md-6 px-0">
                            <a class="pointer nav-link active text-secondary px-xl-3 py-1 lh-1 fs-lg-40 fs-md-34 fs-24 custom-font-02 font-weight-400 bg-transparent rounded-0 text-active-secondary hover-active-opacity-3"
                                id="pills-best-sellers-tab" data-toggle="pill" href="#pills-best-sellers" role="tab"
                                aria-controls="pills-best-sellers" aria-selected="true">Best
                                Sellers</a>
                        </li>
                        <li class="nav-item px-md-6 px-0">
                            <a class="pointer nav-link  text-secondary px-xl-3 py-1 lh-1 fs-lg-40 fs-md-34 fs-24 custom-font-02 font-weight-400 bg-transparent rounded-0 text-active-secondary hover-active-opacity-3"
                                id="pills-new-arrivals-tab" data-toggle="pill" href="#pills-new-arrivals" role="tab"
                                aria-controls="pills-new-arrivals" aria-selected="true">New
                                Arrivals</a>
                        </li>
                        <li class="nav-item px-md-6 px-0">
                            <a class="pointer nav-link  text-secondary px-xl-3 py-1 lh-1 fs-lg-40 fs-md-34 fs-24 custom-font-02 font-weight-400 bg-transparent rounded-0 text-active-secondary hover-active-opacity-3"
                                id="pills-sale-tab" data-toggle="pill" href="#pills-sale" role="tab"
                                aria-controls="pills-sale" aria-selected="true">Sale</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content p-0 shadow-none" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-best-sellers" role="tabpanel"
                    aria-labelledby="pills-best-sellers-tab">
                    <div class="row">
                        @forelse ($products as $product)
                            <div class="col-lg-3 col-sm-6 mb-5">
                                <div class="card border-0 product">
                                    <div class="position-relative">
                                        <img src="{{ asset('products/' . $product->image) }}" alt="Facial cleanser">
                                        <div class="card-img-overlay d-flex p-3">
                                            <div>
                                                <span class="badge badge-accent">-20%</span>
                                            </div>
                                            <div class="my-auto w-100 content-change-vertical">
                                                <a wire:click="addItem({{ $product->id }})" href="javascript:void();"
                                                    data-toggle="tooltip" data-placement="left" title="Add to cart"
                                                    class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                    <svg class="icon icon-shopping-bag-open-light fs-24">
                                                        <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                    </svg>
                                                </a>
                                                <a href="#" data-toggle="tooltip" data-placement="left"
                                                    title="Quick view"
                                                    class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                                                    <span data-toggle="modal" data-target="#quick-view">
                                                        <svg class="icon icon-eye-light fs-24">
                                                            <use xlink:href="#icon-eye-light"></use>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <a href="#" data-toggle="tooltip" data-placement="left"
                                                    title="Add to wishlist"
                                                    class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                    <svg class="icon icon-star-light fs-24">
                                                        <use xlink:href="#icon-star-light"></use>
                                                    </svg>
                                                </a>
                                                <a href="#" data-toggle="tooltip" data-placement="left"
                                                    title="Compare"
                                                    class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                                                    <svg class="icon icon-arrows-left-right-light fs-24">
                                                        <use xlink:href="#icon-arrows-left-right-light"></use>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-4 text-center">
                                        <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                                            {{-- <span
                                            class="fs-13 font-weight-500 text-decoration-through text-body pr-1">$39.00</span> --}}
                                            <span> ₦ {{ number_format($product->price) }}</span>
                                        </p>
                                        <h2 class="card-title fs-15 font-weight-500 mb-2"><a
                                                href="product-detail.html"
                                                class="hover-accent">{{ $product->title }}</a>
                                        </h2>
                                        <div class="d-flex align-items-center justify-content-center flex-wrap">
                                            <ul class="list-inline mb-0 lh-1">
                                                <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                        class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                        class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                        class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                        class="fas fa-star"></i>
                                                </li>
                                                <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                        class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                            <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @empty
                        @endforelse
                    </div>
                </div>
                <div class="tab-pane fade " id="pills-new-arrivals" role="tabpanel"
                    aria-labelledby="pills-new-arrivals-tab">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="card border-0 product">
                                <div class="position-relative">
                                    <img src="images/product-03.jpg" alt="Coffee Bean Caffeine Eye Cream">
                                    <div class="card-img-overlay d-flex p-3">
                                        <div>
                                        </div>
                                        <div class="my-auto w-100 content-change-vertical">
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="View products"
                                                class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-shopping-bag-open-light fs-24">
                                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"
                                                class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                                                <span data-toggle="modal" data-target="#quick-view">
                                                    <svg class="icon icon-eye-light fs-24">
                                                        <use xlink:href="#icon-eye-light"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Add to wishlist"
                                                class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-star-light fs-24">
                                                    <use xlink:href="#icon-star-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Compare"
                                                class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                                                <svg class="icon icon-arrows-left-right-light fs-24">
                                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-4 text-center">
                                    <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                                        <span
                                            class="fs-13 font-weight-500 text-decoration-through text-body pr-1">$39.00</span>
                                        <span>$29.00</span>
                                    </p>
                                    <h2 class="card-title fs-15 font-weight-500 mb-2"><a href="product-detail.html"
                                            class="hover-accent">Coffee Bean Caffeine Eye Cream</a>
                                    </h2>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <ul class="list-inline mb-0 lh-1">
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                        <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="card border-0 product">
                                <div class="position-relative">
                                    <img src="images/product-04.jpg" alt="Bio-shroom Rejuvenating Serum">
                                    <div class="card-img-overlay d-flex p-3">
                                        <div>
                                        </div>
                                        <div class="my-auto w-100 content-change-vertical">
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="View products"
                                                class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-shopping-bag-open-light fs-24">
                                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"
                                                class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                                                <span data-toggle="modal" data-target="#quick-view">
                                                    <svg class="icon icon-eye-light fs-24">
                                                        <use xlink:href="#icon-eye-light"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Add to wishlist"
                                                class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-star-light fs-24">
                                                    <use xlink:href="#icon-star-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Compare"
                                                class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                                                <svg class="icon icon-arrows-left-right-light fs-24">
                                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-4 text-center">
                                    <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                                        <span>$29.00</span>
                                    </p>
                                    <h2 class="card-title fs-15 font-weight-500 mb-2"><a href="product-detail.html"
                                            class="hover-accent">Bio-shroom Rejuvenating Serum</a>
                                    </h2>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <ul class="list-inline mb-0 lh-1">
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                        <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="card border-0 product">
                                <div class="position-relative">
                                    <img src="images/product-05.jpg" alt="Coffee Bean Caffeine Eye Cream">
                                    <div class="card-img-overlay d-flex p-3">
                                        <div>
                                        </div>
                                        <div class="my-auto w-100 content-change-vertical">
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="View products"
                                                class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-shopping-bag-open-light fs-24">
                                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"
                                                class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                                                <span data-toggle="modal" data-target="#quick-view">
                                                    <svg class="icon icon-eye-light fs-24">
                                                        <use xlink:href="#icon-eye-light"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Add to wishlist"
                                                class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-star-light fs-24">
                                                    <use xlink:href="#icon-star-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Compare"
                                                class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                                                <svg class="icon icon-arrows-left-right-light fs-24">
                                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-4 text-center">
                                    <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                                        <span>$29.00</span>
                                    </p>
                                    <h2 class="card-title fs-15 font-weight-500 mb-2"><a href="product-detail.html"
                                            class="hover-accent">Coffee Bean Caffeine Eye Cream</a>
                                    </h2>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <ul class="list-inline mb-0 lh-1">
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                        <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="card border-0 product">
                                <div class="position-relative">
                                    <img src="images/product-06.jpg" alt="Coffee Bean Caffeine Eye Cream">
                                    <div class="card-img-overlay d-flex p-3">
                                        <div>
                                            <span class="badge badge-accent">-20%</span>
                                        </div>
                                        <div class="my-auto w-100 content-change-vertical">
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="View products"
                                                class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-shopping-bag-open-light fs-24">
                                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"
                                                class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                                                <span data-toggle="modal" data-target="#quick-view">
                                                    <svg class="icon icon-eye-light fs-24">
                                                        <use xlink:href="#icon-eye-light"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Add to wishlist"
                                                class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-star-light fs-24">
                                                    <use xlink:href="#icon-star-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Compare"
                                                class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                                                <svg class="icon icon-arrows-left-right-light fs-24">
                                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-4 text-center">
                                    <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                                        <span>$29.00</span>
                                    </p>
                                    <h2 class="card-title fs-15 font-weight-500 mb-2"><a href="product-detail.html"
                                            class="hover-accent">Coffee Bean Caffeine Eye Cream</a>
                                    </h2>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <ul class="list-inline mb-0 lh-1">
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                        <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="pills-sale" role="tabpanel" aria-labelledby="pills-sale-tab">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="card border-0 product">
                                <div class="position-relative">
                                    <img src="images/product-11.jpg" alt="Coffee Bean Caffeine Eye Cream">
                                    <div class="card-img-overlay d-flex p-3">
                                        <div>
                                        </div>
                                        <div class="my-auto w-100 content-change-vertical">
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="View products"
                                                class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-shopping-bag-open-light fs-24">
                                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"
                                                class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                                                <span data-toggle="modal" data-target="#quick-view">
                                                    <svg class="icon icon-eye-light fs-24">
                                                        <use xlink:href="#icon-eye-light"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Add to wishlist"
                                                class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-star-light fs-24">
                                                    <use xlink:href="#icon-star-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Compare"
                                                class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                                                <svg class="icon icon-arrows-left-right-light fs-24">
                                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-4 text-center">
                                    <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                                        <span
                                            class="fs-13 font-weight-500 text-decoration-through text-body pr-1">$39.00</span>
                                        <span>$29.00</span>
                                    </p>
                                    <h2 class="card-title fs-15 font-weight-500 mb-2"><a href="product-detail.html"
                                            class="hover-accent">Coffee Bean Caffeine Eye Cream</a>
                                    </h2>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <ul class="list-inline mb-0 lh-1">
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                        <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="card border-0 product">
                                <div class="position-relative">
                                    <img src="images/product-10.jpg" alt="Bio-shroom Rejuvenating Serum">
                                    <div class="card-img-overlay d-flex p-3">
                                        <div>
                                        </div>
                                        <div class="my-auto w-100 content-change-vertical">
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="View products"
                                                class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-shopping-bag-open-light fs-24">
                                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"
                                                class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                                                <span data-toggle="modal" data-target="#quick-view">
                                                    <svg class="icon icon-eye-light fs-24">
                                                        <use xlink:href="#icon-eye-light"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Add to wishlist"
                                                class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-star-light fs-24">
                                                    <use xlink:href="#icon-star-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Compare"
                                                class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                                                <svg class="icon icon-arrows-left-right-light fs-24">
                                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-4 text-center">
                                    <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                                        <span>$29.00</span>
                                    </p>
                                    <h2 class="card-title fs-15 font-weight-500 mb-2"><a href="product-detail.html"
                                            class="hover-accent">Bio-shroom Rejuvenating Serum</a>
                                    </h2>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <ul class="list-inline mb-0 lh-1">
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                        <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="card border-0 product">
                                <div class="position-relative">
                                    <img src="images/product-09.jpg" alt="Coffee Bean Caffeine Eye Cream">
                                    <div class="card-img-overlay d-flex p-3">
                                        <div>
                                        </div>
                                        <div class="my-auto w-100 content-change-vertical">
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="View products"
                                                class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-shopping-bag-open-light fs-24">
                                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"
                                                class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                                                <span data-toggle="modal" data-target="#quick-view">
                                                    <svg class="icon icon-eye-light fs-24">
                                                        <use xlink:href="#icon-eye-light"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Add to wishlist"
                                                class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-star-light fs-24">
                                                    <use xlink:href="#icon-star-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Compare"
                                                class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                                                <svg class="icon icon-arrows-left-right-light fs-24">
                                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-4 text-center">
                                    <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                                        <span>$29.00</span>
                                    </p>
                                    <h2 class="card-title fs-15 font-weight-500 mb-2"><a href="product-detail.html"
                                            class="hover-accent">Coffee Bean Caffeine Eye Cream</a>
                                    </h2>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <ul class="list-inline mb-0 lh-1">
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                        <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-5">
                            <div class="card border-0 product">
                                <div class="position-relative">
                                    <img src="images/product-08.jpg" alt="Coffee Bean Caffeine Eye Cream">
                                    <div class="card-img-overlay d-flex p-3">
                                        <div>
                                            <span class="badge badge-accent">-20%</span>
                                        </div>
                                        <div class="my-auto w-100 content-change-vertical">
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="View products"
                                                class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-shopping-bag-open-light fs-24">
                                                    <use xlink:href="#icon-shopping-bag-open-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Quick view"
                                                class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                                                <span data-toggle="modal" data-target="#quick-view">
                                                    <svg class="icon icon-eye-light fs-24">
                                                        <use xlink:href="#icon-eye-light"></use>
                                                    </svg>
                                                </span>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Add to wishlist"
                                                class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                                                <svg class="icon icon-star-light fs-24">
                                                    <use xlink:href="#icon-star-light"></use>
                                                </svg>
                                            </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                                title="Compare"
                                                class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                                                <svg class="icon icon-arrows-left-right-light fs-24">
                                                    <use xlink:href="#icon-arrows-left-right-light"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 pt-4 text-center">
                                    <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                                        <span>$29.00</span>
                                    </p>
                                    <h2 class="card-title fs-15 font-weight-500 mb-2"><a href="product-detail.html"
                                            class="hover-accent">Coffee Bean Caffeine Eye Cream</a>
                                    </h2>
                                    <div class="d-flex align-items-center justify-content-center flex-wrap">
                                        <ul class="list-inline mb-0 lh-1">
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                            <li class="list-inline-item fs-12 text-accent mr-0"><i
                                                    class="fas fa-star"></i>
                                            </li>
                                        </ul>
                                        <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ url('/store') }}" class="btn btn-outline-secondary border-2x border">Shop
                    All Products</a>
            </div>
        </div>
    </section>
    <section class="pt-10 pt-lg-13 pb-lg-12 pb-6 pb-md-9">
        <div class="container container-xl">
            <div class="row">
                <div class="col-12 text-center mb-6">
                    <h2 class="custom-font-02 font-weight-400">More to Discover</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-6 mb-md-0">
                    <div class="card border-0 text-center">
                        <a href="shop.html" class="d-block hover-shine hover-zoom-in">
                            <img src="images/image-box-25.jpg" alt="Find a Store">
                        </a>
                        <div class="card-body px-0 pt-6 pb-0">
                            <h3 class="fs-24 mb-2"><a href="shop.html" class="text-decoration-none">Find a
                                    Store</a></h3>
                            <a href="shop.html" class="btn btn-link text-secondary">Our Store<i
                                    class="far fa-arrow-right fs-12 pl-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-6 mb-md-0">
                    <div class="card border-0 text-center">
                        <a href="blog-grid.html" class="d-block hover-shine hover-zoom-in">
                            <img src="images/image-box-24.jpg" alt="From Our Blog">
                        </a>
                        <div class="card-body px-0 pt-6 pb-0">
                            <h3 class="fs-24 mb-2"><a href="blog-grid.html" class="text-decoration-none">From Our
                                    Blog</a></h3>
                            <a href="blog-grid.html" class="btn btn-link text-secondary">Read More<i
                                    class="far fa-arrow-right fs-12 pl-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-6 mb-md-0">
                    <div class="card border-0 text-center">
                        <a href="about-us.html" class="d-block hover-shine hover-zoom-in">
                            <img src="images/image-box-26.jpg" alt="Our Story">
                        </a>
                        <div class="card-body px-0 pt-6 pb-0">
                            <h3 class="fs-24 mb-2"><a href="about-us.html" class="text-decoration-none">Our
                                    Story</a></h3>
                            <a href="about-us.html" class="btn btn-link text-secondary">View More<i
                                    class="far fa-arrow-right fs-12 pl-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
