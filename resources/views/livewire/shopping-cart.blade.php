<main id="content">
    <section class="py-2 bg-gray-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="py-0 breadcrumb breadcrumb-site d-flex justify-content-center">
                    <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="index.html">Home</a>
                    </li>
                    <li class="pl-0 breadcrumb-item active d-flex align-items-center" aria-current="page">Shopping Cart
                    </li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="pb-11 pb-lg-13">
        <div class="container">
            <h2 class="mb-8 text-center mt-9">Shopping Cart</h2>
            <form class="pb-8 table-responsive-md pb-lg-10">
                <table class="table border">
                    <thead style="background-color: #F5F5F5">
                        <tr class="fs-15 letter-spacing-01 font-weight-600 text-uppercase text-secondary">
                            <th scope="col" class="border-1x pl-7">products</th>
                            <th scope="col" class="border-1x">quantity</th>
                            <th colspan="2" class="border-1x">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($carts as $index=>$cart)
                            <tr class="position-relative">
                                <th scope="row" class="py-4 w-xl-695 pl-xl-5">
                                    <div class="media align-items-center">
                                        {{-- <input class="checkbox-primary w-15px h-15px" type="checkbox" name="check-product"
                                        value="checkbox"> --}}
                                        <div class="ml-3 mr-4">
                                            <img src="{{ asset('products/' . $cart['image']) }}"
                                                alt="{{ $cart['name'] }}" class="mw-75px">

                                        </div>
                                        <div class="media-body w-128px">
                                            <p class="mb-1 font-weight-500 text-secondary">{{ $cart['name'] }}</p>
                                            <p class="mb-1 card-text font-weight-bold fs-14 text-secondary">

                                                <span>₦{{ number_format($cart['pricesingle']) }}</span>
                                            </p>
                                        </div>
                                    </div>
                                </th>
                                <td class="align-middle">
                                    <div class="input-group position-relative w-128px">
                                        <a href="javascript:void(0);" wire:click="decreaseItem('{{ $cart['rowId'] }}')"
                                            class="pl-2 down position-absolute pos-fixed-left-center z-index-2"><i
                                                class="far fa-minus"></i></a>
                                        <input name="number[]" type="number"
                                            class="px-6 text-center border-0 form-control form-control-sm fs-16 input-quality h-35px"
                                            readonly value="{{ $cart['qty'] }}" required="">
                                        <a href="javascript:void(0);" wire:click="increaseItem('{{ $cart['rowId'] }}')"
                                            class="pr-2 up position-absolute pos-fixed-right-center z-index-2"><i
                                                class="far fa-plus"></i>
                                        </a>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <p class="mb-0 text-secondary font-weight-bold mr-xl-11">
                                        ₦{{ number_format($cart['price']) }}</p>
                                </td>
                                <td class="pr-5 text-right align-middle"><a href="javascript:void(0);"
                                        wire:click="removeItem('{{ $cart['rowId'] }}')" class="d-block"><i
                                            class="fal fa-times text-body"></i></a></td>
                            </tr>
                        @empty
                            <p>Cart is Empty</p>
                        @endforelse
                    </tbody>
                </table>
            </form>
            <div class="row">

                @if ($summary['total'] > 0)
                    <div class="col-md-6 offset-md-3 pt-lg-0 pt-11">
                        <div class="border-0 card" style="box-shadow: 0 0 10px 0 rgba(0,0,0,0.1)">
                            <div class="px-6 pt-5 card-body">
                                <div class="mb-2 d-flex align-items-center">
                                    <span>Subtotal:</span>
                                    <span class="ml-auto d-block text-secondary font-weight-bold">₦
                                        {{ number_format($summary['total']) }}</span>
                                </div>
                                {{-- <div class="d-flex align-items-center">
                                <span>Shipping:</span>
                                <span class="ml-auto d-block text-secondary font-weight-bold">$0</span>
                            </div> --}}
                            </div>
                            <div class="px-0 pb-4 mx-6 bg-transparent card-footer">
                                <div class="mb-3 d-flex align-items-center font-weight-bold">
                                    <span class="text-secondary">Total pricre:</span>
                                    <span class="ml-auto d-block text-secondary fs-24 font-weight-bold">₦
                                        {{ number_format($summary['total']) }}</span>
                                </div>
                                <a href="{{ url('/checkout') }}"
                                    class="btn btn-secondary btn-block bg-hover-primary border-hover-primary"
                                    value="Check Out">Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
</main>
