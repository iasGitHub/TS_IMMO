@extends('layouts.header')

@section('section')
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt">
                @foreach($proprietes as $propriete)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                    <div class="project-wrapper">
                        <div class="project">
                            <div class="photo-wrapper">
                                <div class="photo">
                                    <a class="fancybox" href="#"><img class="img-responsive" src="/storage/{{$propriete->photo }}" alt=""></a>
                                </div>
                                <div class="overlay">
                                    
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </section>
@endsection