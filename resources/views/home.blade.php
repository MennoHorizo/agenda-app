@extends('layouts.standard-page-layout')

@section('content')
@include("includes.navbar")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welkom {{ ucfirst(auth::user()->name) }}</div>

                <div class="card-body">
                    <?php $cardData = array(array("Jouw agenda","Hier kan jij je planning invoeren en inzien.","index","Agenda"),
                    array("API Gegevens","Laad deze pagina met een programmeer taal om rauwe agenda data te verkrijgen.","showapi","API")) ?>
                    @foreach($cardData as $cardSection)
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h2>{{$cardSection[0]}}</h2>
                                <p>{{$cardSection[1]}}</p>
                                <div>
                                    <a href="{{route($cardSection[2])}}" class="btn btn-primary">{{$cardSection[3]}}</a>
                                </div>
                            </div>
                        </div>
                        <hr />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
