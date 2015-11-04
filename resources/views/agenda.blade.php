@extends('layout')

@section('content')
    
    <?php foreach ($pessoas as $pessoa) { ?>
        
        <div class="col-md-6">
            @include('partials.contato')
        </div>
    <?php }?>
    
    
@endsection