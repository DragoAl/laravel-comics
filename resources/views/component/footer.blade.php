<footer>
    <div id="bg-footer">
        <section>
            <nav>
                <h4>DC COMICS</h4>
                <ul>
                   @foreach ($varFooterComicsLinks as $footerComicLink)
                   <li><a href="{{ $footerComicLink['url'] }}">{{ $footerComicLink['text'] }}</a></li>
                       
                   @endforeach
                </ul>

                <h4>SHOP</h4>
                <ul>
                    @foreach ($varFooterShopLinks as $footerShopLink)
                        <li><a href="{{ $footerShopLink['url'] }}">{{$footerShopLink['text']}}</a></li>
                    @endforeach
                </ul>
               
            </nav>
            <nav>
                <h4>DC</h4>
                <ul>
                    @foreach ($varFooterDcLinks as $footerDcLink)
                        <li><a href="{{ $footerDcLink['url'] }}">{{$footerDcLink['text']}}</a></li>
                    @endforeach
                </ul>
            </nav>
            <nav>
                <h4>SITES</h4>
                <ul>
                    @foreach ($varfooterSitesLinks as $footerSiteLink)
                        <li><a href="{{ $footerSiteLink['url'] }}">{{$footerSiteLink['text']}}</a></li>
                    @endforeach
                </ul>
            </nav>

        </section>

    </div>
   
    <div id="footer-bottom">
        <section>
            <button>SIGN-UP NOW!</button>
            
            <div>
                <h4>FOLLOW US</h4>
           
                <ul>
                    @foreach ($varSociallinks as $sociallink)
                    <li>
                        <a href="{{$sociallink['url']}}"><img src="{{$sociallink['img']}}" alt="{{$sociallink['text']}}"> </a>
                    </li>
                        
                    @endforeach
                </ul>

            </div>
        
        </section>
    </div>


  

</footer>