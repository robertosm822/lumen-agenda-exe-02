
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{{$pessoa->apelido }}</h3>
  </div>
  <div class="panel-body">
        <h1>{{ $pessoa->nome }}</h1>
      <table class="table table-hover">
          @foreach($pessoa->telefones as $telefone)
          <tr>
              <td>{{ $telefone->descricao}}</td>
              <td>{{$telefone->codpais }} {{ $telefone->ddd }} {{ $telefone->prefixo}} {{$telefone->sufixo}}</td>
              <td> <a href="#" class="text-danger"><i class="fa fa-minus-circle"></i></a> </td>
          </tr>
          @endforeach
          
      </table>
  </div>
</div>