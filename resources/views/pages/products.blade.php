@extends('layout.main-layout')
@section('content')

    <section class="section-container">
        <div class="tag-current-series btn-style">CURRENT SERIES</div>
        
        <div class="comics-container">
            @foreach ($products as $item)
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
            <li>
                <img src="{{asset('storage/buy-comics-digital-comics.png')}}"  alt="info.text">  
                <a href="#"> DIGITAL COMICS</a>
            </li>
            <li>
                <img src="{{asset('storage/buy-comics-merchandise.png')}}"  alt="info.text">  
                <a href="#"> DC MERCHANDISE</a>
            </li>
            <li>
                <img src="{{asset('storage/buy-comics-subscriptions.png')}}"  alt="info.text">  
                <a href="#"> SUBSCRIPTION</a>
            </li>
            <li>
                <img src="{{asset('storage/buy-comics-shop-locator.png')}}"  alt="info.text">  
                <a href="#"> COMIC SHOP LOCATOR</a>
            </li>
            <li>
                <img src="{{asset('storage/buy-dc-power-visa.svg')}}"  alt="info.text">  
                <a href="#"> DC POWER VISA</a>
            </li>
        </ul>
    
    </section>
    
@endsection