@extends('member/_layoutProject')

@section('projectCategory')
    Realized projects
@endsection

@section('projectName')
    Old hospital renovation project
@endsection

@section('projectHeader')
    <a href="{{ route('member.realized.home') }}" class="link"><i class="fas fa-angle-left"></i> Back to Realized projects</a>

    <img src="{{ asset('images/member/realized/old_hospital_renovation_project/cover.jpg') }}" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Bratislava, Slovak Republic</p>

                    <h3 class="color_primary xs-mb-0">Realized ROI 37%</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Key deal points</h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Location</h3>

                    <p>Objects of the former hospital represent heyday of functionalism in Slovakia. In association with the municipal monument board we prepared a reconstruction that would give to the cultural monument back its original functionalist character, provide new functions and also enable the building to come up to such functions. This will be reached by preserving the original historical elements and values. We rid the objects of superstructures with inclined roof that was added later and interfered with their functionalist character. At its place we designed a new superstructure not meant as a part of the building but on the contrary clearly defining its new function and showing the historical buildings in their original beauty. In the renovated buildings new functions will appear and along with health services the building will provide residential and office space as well as community facilities. As the new functions required static transport solutions under the Bezručova 3 building a multi-storey underground parking lot was designed. Sensitive and professional reconstruction will breathe new life into a historically important building preserving its genius loci and location. After a long time, the Art Nouveau Blue Church will have a respectable functionalist neighbour with its original appearance that will serve comfortably its future inhabitants and visitors.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Photos</h2>

            <a href="{{ asset('images/member/realized/old_hospital_renovation_project/fuctionalist-building-3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/old_hospital_renovation_project/fuctionalist-building-3.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>

            <div class="row xs-mt-20">
                <div class="col-4">
                    <a href="{{ asset('images/member/realized/old_hospital_renovation_project/fuctionalist-building-1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/old_hospital_renovation_project/fuctionalist-building-1.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/realized/old_hospital_renovation_project/fuctionalist-building-2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/old_hospital_renovation_project/fuctionalist-building-2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/realized/old_hospital_renovation_project/fuctionalist-building-4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/realized/old_hospital_renovation_project/fuctionalist-building-4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">Map</h2>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17402.18629466928!2d17.099313515274552!3d48.13625319221128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c894102de6d6b%3A0xc4605f2cc6b0ec57!2sBezru%C4%8Dova+2531%2F5%2C+811+09+Bratislava!5e0!3m2!1sen!2ssk!4v1530867446284" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">Slovak Republic</span></p>

        <p>Asset class <span class="float-right">Investment properties</span></p>
    </div>

    <a href="" class="btn btn-block btn-primary" data-toggle="modal" data-target="#projectContactModal">Request more info</a>
@endsection