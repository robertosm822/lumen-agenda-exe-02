
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
        {{$pessoa->apelido}}
        <span class="pull-right">
            <a href="#{{ $pessoa->id }}/editar" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"> <i class="fa fa-edit"></i> </a>
            <a href="{{ $pessoa->id }}/apagar" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar"> <i class="fa fa-minus-circle"></i> </a>
        </span>
    </h3>
  </div>
  <div class="panel-body">
      
        <h3>{{ $pessoa->nome }}</h3>
      <table class="table table-hover">
          @foreach($pessoa->telefones as $telefone)
          <tr id="telDel{{$telefone->id }}">
              <td>{{ $telefone->descricao}}</td>
              <td>{{$telefone->numero }} </td>
              <td> 
                  <a href="#" id="telDel" reles="{{$telefone->id }}" data="{{$telefone->id }}/deltelefone"  data-toggle="modal" data-target="#confirm-delete" class="text-danger" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-minus-circle"></i></a>
                 <!-- onclick="delTelefone({{$telefone->id }});" -->
              </td>
          </tr>
          @endforeach
          
      </table>
  </div>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Apagar Telefone
            </div>
            <div class="modal-body">
                Deseja realmente apagar este Telefone?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>
   