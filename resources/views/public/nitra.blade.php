@extends('public/_layoutProject')

@section('projectName')
    Nitra new apartments development
@endsection

@section('projectHeader')
    <img src="{{ asset('images/pub/nitra/cover.jpg') }}" class="img-fluid mx-auto" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Nitra, Slovak Republic</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Key deal points</h2>

            <h4>Location</h4>

            <p>Plot is situated in the district NITRA, in the village of Nitra, in the cadastral area Kynek on LV no. 7691, LV no. 8032.</p>

            <p>Access to the land is after the concrete communication from the village Kynek - the communication is owned by NITRA.</p>

            <p>The ground is in a lucrative part due to a short distance of about 300 m from R1, in NITRA - Selenec.</p>

            <hr class="part primary">

            <h4>Readiness</h4>

            <p>There are engineering networks on the plot:</p>

            <h5>Electricity</h5>

            <p>Maximum electrical power 100 kW. The need to reconstruct the transformer station.</p>

            <h5>Water</h5>

            <p>Own water with well.</p>

            <h5>Gas</h5>

            <p>Gas with own control station.</p>

            <p>At higher demand there is a need for connection from a connecting distribution pipeline VTL PN 25 DN 300 TU Mlynárce - TU Jarok along the state road NITRA - Jarok.</p>

            <hr class="part primary">

            <h2 class="card-title">Photos</h2>

            <a href="{{ asset('images/pub/nitra/3.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/nitra/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

            <div class="row xs-mt-20">
                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/pub/nitra/1.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/nitra/1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/pub/nitra/2.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/nitra/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>

            <div class="row xs-mt-20">
                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/pub/nitra/4.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/nitra/sm/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/pub/nitra/5.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/nitra/sm/5.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">Map</h2>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d20618.14287361636!2d18.031999368434498!3d48.30813046425894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e3!4m0!4m3!3m2!1d48.309125599999994!2d18.0241339!5e0!3m2!1sen!2ssk!4v1547730250186" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">Nitra, Slovak Republic</span></p>

        <p>Asset class <span class="float-right">New developments</span></p>

        <p>Plot area <span class="float-right">90 000 m<sup>2</sup></span></p>
    </div>

    <button class="btn btn-block btn-secondary" onclick="window.print();"><i class="fas fa-print"></i> Print</button>
@endsection