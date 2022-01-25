<header>
        
    <img src="{{asset('storage/dc-logo.png')}}" alt="logo">
    
    <ul>
        @foreach ($varNavLinks as $link)
        <li><a href={{$link['url']}}  class="{{$link['isActive']? 'active' : ''}} ">{{$link['text']}}</a> </li>
            
        @endforeach
    </ul>
    
</header>
