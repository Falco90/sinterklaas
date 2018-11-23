$(document).ready(function() {
    $(document).on('click', '.ourItem', function(event) {
        var text = $(this).text();
        var id = $(this).find('#wishlistId').val();
        $('#title').text('Verlanglijstje aanpassen');
        $('#delete').show('400');
        $('#saveChanges').show('400');
        $('#addButton').hide();
        var text = $.trim(text);
        $('#addItem').val(text);
        $('#id').val(id);
        console.log(text);
        console.log(id);
    });
    $(document).on('click', '#addNew', function(event) {
        $('#title').text('Voeg nieuw verlanglijstje toe');
        $('#delete').hide('400');
        $('#saveChanges').hide('400');
        $('#addButton').show('400');
        $('#addItem').val("");
    });
    
    $('#addButton').click(function(event) {
        var text = $('#addItem').val();
        if (text == "") {
          alert('Je hebt niets ingevuld');
        } else {
            console.log('hoi');
        $.post('/wishlists', {'text': text, '_token':$('input[name=_token]').val()}, function(data) {
          console.log(data);
          $('#items').load(location.href + ' #items');
        }).fail(function(e){console.log(e)
        });
        }
    });
    
    $('#delete').click(function(event) {
        var id = $('#id').val();
        $.post('delete', {'id': id, '_token':$('input[name=_token]').val()}, function(data) {
          $('#items').load(location.href + ' #items');
          console.log(data);
        });
    });
    
    $('#saveChanges').click(function(event) {
        var id = $('#id').val();
        var value = $('#addItem').val();
        $.post('update', {'id': id, 'value': value, '_token':$('input[name=_token]').val()}, function(data) {
          $('#items').load(location.href + ' #items');
          console.log(data);
        });
    });
    }); 