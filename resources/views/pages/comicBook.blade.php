@extends('layout.main-layout')
@section('content')
    <div class="blue-bar">
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="comicBook">
    </div>
    <section class="container-comicBook-adv">
        <div class="container-info-comic">
            <h3 class="comicBook-title"> Action Comic book</h3>
            <div class="green-infobar">
                <div class="comic-price">
                    <span class="green-label">U.S. Price:</span>
                    <span class="target-white price">$19.99</span>
                </div>
                <div class="comic-availability">
                    <span class="green-label"> AVAILABLE</span>
        
                </div>
                <div class="check-availability">
                    <span class="target-white ">Check Availability</span>
                    <span><i class="fas fa-sort-down"></i></span>
                </div>
            </div>
            <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus.</p>
        </div>
        
        <div class="advertising">
            <div class="advertising-banner">
                <span>ADVERTISEMENT</span>
                <img src="{{asset('storage/adv.png')}}" alt="adv">
            </div>
        </div>

    </section>
    <section class="info-bg ">
        <section class="info-comic ">
            <section>
                <h3>Talent</h3>
                <div>
                    <h4>Art By:</h4>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet explicabo hic eos nobis cum quibusdam porro illo? Libero illo facilis enim. Ratione enim id, vitae cum eos aperiam tempore quis?</span>
                </div>
                <div>
                    <h4>Written By:</h4>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet explicabo hic eos nobis cum quibusdam porro illo? Libero illo facilis enim. Ratione enim id, vitae cum eos aperiam tempore quis?</span>
                </div>
               
            </section>
            <section>
                <h3>Specs</h3>
                <div>
                    <h4>Series:</h4>
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    </span>
                </div>
                <div>
                    <h4>U.S. Price</h4>
                    <span>$20 </span>
                </div>
                <div>
                    <h4>On Sale Date:</h4>
                    <span>october 2004 </span>
                </div>
               
            </section>
        </section>
        
        <section class="link-info-buy">
            <div>
                <span>DIGITAL COMICS</span>
                <img src="{{asset('storage/buy-comics-digital-comics.png')}}"  alt="info.text">  
            </div>
            <div>
                <span>SHOP DC</span>
                <img src="{{asset('storage/buy-comics-merchandise.png')}}"  alt="info.text">  

            </div>
            <div>
                <span>COMIC SHOP LOCATOR</span>
                <img src="{{asset('storage/buy-comics-shop-locator.png')}}"  alt="info.text">  
            </div>
            <div>
                <span>SUBSCRIPTIONS</span>
                <img src="{{asset('storage/buy-comics-subscriptions.png')}}"  alt="info.text">  
            </div>

        </section>
        

    </section>
@endsection