
$(function(){
 $(document).on('click', '.showModalButton', function(){

   if ($('#modal').hasClass('in')) {
        $('#modal').find('#modalContent')
                .load($(this).attr('value'));
        document.getElementsByClassName('modal-header').innerHTML = '<h4>'  + $(this).attr('titulo-modal') + '</h4>';
    } else {
      $('#modal').modal('show')
                .find('#modalContent')
                .load($(this).attr('value'));
        document.getElementById('titulo').innerHTML = '<h4> '  + $(this).attr('titulo-modal') + ' </h4>';
   }
});

});
