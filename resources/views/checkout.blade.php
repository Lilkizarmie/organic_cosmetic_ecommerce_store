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
      <form>
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
                      <a href="#" class="text-secondary pr-6">Natural Coconut Cleansing Oil<span class="text-body">
                          x1</span></a>
                      <p class="fs-14 text-secondary mb-0 mt-1">Size:<span class="text-body"> Fullsize</span></p>
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
                      <a href="#" class="text-secondary pr-6">Cleansing Balm<span class="text-body"> x1</span></a>
                      <p class="fs-14 text-secondary my-1">Size:<span class="text-body"> Fullsize</span></p>
                      <p class="fs-14 text-secondary mb-0 mt-1">Colors:<span class="text-body"> Green -
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
          <div class="col-lg-8 pr-xl-15 order-lg-first form-control-01">
            <p class="mb-2">Returning customer? <a href="#" data-toggle="modal" data-target="#sign-in">Click
                here to login</a></p>
            <p>Have a coupon? <a data-toggle="collapse" href="#collapsecoupon" role="button" aria-expanded="false"
                aria-controls="collapsecoupon">Click here to enter your
                code</a></p>
            <div class="card collapse mw-460 border-0" id="collapsecoupon">
              <div class="card-body pt-6 px-5 pb-7 my-6 border">
                <p class="card-text text-secondary mb-5">If you have a coupon code, please apply it
                  below.</p>
                <div class="input-group">
                  <input type="email" name="coupon_code" class="form-control border-0" placeholder="Your Email*">
                  <div class="input-group-append">
                    <button class="btn btn-secondary px-3 border-0" type="submit" name="apply_coupon"
                      value="Apply coupon">Apply Coupon
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <h4 class="fs-24 pt-1 mb-4">Shipping Infomation</h4>
            <div class="mb-3">
              <label class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">name</label>
              <div class="row">
                <div class="col-md-6 mb-md-0 mb-4">
                  <input type="text" class="form-control border-0" id="first-name" name="firstname"
                    placeholder="First Name" required="">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control border-0" id="last-name" name="lasttname"
                    placeholder="Last Name" required="">
                </div>
              </div>
            </div>
            <div class="mb-3">
              <div class="row">
                <div class="col-md-8 mb-md-0 mb-4">
                  <label for="street-address"
                    class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">Street
                    Address</label>
                  <input type="text" class="form-control border-0" id="street-address" name="streetaddress"
                    required="">
                </div>
                <div class="col-md-4">
                  <label for="apt"
                    class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">APT/Suite</label>
                  <input type="text" class="form-control border-0" id="apt" name="apt" required="">
                </div>
              </div>
            </div>
            <div class="mb-3">
              <div class="row">
                <div class="col-md-4 mb-md-0 mb-4">
                  <label for="city" class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">City</label>
                  <input type="text" class="form-control border-0" id="city" name="city" required="">
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                  <label for="state" class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">State</label>
                  <input type="text" class="form-control border-0" id="state" name="state" required="">
                </div>
                <div class="col-md-4">
                  <label for="zip" class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">zip
                    code</label>
                  <input type="text" class="form-control border-0" id="zip" name="zip" required="">
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">Country</label>
              <div class="dropdown show lh-1 rounded mb-4" style="background-color:#f5f5f5">
                <a href="#"
                  class="dropdown-toggle custom-dropdown-toggle text-decoration-none text-secondary p-3 position-relative d-block"
                  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Viet Nam
                </a>
                <div class="dropdown-menu custom-dropdown-item" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Andorra</a>
                  <a class="dropdown-item" href="#">San Marino</a>
                  <a class="dropdown-item" href="#">Tunisia</a>
                  <a class="dropdown-item" href="#">Micronesia</a>
                  <a class="dropdown-item" href="#">Solomon Islands</a>
                  <a class="dropdown-item" href="#">Macedonia</a>
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">info</label>
              <div class="row">
                <div class="col-md-6 mb-md-0 mb-4">
                  <input type="email" class="form-control border-0" id="email" name="email" placeholder="Email"
                    required="">
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control border-0" id="phone" name="phone"
                    placeholder="Phone number" required="">
                </div>
              </div>
            </div>
            <div class="custom-control custom-checkbox mt-6 mb-5">
              <input type="checkbox" class="custom-control-input" name="customCheck6" checked="" id="customCheck5">
              <label class="custom-control-label custom-control-label-secondary text-secondary" for="customCheck5">
                <span class="text-body">Billing address is the same as shipping</span>
              </label>
            </div>
            <div class="mb-3 mb-5">
              <h4 class="fs-24 mb-5 mt-8 pt-lg-1 payment">Payment Infomation</h4>
              <a class="btn bg-gray-2 btn-payment payment-paylay px-8 py-3 mr-4" href="#" data-var="paypal">
                <svg class="icon icon-paylay fs-32 text-secondary hover-primary">
                  <use xlink:href="#icon-paylay"></use>
                </svg>
                <span class="ml-2 text-secondary font-weight-600 fs-16">Paypal</span>
              </a>
              <a class="btn bg-gray-2 btn-payment payment-card px-7 py-3 active my-sm-0 my-3" href="#"
                data-var="credit-card">
                <svg class="icon icon-card fs-32 text-secondary hover-primary">
                  <use xlink:href="#icon-card"></use>
                </svg>
                <span class="ml-2 text-secondary font-weight-600 fs-16">Credit card</span>
              </a>
            </div>
            <div class="card-box payment-box">
              <div class="mb-3">
                <label class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">CREDIT CARD
                  NUMBER</label>
                <div class="row align-items-center">
                  <div class="col-md-6 mb-md-0 mb-4">
                    <input name="creditCardText" type="text" class="form-control border-0 creditCardText"
                      placeholder="**** **** **** ****">
                  </div>
                  <div class="col-md-6">
                    <img src="images/Paypal.jpg" alt="Paypal">
                  </div>
                </div>
              </div>
              <div class="mb-3 mb-0">
                <div class="row">
                  <div class="col-md-4 mb-md-0 mb-4">
                    <label class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">EXPIRATION
                      DATE</label>
                    <select name="inputMonth" id="inputMonth" class="form-control border-0 px-3">
                      <option selected="">Month</option>
                      <option>January</option>
                      <option>February</option>
                      <option>March</option>
                      <option>April</option>
                      <option>May</option>
                      <option>June</option>
                      <option>July</option>
                      <option>August</option>
                      <option>September</option>
                      <option>October</option>
                      <option>November</option>
                      <option>December</option>
                    </select>
                  </div>
                  <div class="col-md-4 mb-md-0 mb-4">
                    <label
                      class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase opacity-0 d-md-block d-none">Year</label>
                    <select name="inputYaer" id="inputYaer" class="form-control border-0 px-3">
                      <option selected="">Year</option>
                      <option>2015</option>
                      <option>2016</option>
                      <option>2017</option>
                      <option>2018</option>
                      <option>2019</option>
                      <option>2020</option>
                      <option>2021</option>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="security" class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">SECURITY
                      CODE</label>
                    <input name="securityCode" type="text" class="form-control border-0" id="security">
                  </div>
                </div>
              </div>
            </div>
            <div class="paylay-box payment-box">
              <div class="row">
                <div class="col-md-6 mb-4">
                  <label for="your-email"
                    class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">Email</label>
                  <input name="paymentEmail" type="email" class="form-control border-0" id="your-email"
                    placeholder="Your email" required="">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="password"
                    class="mb-2 fs-13 letter-spacing-01 font-weight-600 text-uppercase">Password</label>
                  <input name="paymentPassword" type="password" class="form-control border-0" id="password"
                    placeholder="******" required="">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-secondary bg-hover-primary border-hover-primary px-7 mt-6">Place
              Order</button>
          </div>
        </div>
      </form>
    </div>
  </section>
</main>
@endsection