<div class="navbar">
    <h1 id="headtitle">Sinterklaas website</h1>
    <ul class="nav-ul">
        <a href='/home' class="menu"><li class="nav-li">Home</li></a>
        <a href='/instructions' class="menu"><li class="nav-li">About</li></a>
        <a href='/manifestations/create' class="menu"><li class="nav-li">Nieuwe verlanglijst</li></a>
        <a href='/manifestations' class="menu"><li class="nav-li">Mijn verlanglijstjes</li></a>
        <li class="nav-li">
            <form id="logout-form" action="{{ route('logout') }}" method="POST"><button class="btn-link" type="submit">
                @csrf
                Logout</button>                       
            </form></li>
    </ul>
</div>