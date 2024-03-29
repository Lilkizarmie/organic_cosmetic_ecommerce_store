@extends('layouts.main')

@section('main-container')
<main id="content">
  <section class="py-2 bg-gray-2">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-site py-0 d-flex justify-content-center">
          <li class="breadcrumb-item"><a class="text-decoration-none text-body" href="index.html">Home</a>
          </li>
          <li class="breadcrumb-item active pl-0 d-flex align-items-center" aria-current="page">Contact Us</li>
        </ol>
      </nav>
    </div>
  </section>
  <section class="pt-9">
    <div class="container">
      <h2 class="text-center mb-6" data-animate="fadeInUp">Keep In Touch with Us</h2>
      <p class="text-center mb-9 mx-auto fs-18" style="max-width: 590px" data-animate="fadeInUp">We’re talking about
        clean beauty gift sets, of course – and we’ve got a bouquet of beauties for yourself or someone you love.</p>
      <div class="row">
        <div class="col-md-4 mb-md-0 mb-8" data-animate="fadeInUp">
          <div class="media">
            <div class="icon pr-lg-6 pr-5">
              <svg class="icon icon-box-07 fs-40 text-primary">
                <use xlink:href="#icon-box-07"></use>
              </svg>
            </div>
            <div class="media-body">
              <h3 class="fs-20 mb-3">Address</h3>
              <p class="fs-16 mb-2">3245 Abbot Kinney BLVD – <br>
                PH Venice, CA 124</p>
              <p class="fs-16 mb-5">76 East Houston Street<br>
                New York City</p>
              <a href="#" class="btn btn-link p-0 border-bottom border-0 border-secondary rounded-0">Get Direction</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-md-0 mb-8" data-animate="fadeInUp">
          <div class="media">
            <div class="icon pr-lg-6 pr-5">
              <svg class="icon icon-box-05 fs-40 text-primary">
                <use xlink:href="#icon-box-05"></use>
              </svg>
            </div>
            <div class="media-body">
              <h3 class="fs-20 mb-3">Contact</h3>
              <p class="mb-1 fs-16">Mobile:<span class="text-secondary"> 068 26589 996</span></p>
              <p class="mb-1 fs-16">Hotline:<span class="text-secondary"> 1900 26886</span></p>
              <p class="mb-0 fs-16">E-mail: hello@grace.com</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-md-0 mb-8" data-animate="fadeInUp">
          <div class="media">
            <div class="icon pr-lg-6 pr-5">
              <svg class="icon icon-box-06 fs-40 text-primary">
                <use xlink:href="#icon-box-06"></use>
              </svg>
            </div>
            <div class="media-body">
              <h3 class="fs-20 mb-3">Hour of operation</h3>
              <dl class="d-flex mb-0">
                <dt class="pr-1 fs-16 text-secondary font-weight-500" style="width: 110px">Mon – Fri:</dt>
                <dd class="mb-0"> 08:30 – 20:00</dd>
              </dl>
              <dl class="d-flex mb-0">
                <dt class="pr-1 fs-16 text-secondary font-weight-500" style="width: 110px">Sat & Sun:</dt>
                <dd class="mb-0"> 09:30 – 21:30</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="pt-md-11 pt-6 pt-lg-13">
    <div class="container">
      <div id="map" class="mapbox-gl map-point-animate" data-animate="fadeInUp" style="height: 530px"
        data-mapbox-access-token="pk.eyJ1IjoiZzVvbmxpbmUiLCJhIjoiY2t1bWY4NzBiMWNycDMzbzZwMnI5ZThpaiJ9.ZifefVtp4anluFUbAMxAXg"
        data-mapbox-options='{"center":[-106.53671888774004, 35.12362056187368],"setLngLat":[-106.53671888774004, 35.12362056187368],"zoom":5,"style":"mapbox://styles/mapbox/light-v10"}'
        data-mapbox-marker='[{"position":[-102.53671888774004, 38.12362056187368],"className":"marker","backgroundImage":"images/marker.png","backgroundRepeat":"no-repeat","width":"70px","height":"70px"}
           ,{"position":[-109.03671888774004, 33.02362056187368],"className":"marker","backgroundImage":"images/marker.png","backgroundRepeat":"no-repeat","width":"70px","height":"70px"}]'>
      </div>
    </div>
  </section>
  <section class="pt-lg-12 pb-lg-13 pt-10 pb-11 text-center mx-auto" style="max-width: 750px">
    <div class="container">
      <h2 class="fs-34 lh-129 mb-7" data-animate="fadeInUp">Sent A Message</h2>
      <form data-animate="fadeInUp">
        <div class="row mb-6">
          <div class="col-sm-6 mb-6 mb-sm-0">
            <input type="text" class="form-control border-0" placeholder="Name" required="">
          </div>
          <div class="col-sm-6">
            <input type="email" class="form-control border-0" placeholder="Email" required="">
          </div>
        </div>
        <div class="form-group mb-4">
          <textarea class="form-control border-0" rows="6" placeholder="Messenger"></textarea>
        </div>
        <div class="custom-control custom-checkbox mb-6 text-left">
          <input type="checkbox" class="custom-control-input" id="customCheck1">
          <label class="custom-control-label custom-control-label-02 text-body" for="customCheck1"> Save my name,
            email in this browse for the next time I comment</label>
        </div>
        <button type="submit" class="btn btn-secondary bg-hover-primary border-hover-primary px-7">Submit</button>
      </form>
    </div>
  </section>
</main>
@endsection