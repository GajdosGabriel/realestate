@extends('public/_layoutProject')

@section('projectName')
    Retail park "Home Box"
@endsection

@section('projectHeader')
    <img src="{{ asset('images/member/homebox/cover.jpg') }}" class="img-fluid mx-auto" alt="">

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
            <h2 class="card-title">DESCRIPTION OF PROPERTY</h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>
                        The real estate property in question is the "HomeBox" retail park
                        that is a part of the commercial zone in the Nitra-Mlynárce city
                        district on Bratislavská Street, which is directly connected to the
                        R1 expressway. The building has been erected and the park
                        opened in March 2017.
                    </p>

                    <p>
                        The newly constructed building is a single one storey object with
                        a rectangular ground plan. The structure is connected to all
                        utilities. The building includes 62 outdoor parking spaces on its
                        own grounds.
                    </p>

                    <p>
                        Location of the building and the mix of lessees have been
                        purposefully designed to complement the commercial zone with
                        the established furniture centre Möbelix, Siko and Kärcher, which
                        together create excellent synergies for customers with a focus on
                        home furnishings and accessories.
                    </p>

                    <h4>INVESTMENT HIGHLIGHTS:</h4>

                    <ul>
                        <li>2,960 m2 of commercial area</li>

                        <li>100% of the commercial area is occupied</li>

                        <li>6 tenants</li>

                        <li>main lessees - Diego and Tempo Kondela (approx. 57% of the area)</li>

                        <li>62 outdoor parking spaces</li>

                        <li>average lease is 8.23 EUR / m2 per month</li>

                        <li>average lease period is 5 years</li>

                        <li>all lease contracts are indexed</li>

                        <li>offer price is approx. 1,300 EUR/m2</li>

                        <li>annual yield is approx. 7.5 % p.a.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">2ND STAGE OF THE RETAIL PARK</h2>

            <div class="media">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <p>
                        Due to demand, the owner is currently preparing an expansion of
                        the retail park, which is currently in the land-use proceedings and
                        shows a high pre-lease demand in the volume of approx. 2/3 of
                        the areas. The owner expects full occupancy of the areas for
                        lease in the foreseeable future.
                    </p>

                    <p>2nd STAGE of the HomeBox Park:</p>

                    <ul>
                        <li>area for lease – approx. 4,400 m2</li>

                        <li>average lease - approx. 8.0 EUR/m2/month</li>

                        <li>annual income: approx. 422,400 EUR</li>

                        <li>approx. 70% pre-lease of commercial areas</li>

                        <li>planned building permission: in 2018</li>
                    </ul>

                    <p>
                        The owner prefers to sell the 1st and 2nd stages as a whole to
                        one investor, however it is not obligated. Terms and purchase
                        price of the sale will be subject to negotiation.
                    </p>
                </div>
            </div>

            <div class="row xs-mt-20">
                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/member/homebox/3.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/homebox/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                </div>

                <div class="col-12 col-lg-6">
                    <a href="{{ asset('images/member/homebox/4.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/homebox/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
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
                        The property in question is located directly on Bratislavská Street between the Möbelix and Kärcher furniture store
                        in the regional capital city of Nitra in the cadastral area Mlynárce, near the Nitra-Západ access to the R1 (E571)
                        expressway in the direction of Bratislava and Banská Bystrica. The property is accessible directly from Bratislavská
                        Street. Next to the rear section of the property near Remeselnícka Street is the location of a Secondary school of
                        mechanical engineering and electrical engineering, a Veterinary clinic, and Tesco. A Private primary art school is
                        situated next to the northern part. Located westward is a developed residential zone, mainly residential houses. A
                        public transportation bus stop is on the nearby Štúrova Street.
                    </p>

                    <p>
                        Nitra is a city located in the Nitra region, about 75 km east of Bratislava. A river with the same name Nitra runs
                        through it. Panorama of Nitra consists of seven hills, from the north there are the hills Zobor, Hradná skala, Vŕšok,
                        Kalvária, Borina, Čermáň, along with Martinský vrch. It is the oldest town in Slovakia; the first confirmed historical
                        references are from 828. With the population of about 80,000 and the cadastral area of about 100 km2 it is the
                        sixth largest city in Slovakia. The Bratislava international airport is located approximately 80 km away, no more than
                        1 hour by car. A local airport suitable especially for charter flights is directly in Nitra.
                    </p>

                    <p>
                        The attractiveness of the city of Nitra and its locations has also been enhanced by the investment of the
                        international car manufacturer JAGUAR LAND ROVER, which is currently building its first production and logistics
                        factory in continental Europe near the city on an area of 300,000 m2 with a production capacity of about 150,000
                        cars in the first year. The investment has reached the amount of approximately 1.4 billion EUR and it has given
                        wings to the region and strengthened its further economic development.
                    </p>
                </div>
            </div>

            <a href="{{ asset('images/member/homebox/5.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/homebox/5.jpg') }}" class="img-fluid mx-auto" alt=""></a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Facts & Figures (In Euro)</h2>

            <h5>WEIGHTED LIST OF INCOME</h5>

            <a href="{{ asset('images/member/homebox/6.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/homebox/6.jpg') }}" class="img-fluid d-block mx-auto xs-mb-20" alt=""></a>

            <h5>OVERVIEW OF TENANTS (IN EURO)</h5>

            <a href="{{ asset('images/member/homebox/7.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/homebox/7.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>

            <div class="media xs-mt-30">
                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                <div class="media-body">
                    <h3>Purchase price</h3>

                    <p class="text-center lead">The price of 100 % of mortgage-free company shares or the property sought by our clients is</p>

                    <p class="text-center lead font-weight-bold">€ 3 900 000,00</p>

                    <p class="text-center lead">(in words euro three million nine hundred thousand)<br>plus VAT with asset deal</p>

                    <p class="text-center lead">Please note that the real estate agency charges 3% of the purchase price for commission</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Photos</h2>

            <a href="{{ asset('images/member/homebox/1.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/homebox/1.jpg') }}" class="img-fluid mx-auto xs-mb-20" alt=""></a>

            <a href="{{ asset('images/member/homebox/2.jpg') }}" data-lightbox="photos" target="_blank"><img src="{{ asset('images/member/homebox/2.jpg') }}" class="img-fluid mx-auto" alt=""></a>
        </div>
    </div>

    <div class="card d-print-none">
        <div class="card-body">
            <h2 class="card-title">Map</h2>

            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2653.359128685589!2d18.05779071606457!3d48.31517592923801!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c892843ebbb81%3A0xb282e3a1637fc398!2sBusiness+Center+HOMEBOX+NITRA!5e0!3m2!1sen!2ssk!4v1537349150677" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection

@section('projectDetails')
    <div class="info bg_grey">
        <h4 class="title text-center">Investment information</h4>

        <p>Location <span class="float-right">Nitra, Slovak Republic</span></p>

        <p>Asset class <span class="float-right">Investment properties</span></p>

        <p>Cost of buying <span class="float-right">&euro; 3 900 000</span></p>

        <p>Current ROI (Existing tenants) <span class="float-right">7,5% p.a.</span></p>

        <p>Plot area <span class="float-right">7 730 m<sup>2</sup></span></p>

        <p class="xs-mb-0">Leasable area <span class="float-right">2 960 m<sup>2</sup></span></p>
    </div>

    <button class="btn btn-block btn-secondary" onclick="window.print();"><i class="fas fa-print"></i> Print</button>
@endsection