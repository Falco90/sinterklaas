@extends('layoutsplash')

@section('content')
        <div class="wrapper">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h3>Het is weer December!</h3>
            <p>De decembermaand is weer (bijna) aangebroken. Dat betekent dat Sinterklaas en de kerstman weer bijna voor de deur staan! Mét cadeautjes uiteraard. Om de Sint en de kerstman te laten weten wat je graag zou willen hebben kun je op deze website een verlanglijstje maken. Wij wensen je een geweldige decembermaand toe!</p><br><br>
            <h4>Sint en de kerstman</h4>
            <div class="buttons">
            <a href='/register' class="menu" id="toRegister"><button type="button" class="btn btn-success">Registeren</button></a>
            <a href='/login' class="menu" id="toLogin"><button type="button" class="btn btn-primary">Inloggen</button></a>
            </div>
        </div>
@endsection