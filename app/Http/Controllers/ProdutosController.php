<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use Session;
use Illuminate\Support\Facades\Storage;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('produtos.index', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {

            $path = Storage::disk('public')->putFile('produtos',$request->file('imagem'));

            $caminho = $path;

            Produto::create(
            [
                'nome' => $request->nome,
                'descricao' => $request->descricao,
                'preco' => $request->preco,
                'caminho' => $path
            ]);

            Session::flash('message', 'Produto cadastrado com sucesso'); 
            Session::flash('alert-class', 'alert-success'); 

        }
        catch(Exception $err)
        {
            Session::flash('message', $err->getMessage()); 
            Session::flash('alert-class', 'alert-danger'); 
        }
        
        return view('produtos.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);

        return view('produtos.update',['produto' => $produto]);
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
        try
        {
            $produto = Produto::findOrFail($id);

            if($request->file('imagem'))
            {
                $path = Storage::disk('public')->putFile('produtos',$request->file('imagem'));
                $caminho = $path;

                $produto->update(
                    [
                        'id' => $id,
                        'nome' => $request->nome,
                        'descricao' => $request->descricao,
                        'preco' => $request->preco,
                        'caminho' => $path
                    ]);

            }
            else
            {

                $produto->update(
                [
                    'id' => $id,
                    'nome' => $request->nome,
                    'descricao' => $request->descricao,
                    'preco' => $request->preco
                ]);
            }

            Session::flash('message', 'Produto atualizado com sucesso'); 
            Session::flash('alert-class', 'alert-success'); 

        }
        catch(Exception $err)
        {
            Session::flash('message', $err->getMessage()); 
            Session::flash('alert-class', 'alert-danger'); 
        }
        
        return \Redirect::route('edicao_produto', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
