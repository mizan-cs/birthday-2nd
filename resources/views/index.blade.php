@extends('layouts.template')

@section('content')
<header id="home">
    @include('sections.nav-bar')
    @include('sections.slider')
</header>  <!-- end of header -->

@include('sections.countdown')

<section class="announciation section-padding" id="couple">
    <div class="container">
        <div class="thumbnail">
            <div class="frame">
                <img src="images/home/announcement/frame.png" alt="Frame">
                <img src="images/home/announcement/hover-frame.png" alt="Hover Frame" class="hover-frame">
                <img style="max-width: 219px;" src="{{asset('/storage/'.setting('couple.the_groom'))}}" alt="Romeo">
            </div>
            <h3>@lang('couple.groom-name')</h3>

            <p>@lang('couple.subtext')</p>
        </div>

    </div> <!-- end of container -->
</section> <!-- end of announciation -->




<section class="event section-padding" id="event">
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>{{ setting('site.title') }}</h2>

            </div>
        </div>

        <div class="content">
            @foreach($activities as $activitie)
                @if(App::isLocale('en'))
                    <div class="row">
                        <div class="col col-md-5">
                            <img src="{{asset('storage/'.$activitie->image)}}" alt="Event Picture" class="img img-responsive">
                        </div>
                        <div class="col col-md-7">
                            <h3>{{$activitie->en_title}}</h3>
                            <p><span>{{$activitie->en_sub_title}}</span></p>
                            <p>
                                {!! $activitie->en_details !!}
                            </p>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col col-md-5">
                            <img src="images/home/event/img-1.jpg" alt="Event Picture" class="img img-responsive">
                        </div>
                        <div class="col col-md-7">
                            <h3>{{$activitie->pt_title}}</h3>
                            <p><span>{{$activitie->pt_sub_title}}</span></p>
                            <p>
                                {!! $activitie->pt_details !!}
                            </p>
                        </div>
                    </div>

                @endif
            @endforeach
        </div> <!-- end of content -->
    </div> <!-- end of container -->
</section> <!-- end of event-->

<section class="groomsmen-bridesmaids section-padding" id="story">


    <div class="row content">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>Schedule</h2>
            </div>
        </div>
        <div class="container p-5">
            <ul>
                <li>
                    <h3>19h00 - 19h40 Arrival of the guests (sound environment DJ)</h3>
                    <hr>
                    - Reception of the guests (Protocols)
                    <hr>
                    - Presentation of the vehicles (Figurines)
                    <hr>
                    - Photographs
                    <hr>
                    - Service of drinks and aperitifs briefs (Catering)
                    <hr>
                    - Delivery of gifts at the entrance of the room (Protocols)
                    <hr>
                    - Accompaniment of the guests to be seated (Protocols)
                </li>
                <li>
                    <h3>19h50 Greetings (MC), opening speech and welcome (MC or Birthday) </h3>
                </li>
                <li>
                    <h3>20h00 Opening of the Dinner (MC), ambient sound during (MC) - Jugglers (20-30min) </h3>
                </li>
                <li>
                    <h3>MC Announces Hall opening with dancing showObs: It is a good idea to be the birthday boy and his wife the first to be invited the lane and the family then follow them. (2 songs) - MC- Edmazia (4 songs) - MC- Kyaku Bamda (30 minutes) - MC - Halison Paixão (2 songs) - Son of Zua (4 songs) - MC- Matias Damásio Banda 50 minutes)</h3>
                </li>
                <li>
                    <h3>6. 23h20 Cake cut, followed by fireworks (MC) Obs: to the sound of the DJ7.</h3>
                </li>

            </ul>


        </div>
    </div> <!-- end of content -->
</section> <!-- end of groomsmen-bridesmaids-->

<section class="groomsmen-bridesmaids section-padding" id="story">
    <div class="container">
        <div class="row section-heading">
            <div class="col col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                <h2>Location</h2>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.0277434719324!2d13.233522814784834!3d-8.783459793691415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwNDcnMDAuNSJTIDEzwrAxNCcwOC42IkU!5e0!3m2!1sen!2sbd!4v1559936575735!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div> <!-- end of container -->

    
</section> <!-- end of groomsmen-bridesmaids-->

<footer>
    <div class="row">
        <h2>{{setting('site.title')}}</h2>
        <span class="date">{{setting('site.event_date')}}</span>
    </div>

    <div class="row">
        <div class="container">
            <div class="col col-sm-6">
                <p>Copyright &copy; 2019 <a href="www.piitconsultancy.com">piitconsultancy</a>. All Rights Reserved</p>
            </div>
            <div class="col col-sm-6">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer> <!-- end of footer -->
@endsection