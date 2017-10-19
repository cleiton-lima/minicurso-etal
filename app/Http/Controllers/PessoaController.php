<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;


class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('index', compact('pessoas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $dados = $request->all();
       Pessoa::create($dados);
       return back()->with(['success' => 'Pessoa cadastrada com sucesso!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //findOrFail funciona como uma consulta com where
        $pessoa = Pessoa::findOrFail($id);
        return view('edit', compact('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pessoa = $request->all();

        $id = Pessoa::findOrFail($id);
        $id->update($pessoa);
        // return back()->with(['success' => 'Pessoa cadastrada com sucesso!']);
        return back()->with(['success' => 'Pessoa editada com sucesso!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa_delete = Pessoa::findOrFail($id);
        $pessoa_delete->delete($id);

        return back()->with(['success' => 'Cliente deletado com sucesso!']);
    }
}
