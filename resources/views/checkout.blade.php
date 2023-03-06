@extends('layouts.main')

@section('main-container')
    <main id="content">
        <section class="py-2 bg-gray-2">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
                        <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Check Out</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="pb-lg-13 pb-11">
            <div class="container">
                <h2 class="text-center my-9">Check Out</h2>
                {{-- <form> --}}
                <div class="row">
                    <div class="col-lg-4 pb-lg-0 pb-11 order-lg-last">
                        <div class="card border-0" style="box-shadow: 0 0 10px 0 rgba(0,0,0,0.1)">
                            <div class="card-header px-0 mx-6 bg-transparent py-5">
                                <h4 class="fs-24 mb-5">Order Summary</h4>
                                <div class="media w-100 mb-4">
                                    <div class="w-60px mr-3">
                                        <img src="images/product-07.jpg" alt="Natural Coconut Cleansing Oi">
                                    </div>
                                    <div class="media-body d-flex">
                                        <div class="cart-price pr-6">
                                            <a href="#" class="text-secondary pr-6">Natural Coconut Cleansing
                                                Oil<span class="text-body">
                                                    x1</span></a>
                                            <p class="fs-14 text-secondary mb-0 mt-1">Size:<span class="text-body">
                                                    Fullsize</span></p>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="fs-14 text-secondary mb-0 font-weight-bold">$29.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media w-100">
                                    <div class="w-60px mr-3">
                                        <img src="images/product-05.jpg" alt="Cleansing Balm">
                                    </div>
                                    <div class="media-body d-flex">
                                        <div class="cart-price">
                                            <a href="#" class="text-secondary pr-6">Cleansing Balm<span
                                                    class="text-body"> x1</span></a>
                                            <p class="fs-14 text-secondary my-1">Size:<span class="text-body">
                                                    Fullsize</span></p>
                                            <p class="fs-14 text-secondary mb-0 mt-1">Colors:<span class="text-body">
                                                    Green -
                                                    Revitalizing</span>
                                            </p>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="fs-14 text-secondary mb-0 font-weight-bold">$29.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-6 pt-5">
                                <div class="d-flex align-items-center mb-2">
                                    <span>Subtotal:</span>
                                    <span class="d-block ml-auto text-secondary font-weight-bold">$99.00</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span>Shipping:</span>
                                    <span class="d-block ml-auto text-secondary font-weight-bold">$0</span>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent px-0 pb-1 mx-6">
                                <div class="d-flex align-items-center font-weight-bold mb-3">
                                    <span class="text-secondary">Total pricre:</span>
                                    <span class="d-block ml-auto text-secondary fs-24 font-weight-bold">$99.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @livewire('checkout-form')
                </div>
                {{-- </form> --}}
            </div>
        </section>
    </main>
@endsection
