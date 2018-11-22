<div class="navbar">
<a href='/home' id="headtitle"><h1>December Verlanglijst</h1></a>
    <ul class="nav-ul">
        <a href='/instructions' class="menu"><li class="nav-li">Over Ons</li></a>
        <a href='/list' class="menu"><li class="nav-li">Mijn Verlanglijst</li></a>
        <li class="nav-li">
            <form id="logout-form" action="{{ route('logout') }}" method="POST"><button class="btn-link" type="submit">
                @csrf
                Uitloggen</button>                       
            </form></li>
    </ul>
</div>