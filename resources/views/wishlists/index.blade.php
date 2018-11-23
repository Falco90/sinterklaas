@extends('layout')

@section('content')
<div class="wrapper">
    <div id="items">
    <ul class="list-group">
      @foreach ($wishlists as $wishlist)
        <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">{{ $wishlist->title }}
          <input type="hidden" id="itemId" value="{{ $wishlist->id }}">
        </li>
      @endforeach
    </ul>
    </div>
</div>
@endsection