@extends('layout')

@section('content')
        <div class="wrapper">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <h3>Beste {{ Auth::user()->name }},</h3>
            <p>De decembermaand is weer (bijna) aangebroken. Dat betekent dat Sinterklaas en de kerstman weer bijna voor de deur staan! Mét cadeautjes uiteraard. Om de Sint en de kerstman te laten weten wat je graag zou willen hebben kun je op deze website een verlanglijstje maken. Wij wensen je een geweldige decembermaand toe!</p><br><br>
            <h4>Sint en de kerstman</h4>
            <a href='/list' class="menu" id="toList"><button type="button" class="btn btn-success">Verlanglijstje maken</button></a>
        </div>
@endsection
