
@if(isset($video->id))
<form method="post" class="max-w-md mx-auto p-4" action="{{route('videos.update',['video'=> $video->id])}}">

@method('PUT')
@csrf

@else

<form class="max-w-md mx-auto p-4" action="{{route('videos.store')}}" method="POST">
@endif


    @csrf
    <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="link" value='{{$video->link ?? old('link')}}'   id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-dark dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">link do iframe do yotube</label>
    </div>
   
    
<label for="message"   class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark">texto relacionado ao video</label>
<textarea id="message" rows="4" name="texto" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 white:bg-gray-700 dark:border-gray-600 white:placeholder-gray-400 dark:text-dark white:focus:ring-blue-500 white:focus:border-blue-500" placeholder="texto relacionado ao video">
    {{$video->texto ?? old('texto')}}
</textarea>

  
@if(isset($video->id))
<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Atualizar</button>

@else
<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Cadastrar</button>
@endif
  
    
  </form>