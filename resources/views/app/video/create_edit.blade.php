@extends('app._partials.topo')
@section('conteudo')

@if (isset($video))
@component('app.video._components.form_create_edit',[
    
'video' => $video


])   
@else
@component('app.video._components.form_create_edit',[
    
]) 
@endif

    
@endcomponent


  

 @endsection
