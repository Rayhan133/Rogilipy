{{-- Extends layout --}}
@extends('layout.default')

@section('style')
@endsection


{{-- Content --}}
@section('content')
<section class="contactus" style="background: url('img/contact_bg_image.jpg');">
    <!-- breadcrumb-area start -->
    <div class="container">
        <div class="w-50 text-center m-auto">
            <h1 style="font-weight: 700;">About Rogilipy</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent pl-0 px-0" style="margin-left: 37%;">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-success">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About me</li>
                </ol>
            </nav>
        </div>



    </div>
    <!-- breadcrumb-area end -->

</section>

<section class="mt-5">
    <div class="container">
        <div class="m-auto aboutquiz text-justify">
            <img src="img/logo.png" alt="">
            <h1 class="text-center m-auto introductionRogilioy">
                Introduction of Rogilipy
            </h1>
            <p>
                Homeopathy, also known as homeopathic medicine, which I have presented here as Rogilipy.
                Rogilipy is a pseudoscientific system of alternative medicine.It is a form of complementary and
                alternative medicine that uses very small amounts of natural substances, which in higher
                amounts may cause a disease or symptom.Rogilipy depends on 'let like be restored by like'.
                It was
                established by Samuel Hahnemann in the late eighteenth
                century, albeit comparative ideas existed before. Rogilipy became famous in the nineteenth century to
                a limited extent
                in light of its achievement in pestilences however declined during the greater part of the twentieth
                century.
            </p>

        </div>

    </div>



</section>
@endsection
