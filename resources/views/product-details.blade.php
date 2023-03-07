@extends('layouts.main')

@section('main-container')
<main id="content">
  <section class="py-2 bg-gray-2">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
          <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="index.html">Home</a>
          </li>
          <li class="breadcrumb-item pl-0 d-flex align-items-center"><a class="text-decoration-none text-body"
              href="shop.html">Shop
          </a>
          </li>
          <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Natural Coconut
            Cleansing Oil
          </li>
        </ol>
      </nav>
    </div>
  </section>
  <section class="pt-11 pb-9 pb-lg-10 product-details-layout-1">
    <div class="container">
      <div class="row">
        <div class="col-md-6 pr-xl-9 mb-8 mb-md-0">
          <div class="galleries-product galleries-product-01 position-relative d-flex ">
            <div class="slick-slider slider-for mx-0 pl-xl-5"
              data-slick-options='{"slidesToShow": 1,"vertical":true, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-nav","responsive":[{"breakpoint": 1200,"settings": {"vertical": false}}]}'>
              <div class="box px-0">
                <div class="card p-0 rounded-0 border-0">
                  <a href="images/product-07.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="02">
                    <img src="images/product-07.jpg" alt="product gallery" class="w-100">
                  </a>
                </div>
              </div>
              <div class="box px-0">
                <div class="card p-0 rounded-0 border-0">
                  <a href="images/product-15.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="02">
                    <img src="images/product-15.jpg" alt="product gallery" class="w-100">
                  </a>
                </div>
              </div>
              <div class="box px-0">
                <div class="card p-0 rounded-0 border-0">
                  <a href="images/product-16.jpg" class="card-img" data-gtf-mfp="true" data-gallery-id="02">
                    <img src="images/product-16.jpg" alt="product gallery" class="w-100">
                  </a>
                </div>
              </div>
              <div class="box px-0">
                <div class="card p-0 rounded-0 border-0">
                  <img src="images/product-17.jpg" class="card-img w-100" alt="product gallery">
                  <div class="card-img-overlay d-inline-flex flex-column align-items-center justify-content-center">
                    <a href="https://www.youtube.com/watch?v=6v2L2UGZJAM" data-gtf-mfp="true"
                      data-mfp-options='{"type":"iframe","preloader":false}'
                      class="btn btn-rounded text-secondary btn-light w-90px h-90 my-lg-4 d-flex justify-content-center align-items-center rounded-circle fs-30">
                      <i class="fas fa-play"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="slick-slider slider-nav mx-n1 mx-xl-0"
              data-slick-options='{"slidesToShow": 4,"vertical":true, "autoplay":false,"dots":false,"arrows":false,"asNavFor": ".slider-for","focusOnSelect": true,"responsive":[{"breakpoint": 1200,"settings": {"vertical": false}}]}'>
              <div class="box px-1 px-xl-0 py-4 pt-xl-0">
                <img src="images/product-07.jpg" class="w-100" alt="product gallery">
              </div>
              <div class="box px-1 px-xl-0 py-4 pt-xl-0">
                <img src="images/product-15.jpg" class="w-100" alt="product gallery">
              </div>
              <div class="box px-1 px-xl-0 py-4 pt-xl-0">
                <img src="images/product-16.jpg" class="w-100" alt="product gallery">
              </div>
              <div class="box px-1 px-xl-0 py-4 pt-xl-0">
                <div class="card border-0">
                  <img src="images/product-17.jpg" class="w-100" alt="product gallery">
                  <div class="card-img-overlay d-inline-flex flex-column align-items-center justify-content-center">
                    <div
                      class="text-secondary bg-white d-flex justify-content-center align-items-center rounded-circle fs-8 w-24px h-24">
                      <i class="fas fa-play"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <p class="d-flex align-items-center mb-3">
            <span class="text-line-through">$39.00</span>
            <span class="fs-18 text-secondary font-weight-bold ml-3">$29.00</span>
            <span class="badge badge-primary fs-16 ml-4 font-weight-600 px-3">20%</span>
          </p>
          <h2 class="fs-24 mb-2">Natural Coconut Cleansing Oil</h2>
          {{-- <div class="d-flex align-items-center flex-wrap mb-3 lh-12">
            <p class="mb-0 font-weight-600 text-secondary">4.86</p>
            <ul class="list-inline d-flex mb-0 px-3 rating-result">
              <li class="list-inline-item mr-0">
                <span class="text-primary fs-12 lh-2"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-0">
                <span class="text-primary fs-12 lh-2"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-0">
                <span class="text-primary fs-12 lh-2"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-0">
                <span class="text-primary fs-12 lh-2"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-0">
                <span class="text-primary fs-12 lh-2"><i class="fas fa-star"></i></span>
              </li>
            </ul>
            <a href="#" class="pl-3 border-left border-gray-2 text-body">Read 2947 reviews</a>
          </div> --}}
          <p class="mb-5">Niacinamide and Vitamin C are two anti-aging superstars but not usually formulated
            together because of their different pH levels.</p>
          <form>
            {{-- <div class="form-group shop-swatch mb-4 d-flex align-items-center">
              <span class="font-weight-600 text-secondary mr-4">Size: </span>
              <ul class="list-inline d-flex justify-content-start mb-0">
                <li class="list-inline-item mr-2 selected font-weight-600">
                  <a href="#" class="fs-14 p-2 lh-13 d-block swatches-item rounded text-decoration-none border"
                    data-var="full size">Full size</a>
                </li>
                <li class="list-inline-item font-weight-600">
                  <a href="#" class="fs-14 p-2 lh-13 d-block swatches-item rounded text-decoration-none border"
                    data-var="mini size">Mini size</a>
                </li>
              </ul>
              <select name="swatches" class="form-select swatches-select d-none" aria-label="Default select example">
                <option selected="" value="full size">Full size</option>
                <option value="mini size">Mini size</option>
              </select>
            </div> --}}
            <p class="text-secondary font-weight-600 mb-3">Quantity: </p>
            <div class="custom-control custom-radio mb-2">
              <input type="radio" id="buy1" name="quality" class="custom-control-input" checked="">
              <label class="custom-control-label custom-control-label-secondary" for="buy1">
                Buy 1 - <span class="text-line-through mx-1 fs-13 text-body">$39.00</span>
                <span class="font-weight-bold">$29.00</span>
              </label>
              <span class="badge badge-primary bg-transparent fs-12 border text-primary ml-2 font-weight-bold">Saved
                10%</span>
            </div>
            <div class="custom-control custom-radio mb-2">
              <input type="radio" id="buy2" name="quality" class="custom-control-input">
              <label class="custom-control-label custom-control-label-secondary" for="buy2">
                Buy 2 - <span class="text-line-through mx-1 fs-13 text-body">$78.00</span>
                <span class="font-weight-bold">$56.00</span>
                <span class="badge badge-primary bg-transparent fs-12 border text-primary ml-2 font-weight-bold">Saved
                  15%</span>
              </label>
            </div>
            <div class="custom-control custom-radio mb-2">
              <input type="radio" id="buy3" name="quality" class="custom-control-input">
              <label class="custom-control-label custom-control-label-secondary" for="buy3">
                Buy 3 - <span class="text-line-through mx-1 fs-13 text-body">$117.00</span>
                <span class="font-weight-bold">$72.00</span>
                <span class="badge badge-primary bg-transparent fs-12 border text-primary ml-2 font-weight-bold">Saved
                  20%</span>
              </label>
            </div>
            <div class="custom-control custom-radio mb-6">
              <input type="radio" id="buy4" name="quality" class="custom-control-input">
              <label class="custom-control-label custom-control-label-secondary" for="buy4">
                Buy 4 - <span class="text-line-through mx-1 fs-13 text-body">$195.00</span>
                <span class="font-weight-bold">$99.00</span>
                <span class="badge badge-primary bg-transparent fs-12 border text-primary ml-2 font-weight-bold">Saved
                  30%</span>
              </label>
            </div>
            <button type="submit" class="btn btn-lg fs-18 btn-secondary btn-block mb-4 bg-hover-primary border-0">Add
              To Bag
            </button>
          </form>
          <div class="d-flex align-items-center flex-wrap mt-5">
            {{-- <a href="#" class="text-decoration-none font-weight-bold fs-16 mr-6 d-flex align-items-center">
              <svg class="icon icon-arrows-left-right-light fs-20">
                <use xlink:href="#icon-arrows-left-right-light"></use>
              </svg>
              <span class="ml-2">Compare</span>
            </a> --}}
            <a href="#" class="text-decoration-none font-weight-bold fs-16 d-flex align-items-center">
              <svg class="icon icon-heart-light fs-20">
                <use xlink:href="#icon-heart-light"></use>
              </svg>
              <span class="ml-2">Add to wishlist</span>
            </a>
          </div>
          <ul class="list-unstyled border-top pt-5 mt-5">
            <li class="row mb-2">
              <span class="d-block col-4 col-lg-2 text-secondary font-weight-600 fs-14">Sku:</span>
              <span class="d-block col-8 col-lg-10">SF09281</span>
            </li>
            <li class="row mb-2">
              <span class="d-block col-4 col-lg-2 text-secondary font-weight-600 fs-14">Categories:</span>
              <span class="d-block col-8 col-lg-10">Makeup, Skincare</span>
            </li>
            <li class="row mb-2">
              <span class="d-block col-4 col-lg-2 text-secondary font-weight-600 fs-14">Share:</span>
              <ul class="list-inline d-flex align-items-center mb-0 col-8 col-lg-10">
                <li class="list-inline-item mr-4">
                  <a href="#" class="fs-14 lh-1 text-body hover-secondary">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item mr-4">
                  <a href="#" class="fs-14 lh-1 text-body hover-secondary">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item mr-4">
                  <a href="#" class="fs-14 lh-1 text-body hover-secondary">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="fs-14 lh-1 text-body hover-secondary">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-10 pt-lg-12 pb-10 pb-md-6 pb-lg-11 border-top">
    <div class="container">
      <div class="collapse-tabs">
        <ul class="nav nav-pills mb-5 justify-content-center d-md-flex d-none" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active show fs-lg-34 fs-24 lh-129 font-weight-600 p-0 mr-md-10 mr-4"
              id="pills-detail-tab" data-toggle="pill" href="#pills-detail" role="tab" aria-controls="pills-detail"
              aria-selected="false">Product Detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-lg-34 fs-24 lh-129 font-weight-600 p-0 mr-md-10 mr-4" id="pills-how-to-use-tab"
              data-toggle="pill" href="#pills-how-to-use" role="tab" aria-controls="pills-how-to-use"
              aria-selected="false">How To Use</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link fs-lg-34 fs-24 lh-129 font-weight-600 p-0" id="pills-ingredients-tab"
              data-toggle="pill" href="#pills-ingredients" role="tab" aria-controls="pills-ingredients"
              aria-selected="true">Ingredients</a>
          </li> --}}
        </ul>
        <div class="tab-content bg-white-md shadow-none py-md-5 p-0">
          <div id="collapse-tabs-accordion-01">
            <div class="tab-pane tab-pane-parent fade show active" id="pills-detail" role="tabpanel">
              <div class="card border-0 bg-transparent">
                <div class="card-header border-0 d-block d-md-none bg-transparent px-0 py-1" id="headingDetails-01">
                  <h5 class="mb-0">
                    <button class="btn lh-2 fs-18 py-1 px-6 shadow-none w-100 collapse-parent border text-primary"
                      data-toggle="false" data-target="#detail-collapse-01" aria-expanded="true"
                      aria-controls="detail-collapse-01">
                      Product Detail
                    </button>
                  </h5>
                </div>
                <div id="detail-collapse-01" class="collapsible collapse show" aria-labelledby="headingDetails-01"
                  data-parent="#collapse-tabs-accordion-01" style="">
                  <div id="accordion-style-01" class="accordion accordion-01 border-md-0 border p-md-0 p-6">
                    <div class="row">
                      <div class="col-lg-6 mb-lg-0 mb-7">
                        <div class="hover-shine pr-xl-13">
                          <img src="images/single-product-05.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <p class="font-weight-600 text-secondary mb-2">For Normal, Oily, Combination
                          Skin Types</p>
                        <p class="mb-2">Complexion-perfecting natural foundation enriched with
                          antioxidant-packed superfruits, vitamins, and other skin-nourishing
                          nutrients. Creamy liquid formula sets with a pristine matte finish
                          for soft, velvety smooth skin.</p>
                        <p class="mb-5 mb-lg-7">Say hello to flawless, long-lasting foundation that
                          comes in 7
                          melt-into-your-skin shades. This lightweight, innovative formula
                          creates a smooth, natural matte finish that won’t settle into lines.
                          It’s the perfect fit for your skin. 1 fl. oz.</p>
                        <p class="font-weight-600 text-secondary mb-2">Benefits</p>
                        <ul class="pl-3 mb-5">
                          <li class="mb-1">Buildable medium-to-full coverage</li>
                          <li class="mb-1">Weightless, airy feel—no caking!</li>
                          <li class="mb-1">Long-wearing</li>
                          <li class="mb-1">Evens skin tone</li>
                          <li>Available in 07 shades (all exclusive to Makeaholic!)</li>
                        </ul>
                        <div class="row">
                          <div class="col-6 col-md-3 text-center mb-6">
                            <img src="images/single-product-01.jpg" alt="">
                          </div>
                          <div class="col-6 col-md-3 text-center mb-6">
                            <img src="images/single-product-02.jpg" alt="">
                          </div>
                          <div class="col-6 col-md-3 text-center mb-6">
                            <img src="images/single-product-03.jpg" alt="">
                          </div>
                          <div class="col-6 col-md-3 text-center mb-6">
                            <img src="images/single-product-04.jpg" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane tab-pane-parent fade" id="pills-how-to-use" role="tabpanel">
              <div class="card border-0 bg-transparent">
                <div class="card-header border-0 d-block d-md-none bg-transparent px-0 py-1"
                  id="headinghow-to-use-01">
                  <h5 class="mb-0">
                    <button
                      class="btn lh-2 fs-18 py-1 px-6 shadow-none w-100 collapse-parent border collapsed text-primary"
                      data-toggle="collapse" data-target="#how-to-use-collapse-01" aria-expanded="false"
                      aria-controls="how-to-use-collapse-01">
                      How To Use
                    </button>
                  </h5>
                </div>
                <div id="how-to-use-collapse-01" class="collapsible collapse" aria-labelledby="headinghow-to-use-01"
                  data-parent="#collapse-tabs-accordion-01" style="">
                  <div id="accordion-style-01-2" class="accordion accordion-01 border-md-0 border p-md-0 p-6 ">
                    <p class="font-weight-600 text-secondary mb-2">Follow these safety guidelines when
                      using cosmetics products of any type:</p>
                    <ul class="pl-3 mb-5">
                      <li class="mb-1">Read the label. Follow all directions and heed all warnings.
                      </li>
                      <li class="mb-1">Wash your hands before you use the product.</li>
                      <li class="mb-1">Do not share makeup.</li>
                      <li class="mb-1">Keep the containers clean and tightly closed when not in use,
                        and protect them from temperature extremes.
                      </li>
                      <li class="mb-1">Throw away cosmetics if there are changes in color or smell.
                      </li>
                      <li>Use aerosols or sprays cans in well-ventilated areas. Do not use them while
                        you are smoking or near an open flame. It could start a fire.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            {{-- <div class="tab-pane tab-pane-parent fade" id="pills-ingredients" role="tabpanel">
              <div class="card border-0 bg-transparent">
                <div class="card-header border-0 d-block d-md-none bg-transparent px-0 py-1"
                  id="headingingredients-01">
                  <h5 class="mb-0">
                    <button
                      class="btn lh-2 fs-18 py-1 px-6 shadow-none w-100 collapse-parent border collapsed text-primary"
                      data-toggle="collapse" data-target="#ingredients-collapse-01" aria-expanded="false"
                      aria-controls="ingredients-collapse-01">
                      Ingredients
                    </button>
                  </h5>
                </div>
                <div id="ingredients-collapse-01" class="collapsible collapse" aria-labelledby="headingingredients-01"
                  data-parent="#collapse-tabs-accordion-01" style="">
                  <div id="accordion-style-01-3" class="accordion accordion-01 border-md-0 border p-md-0 p-6">
                    <div class="table-responsive mb-md-7">
                      <table class="table table-border-top-0 mb-0">
                        <tbody>
                          <tr>
                            <td class="pl-0 text-secondary">CAS</td>
                            <td class="text-right pr-0">92128-82-0, 9057-02-7</td>
                          </tr>
                          <tr>
                            <td class="pl-0 text-secondary">INCI</td>
                            <td class="text-right pr-0">Nannochloropsis Oculata (micro algae)
                              extract, pullulan
                            </td>
                          </tr>
                          <tr>
                            <td class="pl-0 text-secondary">Composition</td>
                            <td class="text-right pr-0">Nannochloropsis Oculata (micro algae)
                              extract, pullulan, water, ethanol
                            </td>
                          </tr>
                          <tr>
                            <td class="pl-0 text-secondary">Appearance</td>
                            <td class="text-right pr-0">Yellow to amber, viscous liquid</td>
                          </tr>
                          <tr>
                            <td class="pl-0 text-secondary">Solubility</td>
                            <td class="text-right pr-0">Soluble in water & ethanol</td>
                          </tr>
                          <tr>
                            <td class="pl-0 text-secondary">Storage</td>
                            <td class="text-right pr-0">Store refrigerated (4-8oC / 39-46oF)</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <p>
                      Perfect for Equestrian homes or every horse lover. Designer premium
                      signature aluminum alloy all Arthur Court is compliance with FDA
                      regulations. Aluminum Serveware can be chilled in the freezer or
                      refrigerator and warmed in the oven to 350. Wash by hand with mild dish
                      soap and dry immediately – do not put in the dishwasher. Comes in Gift
                      Box perfect for Equestrian home or Horse lover in your life.
                    </p>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-10 pt-lg-13 pb-9 pb-lg-11 border-top">
    <div class="container">
      <h3 class="text-center fs-34 mb-8">You May Also Like</h3>
      <div class="slick-slider mx-n2"
        data-slick-options='{"slidesToShow": 4,"dots":false,"arrows":false,"responsive":[{"breakpoint": 1368,"settings": {"arrows":false,"dots":true}},{"breakpoint": 1200,"settings": {"slidesToShow":3,"arrows":false,"dots":true}},{"breakpoint": 992,"settings": {"slidesToShow":2,"arrows":false,"dots":true}},{"breakpoint": 768,"settings": {"slidesToShow": 2,"arrows":false,"dots":true}},{"breakpoint": 576,"settings": {"slidesToShow": 1,"arrows":false,"dots":true}}]}'>
        <div class="box">
          <div class="card border-0 product">
            <div class="position-relative">
              <img src="images/product-03.jpg" alt="Facial cleanser">
              <div class="card-img-overlay d-flex p-3">
                <div>
                </div>
                <div class="my-auto w-100 content-change-vertical">
                  <a href="#" data-toggle="tooltip" data-placement="left" title="View products"
                    class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                    <svg class="icon icon-shopping-bag-open-light fs-24">
                      <use xlink:href="#icon-shopping-bag-open-light"></use>
                    </svg>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Quick view"
                    class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                    <span data-toggle="modal" data-target="#quick-view">
                      <svg class="icon icon-eye-light fs-24">
                        <use xlink:href="#icon-eye-light"></use>
                      </svg>
                    </span>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Add to wishlist"
                    class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                    <svg class="icon icon-star-light fs-24">
                      <use xlink:href="#icon-star-light"></use>
                    </svg>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"
                    class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                    <svg class="icon icon-arrows-left-right-light fs-24">
                      <use xlink:href="#icon-arrows-left-right-light"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body pt-4 text-center">
              <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                <span>$29.00</span>
              </p>
              <h2 class="card-title fs-15 font-weight-500 mb-2"><a href="product-page-01.html">Facial cleanser</a>
              </h2>
              <div class="d-flex align-items-center justify-content-center flex-wrap">
                <ul class="list-inline mb-0 lh-1">
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                </ul>
                <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
              </div>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="card border-0 product">
            <div class="position-relative">
              <img src="images/product-04.jpg" alt="Bio-shroom Rejuvenating Serum">
              <div class="card-img-overlay d-flex p-3">
                <div>
                </div>
                <div class="my-auto w-100 content-change-vertical">
                  <a href="#" data-toggle="tooltip" data-placement="left" title="View products"
                    class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                    <svg class="icon icon-shopping-bag-open-light fs-24">
                      <use xlink:href="#icon-shopping-bag-open-light"></use>
                    </svg>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Quick view"
                    class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                    <span data-toggle="modal" data-target="#quick-view">
                      <svg class="icon icon-eye-light fs-24">
                        <use xlink:href="#icon-eye-light"></use>
                      </svg>
                    </span>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Add to wishlist"
                    class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                    <svg class="icon icon-star-light fs-24">
                      <use xlink:href="#icon-star-light"></use>
                    </svg>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"
                    class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                    <svg class="icon icon-arrows-left-right-light fs-24">
                      <use xlink:href="#icon-arrows-left-right-light"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body pt-4 text-center">
              <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                <span>$29.00</span>
              </p>
              <h2 class="card-title fs-15 font-weight-500 mb-2"><a href="product-page-01.html">Bio-shroom Rejuvenating
                  Serum</a></h2>
              <div class="d-flex align-items-center justify-content-center flex-wrap">
                <ul class="list-inline mb-0 lh-1">
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                </ul>
                <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
              </div>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="card border-0 product">
            <div class="position-relative">
              <img src="images/product-09.jpg" alt="Coffee Bean Caffeine Eye Cream">
              <div class="card-img-overlay d-flex p-3">
                <div>
                  <span class="badge badge-primary">-20%</span>
                </div>
                <div class="my-auto w-100 content-change-vertical">
                  <a href="#" data-toggle="tooltip" data-placement="left" title="View products"
                    class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                    <svg class="icon icon-shopping-bag-open-light fs-24">
                      <use xlink:href="#icon-shopping-bag-open-light"></use>
                    </svg>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Quick view"
                    class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                    <span data-toggle="modal" data-target="#quick-view">
                      <svg class="icon icon-eye-light fs-24">
                        <use xlink:href="#icon-eye-light"></use>
                      </svg>
                    </span>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Add to wishlist"
                    class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                    <svg class="icon icon-star-light fs-24">
                      <use xlink:href="#icon-star-light"></use>
                    </svg>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"
                    class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                    <svg class="icon icon-arrows-left-right-light fs-24">
                      <use xlink:href="#icon-arrows-left-right-light"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body pt-4 text-center">
              <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                <span class="fs-13 font-weight-500 text-decoration-through text-body pr-1">$39.00</span>
                <span>$29.00</span>
              </p>
              <h2 class="card-title fs-15 font-weight-500 mb-2"><a href="product-page-01.html">Coffee Bean Caffeine
                  Eye Cream</a></h2>
              <div class="d-flex align-items-center justify-content-center flex-wrap">
                <ul class="list-inline mb-0 lh-1">
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                </ul>
                <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
              </div>
            </div>
          </div>
        </div>
        <div class="box">
          <div class="card border-0 product">
            <div class="position-relative">
              <img src="images/product-08.jpg" alt="Coffee Bean Caffeine Eye Cream">
              <div class="card-img-overlay d-flex p-3">
                <div>
                  <span class="badge badge-warning">New</span>
                </div>
                <div class="my-auto w-100 content-change-vertical">
                  <a href="#" data-toggle="tooltip" data-placement="left" title="View products"
                    class="add-to-cart ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                    <svg class="icon icon-shopping-bag-open-light fs-24">
                      <use xlink:href="#icon-shopping-bag-open-light"></use>
                    </svg>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Quick view"
                    class="preview ml-auto d-md-flex align-items-center justify-content-center cursor-pointer text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2 d-none">
                    <span data-toggle="modal" data-target="#quick-view">
                      <svg class="icon icon-eye-light fs-24">
                        <use xlink:href="#icon-eye-light"></use>
                      </svg>
                    </span>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Add to wishlist"
                    class="add-to-wishlist ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle mb-2">
                    <svg class="icon icon-star-light fs-24">
                      <use xlink:href="#icon-star-light"></use>
                    </svg>
                  </a>
                  <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"
                    class="add-to-compare ml-auto d-flex align-items-center justify-content-center text-secondary bg-white hover-white bg-hover-secondary w-48px h-48px rounded-circle">
                    <svg class="icon icon-arrows-left-right-light fs-24">
                      <use xlink:href="#icon-arrows-left-right-light"></use>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body pt-4 text-center">
              <p class="card-text font-weight-bold fs-16 mb-1 text-secondary">
                <span>$29.00</span>
              </p>
              <h2 class="card-title fs-15 font-weight-500 mb-2"><a href="product-page-01.html">Coffee Bean Caffeine
                  Eye Cream</a></h2>
              <div class="d-flex align-items-center justify-content-center flex-wrap">
                <ul class="list-inline mb-0 lh-1">
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                  <li class="list-inline-item fs-12 text-primary mr-0"><i class="fas fa-star"></i>
                  </li>
                </ul>
                <span class="card-text fs-14 font-weight-400 pl-2 lh-1">2947 reviews</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</main>
@endsection