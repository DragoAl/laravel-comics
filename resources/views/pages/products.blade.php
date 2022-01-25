@extends('layout.main-layout')
@section('content')

    <section class="section-container">
        <div class="tag-current-series btn-style">CURRENT SERIES</div>
        
        <div class="comics-container">
            @foreach ($varProducts as $item)
                <div class="comics">
                    <a href="{{route('comicBook')}}">
                        <img src="{{$item['thumb']}}" alt="Comics">
                        <h4>"{{$item['series']}}"</h4>
                    </a>
                    
                </div>
            @endforeach
        </div>

        <div class="btn-style btn-load">LOAD MORE</div>

    </section>
    <section class="section-buy">

        <ul>
            @foreach ($varinfosPanels as $infoPanel)
                <li>
                    <img src="{{$infoPanel['img']}}" alt="{{$infoPanel['text']}}">
                    <a href="{{$infoPanel['url']}}">{{$infoPanel['text']}}</a>
                </li>
                
            @endforeach
        </ul>
    
    </section>
    
@endsection