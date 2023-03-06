<div class="card border-0 pt-4 pb-7 h-100">
    <div class="px-6 text-right">
        <span class="canvas-close d-inline-block fs-24 mb-1 ml-auto lh-1 text-primary"><i class="fal fa-times"></i></span>
    </div>
    <div class="card-header bg-transparent p-0 mx-6">
        <h3 class="fs-24 mb-5">
            Shopping bag
        </h3>
        <p class="fs-15 font-weight-500 text-body mb-5"><span class="d-inline-block mr-2 fs-15 text-secondary"><i
                    class="far fa-check-circle"></i></span>
            Your cart is saved for the next <span class="text-secondary">4m34s</span></p>
    </div>
    <div class="card-body px-6 pt-7 overflow-y-auto">
        @forelse($carts as $index=>$cart)
            <div class="mb-4 d-flex">
                <a href="javascript:void(0);" wire:click="removeItem('{{ $cart['rowId'] }}')"
                    class="d-flex align-items-center mr-2 text-muted"><i class="fal fa-times"></i></a>
                <div class="media w-100">
                    <div class="w-60px mr-3">
                        <img src="{{ asset('products/' . $cart['image']) }}" alt="{{ $cart['name'] }}">
                    </div>
                    <div class="media-body d-flex">
                        <div class="cart-price pr-6">
                            <p class="fs-14 font-weight-bold text-secondary mb-1">
                                {{-- <span
                                class="font-weight-500 fs-13 text-line-through text-body mr-1">$39.00</span> --}}
                                {{-- ₦{{ number_format($cart['price']) }} --}}
                                ₦{{ number_format($cart['pricesingle']) }}
                            </p>
                            <a href="#" class="text-secondary">{{ $cart['name'] }}</a>
                        </div>
                        <div class="position-relative ml-auto">
                            <div class="input-group">
                                <a href="javascript:void(0);" wire:click="decreaseItem('{{ $cart['rowId'] }}')"
                                    class="down position-absolute pos-fixed-left-center pl-2"><i
                                        class="far fa-minus"></i></a>
                                <input type="number"
                                    class="number-cart w-90px px-6 text-center h-40px bg-input border-0" readonly
                                    value="{{ $cart['qty'] }}">
                                <a href="javascript:void(0);" wire:click="increaseItem('{{ $cart['rowId'] }}')"
                                    class="up position-absolute pos-fixed-right-center pr-2"><i class="far fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>Cart is Empty</p>
        @endforelse


    </div>
    <div class="card-footer mt-auto border-0 bg-transparent px-6 pb-0 pt-5">
        <div class="d-flex align-items-center mb-2">
            <span class="text-secondary fs-15">Total price:</span>
            <span class="d-block ml-auto fs-24 font-weight-bold text-secondary">₦
                {{ number_format($summary['total']) }}</span>
        </div>
        <a href="{{ url('/checkout') }}"
            class="btn btn-secondary btn-block mb-3 bg-hover-primary border-hover-primary">Check
            Out</a>
        <a href="{{ url('/cart') }}" class="btn btn-outline-secondary btn-block">View Cart</a>
    </div>
</div>
