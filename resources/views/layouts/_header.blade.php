<header>
    <div class="nav container d-flex">
       <img src="img/logo-white.png" alt="logo"> 
       <div class="menu d-flex">
           <ul class="d-flex">
                @foreach (config('main.routes') as $route)                
                    <li class="{{ Request::path() == $route['pathId'] ? 'active' : '' }}">
                        <a href="{{ route($route['pathId']) }}">{{ $route['text'] }}</a>
                    </li>
                @endforeach
           </ul>
           <button id="btn">Candidati Ora</button>
       </div>
    </div>
</header>