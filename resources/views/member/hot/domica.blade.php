@extends('member/_layout')

@section('title', env('APP_NAME') . ' :: Member area - Hot projects - Wellness Resort Domica')

@section('startBody')
    @component('components/member/projectContactModal', ['title' => 'Wellness Resort Domica'])
    @endcomponent
@endsection

@section('content')
    <div class="container-fluid project-header">
        <img src="{{ asset('images/member/hot/domica/cover.jpg') }}" class="img-fluid mx-auto" alt="">

        <div class="name">
            <div class="container">
                <h1>Wellness Resort Domica</h1>

                <p class="lead">Rožňava, Slovak Republic</p>
							
								<h2>Expected <strong>ROI</strong>  by completion <strong>45-65% </strong></h2>
							
            </div>
        </div>
    </div>

    <div class="bg_fortiary xs-pt-20 xs-pb-20 lg-pt-30 lg-pb-30">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 project-details">
									
									
									
									
									
									
									<div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Location</h2>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <p> 
																			The  main object of the hotel is that it is located in a protective zone, of a protected area called the national monument “DOMICA", near the village Kečovo. It is located in the central part of a recreational area Domica.  </p>
                                </div>
                            </div>
													
										     </div>
                    </div>
									
									
									
									<div class="card">
                        <div class="card-body">
                            <h2 class="card-title">Accommodation</h2>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <p>The accommodation is two-storey building, the 1st floor and 2nd floor. The main purpose of these units, are on the ground floor of the rooms and apartments on the 2nd floor. It has an overhead floor boiler room and also a walk-in balcony. 1st floor (1129.81 m2) - with two apartments and 22 x room, 24 x bathroom + WC, communication space - staircase, corridor, storage room, terrace. 2nd floor (57,79 m2) - where there is a corridor + staircase, boiler room and balcony.</p>
                                </div>
                            </div>
													
										     </div>
                    </div>
									
									
									
									
									
									
									
                   
													
													
													
													
													
													
													
										 <div class="card">
                        <div class="card-body">
													
													
													
													
													
                            <h2 class="card-title">Photos</h2>

                            <h4>Exterior</h4>

                            <div>
                                <a href="{{ asset('images/member/hot/domica/1.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/1.jpg') }}" class="img-fluid mx-auto w-100" alt=""></a>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/2.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/2.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/3.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/3.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/4.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/4.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/5.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/5.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/6.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/6.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/7.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/7.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
															
															
															
															
															
															
															
															
															
															
															
											
                        <div class="card-body">
                            <h2 class="card-title">BUILDING CASTLE</h2>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <p>The castle is designed as a three-storey building without basement, unfolded building the construction began in 2008. The building is divided into two operational units. One, is to be made available to the public - for visitors, the other for actors. The  object of the entrance, is designed  in a way that follows fairytale route. The main entrance for visitors, will be the entry from the southern side by a field staircase into the space of the future universal hall. Visitors will be able to continue to use the main courtyard, from which you can get to the amphitheater where fairy tales will be played.</p>
                                </div>
                            </div>
													
										     </div>
                   
									
															
															
															
															
															
															
															
															
															
															
															
															
															
															

                                
                            </div>

                            <h4 class="xs-mt-20">Interior</h4>

                            <div class="row xs-mt-20">
															
																<div class="col-12">
                                    <a href="{{ asset('images/member/hot/domica/8.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/8.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
															
																
                               

                                

                           </div>
													
													
													
													
													
													
													
													<div class="row xs-mt-20">
														
														
																 <div class="col-6">
                                    <a href="{{ asset('images/member/hot/domica/9.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/9.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
																
															
																<div class="col-6">
                                    <a href="{{ asset('images/member/hot/domica/10.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/10.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
															
																
                                

                                

                           </div>
													
													
													
													
													
													

                            <div class="row xs-mt-20">
															
															
																
															
															
																<div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/11.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/11.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
															
															
                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/12.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/12.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/13.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/13.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                
                            </div>

                            <div class="row xs-mt-20">
															
															
															
															
																
															
															
															
																<div class="col-6">
                                    <a href="{{ asset('images/member/hot/domica/14.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/14.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
															
															
                                <div class="col-6">
                                    <a href="{{ asset('images/member/hot/domica/15.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/15.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                
                            </div>
													
													
													
													
													
													
													
													
													
													
													
                        		<div class="card-body">
                            <h2 class="card-title">Bungalow</h2>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <p>bungalow - It is designed as one-storey building with two attics, ie three-storey with ramps. There are, four identical bungalows on the property. The ground floor (166.91 m2) contains three rooms with own sanitary facilities, a corridor, a balcony, a boiler room and a room for cleaning. The floor (122.49 m2) contains three bedrooms with own sanitary facilities, a corridor, a balcony and a room for cleaning. The attic (87.45m2) includes an apartment with two rooms, anteroom, balcony, bathroom and toilet.   </p>
                                </div>
                            </div>
													
										     </div>
													
													
													
													
													
													
													
													
													
													
													  <h4 class="xs-mt-20">Wellness</h4>
													
													
													
													
													
													
													<div class="row xs-mt-20">
															
															
															
																<div class="col-6">
                                    <a href="{{ asset('images/member/hot/domica/16.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/16.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-6">
                                    <a href="{{ asset('images/member/hot/domica/17.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/17.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                                

                                
                            </div>
													
													
													
													
													
													
													
													
													
													
													
													

                            <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/18.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/18.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/19.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/19.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/20.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/20.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>
													
													
													
													
													 <div class="row xs-mt-20">
                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/21.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/21.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/22.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/22.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>

                                <div class="col-4">
                                    <a href="{{ asset('images/member/hot/domica/23.jpg') }}" data-lightbox="photos"><img src="{{ asset('images/member/hot/domica/23.jpg') }}" class="img-fluid d-block mx-auto" alt=""></a>
                                </div>
                            </div>
													
													
													
													
													<div class="card-body">
                            <h2 class="card-title">Wellness</h2>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <p>Wellness - It is designed as a two-storey building (ground floor and 1st floor), located in the central part of recreation area Domica. The building serves as a civic building (an object of relaxation - entertaining water activities, such as inhalations, whirling massages, thermal - water light attractions, etc.). It creates a fairy - tale world for children.  </p>
                                </div>
                            </div>
													
										     </div>
													
													
													
													
													
												
												
                        <div class="card-body">
                            <h2 class="card-title">Surroundings</h2>

                            <div class="media">
                                <img src="{{ asset('images/member/icon_marker.png') }}" class="xs-mr-20" alt="">

                                <div class="media-body">
                                    <p> 
																			Wellness Resort Domica is located about 1 km from the village Kečovo and Dlhá Ves, district Rožňava, opposite the DOMICA cave. Domica Cave is the largest  cave of  Slovak Karst. It is a very well known cave in the world.  Located on the southern slope of  Silická planina , it is part of the cave complex, which creates  a genetic system with a total length of about 25 km with the Baradla cave  in Hungary. The Domica itself is 5,358 meters long, of which a  circle of 1,315 meters is available to the public since  1932 .  </p>
                                </div>
                            </div>
													
										     </div>
                   
													
													
													
													
													
													
													
													

                            
                        </div>
                    </div>

                    {{--<div class="card d-print-none">--}}
                        {{--<div class="card-body">--}}
                            {{--<h2 class="card-title">Map</h2>--}}

                            {{--<div class="embed-responsive embed-responsive-16by9">--}}
                                {{--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.9992347593256!2d17.102526316068836!3d48.14881997922441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c895bcf2e58d7%3A0xce7fc292ae8ecad2!2sPalis%C3%A1dy+731%2F40%2C+811+06+Bratislava!5e0!3m2!1sen!2ssk!4v1534494298378" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>

                <div class="col-12 col-lg-4 project-information">
                    <div class="stickyBlock">
                        <div class="info bg_grey">
                            <h4 class="title text-center">Investment information</h4>

                            <p>Location <span class="float-right">Rožňava, Slovak Republic</span></p>

                            <p>Asset class <span class="float-right">Investment properties</span></p>

                            {{--<p>Cost of investment <span class="float-right">&euro; </span></p>--}}

                            <p>Expected ROI by completion  <span class="float-right">45-65%</span></p>

                            <p>Area <span class="float-right">24704 m<sup>2</sup></span></p>
                        </div>

                        <a href="" class="btn btn-block btn-primary xs-mb-20" data-toggle="modal" data-target="#projectContactModal">Request more info</a>

                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-block btn-secondary" onclick="window.print();"><i class="fas fa-print"></i> Print</button>
                            </div>

                            <div class="col-6">
                                <a href="" class="btn btn-block btn-secondary"><i class="fas fa-download"></i> PDF</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('endBody')
    <a id="arrowUp" href="#memberNavbar" class="internal d-none d-lg-block" title="Scroll up!"><i class="fa fa-arrow-up"></i></a>
@endsection