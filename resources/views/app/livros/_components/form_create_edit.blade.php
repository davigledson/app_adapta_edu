
@if(isset($livro->id))
<form method="post" class="max-w-md mx-auto p-4" action="{{route('livros.update',['livro'=> $livro->id])}}">

@method('PUT')
@csrf

@else

<form class="max-w-md mx-auto p-2 m-4" action="{{route('livros.store')}}" method="POST" enctype="multipart/form-data">
@endif


    @csrf
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="link" value='{{$livro->link ?? old('link')}}'   id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-dark dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">link do livro</label>
    </div>
   
    
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="titulo" value='{{$livro->titulo ?? old('titulo')}}'   id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-dark dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">titulo do livro</label>
    </div>



    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500" for="arquivo">Upload de arquivo</label>
    <input   class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:border-gray-600 dark:placeholder-gray-400 mb-5" id="arquivo" name="arquivo" type="file" accept=".png, .jpg, .jpeg">



    
    


  
@if(isset($livro->id))
<div class="relative z-0 w-full mb-5 group"> 
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-500" for="arquivo">Imagem Atual</label>
<img  src="{{asset('storage/'.$livro->arquivo)}}" width="400" height="400">

</div>

<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Atualizar</button>

@else
<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Cadastrar</button>
@endif
  
    
  </form>