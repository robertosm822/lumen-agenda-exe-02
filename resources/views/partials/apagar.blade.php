@extends('layout')

@section('content')
    <form class="form-horizontal" role="form" method="GET" action="{{ "../".$pessoa->id."/destroy" }}">
        <input type="hidden" name="_method" value="DELETE">
        <div class="panel panel-default">
            <div class="panel-heading">
                Apagar Pessoa
            </div>
            <div class="panel-body">
                <div class="alert alert-danger" role="alert">
                    <p>Tem certeza que pretende apagar a pessoa: <del>{{ $pessoa->nome }}</del>?</p>
                </div>
            </div>
            <div class="panel-footer">
                <button type="submit" class="btn btn-sm btn-danger btn-addon"><i class="glyphicon glyphicon-ok"></i>Apagar</button>
                <a href="{{ route('agenda') }}" class="btn btn-default btn-sm btn-addon"><i class="glyphicon glyphicon-remove"></i>Cancelar</a>
            </div>
        </div>
    </form>
@endsection

