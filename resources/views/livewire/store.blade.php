<main id="content">
    <section class="py-2 bg-gray-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Shop Grid layout
                    </li>
                </ol>
            </nav>
        </div>
    </section>
    <section>
        <div class="container container-xl">
            <h2 class="text-center mt-9 mb-8">Shop Grid Layout</h2>
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <p class="fs-18 font-weight-500 my-lg-0 my-2" style="color: #696969;">We found <strong
                        class="font-weight-bold text-secondary">95</strong>
                    products available for you</p>
                <div class="d-flex align-items-center">
                    <div class="switch-layout d-lg-flex align-items-center d-none">
                        <span class="pr-5">See</span>
                        <a href="#" class="active pr-5" title="Grid View">
                            <svg class="icon icon-squares-four fs-32 hover-secondary">
                                <use xlink:href="#icon-squares-four"></use>
                            </svg>
                        </a>
                        <a href="shop-page-05.html" title="List View">
                            <svg class="icon icon-list fs-32 hover-secondary">
                                <use xlink:href="#icon-list"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="dropdown show lh-1 rounded ml-lg-5 ml-0" style="background-color:#f5f5f5">
                        <a href="#"
                            class="dropdown-toggle custom-dropdown-toggle text-decoration-none text-secondary p-3 mw-210 position-relative d-block"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Default Sorting
                        </a>
                        <div class="dropdown-menu custom-dropdown-item" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Price high to low</a>
                            <a class="dropdown-item" href="#">Price low to high</a>
                            <a class="dropdown-item" href="#">Random</a>
                        </div>
                    </div>
                    <button
                        class="btn btn-secondary bg-hover-primary border-hover-primary px-5 box-shadow-none ml-4 d-lg-block d-none"
                        data-toggle="collapse" data-target="#filter" aria-expanded="false" aria-controls="filter">
                        <svg class="icon icon-SlidersHorizontal fs-24 mr-2">
                            <use xlink:href="#icon-SlidersHorizontal"></use>
                        </svg>
                        Filter
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section id="filter" class="collapse" style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.03);">
        <div class="container container-xl pt-9 pb-12">
            <div class="row">
                <div class="col">
                    <ul class="list-unstyled">
                        <li class="fs-20 font-weight-600 text-secondary mb-1">
                            <a href="#">Best Seller</a>
                        </li>
                        <li class="fs-20 font-weight-600 text-secondary mb-1">
                            <a href="#">New Arrivals</a>
                        </li>
                        <li class="fs-20 font-weight-600 text-secondary mb-1">
                            <a href="#">Sale</a>
                        </li>
                        <li class="fs-20 font-weight-600 text-secondary mb-1">
                            <a href="#">Hot Items</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h4 class="fs-20 mb-3">Categories</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#"
                                class="text-uppercase fs-14 letter-spacing-005 font-weight-600 text-body hover-secondary text-decoration-none">BODY
                                CARE</a>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                                class="text-uppercase fs-14 letter-spacing-005 font-weight-600 text-body hover-secondary text-decoration-none">Skin
                                care</a>
                            <ul class="list-unstyled ml-5 mt-2 mb-5">
                                <li class="mb-1">
                                    <a href="#" class="text-body hover-secondary">Cleanser</a>
                                </li>
                                <li class="mb-1">
                                    <a href="#" class="text-body hover-secondary">Toner</a>
                                </li>
                                <li class="mb-1">
                                    <a href="#" class="text-body hover-secondary">Scrubs & Masks</a>
                                </li>
                                <li class="mb-1">
                                    <a href="#" class="text-body hover-secondary">Serum</a>
                                </li>
                                <li class="mb-1">
                                    <a href="#" class="text-body hover-secondary">Face Oils</a>
                                </li>
                                <li class="mb-1">
                                    <a href="#" class="text-body hover-secondary">Moisturizer</a>
                                </li>
                                <li class="mb-1">
                                    <a href="#" class="text-body hover-secondary">Eye Cream</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                                class="text-uppercase fs-14 letter-spacing-005 font-weight-600 text-body hover-secondary text-decoration-none">Hair
                                CARE</a>
                        </li>
                        <li class="mb-2">
                            <a href="#"
                                class="text-uppercase fs-14 letter-spacing-005 font-weight-600 text-body hover-secondary text-decoration-none">ACCESSORIES</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h4 class="fs-20 mb-3">Price</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="text-body hover-secondary">
                                <span>All</span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-body hover-secondary">
                                <span>$50</span>
                                <span> - </span>
                                <span>$99</span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-body hover-secondary">
                                <span>$100</span>
                                <span> - </span>
                                <span>$499</span>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-body hover-secondary">
                                <span>$500</span>
                                <span> - </span>
                                <span>$2000</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h4 class="fs-20 mb-3">Size</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#" class="text-body hover-secondary">Single</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-body hover-secondary">5 Pack</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-body hover-secondary">Full size</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-body hover-secondary">Mini size</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h4 class="fs-20 mb-3">Color</h4>
                    <ul class="list-inline mb-0 widget-color">
                        <li class="list-inline-item">
                            <a href="#" class="d-block item" style="background-color: #000;"></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="d-block item"
                                style="background-color: #C69D97;"></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="d-block item"
                                style="background-color: #92967F;"></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="d-block item"
                                style="background-color: #D7A983;"></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="d-block item"
                                style="background-color: #4F6B66;"></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="d-block item border"
                                style="background-color: #FFFFFF;"></a>
                        </li>
                        <li class="list-inline-item"><a href="#" class="d-block item"
                                style="background-color: #AB5C4F;"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-7">
        <div class="container container-xl">
            <div class="row">
                @forelse ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card border-0 product mb-6">
                            <div class="position-relative">
                                <img src="{{ asset('products/' . $product->image) }}" alt="{{ $product->title }}">
                                <div class="card-img-overlay d-flex p-3 flex-column">
                                    <div>
                                        <span class="badge badge-primary">-20%</span>
                                    </div>
                                    <div class="w-100 content-change-horizontal d-flex justify-content-center mt-auto">
                                        <a wire:click="addItem({{ $product->id }})"
                                            href="javascript:void();"data-toggle="tooltip" data-placement="top"
                                            title="Add to cart"
                                            class="add-to-cart d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mr-2">
                                            <svg class="icon icon-shopping-bag-open-light fs-24">
                                                <use xlink:href="#icon-shopping-bag-open-light"></use>
                                            </svg>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Quick view"
                                            class="preview d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                                            <span data-toggle="modal" data-target="#quick-view">
                                                <svg class="icon icon-eye-light fs-24">
                                                    <use xlink:href="#icon-eye-light"></use>
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top"
                                            title="Add to wishlist"
                                            class="add-to-wishlist d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mr-2">
                                            <svg class="icon icon-star-light fs-24">
                                                <use xlink:href="#icon-star-light"></use>
                                            </svg>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"
                                            class="add-to-compare d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                                            <svg class="icon icon-arrows-left-right-light fs-24">
                                                <use xlink:href="#icon-arrows-left-right-light"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-4 text-center px-0">
                                <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                                    {{-- <span
                                        class="fs-13 font-weight-500 text-decoration-through text-body pr-1">$39.00</span> --}}
                                    <span> ₦ {{ number_format($product->price) }}</span>
                                </p>
                                <h2 class="card-title fs-15 font-weight-500 mb-2"><a
                                        href="product-page-01.html">{{ $product->title }}</a>
                                </h2>
                                <div class="d-flex align-items-center justify-content-center flex-wrap">
                                    <ul class="list-inline mb-0 lh-1">
                                        <li class="list-inline-item fs-12 text-primary mr-0"><i
                                                class="fas fa-star"></i>
                                        </li>
                                        <li class="list-inline-item fs-12 text-primary mr-0"><i
                                                class="fas fa-star"></i>
                                        </li>
                                        <li class="list-inline-item fs-12 text-primary mr-0"><i
                                                class="fas fa-star"></i>
                                        </li>
                                        <li class="list-inline-item fs-12 text-primary mr-0"><i
                                                class="fas fa-star"></i>
                                        </li>
                                        <li class="list-inline-item fs-12 text-primary mr-0"><i
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
    </section>
    <section class="pb-lg-14 pb-11">
        <nav class="pt-2">
            <ul class="pagination justify-content-center align-items-center mb-0 fs-16 font-weight-600">
                {{ $products->links() }}
            </ul>
        </nav>
    </section>
</main>
