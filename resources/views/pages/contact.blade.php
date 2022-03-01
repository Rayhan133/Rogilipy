{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<section class="contactus" style="background: url('img/contact_bg_image.jpg');">
    <!-- breadcrumb-area start -->
    <div class="container">
        <div class="w-50 text-center m-auto">
            <h1 style="font-weight: 700;">Contact Information</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent pl-0 px-0" style="margin-left: 37%;">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-success">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb-area end -->
</section>
<section class="mt-5 container">
    <div class="text-center m-auto team">
        <div class="row mt-3 m-auto text-center">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card pb-4">
                    <img class="card-img-top" src="{{asset('images/profile.jpg')}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> Mst.Kanis Fatema</h5>
                        <p class="card-text">
                            <i class="fas fa-envelope" aria-hidden="true"></i> Kanis15-11695@diu.edu.bd
                        </p>
                        <p class="card-text">
                            <i class="fas fa-id-badge" aria-hidden="true"></i> Id: 182-15-11695
                        </p>
                        <p class="card-text"><i class="fas fa-phone" aria-hidden="true"></i> +8801701711940</p>
                        <p class="card-text gmailClass">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i> Sirajganj, Bangladesh
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>

    </div>


</section>
@endsection
