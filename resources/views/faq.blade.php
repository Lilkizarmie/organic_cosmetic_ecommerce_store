@extends('layouts.main')

@section('main-container')
<main id="content">
  <section class="py-2 bg-gray-2">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
          <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="index.html">Home</a>
          </li>
          <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Frequently Asked
            Questions</li>
        </ol>
      </nav>
    </div>
  </section>
  <section class="pt-9">
    <div class="container">
      <div class="text-center mb-8 mb-lg-10">
        <h2 class="mb-lg-9 mb-7">Frequently Asked Questions</h2>
        <form class="mx-auto" style="max-width: 770px">
          <div class="input-group">
            <div class="input-group-prepend position-absolute z-index-10">
              <button class="btn border-0 bg-transparent text-secondary fs-20 px-4 lh-14" type="submit"
                id="button-addon1"><i class="far fa-search"></i></button>
            </div>
            <input type="text" class="form-control border-0 pl-8 rounded" placeholder="What are you looking for?"
              aria-describedby="button-addon1">
          </div>
        </form>
      </div>
      <div class="hover-shine hover-zoom-in">
        <img src="images/banner-35.jpg" alt="Frequently Asked Questions">
      </div>
    </div>
  </section>
  <section class="pt-11 pt-lg-13">
    <div class="container">
      <div class="row">
        <div class="col-md-3 pr-md-6">
          <h2 class="fs-34 lh-129">
            Orders<br>
            & Shipping
          </h2>
        </div>
        <div class="col-md-9 mt-7 mt-md-0">
          <div id="accordion-style-01" class="accordion">
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="headingOne">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none"
                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    <span>How did my package ship?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                data-parent="#accordion-style-01">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="headingTwo">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none collapsed"
                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <span>Why does my USPS tracking number state 1-Day, 2-Day, 3-Day Delivery?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-style-01">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="headingThree">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none collapsed"
                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                    aria-controls="collapseThree">
                    <span>How long will my package take to arrive?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                data-parent="#accordion-style-01">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="headingFour">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none collapsed"
                    data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
                    aria-controls="collapseFour">
                    <span>What are business days?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion-style-01">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="headingFive">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none collapsed"
                    data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
                    aria-controls="collapseFive">
                    <span>How do I know my package has shipped?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion-style-01">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="headingSix">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none collapsed"
                    data-toggle="collapse" data-target="#collapseSix" aria-expanded="true"
                    aria-controls="collapseSix">
                    <span>Why are certain products unavailable to ship to Internationally?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion-style-01">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="headingSeven">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none collapsed"
                    data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true"
                    aria-controls="collapseSeven">
                    <span>Why is my tracking number not updating?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                data-parent="#accordion-style-01">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-6 pt-lg-9">
        <div class="col-md-3 pr-md-6">
          <h2 class="fs-34 lh-129">
            Returns &<br>
            Exchanges
          </h2>
        </div>
        <div class="col-md-9 mt-7 mt-md-0">
          <div id="accordion-style-02" class="accordion">
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="heading8">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none collapsed"
                    data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                    <span>How do I know my package has shipped?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion-style-02">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="heading9">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none collapsed"
                    data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                    <span>Why are certain products unavailable to ship to Internationally?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion-style-02">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="heading10">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none collapsed"
                    data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                    <span>Why is my tracking number not updating?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion-style-02">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-6 pb-7 py-lg-9">
        <div class="col-md-3 pr-md-6">
          <h2 class="fs-34 lh-129">
            Discounts
          </h2>
        </div>
        <div class="col-md-9 mt-7 mt-md-0">
          <div id="accordion-style-03" class="accordion">
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="heading11">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none collapsed"
                    data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
                    <span>How do I know my package has shipped?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion-style-03">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="heading12">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none collapsed"
                    data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                    <span>Why are certain products unavailable to ship to Internationally?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion-style-03">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
            <div class="card border-0 mb-7">
              <div class="card-header border-0 p-0 bg-transparent bg-transparent" id="heading13">
                <h5 class="mb-0 fs-18 w-100">
                  <a href="#" class="d-flex align-items-center border-bottom pb-2 text-decoration-none collapsed"
                    data-toggle="collapse" data-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
                    <span>Why is my tracking number not updating?</span>
                    <span class="icon d-inline-block ml-auto"></span>
                  </a>
                </h5>
              </div>
              <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordion-style-03">
                <div class="card-body pt-4 pb-1 px-0">
                  <p>Complexion-perfecting natural foundation enriched with antioxidant-packed superfruits,
                    vitamins, and
                    other skin-nourishing nutrients. Creamy liquid formula sets with a pristine matte finish for
                    soft,
                    velvety smooth skin.</p>
                  <p class="mb-0">
                    Say hello to flawless, long-lasting foundation that comes in 7 melt-into-your-skin shades.
                    This
                    lightweight, innovative formula creates a smooth, natural matte finish that won’t settle
                    into lines.
                    It’s the perfect fit for your skin. 1 fl. oz.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection