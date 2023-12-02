<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\livro;
use Illuminate\Support\Facades\Storage;
class livroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = livro::all();
        return view('site.livros',[
            'livros' => $livros 
        ]);
       
    }
   

    public function tabela()
    {
        //
        $livros = livro::all();
        return view('app.livros.tabela',[
            'livros' => $livros 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('app.livros.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    
        $arquivo = $request->file('arquivo');
        $arquivo_urn = $arquivo->store('imagens','public');
          livro::create([
            'titulo' =>$request->titulo,
            'link' =>$request->link,
            'arquivo' => $arquivo_urn,
          ]);
        return redirect()->route('app.livro.tabela');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $livro = livro::find($id);
        return view('app.livros.create_edit',[
            'livro' => $livro
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, livro $livro)
    {
        //
        //$livro->update($request->all());
        Storage::disk('public')->delete($livro->arquivo);

        $arquivo = $request->file('arquivo');
       $arquivo_urn = $arquivo->store('imagens','public');
       $livro->arquivo = $arquivo_urn;

       $livro->update([
            'titulo' =>$request->titulo,
            'link' =>$request->link,
            'arquivo' => $arquivo_urn,
             ]);
        return redirect()->route('app.livro.tabela');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(livro $livro)
    {
        //
        Storage::disk('public')->delete($livro->arquivo);
        $livro->delete();
        return redirect()->route('app.livro.tabela');
    }
}
