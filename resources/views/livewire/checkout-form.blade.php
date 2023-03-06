{{-- <form wire:submit.prevent='buy'> --}}


<div class="col-lg-8 pr-xl-15 order-lg-first form-control-01">
    {{-- <form wire:submit.prevent='buy'> --}}
    <h4 class="pt-1 mb-4 fs-24">Shipping Infomation</h4>
    <div class="mb-3">
        <label class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">name</label>
        <div class="row">
            <div class="mb-4 col-md-12 mb-md-0">
                <input wire:model.defer='name' type="text" class="border-0 form-control" id="full-name" name="fullname"
                    placeholder="Full Name" required="">
                @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            {{-- <div class="col-md-6">
              <input type="text" class="border-0 form-control" id="last-name" name="lasttname"
                placeholder="Last Name" required="">
            </div> --}}
        </div>
    </div>
    <div class="mb-3">
        <div class="row">
            <div class="mb-4 col-md-12 mb-md-0">
                <label for="street-address" class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">Street
                    Address</label>
                <input type="text" wire:model.defer='address' class="border-0 form-control" id="street-address"
                    name="streetaddress" required="" placeholder="2, Ajanlekoko lane, Lagos">
                @error('address')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>

        </div>
    </div>


    <div class="mb-3">
        <label class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">info</label>
        <div class="row">
            <div class="mb-4 col-md-6 mb-md-0">
                <input type="email" wire:model.defer='email' class="border-0 form-control" id="email"
                    name="email" placeholder="Email" required="">
                @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <input type="number" wire:model.defer='phone' class="border-0 form-control" id="phone"
                    name="phone" placeholder="Phone number" required="">
                @error('phone')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>
    </div>
    @if (!Auth::check())
        <div class="mb-3">
            <label class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">Password</label>
            <div class="row">
                <div class="mb-4 col-md-12 mb-md-0">
                    <input type="password" wire:model.defer='password' class="border-0 form-control" id="full-name"
                        name="fullname" placeholder="******">
                </div>

            </div>
            @error('password')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
    @endif

    <button wire:click.prevent="buy" type="submit"
        class="mt-6 btn btn-secondary bg-hover-primary border-hover-primary px-7">Place
        Order <span wire:loading='buy' class="spinner-border spinner-border-sm text-light" role="status">
            <span class="sr-only">Loading...</span>
        </span></button>
    {{-- </form> --}}
</div>

{{-- </form> --}}
