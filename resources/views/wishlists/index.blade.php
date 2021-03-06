@extends('layout')
@section('content')
<div class="wrapper">
  <h3 id="listTitle">{{ Auth::user()->name }}'s verlanglijstjes</h3>
  <div id="items">
    <ul class="list-group">
      @foreach ($wishlists as $wishlist)
      <li class="list-group-item ourItem" onclick="location.href='/wishlists/{{ $wishlist->id }}/edit'" id="toList"><!--<button type="button" class="btn btn-primary" class="show" data-dismiss="modal">Aanpassen</button>-->{{ $wishlist->title }}
          <input type="hidden" id="wishlistId" value="{{ $wishlist->id }}">
        </li>
      @endforeach
    </ul>
  </div>
    <button type="button" class="btn btn-success" id="addNew" data-toggle="modal" data-target="#exampleModal">Voeg nieuw verlanglijstje toe</button>  
      <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="title">Nieuw verlanglijstje</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" id="id">
              <p><input type="text" placeholder="Naam verlanglijstje" id="addItem" class="form-control"></p>
            </div>
            <div class="modal-footer">
                 
                <button type="button" class="btn btn-secondary" id="delete" data-dismiss="modal" style="display:none">Verwijderen</button>
                <button type="button" class="btn btn-primary" id="saveChanges" data-dismiss="modal" style="display:none">Opslaan</button>
                <button type="button" class="btn btn-primary" id="addButton" data-dismiss="modal">Voeg nieuw verlanglijstje toe</button>
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
    <script type="text/javascript" src="{{ URL::asset('js/wishlist.js') }}"></script>
 
  </body>
</html>
