@extends('public/_layoutProject')

@section('projectName')
    Office building 2
@endsection

@section('projectHeader')
    <img src="{{ asset('images/member/office2/cover.jpg') }}" class="img-fluid mx-auto" alt="">

    <div class="name">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1>@yield('projectName')</h1>

                    <p class="lead">Bratislava, Slovak Republic</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('projectContent')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">DESCRIPTION OF PROPERTY</h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>
                        Offered for sale is an office building constructed in  ́90s. In 1996,
                        a third floor was added and the property was finished and
                        approved as a commercial building called "Stromova Offices".
                        The property has a flat roof. It consists of a basement and three
                        upper floors with total gross area of approximately 5,070 sqm.
                    </p>

                    <p>
                        There are storage areas, a conference room and utility rooms In
                        the basement. The ground floor is leased out as retail premises
                        and the upper floors are used as offices. The ventilation system is
                        located in the attic.
                    </p>

                    <p>Building Equipment:</p>

                    <ul>
                        <li>24-hour security at reception</li>

                        <li>Air-conditioning, commercial and office spaces</li>

                        <li>CCTV security system with 13 external cameras</li>

                        <li>reception with lobby on the ground floor; banks are equipped with additional cameras inside</li>

                        <li>access control (card) to the offices</li>

                        <li>ceiling height of storeys and offices is 3.2 m and 3.7 m on 3rd floor</li>

                        <li>suspended ceiling</li>

                        <li>cargo lift for Tatra Bank going down to the basement floor</li>

                        <li>private outdoor parking spaces with 46 seats and two ramps</li>
                    </ul>

                    <p>
                        The building is fully leased. The lease agreements are concluded
                        for a fixed term. The main tenant - the Ministry of Education,
                        including the State Institute of Education, which is under the
                        Ministry of Education - occupies approximately 73% of leasable
                        area. Their final word concerning prolongation option of their
                        contract for the next 6 years is expected at the end of June.
                    </p>

                    <p>Refurbishment works inside buildings:</p>

                    <ul>
                        <li>2nd floor - complete refurbishment in 2012</li>

                        <li>3rd floor - (Sept., 2015) - substantially refurbished including, structured cable works, common rooms and kitchen area</li>

                        <li>from July, 2016 on a contract is concluded with the boiler operator for monitoring the actual energy consumption</li>
                    </ul>

                    <p>Key data on the real estate investment:</p>

                    <ul>
                        <li>gross lettable area - about 4,549 sqm</li>

                        <li>approx. 10% - storage areas</li>

                        <li>approx. 24% - retail spaces</li>

                        <li>approx. 66% - office spaces</li>

                        <li>offered purchase price - about € 1,428 / sqm</li>

                        <li>annual yield - about 9.2%</li>

                        <li>occupancy rate: 100%</li>

                        <li>46 outdoor parking lots</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">LOCATION/ INFRASTRUCTURE</h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>
                        The property in question is located on Stromová Street in Bratislava's district Nové Mesto opposite of the cultural
                        center of the municipality of Kramáre. The building borders on one side the intersection with Stromová, Jelšová and
                        Bárdošova Street and on the other side on Hroznová Street. Close by there is the main road leading to the main
                        artery Prazska Street connecting Lamačská Street with the D2 motorway. Next to the property there is the Ministry
                        of Education.
                    </p>

                    <p>
                        In the immediate vicinity there is the Central Railway Station, the Slovak post office, banks, the Municipal Library,
                        head offices and institutions, the University Hospital with Polyclinic, the Slovak Medical University and other
                        healthcare facilities as well as shops for daily needs. In the vicinity there is also Bratislava's largest forest in the Little
                        Carpathians offering space for recreational activities.
                    </p>

                    <p>
                        The city centre is within a 7 minutes' drive. The property has connections to the D2 motorway to Brno (about 3
                        minutes by car) and can be reached by individual transport. The public transport links are ensured by the stop
                        "Siemens" on Stromová Street with lines no. 32, 44, 204, 206, 209, 212.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <a href="{{ asset('images/member/office2/1.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/office2/1.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="{{ asset('images/member/office2/2.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/office2/2.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Facts & Figures (In Euro)</h2>

            <h5>WEIGHTED LIST OF INCOME</h5>

            <a href="{{ asset('images/member/office2/4.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/office2/4.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>

            <h5>OVERVIEW OF TENANTS (IN EURO)</h5>

            <a href="{{ asset('images/member/office2/5.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/office2/5.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

            <div class="media xs-mt-30">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Purchase price</h3>

                    <p class="text-center lead">The price of 100 % of mortgage-free company shares or the property sought by our clients is</p>

                    <p class="text-center lead font-weight-bold">€ 6 500 000,00</p>

                    <p class="text-center lead">(in words euro three million nine hundred thousand)<br>plus VAT with asset deal</p>

                    <p class="text-center lead">Please note that the real estate agency charges 3% of the purchase price for commission</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Photos</h2>

            <div class="row xs-mt-20">
                <div class="col-4">
                    <a href="{{ asset('images/member/office2/3.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/office2/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/office2/6.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/office2/6.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-4">
                    <a href="{{ asset('images/member/office2/7.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/office2/7.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">Map</h2>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.180021978889!2d17.09398651606056!3d48.164611579225614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8c076cd346b3%3A0xa06a215070a78833!2sStromov%C3%A1+2669%2F9%2C+831+01+Bratislava!5e0!3m2!1sen!2ssk!4v1537351042751" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">Bratislava, Slovak Republic</span></p>

        <p>Asset class <span class="float-right">Investment properties</span></p>

        <p>Cost of buying <span class="float-right">&euro; 6 500 000</span></p>

        <p>Current ROI (Existing tenants) <span class="float-right">9,2% p.a.</span></p>

        <p>Plot area <span class="float-right">2 868 m<sup>2</sup></span></p>

        <p class="xs-mb-0">Leasable area <span class="float-right">4 549 m<sup>2</sup></span></p>
    </div>

    <button class="btn btn-block btn-secondary" onclick="window.print();"><i class="fas fa-print"></i> Print</button>
@endsection