@extends('layouts.header')

@section('section')
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                    <div class="project-wrapper">
                        <div class="project">
                            <div class="photo-wrapper">
                                <div class="photo">
                                    <a class="fancybox" href="{{secure_asset('assets/img/portfolio/port04.jpg')}}"><img class="img-responsive" src="{{secure_asset('assets/img/portfolio/port04.jpg')}}" alt=""></a>
                                </div>
                                <div class="overlay">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection