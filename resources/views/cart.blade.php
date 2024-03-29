@extends('layouts.main')

@section('main-container')
<main id="content">
  <section class="py-2 bg-gray-2">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
          <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="index.html">Home</a>
          </li>
          <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Shopping Cart
          </li>
        </ol>
      </nav>
    </div>
  </section>
  <section class="pb-11 pb-lg-13">
    <div class="container">
      <h2 class="text-center mt-9 mb-8">Shopping Cart</h2>
      <form class="table-responsive-md pb-8 pb-lg-10">
        <table class="table border">
          <thead style="background-color: #F5F5F5">
            <tr class="fs-15 letter-spacing-01 font-weight-600 text-uppercase text-secondary">
              <th scope="col" class="border-1x pl-7">products</th>
              <th scope="col" class="border-1x">quantity</th>
              <th colspan="2" class="border-1x">Price</th>
            </tr>
          </thead>
          <tbody>
            <tr class="position-relative">
              <th scope="row" class="w-xl-695 pl-xl-5 py-4">
                <div class="media align-items-center">
                  <input class="checkbox-primary w-15px h-15px" type="checkbox" name="check-product" value="checkbox">
                  <div class="ml-3 mr-4">
                    <img src="images/product-07.jpg" alt="Natural Coconut Cleansing Oil" class="mw-75px">
                  </div>
                  <div class="media-body w-128px">
                    <p class="font-weight-500 mb-1 text-secondary">Natural Coconut Cleansing Oil</p>
                    <p class="card-text font-weight-bold fs-14 mb-1 text-secondary">
                      <span class="fs-13 font-weight-500 text-decoration-through text-body pr-1">$39.00</span>
                      <span>$29.00</span>
                    </p>
                  </div>
                </div>
              </th>
              <td class="align-middle">
                <div class="input-group position-relative w-128px">
                  <a href="#" class="down position-absolute pos-fixed-left-center pl-2 z-index-2"><i
                      class="far fa-minus"></i></a>
                  <input name="number[]" type="number"
                    class="form-control form-control-sm px-6 fs-16 text-center input-quality border-0 h-35px"
                    value="1" required="">
                  <a href="#" class="up position-absolute pos-fixed-right-center pr-2 z-index-2"><i
                      class="far fa-plus"></i>
                  </a>
                </div>
              </td>
              <td class="align-middle">
                <p class="mb-0 text-secondary font-weight-bold mr-xl-11">$48.00</p>
              </td>
              <td class="align-middle text-right pr-5"><a href="#" class="d-block"><i
                    class="fal fa-times text-body"></i></a></td>
            </tr>
            <tr class="position-relative">
              <th scope="row" class="w-xl-695 pl-xl-5 py-4">
                <div class="media align-items-center">
                  <input class="checkbox-primary w-15px h-15px" type="checkbox" name="check-product" value="checkbox">
                  <div class="ml-3 mr-4">
                    <img src="images/product-10.jpg" alt="Super Pure" class="mw-75px">
                  </div>
                  <div class="media-body w-128px">
                    <p class="font-weight-500 mb-1 text-secondary">Super Pure</p>
                    <p class="card-text font-weight-bold fs-14 mb-1 text-secondary">
                      <span class="fs-13 font-weight-500 text-decoration-through text-body pr-1">$39.00</span>
                      <span>$29.00</span>
                    </p>
                  </div>
                </div>
              </th>
              <td class="align-middle">
                <div class="input-group position-relative w-128px">
                  <a href="#" class="down position-absolute pos-fixed-left-center pl-2 z-index-2"><i
                      class="far fa-minus"></i></a>
                  <input name="number[]" type="number"
                    class="form-control form-control-sm px-6 fs-16 text-center input-quality border-0 h-35px"
                    value="1" required="">
                  <a href="#" class="up position-absolute pos-fixed-right-center pr-2 z-index-2"><i
                      class="far fa-plus"></i>
                  </a>
                </div>
              </td>
              <td class="align-middle">
                <p class="mb-0 text-secondary font-weight-bold mr-xl-11">$22.00</p>
              </td>
              <td class="align-middle text-right pr-5"><a href="#" class="d-block"><i
                    class="fal fa-times text-body"></i></a></td>
            </tr>
            <tr class="position-relative opacity-5">
              <th scope="row" class="w-xl-695 pl-xl-5 py-4">
                <div class="media align-items-center">
                  <input class="checkbox-primary w-15px h-15px" type="checkbox" name="check-product" value="checkbox">
                  <div class="ml-3 mr-4">
                    <img src="images/product-04.jpg" alt="Cleansing Balm" class="mw-75px">
                  </div>
                  <div class="media-body w-128px">
                    <p class="font-weight-500 mb-1 text-secondary">Cleansing Balm</p>
                    <p class="card-text font-weight-bold fs-14 mb-1 text-secondary">
                      <span class="fs-13 font-weight-500 text-decoration-through text-body pr-1">$39.00</span>
                      <span>$29.00</span>
                    </p>
                  </div>
                </div>
                <div class="pos-fix-top-left position-absolute py-1 px-3 bg-muted text-white">
                  <span class="badge text-uppercase fs-14 letter-spacing-01 p-0">out of stock</span>
                </div>
              </th>
              <td class="align-middle">
                <div class="input-group position-relative w-128px">
                  <a href="#" class="down position-absolute pos-fixed-left-center pl-2 z-index-2"><i
                      class="far fa-minus"></i></a>
                  <input name="number[]" type="number"
                    class="form-control form-control-sm px-6 fs-16 text-center input-quality border-0 h-35px"
                    value="1" required="">
                  <a href="#" class="up position-absolute pos-fixed-right-center pr-2 z-index-2"><i
                      class="far fa-plus"></i>
                  </a>
                </div>
              </td>
              <td class="align-middle">
                <p class="mb-0 text-secondary font-weight-bold mr-xl-11">$48.00</p>
              </td>
              <td class="align-middle text-right pr-5"><a href="#" class="d-block"><i
                    class="fal fa-times text-body"></i></a></td>
            </tr>
            <tr class="position-relative">
              <th scope="row" class="w-xl-695 pl-xl-5 py-4">
                <div class="media align-items-center">
                  <input class="checkbox-primary w-15px h-15px" type="checkbox" name="check-product" value="checkbox">
                  <div class="ml-3 mr-4">
                    <img src="images/product-05.jpg" alt="Cleansing Balm" class="mw-75px">
                  </div>
                  <div class="media-body w-128px">
                    <p class="font-weight-500 mb-1 text-secondary">Cleansing Balm</p>
                    <p class="card-text font-weight-bold fs-14 mb-1 text-secondary">
                      <span class="fs-13 font-weight-500 text-decoration-through text-body pr-1">$39.00</span>
                      <span>$29.00</span>
                    </p>
                  </div>
                </div>
              </th>
              <td class="align-middle">
                <div class="input-group position-relative w-128px">
                  <a href="#" class="down position-absolute pos-fixed-left-center pl-2 z-index-2"><i
                      class="far fa-minus"></i></a>
                  <input name="number[]" type="number"
                    class="form-control form-control-sm px-6 fs-16 text-center input-quality border-0 h-35px"
                    value="1" required="">
                  <a href="#" class="up position-absolute pos-fixed-right-center pr-2 z-index-2"><i
                      class="far fa-plus"></i>
                  </a>
                </div>
              </td>
              <td class="align-middle">
                <p class="mb-0 text-secondary font-weight-bold mr-xl-11">$29.00</p>
              </td>
              <td class="align-middle text-right pr-5"><a href="#" class="d-block"><i
                    class="fal fa-times text-body"></i></a></td>
            </tr>
            <tr>
              <td class="pb-6 pl-0 position-relative bg-white" style="left: -1px">
                <button type="submit" value="Countinue Shopping"
                  class="btn btn-outline-secondary border-2x border mr-5 border-hover-secondary my-3">
                  Countinue Shopping
                </button>
                <button type="submit" value="Clear Shopping Cart"
                  class="btn btn-link p-0 border-0 border-bottom border-secondary rounded-0 my-3"><i
                    class="fal fa-times mr-2 text-secondary"></i>Clear Shopping Cart
                </button>
              </td>
              <td colspan="3" class="text-right pb-6 pr-0 position-relative bg-white" style="right: -2px">
                <button type="submit" value="Update Cart"
                  class="btn btn-outline-secondary border-2x border border-hover-secondary my-3">Update
                  Cart
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
      <div class="row">
        <div class="col-lg-4 pt-2">
          <h4 class="fs-24 mb-3">Coupon Discount</h4>
          <p class="">Enter you coupon code if you have one.</p>
          <form>
            <input type="text" class="border-0 form-control mb-4" placeholder="Enter coupon code here">
            <button type="submit" class="btn btn-secondary bg-hover-primary border-hover-primary">
              Apply coupon
            </button>
          </form>
        </div>
        <div class="col-lg-4 pt-lg-2 pt-10">
          <h4 class="fs-24 mb-3">Coupon Discount</h4>
          <form>
            <div class="d-flex mb-3">
              <div class="custom-control custom-radio mr-6">
                <input type="radio" id="buy1" name="quality" class="custom-control-input" checked="">
                <label class="custom-control-label custom-control-label-secondary" for="buy1">
                  <span class="text-body">Free shipping</span>
                </label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="buy2" name="quality" class="custom-control-input">
                <label class="custom-control-label custom-control-label-secondary" for="buy2">
                  <span class="text-body">Flat rate: $75</span>
                </label>
              </div>
            </div>
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
            <input type="text" class="form-control border-0 mb-4" placeholder="State / County" required="">
            <input type="text" class="form-control border-0 mb-4" placeholder="City" required="">
            <input type="text" class="form-control border-0 mb-4" placeholder="Postcode / Zip">
            <button type="submit" class="btn btn-secondary bg-hover-primary border-hover-primary">
              Update total
            </button>
          </form>
        </div>
        <div class="col-lg-4 pt-lg-0 pt-11">
          <div class="card border-0" style="box-shadow: 0 0 10px 0 rgba(0,0,0,0.1)">
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
            <div class="card-footer bg-transparent px-0 pb-4 mx-6">
              <div class="d-flex align-items-center font-weight-bold mb-3">
                <span class="text-secondary">Total pricre:</span>
                <span class="d-block ml-auto text-secondary fs-24 font-weight-bold">$99.00</span>
              </div>
              <button type="submit" class="btn btn-secondary btn-block bg-hover-primary border-hover-primary"
                value="Check Out">Check Out
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection