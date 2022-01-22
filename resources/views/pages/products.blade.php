@extends('layout.main-layout')
@section('content')

    <section class="section-container">
        <div class="tag-current-series btn-style">CURRENT SERIES</div>
        
        <div class="comics-container">
            @foreach ($products as $item)
                <div class="comics">
                    <img src="{{$item['thumb']}}" alt="Comics">
                    <h4>"{{$item['series']}}"</h4>
                </div>
            @endforeach
        </div>

        <div class="btn-style btn-load">LOAD MORE</div>

    </section>
    
@endsection