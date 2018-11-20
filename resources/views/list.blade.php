<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Verlanglijstje</title>
  </head>
  <body>
    <h1>Verlanglijstje</h1>
    <ul class="list-group">
        <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Cras justo odio</li>
        <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Dapibus ac facilisis in</li>
        <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Morbi leo risus</li>
        <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Porta ac consectetur ac</li>
        <li class="list-group-item ourItem" data-toggle="modal" data-target="#exampleModal">Vestibulum at eros</li>
      </ul>

      

      <div class="modal" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="title">New item</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p><input type="text" placeholder="Write new item here" id="addItem" class="form-control"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" id="delete" data-dismiss="modal" style="display:none">Delete</button>
              <button type="button" class="btn btn-primary" id="saveChanges" style="display:none">Save changes</button>
              <button type="button" class="btn btn-primary" id="addButton">Add new item</button>
            </div>
          </div>
        </div>
      </div>

      <button type="button" class="btn btn-success" id="addNew" data-toggle="modal" data-target="#exampleModal">Add new item</button>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        $('.ourItem').each(function() {
            $(this).click(function(event) {
                var text = $(this).text();
                $('#title').text('Edit item');
                $('#delete').show('400');
                $('#saveChanges').show('400');
                $('#addButton').hide();
                $('#addItem').val(text);
                console.log(text);
            });
        });

            $('#addNew').click(function(event) {
                $('#title').text('Add new item');
                $('#delete').hide('400');
                $('#saveChanges').hide('400');
                $('#addButton').show('400');
                $('#addItem').val("");
            });
       
    });
    </script>
  </body>
</html>