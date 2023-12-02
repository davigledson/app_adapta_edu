@extends('app._partials.topo')
@section('conteudo')

@if (isset($livro))
@component('app.livros._components.form_create_edit',[
    
'livro' => $livro


])   
@else
@component('app.livros._components.form_create_edit',[
    
]) 
@endif

    
@endcomponent


  

 @endsection
