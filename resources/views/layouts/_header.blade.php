<header>
    <div class="nav">
       <img src="img/logo-white.png" alt="logo"> 
       <ul>
            @foreach (config('main.routes') as $route)                
                <li class="{{ Request::path() == $route['pathId'] ? 'active' : '' }}">
                    <a href="{{ route($route['pathId']) }}">{{ $route['text'] }}</a>
                </li>
            @endforeach
       </ul>
       <button>Candidati Ora</button>
    </div>
</header>