$(function () {
  $('[data-toggle="tooltip"]').tooltip();
    //confirm bootstrap telefones
    $('a#telDel').click('show.bs.modal', function(e) {
        var URL = $(this).attr('data'); 
        var reles = $(this).attr('reles');
        console.log(URL);
        $('a.btn.btn-danger.btn-ok').click(function(){

                $.get(URL, function(data, status){
                   if(data == '1' && status == 'success'){
                       //alert("Data: " + data + "\nStatus: " + status);
                        $("#confirm-delete").modal("hide");
                        var TR = "tr#telDel"+reles;
                        console.log(TR);
                        $(TR).html("");
                   } else {
                       $('div.modal-body').html('<div class="alert alert-danger" role="alert">Ocorreu um erro ao apagar este telefone.</div>');
                   }


                });
        });

    });
});