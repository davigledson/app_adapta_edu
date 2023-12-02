@extends('app._partials.topo')
@section('conteudo')



<div class="relative overflow-x-auto">
    <div class="flex justify-center py-4">
        <a href="{{route('livros.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cadastrar</a>
    </div>


    <table class="w-full text-sm text-left rtl:text-right text-gray-500 white:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                 </th>
                   <th scope="col" class="px-6 py-3">
                    Imagem
                 </th>
                <th scope="col" class="px-6 py-3">
                   titulo
                </th>
                <th scope="col" class="px-6 py-3">
                   Link do Livro
                </th>
                
                <th scope="col" class="px-6 py-3">
                    Editar
                </th>
                <th scope="col" class="px-6 py-3">
                   Excluir
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
                @foreach ($livros as $livro)
                    
               
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap white:text-white"> 
                    
                        {{$livro->id}}

                </th>
                <td class="px-6 py-4">
                    <img src="{{asset('storage/'.$livro->arquivo)}}" width="200" height="200" alt="">
                </td>
                <td class="px-6 py-4">
                    {{$livro->titulo}}
                </td>
                <td class="px-6 py-4">
                    {{$livro->link}}
                </td>
                
               
                
                <td class="px-6 py-4">
                    <a href="{{route('livros.edit',['livro'=>$livro->id])}}">editar</a>
                    
                </td>
                <td class="px-6 py-4">
                    <form id="form_{{$livro->id}}" method="POST" action="{{route('livros.destroy',[
                        'livro'=>$livro->id
                    ])}}
                    ">
                    @method('DELETE')
                    @csrf
                    <a href="#" onclick="document.getElementById('form_{{$livro->id}}').submit()">
                        Excluir
                    </a>
                        
                </form>
                  
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


 @endsection
