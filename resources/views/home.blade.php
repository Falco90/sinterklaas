@extends('layout')

@section('content')
        <div class="wrapper">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h3>Beste {{ Auth::user()->name }},</h3>
            <p>Je bent nu ingelogd! Nu kun je beginnen met het maken van je verlanglijstje. Wij doen onze uiterste best om je wensen uit te laten komen. <br><br>
                Wij wensen je een geweldige decembermaand toe!</p><br><br>
            <h4 id="signature">Sint en de kerstman</h4>
            <a href='/wishlists' class="menu" id="toList"><button type="button" class="btn btn-success">Verlanglijstje maken</button></a>
        </div>
@endsection
