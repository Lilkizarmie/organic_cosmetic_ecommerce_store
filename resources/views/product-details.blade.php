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
              Grid Layout</a>
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
          <div class="d-flex align-items-center flex-wrap mb-3 lh-12">
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
          </div>
          <p class="mb-5">Niacinamide and Vitamin C are two anti-aging superstars but not usually formulated
            together because of their different pH levels.</p>
          <form>
            <div class="form-group shop-swatch mb-4 d-flex align-items-center">
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
            </div>
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
            <a href="#" class="text-decoration-none font-weight-bold fs-16 mr-6 d-flex align-items-center">
              <svg class="icon icon-arrows-left-right-light fs-20">
                <use xlink:href="#icon-arrows-left-right-light"></use>
              </svg>
              <span class="ml-2">Compare</span>
            </a>
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
          <li class="nav-item">
            <a class="nav-link fs-lg-34 fs-24 lh-129 font-weight-600 p-0" id="pills-ingredients-tab"
              data-toggle="pill" href="#pills-ingredients" role="tab" aria-controls="pills-ingredients"
              aria-selected="true">Ingredients</a>
          </li>
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
            <div class="tab-pane tab-pane-parent fade" id="pills-ingredients" role="tabpanel">
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
            </div>
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
  <section class="pt-10 pb-11 py-lg-13 border-top">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h3 class="text-center fs-34 mb-8">Customer Reviews</h3>
        </div>
        <div class="col-md-4">
          <div class="card border-0 mb-3">
            <div class="d-flex align-items-center">
              <h4 class="fs-48 mr-6 mb-0">4.86</h4>
              <div class="card-body p-0">
                <ul class="list-inline d-flex rating-result mb-0">
                  <li class="list-inline-item mr-1">
                    <span class="text-primary lh-2"><i class="fas fa-star"></i></span>
                  </li>
                  <li class="list-inline-item mr-1">
                    <span class="text-primary lh-2"><i class="fas fa-star"></i></span>
                  </li>
                  <li class="list-inline-item mr-1">
                    <span class="text-primary lh-2"><i class="fas fa-star"></i></span>
                  </li>
                  <li class="list-inline-item mr-1">
                    <span class="text-primary lh-2"><i class="fas fa-star"></i></span>
                  </li>
                  <li class="list-inline-item mr-1">
                    <span class="text-primary lh-2"><i class="fas fa-star"></i></span>
                  </li>
                </ul>
                <p class="mb-0">2947 Reviews, 18 Q&As</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8 text-md-right mb-4 mb-md-0">
          <a href="#" class=" btn btn-outline-secondary border border-2x border-hover-secondary write-review fs-16">
            <svg class="icon icon-Pencil">
              <use xlink:href="#icon-Pencil"></use>
            </svg>
            Wire A Review
          </a>
        </div>
        <div class="col-12 overflow-hidden">
          <div class="card border-0 mt-2 mb-7 form-review hide">
            <div class="card-body p-0">
              <form>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group mb-4">
                      <label class="text-secondary font-weight-600" for="reviewName">Name</label>
                      <input id="reviewName" class="form-control border-0" type="text" name="name">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group mb-4">
                      <label class="text-secondary font-weight-600" for="reviewEmail">Email</label>
                      <input id="reviewEmail" type="email" name="email" class="form-control border-0">
                    </div>
                  </div>
                </div>
                <div>
                  <p class="text-secondary font-weight-600 mb-0 mr-2 mb-2">Your Rating*</p>
                  <div class="form-group mb-3 d-flex justify-content-start">
                    <div class="rate-input">
                      <input type="radio" id="star5" name="rate" value="5">
                      <label for="star5" title="text" class="mb-0 mr-1 lh-1">
                        <i class="fal fa-star"></i>
                      </label>
                      <input type="radio" id="star4" name="rate" value="4">
                      <label for="star4" title="text" class="mb-0 mr-1 lh-1">
                        <i class="fal fa-star"></i>
                      </label>
                      <input type="radio" id="star3" name="rate" value="3">
                      <label for="star3" title="text" class="mb-0 mr-1 lh-1">
                        <i class="fal fa-star"></i>
                      </label>
                      <input type="radio" id="star2" name="rate" value="2">
                      <label for="star2" title="text" class="mb-0 mr-1 lh-1">
                        <i class="fal fa-star"></i>
                      </label>
                      <input type="radio" id="star1" name="rate" value="1">
                      <label for="star1" title="text" class="mb-0 mr-1 lh-1">
                        <i class="fal fa-star"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-4">
                  <label class="text-secondary font-weight-600" for="reviewTitle">Title of Review:</label>
                  <input id="reviewTitle" type="text" name="title" class="form-control border-0">
                </div>
                <div class="form-group mb-6">
                  <label class="text-secondary font-weight-600" for="reviewMessage">How was your overall
                    experience?</label>
                  <textarea id="reviewMessage" class="form-control border-0" name="message" rows="5"></textarea>
                </div>
                <div class="justify-content-end d-flex">
                  <div class="mr-4">
                    <div class="input-group align-items-center">
                      <span class="name-file mr-4"></span>
                      <label
                        class="btn btn-outline-secondary btn-custom-input-file bg-hover-secondary bg-transparent border border-2x border-hover-secondary fs-16 font-weight-600 mb-0"
                        for="reviewrAddPhoto">
                        <svg class="icon icon-Camera fs-20">
                          <use xlink:href="#icon-Camera"></use>
                        </svg>
                        Add Photos
                      </label>
                      <input type="file" name="img" class="form-control custom-input-file d-none"
                        id="reviewrAddPhoto">
                    </div>
                  </div>
                  <button type="submit" class="btn fs-16 btn-secondary">Submit Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-5 pt-lg-7">
        <div class="col-12">
          <h3 class="fs-20 mb-2">Filter Review</h3>
          <form id="accordion-5">
            <ul class="list-inline mx-n1 mb-5" style="max-width: 610px">
              <li class="list-inline-item m-1">
                <a href="#"
                  class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                  Foundation
                </a>
              </li>
              <li class="list-inline-item m-1">
                <a href="#"
                  class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                  Coverage
                </a>
              </li>
              <li class="list-inline-item m-1">
                <a href="#"
                  class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                  Skin
                </a>
              </li>
              <li class="list-inline-item m-1">
                <a href="#"
                  class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                  Color
                </a>
              </li>
              <li class="list-inline-item m-1">
                <a href="#"
                  class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                  Shade
                </a>
              </li>
              <li class="list-inline-item m-1">
                <a href="#"
                  class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                  Make up
                </a>
              </li>
              <li class="list-inline-item m-1">
                <a href="#"
                  class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                  Face
                </a>
              </li>
              <li class="list-inline-item m-1">
                <a href="#"
                  class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                  Ingredients
                </a>
              </li>
              <li class="list-inline-item m-1">
                <a href="#"
                  class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                  Moisturizer
                </a>
              </li>
              <li class="list-inline-item m-1">
                <a href="#"
                  class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                  Pure
                </a>
              </li>
              <li class="list-inline-item m-1">
                <a href="#"
                  class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                  Nature
                </a>
              </li>
              <li class="list-inline-item m-1">
                <a href="#advanced-search-filters-5"
                  class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500"
                  data-toggle="collapse" data-target="#advanced-search-filters-5" aria-expanded="true"
                  aria-controls="advanced-search-filters-5">
                  ...
                </a>
              </li>
              <li id="advanced-search-filters-5" class="collapse m-1 list-inline-item" data-parent="#accordion-5">
                <ul class="list-inline mx-n1">
                  <li class="list-inline-item m-1">
                    <a href="#"
                      class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                      Good Value
                    </a>
                  </li>
                  <li class="list-inline-item m-1">
                    <a href="#"
                      class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                      Lightweight
                    </a>
                  </li>
                  <li class="list-inline-item m-1">
                    <a href="#"
                      class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                      Smells Great
                    </a>
                  </li>
                  <li class="list-inline-item m-1">
                    <a href="#"
                      class="btn text-body hover-secondary border border-hover-secondary lh-175 py-1 px-3 font-weight-500">
                      Easy To Use
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="form-row mx-n2">
              <div class="col-auto w-100 px-2" style="max-width: 476px">
                <div class="form-group">
                  <div class="input-group-prepend position-absolute z-index-10">
                    <button class="btn border-0 bg-transparent text-secondary fs-20 px-4 lh-14" type="submit"><i
                        class="far fa-search"></i></button>
                  </div>
                  <input type="text" class="form-control border-0 pl-8 rounded" placeholder="Search reviews">
                </div>
              </div>
              <div class="col-auto px-2">
                <div class="form-group w-218">
                  <label for="skin-goal" class="sr-only">Skin goal</label>
                  <select class="form-control selectpicker" title="Skin goal"
                    data-style="bg-input font-weight-500 text-secondary px-3" id="skin-goal" name="skin-goal">
                    <option>Skin goal</option>
                    <option>Looking Pores</option>
                    <option>Clear Skin</option>
                    <option>Chicago</option>
                    <option>Dewy-Looking Skin</option>
                    <option>Radiant</option>
                  </select>
                </div>
              </div>
              <div class="col-auto px-2">
                <div class="form-group w-218">
                  <label for="image-video" class="sr-only">Image & Video</label>
                  <select class="form-control selectpicker" title="Image & Video"
                    data-style="bg-input font-weight-500 text-secondary px-3" id="image-video" name="image-video">
                    <option>Image & Video</option>
                    <option>Newest</option>
                    <option>Oldest</option>
                  </select>
                </div>
              </div>
              <div class="col-auto px-2">
                <div class="form-group w-218">
                  <label for="sort-by" class="sr-only">Sort by</label>
                  <select class="form-control selectpicker" title="Sort by"
                    data-style="bg-input font-weight-500 text-secondary px-3" id="sort-by" name="sort-by">
                    <option>Sort by</option>
                    <option>Newest</option>
                    <option>Oldest</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="mt-6 mt-lg-8">
        <h3 class="fs-20 mb-6">2947 Reviews</h3>
        <div class="border-bottom pb-4">
          <div class="d-flex align-items-center mb-3">
            <ul class="list-inline d-flex rating-result mb-0 fs-13">
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
            </ul>
            <span class="divider fs-3 mx-2"><i class="fas fa-circle"></i></span>
            <span class="fs-14"> 3 days ago</span>
          </div>
          <div class="media mb-2">
            <img src="images/single-product-06.png" class="mr-3" alt="Avatar">
            <div class="media-body">
              <h5 class="mt-0 fs-14 text-uppercase">Jennifer C.</h5>
              <p>/ Orlando, FL</p>
            </div>
          </div>
          <p class="font-weight-600 text-secondary mb-2">Favorite Foundation</p>
          <p class="mb-6">I order the samples so as not to make mistakes when choosing my color Is a good
            product as a light
            shade but the sample doesn’t contain enough product to cover the skin and decide clearly, around
            my
            eyes I used the “peach bisque”.I used with primer all mu face and finished texture is good. At
            the
            end for my latin tan skin a choose “golden peach” But is out of stock the primer I think is a
            good
            match.</p>
          <div class="d-flex justify-content-end align-items-center">
            <a href="#" class="fs-14 mb-0 text-body">Was This Review Helpful?</a>
            <p class="mb-0 ml-4 text-secondary">
              <svg class="icon icon-like align-baseline">
                <use xlink:href="#icon-like"></use>
              </svg>
              10
            </p>
            <p class="mb-0 ml-3 text-secondary">
              <svg class="icon icon-unlike align-baseline">
                <use xlink:href="#icon-unlike"></use>
              </svg>
              0
            </p>
          </div>
        </div>
        <div class="border-bottom pt-6 pb-4">
          <div class="d-flex align-items-center mb-3">
            <ul class="list-inline d-flex rating-result mb-0 fs-13">
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
            </ul>
            <span class="divider fs-3 mx-2"><i class="fas fa-circle"></i></span>
            <span class="fs-14"> 3 days ago</span>
          </div>
          <div class="media mb-2">
            <img src="images/single-product-07.png" class="mr-3" alt="Avatar">
            <div class="media-body">
              <h5 class="mt-0 fs-14 text-uppercase">Jennifer C.</h5>
              <p>/ Georgia</p>
            </div>
          </div>
          <p class="font-weight-600 text-secondary mb-2">Good as light coverage</p>
          <p class="mb-4">The foundation feels light on my face, and the color matches great. Also the
            customer service is phenomenal. I would purchase again.</p>
          <div class="d-flex mb-4">
            <img src="images/single-product-11.jpg" alt="review">
            <img class="ml-2" src="images/single-product-10.jpg" alt="review">
          </div>
          <div class="d-flex justify-content-end align-items-center">
            <a href="#" class="fs-14 mb-0 text-body">Was This Review Helpful?</a>
            <p class="mb-0 ml-4 text-secondary">
              <svg class="icon icon-like align-baseline">
                <use xlink:href="#icon-like"></use>
              </svg>
              10
            </p>
            <p class="mb-0 ml-3 text-secondary">
              <svg class="icon icon-unlike align-baseline">
                <use xlink:href="#icon-unlike"></use>
              </svg>
              0
            </p>
          </div>
        </div>
        <div class="border-bottom pt-6 pb-4">
          <div class="d-flex align-items-center mb-3">
            <ul class="list-inline d-flex rating-result mb-0 fs-13">
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
            </ul>
            <span class="divider fs-3 mx-2"><i class="fas fa-circle"></i></span>
            <span class="fs-14"> 3 days ago</span>
          </div>
          <div class="media mb-2">
            <img src="images/single-product-09.png" class="mr-3" alt="Avatar">
            <div class="media-body">
              <h5 class="mt-0 fs-14 text-uppercase">Jennifer C.</h5>
              <p>/ Georgia</p>
            </div>
          </div>
          <p class="font-weight-600 text-secondary mb-2">Favorite Foundation</p>
          <p class="mb-6">I order the samples so as not to make mistakes when choosing my color Is a good
            product
            as a light
            shade but the sample doesn’t contain enough product to cover the skin and decide clearly, around
            my
            eyes I used the “peach bisque”.I used with primer all mu face and finished texture is good. At
            the
            end for my latin tan skin a choose “golden peach” But is out of stock the primer I think is a
            good
            match.</p>
          <div class="d-flex justify-content-end align-items-center">
            <a href="#" class="fs-14 mb-0 text-body">Was This Review Helpful?</a>
            <p class="mb-0 ml-4 text-secondary">
              <svg class="icon icon-like align-baseline">
                <use xlink:href="#icon-like"></use>
              </svg>
              10
            </p>
            <p class="mb-0 ml-3 text-secondary">
              <svg class="icon icon-unlike align-baseline">
                <use xlink:href="#icon-unlike"></use>
              </svg>
              0
            </p>
          </div>
        </div>
        <div class="border-bottom pt-6 pb-4">
          <div class="d-flex align-items-center mb-3">
            <ul class="list-inline d-flex rating-result mb-0 fs-13">
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
            </ul>
            <span class="divider fs-3 mx-2"><i class="fas fa-circle"></i></span>
            <span class="fs-14"> 3 days ago</span>
          </div>
          <div class="media mb-2">
            <img src="images/single-product-08.png" class="mr-3" alt="Avatar">
            <div class="media-body">
              <h5 class="mt-0 fs-14 text-uppercase">Jennifer C.</h5>
              <p>/ Georgia</p>
            </div>
          </div>
          <p class="font-weight-600 text-secondary mb-2">Favorite Foundation</p>
          <p class="mb-6">I order the samples so as not to make mistakes when choosing my color Is a good
            product
            as a light
            shade but the sample doesn’t contain enough product to cover the skin and decide clearly, around
            my
            eyes I used the “peach bisque”.I used with primer all mu face and finished texture is good. At
            the
            end for my latin tan skin a choose “golden peach” But is out of stock the primer I think is a
            good
            match.</p>
          <div class="d-flex justify-content-end align-items-center">
            <a href="#" class="fs-14 mb-0 text-body">Was This Review Helpful?</a>
            <p class="mb-0 ml-4 text-secondary">
              <svg class="icon icon-like align-baseline">
                <use xlink:href="#icon-like"></use>
              </svg>
              10
            </p>
            <p class="mb-0 ml-3 text-secondary">
              <svg class="icon icon-unlike align-baseline">
                <use xlink:href="#icon-unlike"></use>
              </svg>
              0
            </p>
          </div>
        </div>
        <div class="border-bottom pt-6 pb-4">
          <div class="d-flex align-items-center mb-3">
            <ul class="list-inline d-flex rating-result mb-0 fs-13">
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
              <li class="list-inline-item mr-1 lh-1">
                <span class="text-secondary"><i class="fas fa-star"></i></span>
              </li>
            </ul>
            <span class="divider fs-3 mx-2"><i class="fas fa-circle"></i></span>
            <span class="fs-14"> 3 days ago</span>
          </div>
          <div class="media mb-2">
            <img src="images/single-product-09.png" class="mr-3" alt="Avatar">
            <div class="media-body">
              <h5 class="mt-0 fs-14 text-uppercase">Lucille D</h5>
              <p>/ Georgia</p>
            </div>
          </div>
          <p class="font-weight-600 text-secondary mb-2">Good as light coverage</p>
          <p class="mb-4">The foundation feels light on my face, and the color matches great. Also the
            customer service is phenomenal. I would purchase again.</p>
          <div class="d-flex mb-4">
            <img src="images/single-product-11.jpg" alt="review">
            <img class="ml-2" src="images/single-product-10.jpg" alt="review">
          </div>
          <div class="d-flex justify-content-end align-items-center">
            <a href="#" class="fs-14 mb-0 text-body">Was This Review Helpful?</a>
            <p class="mb-0 ml-4 text-secondary">
              <svg class="icon icon-like align-baseline">
                <use xlink:href="#icon-like"></use>
              </svg>
              10
            </p>
            <p class="mb-0 ml-3 text-secondary">
              <svg class="icon icon-unlike align-baseline">
                <use xlink:href="#icon-unlike"></use>
              </svg>
              0
            </p>
          </div>
        </div>
        <nav class="pt-8">
          <ul class="pagination justify-content-center align-items-center mb-0 fs-16 font-weight-600">
            <li class="page-item fs-18 d-none d-sm-block">
              <a class="page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex"
                href="#" tabindex="-1"><i class="far fa-angle-double-left"></i></a>
            </li>
            <li class="page-item">
              <a class="page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex"
                href="#">1</a>
            </li>
            <li class="page-item active" aria-current="page">
              <a class="page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex"
                href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex"
                href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex"
                href="#">...</a>
            </li>
            <li class="page-item">
              <a class="page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex"
                href="#">6</a>
            </li>
            <li class="page-item fs-18 d-none d-sm-block">
              <a class="page-link rounded-circle w-40px h-40 p-0 justify-content-center align-items-center d-flex"
                href="#"><i class="far fa-angle-double-right"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </section>
</main>
@endsection