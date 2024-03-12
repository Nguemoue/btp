@extends("templates.default")

@section("main-content")
    <section id="main-container" class="no-padding ">
        <div class="container">
            <iframe height="100vh" style="height: 100vh;width: 100vw" src="{{url('/getPdfDetail')}}" class="border w-100" frameborder="0"></iframe>
        </div>
        <!-- Conatiner end -->
    </section>
    <!-- Main container end -->
@endsection