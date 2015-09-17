@extends('template');

@section('title')
    Blog
@stop

@section('subtitle')
    Primeira fase do curso School of Net
@stop

@section('content')
    @foreach($notes as $note)
        <div class="row">
            <br>
            <div class="col-md-2 col-sm-3 text-center">
                <a class="story-img {{ $note["result"] }}" href="#"></a>
            </div>
            <div class="col-md-10 col-sm-9">
                <h3>{{ $note["title"] }}</h3>
                <div class="row">
                    <div class="col-xs-9">
                        <p>{{ $note["text"] }}</p>
                        <br>
                        <ul class="list-inline"><li>Publicado em <b>{{ $note["date"] }}</b></li></ul>
                    </div>
                    <div class="col-xs-3"></div>
                </div>
                <br>
            </div>
        </div>
        <hr>
    @endforeach
@stop