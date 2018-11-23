@extends('layout')
@section('content')
<?php Session::put('wishlist_id', $wishlist->id); ?>
<div class="wrapper">
  <h3 id="listTitle">{{ $wishlist->title }}</h3>
    <div id="items">
    <ul class="list-group">
      @foreach ($wishlist->items as $item)
        <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">{{ $item->item }}
          <input type="hidden" id="itemId" value="{{ $item->id }}">
        </li>
      @endforeach
    </ul>
  </div>
  <p>Gebruik de onderstaande link om je verlanglijstje te delen:<br>
    {{ $_SERVER['SERVER_NAME'] }}/wishlists/{{ $wishlist->id}}/edit</p><br><br>
    <button type="button" class="btn btn-success" id="addNew" data-toggle="modal" data-target="#exampleModal">Voeg nieuwe wens toe</button>  
      <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="title">Nieuwe wens</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" id="id">
              <p><input type="text" placeholder="Schrijf hier een nieuwe wens" id="addItem" class="form-control"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" id="delete" data-dismiss="modal" style="display:none">Verwijderen</button>
              <button type="button" class="btn btn-primary" id="saveChanges" data-dismiss="modal" style="display:none">Opslaan</button>
              <button type="button" class="btn btn-primary" id="addButton" data-dismiss="modal">Voeg nieuwe wens toe</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
{{ csrf_field() }}
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
  </body>
</html>
