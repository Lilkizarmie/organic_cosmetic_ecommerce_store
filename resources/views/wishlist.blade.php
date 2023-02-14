@extends('layouts.main')

@section('main-container')
<main id="content">
  <section class="py-2 bg-gray-2">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
          <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="index.html">Home</a>
          </li>
          <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Wishlist
          </li>
        </ol>
      </nav>
    </div>
  </section>
  <section>
    <div class="container">
      <h2 class="text-center mt-9 mb-8">Wishlist</h2>
      <form class="table-responsive-md pb-8 pb-lg-10">
        <table class="table border-right border-left mb-0">
          <tbody>
            <tr class="position-relative">
              <th scope="row" class="pl-xl-6 py-4 d-flex align-items-center">
                <a href="#" class="d-block"><i class="fal fa-times text-body"></i></a>
                <div class="media align-items-center">
                  <div class="ml-3 mr-4">
                    <img src="images/product-07.jpg" alt="Natural Coconut Cleansing Oil" class="mw-75px">
                  </div>
                  <div class="media-body mw-210">
                    <p class="font-weight-500 text-secondary mb-2 lh-13">Natural Coconut Cleansing Oil</p>
                    <p class="card-text font-weight-bold fs-14 mb-1 text-secondary">
                      <span class="fs-13 font-weight-500 text-decoration-through text-body pr-1">$39.00</span>
                      <span>$29.00</span>
                    </p>
                    <p class="font-weight-500 mb-0">August 14, 2021</p>
                  </div>
                </div>
              </th>
              <td class="align-middle text-right pr-6">
                <span class="mr-4">In stock</span>
                <a href="#"
                  class="btn btn-outline-secondary border-2x border border-hover-secondary py-1 w-150px px-0 my-3">Add
                  To Cart</a>
              </td>
            </tr>
            <tr class="position-relative">
              <th scope="row" class="pl-xl-6 py-4 d-flex align-items-center">
                <a href="#" class="d-block"><i class="fal fa-times text-body"></i></a>
                <div class="media align-items-center">
                  <div class="ml-3 mr-4">
                    <img src="images/product-05.jpg" alt="Cleansing Balm" class="mw-75px">
                  </div>
                  <div class="media-body mw-210">
                    <p class="font-weight-500 text-secondary mb-2 lh-13">Cleansing Balm</p>
                    <p class="card-text font-weight-bold fs-14 mb-1 text-secondary">
                      <span class="fs-13 font-weight-500 text-decoration-through text-body pr-1">$39.00</span>
                      <span>$29.00</span>
                    </p>
                    <p class="font-weight-500 mb-0">August 14, 2021</p>
                  </div>
                </div>
              </th>
              <td class="align-middle text-right pr-6">
                <span class="mr-4">In stock</span>
                <a href="#"
                  class="btn btn-outline-secondary border-2x border border-hover-secondary py-1 w-150px px-0 my-3">Select
                  Options</a>
              </td>
            </tr>
            <tr class="position-relative">
              <th scope="row" class="pl-xl-6 py-4 d-flex align-items-center">
                <a href="#" class="d-block"><i class="fal fa-times text-body"></i></a>
                <div class="media align-items-center">
                  <div class="ml-3 mr-4">
                    <img src="images/product-10.jpg" alt="Super Pure" class="mw-75px">
                  </div>
                  <div class="media-body mw-210">
                    <p class="font-weight-500 text-secondary mb-2 lh-13">Super Pure</p>
                    <p class="card-text font-weight-bold fs-14 mb-1 text-secondary">
                      <span class="fs-13 font-weight-500 text-decoration-through text-body pr-1">$39.00</span>
                      <span>$29.00</span>
                    </p>
                    <p class="font-weight-500 mb-0">August 14, 2021</p>
                  </div>
                </div>
              </th>
              <td class="align-middle text-right pr-6">
                <span class="mr-4">In stock</span>
                <a href="#"
                  class="btn btn-outline-secondary border-2x border border-hover-secondary py-1 w-150px px-0 my-3">Add
                  To Cart</a>
              </td>
            </tr>
            <tr>
              <td class="pl-0 position-relative bg-white" style="left: -1px">
                <button type="submit" value="Countinue Shopping"
                  class="btn btn-outline-secondary border-2x border mr-5 border-hover-secondary my-3">
                  Countinue Shopping
                </button>
              </td>
              <td class="text-right pr-0 position-relative bg-white pt-6" style="right: -1px">
                <button type="submit" value="Update Cart"
                  class="btn btn-secondary bg-hover-primary border-hover-primary">Update Cart
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </section>
</main>
@endsection