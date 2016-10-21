@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row" id="second-layer">
            <div class="col-md-3">
                <div class="image-container"><img src="{{asset('img/bulb.png')}}" alt="" class="images"/></div>
                <div class="image-title">A New Idea</div>
                <div class="row">
                    <div class="col-md-12 image-description">
                        Genonatop apps give you centralised, shareable mobile storage with no clutter and no adverts,
                        just fresh and intuitive screens that are suitable for all age groups. So simple, so fast,
                        so versatile, so you can access everything that matters anytime, anywhere.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-container"><img src="{{asset('img/sorted.png')}}" alt="" class="images"/></div>
                <div class="image-title">Sorted</div>
                <div class="row">
                    <div class="col-md-12 image-description">
                        Organise your paperwork with minimal input thanks to comprehensive drop-down lists. (You
                        don't have to add much, but it will help you!) Upload photos or screenshots of documents in seconds.
                        Find it all quickly and easily with little fuss.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-container"><img src="{{asset('img/never-forget.png')}}" alt="" class="images"/></div>
                <div class="image-title">Never Forget</div>
                <div class="row">
                    <div class="col-md-12 image-description">
                        Genonatop will remind you when you can and should make a change.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="image-container"><img src="{{asset('img/bank-grade.png')}}" alt="" class="images"/></div>
                <div class="image-title">Bank-grade Security</div>
                <div class="row">
                    <div class="col-md-12 image-description">
                        Choose your own Genanotop login details and passcode. Your data is uploaded to your free storage
                        facility (not on your mobile device) with 128-bit AES secuirty, transferred with 2048 bit SSL and
                        stored using AES encryption. And rest assured.., your data is <b>never</b> sold on to third parties.
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="third-layer">
            <div class="col-md-12">
                <iframe id="video" src="//www.youtube.com/embed/YFNJ1jMqcbA" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row" id="fourth-layer">
            <div class="col-md-12 center-aligned">
                <img src="{{asset('img/star.png')}}" alt="" class=""/>
            </div>
            <div class="col-md-12 center-aligned blue">
                <h3>Features coming soon</h3>
            </div>
            <div class="col-md-12 center-aligned">
                <h4>Getonatop apps are getting even more great features very soon. We are going to tell you when
                they are ready.., but keeping checking anyway. We know you are going to love them too!</h4>
            </div>
        </div>
        <div class="row" id="fifth-layer">
            <div class="col-md-12 center-aligned">
                <div class="col-md-12 center-aligned blue">
                    <h3>Ready to get started?</h3>
                </div>
                <div class="col-md-12 center-aligned">
                    <p>Download the Get Onatop app today</p>
                </div>
                <div class="col-md-12 center-aligned">
                    <img src="{{asset('img/appstore-black.png')}}" alt="available on App Store" class="buttons"/>
                    <img src="{{asset('img/google-black.png')}}" alt="available in google play" class="buttons"/>
                </div>
            </div>
        </div>
        <div class="row" id="sixth-layer">
            <div class="col-md-12 center-aligned">
                <img src="{{asset('img/bubble.png')}}" alt="" class=""/>
            </div>
            <div class="col-md-12 center-aligned">
                <h4>If you would like to know more about Getonatop and why we have put it together for you, if
                you are interested in helping us grow, or if you want to invest, then please get in touch:
                <a href="#">info@getonatop.com</a>. We would love to hear from you!</h4>
            </div>
        </div>
    </div>
@endsection
