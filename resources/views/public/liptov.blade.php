@extends('public/_layoutProject')

@section('projectName')
    Liptov
@endsection

@section('projectHeader')
    <img src="{{ asset('images/pub/liptov/cover.jpg') }}" class="img-fluid mx-auto" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Liptovský Mikuláš, Slovak Republic</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Description</h2>

            <p>The reconciled area is currently a forest of a special destination (protective forest around the Liptovská Mara reservoir). The function of the protective forest must be kept as long as possible in the "setting up" of holiday homes. The possibility of placing the buildings in the area is also limited by the level of the "catastrophic" level of the water work (566.34 m nm) below which no construction activity can be realized. The water level swings up to a level of about -7 meters below this maximum level. The forest is about 564 meters above sea level. and in the case of the maximum level it is flooded.</p>

            <p>The forests are made of wood of different character, including the scrub "subsets", deciduous woods such as birch, willow and jelly predominate with typical local conifers, mainly spruce. The forest is not ecologically - technically maintained and has the character of "unorganized" forest.</p>

            <p>The size of future plots for recreational homes is in the range of approx. 900 m2 to 1440 m2, the maximum built-up area of ​​the recreational home (without recreational terraces) is determined by the consent of the municipal council Liptovská Sielnica č. 8/2012 dated on 28.2.2012 to enter urban planning study 100 m2.</p>

            <p>Holiday homes have a built-up area of ​​up to 100 m2 without outdoor terraces. The land borders are located in accordance with the Building Act and Decree No. 453/2000 zz, which specifies the building law.</p>

            <p>Building conditions of individual plots and building blocks (control elements) The exact construction limits and conditions with respect to the location of the plots are in the drawing part of the urban study.</p>

            <p>The basic building limits are as follows:</p>

            <ul>
                <li>Maximum floor area without recreational terraces at level 1 NP - 100 m2</li>

                <li>Maximum height of the building - roof plane of the 2nd floor (approx. 6,5m above floor level 1st floor), floor height 1st floor maximum 0,45 m above the entrance area</li>

                <li>Nature of buildings: a modern "neofunctionalist" structure with flat roofs</li>

                <li>Homes in the standard of low-energy houses (class B), heated on the basis of electricity</li>
            </ul>

            <p class="lead">The entire construction of the complex will take place in three stages:</p>

            <ol>
                <li>Building basic transport infrastructure, supplying electricity and building sewerage</li>

                <li>Construction of own recreational homes with the appropriate infrastructure - water, sewerage and electricity connections</li>

                <li>Connecting the sewer to the discharge pipe leading to the sewage treatment plant</li>
            </ol>

            <hr class="part primary">

            <h2>Pictures</h2>

            <div class="row xs-mt-20">
                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/pub/liptov/1.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/liptov/sm/1.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/pub/liptov/2.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/liptov/sm/2.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/pub/liptov/3.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/liptov/sm/3.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                </div>
            </div>

            <hr class="part primary">

            <h2>Plans</h2>

            <div class="row xs-mt-20">
                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/pub/liptov/plans/1.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/liptov/plans/sm/1.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/pub/liptov/plans/3.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/liptov/plans/sm/3.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/pub/liptov/plans/4.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/pub/liptov/plans/sm/4.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">Map</h2>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d9655.025611561954!2d19.492311261390924!3d49.121308672052564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e3!4m0!4m3!3m2!1d49.1205849!2d19.4988839!5e0!3m2!1sen!2ssk!4v1548248898219" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">Lip. Mikuláš, Slovak Republic</span></p>

        <p class="xs-mb-0">Asset class <span class="float-right">New developments</span></p>
    </div>

    <button class="btn btn-block btn-secondary" onclick="window.print();"><i class="fas fa-print"></i> Print</button>
@endsection