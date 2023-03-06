<header class="main-header navbar-dark header-sticky header-sticky-smart position-absolute fixed-top">
    <div class="sticky-area">
        <div class="container container-xxl">
            <nav class="px-0 navbar navbar-expand-xl d-block">
                <div class="d-none d-xl-block ">
                    <div class="d-flex align-items-center flex-nowrap">
                        <div class="w-50 d-flex align-items-center">
                            <a href="#search-popup" data-gtf-mfp="true"
                                data-mfp-options='{"type":"inline","focus": "#keyword","mainClass": "mfp-search-form mfp-move-from-top mfp-align-top"}'
                                class="pr-3 mr-auto nav-search d-flex align-items-center">
                                <svg class="icon icon-magnifying-glass-light fs-28">
                                    <use xlink:href="#icon-magnifying-glass-light"></use>
                                </svg>
                                <span class="ml-2 d-none d-xl-inline-block">Search</span>
                            </a>
                            <ul class="px-0 navbar-nav hover-menu main-menu mx-xl-n5">
                                <li aria-haspopup="true" aria-expanded="false"
                                    class="px-0 py-2 nav-item dropdown-item-home dropdown py-xl-7 sticky-py-xl-6 px-xl-5">
                                    <a class="p-0 nav-link" href="{{ url('/') }}">
                                        Home
                                        <span class="caret"></span>
                                    </a>
                                </li>
                                <li aria-haspopup="true" aria-expanded="false"
                                    class="px-0 py-2 nav-item dropdown-item-shop dropdown py-xl-7 sticky-py-xl-6 px-xl-5">
                                    <a class="p-0 nav-link" href="{{ url('/store') }}">
                                        Shop
                                        <span class="caret"></span>
                                    </a>
                                </li>
                                <li aria-haspopup="true" aria-expanded="false"
                                    class="px-0 py-2 nav-item dropdown-item-pages dropdown py-xl-7 sticky-py-xl-6 px-xl-5">
                                    <a class="p-0 nav-link" href="{{ url('/about-us') }}">
                                        About
                                        <span class="caret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-shrink-0 mx-auto position-static">
                            <div class="mt-3 d-flex mt-xl-0 align-items-center w-100 justify-content-center">
                                <a class="mx-4 navbar-brand mw-184px mx-xxl-10 d-none d-xl-inline-block"
                                    href="{{ url('/') }}">
                                    <img src="images/casiemata.png" alt="CasieMata" class="normal-logo">
                                    <img src="images/casiemata.png" alt="CasieMata" class="sticky-logo">
                                </a>
                            </div>
                        </div>
                        <div class="w-50 d-flex align-items-center justify-content-between">
                            <ul class="px-0 navbar-nav hover-menu main-menu mx-xl-n5">
                                <li aria-haspopup="true" aria-expanded="false"
                                    class="px-0 py-2 nav-item dropdown py-xl-7 sticky-py-xl-6 px-xl-5">
                                    <a class="p-0 nav-link" href="{{ url('/blog') }}">
                                        Blog
                                        <span class="caret"></span>
                                    </a>
                                </li>
                                <li aria-haspopup="true" aria-expanded="false"
                                    class="px-0 py-2 nav-item dropdown py-xl-7 sticky-py-xl-6 px-xl-5">
                                    <a class="p-0 nav-link" href="{{ url('/contact-us') }}">
                                        Contact
                                        <span class="caret"></span>
                                    </a>
                                </li>
                            </ul>
                            <ul
                                class="flex-row flex-wrap py-0 navbar-nav justify-content-xl-end d-flex text-body navbar-right">

                                <li class="nav-item">
                                    <a class="px-4 py-0 nav-link position-relative" href="{{ url('/wishlist') }}">
                                        <svg class="icon icon-star-light">
                                            <use xlink:href="#icon-star-light"></use>
                                        </svg>
                                        <span class="position-absolute number">0</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="px-4 py-0 nav-link position-relative menu-cart d-inline-flex align-items-center mr-n2"
                                        href="#" data-canvas="true"
                                        data-canvas-options='{"container":".cart-canvas"}'>
                                        {{-- <span class="mr-2 font-weight-bold fs-15">$0.00</span> --}}
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
                    <button class="px-0 border-0 navbar-toggler canvas-toggle" type="button" data-canvas="true"
                        data-canvas-options='{"width":"250px","container":".sidenav"}'>
                        <span class="fs-24 toggle-icon"></span>
                    </button>
                    <div class="mx-auto"><a class="py-5 mr-0 navbar-brand mw-184px d-inline-block"
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
                        <span class="ml-2 d-none d-xl-inline-block font-weight-500">Search</span></a>
                </div>
            </nav>
        </div>
    </div>
</header>
