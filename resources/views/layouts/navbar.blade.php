
<nav>
    <div class="logo">
        eFoot
    </div>

    <ul>
        <li class="nav-item"><a href="#">Match</a></li>
        <li class="nav-item"><a href="#">Classement</a></li>
    </ul>
    <button class="btn-nav">

        @if (Auth::check())
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"
              {{-- class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded--}}>
                {{ __('Deconnexion') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}"
               class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                {{ __('Se Connecter') }}
            </a>
        @endif
    </button>
</nav>
