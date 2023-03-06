<header class="main-header navbar-dark header-sticky header-sticky-smart position-absolute fixed-top">
    <div class="sticky-area">
        <div class="container container-xxl">
            <nav class="navbar navbar-expand-xl px-0 d-block">
                <div class="d-none d-xl-block ">
                    <div class="d-flex align-items-center flex-nowrap">
                        <div class="w-50 d-flex align-items-center">
                            <a href="#search-popup" data-gtf-mfp="true"
                                data-mfp-options='{"type":"inline","focus": "#keyword","mainClass": "mfp-search-form mfp-move-from-top mfp-align-top"}'
                                class="nav-search d-flex align-items-center pr-3 mr-auto">
                                <svg class="icon icon-magnifying-glass-light fs-28">
                                    <use xlink:href="#icon-magnifying-glass-light"></use>
                                </svg>
                                <span class="d-none d-xl-inline-block ml-2">Search</span>
                            </a>
                            <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n5">
                                <li aria-haspopup="true" aria-expanded="false"
                                    class="nav-item dropdown-item-home dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-5">
                                    <a class="nav-link p-0" href="{{ url('/') }}">
                                        Home
                                        <span class="caret"></span>
                                    </a>
                                </li>
                                <li aria-haspopup="true" aria-expanded="false"
                                    class="nav-item dropdown-item-shop dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-5">
                                    <a class="nav-link p-0" href="{{ url('/store') }}">
                                        Shop
                                        <span class="caret"></span>
                                    </a>
                                </li>
                                <li aria-haspopup="true" aria-expanded="false"
                                    class="nav-item dropdown-item-pages dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-5">
                                    <a class="nav-link p-0" href="{{ url('/about-us') }}">
                                        About
                                        <span class="caret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mx-auto flex-shrink-0 position-static">
                            <div class="d-flex mt-3 mt-xl-0 align-items-center w-100 justify-content-center">
                                <a class="navbar-brand mw-184px mx-4 mx-xxl-10 d-none d-xl-inline-block"
                                    href="{{ url('/') }}">
                                    <img src="images/casiemata.png" alt="CasieMata" class="normal-logo">
                                    <img src="images/casiemata.png" alt="CasieMata" class="sticky-logo">
                                </a>
                            </div>
                        </div>
                        <div class="w-50 d-flex align-items-center justify-content-between">
                            <ul class="navbar-nav hover-menu main-menu px-0 mx-xl-n5">
                                <li aria-haspopup="true" aria-expanded="false"
                                    class="nav-item dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-5">
                                    <a class="nav-link p-0" href="{{ url('/blog') }}">
                                        Blog
                                        <span class="caret"></span>
                                    </a>
                                </li>
                                <li aria-haspopup="true" aria-expanded="false"
                                    class="nav-item dropdown py-2 py-xl-7 sticky-py-xl-6 px-0 px-xl-5">
                                    <a class="nav-link p-0" href="{{ url('/contact-us') }}">
                                        Contact
                                        <span class="caret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul
                                class="navbar-nav flex-row justify-content-xl-end d-flex flex-wrap text-body py-0 navbar-right">

                                <li class="nav-item">
                                    <a class="nav-link position-relative px-4 py-0" href="{{ url('/wishlist') }}">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                        <span class="position-absolute number">0</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link position-relative px-4 menu-cart py-0 d-inline-flex align-items-center mr-n2"
                                        href="#" data-canvas="true"
                                        data-canvas-options='{"container":".cart-canvas"}'>
                                        <span class="mr-2 font-weight-bold fs-15">$0.00</span>
                                        <svg class="icon icon-shopping-bag-open-light">
                                            <use xlink:href="#icon-shopping-bag-open-light"></use>
                                        </svg>
                                        <span class="position-absolute number">@livewire('cart-counter')</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center d-xl-none ">
                    <button class="navbar-toggler border-0 px-0 canvas-toggle" type="button" data-canvas="true"
                        data-canvas-options='{"width":"250px","container":".sidenav"}'>
                        <span class="fs-24 toggle-icon"></span>
                    </button>
                    <div class="mx-auto"><a class="navbar-brand mw-184px d-inline-block mr-0 py-5"
                            href="{{ url('/') }}">
                            {{-- <img src="images/casiemata.png" alt="CasieMata" class="normal-logo">
            <img src="images/casiemata.png" alt="CasieMata" class="sticky-logo"> --}}
                        </a></div>
                    <a href="#search-popup" data-gtf-mfp="true"
                        data-mfp-options='{"type":"inline","focus": "#keyword","mainClass": "mfp-search-form mfp-move-from-top mfp-align-top"}'
                        class="nav-search d-flex align-items-center">
                        <svg class="icon icon-magnifying-glass-light fs-28">
                            <use xlink:href="#icon-magnifying-glass-light"></use>
                        </svg>
                        <span class="d-none d-xl-inline-block ml-2 font-weight-500">Search</span></a>
                </div>
            </nav>
        </div>
    </div>
</header>
