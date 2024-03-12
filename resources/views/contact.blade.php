@extends("templates.default")

@section("main-content")
  <!--/ Header end -->
  <x-app.banner-area :bg-image="asset('images/banner/banner1.jpg')">
    <div class="row">
      <div class="col-lg-12">
        <div class="banner-heading">
          <h1 class="banner-title">Contact</h1>
          <x-utils.breadcumb>
            <x-utils.breadcumb-item title="Home"/>
            <x-utils.breadcumb-item title="Company"/>
            <x-utils.breadcumb-item title="Contact" active link="luc.php"/>
          </x-utils.breadcumb>
        </div>
      </div>
    </div>

  </x-app.banner-area>
  <section id="main-container" class="main-container">
    <div class="container">

      <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Reaching our Office</h2>
          <h3 class="section-sub-title">Find Our Location</h3>
        </div>
      </div>
      <!--/ Title row end -->
      <div>
        <iframe src="{{url('/getpdfDetail')}}" class="border p-2 bg-danger" frameborder="0"></iframe>
      </div>

    </div><!-- Conatiner end -->
  </section><!-- Main container end -->
@endsection