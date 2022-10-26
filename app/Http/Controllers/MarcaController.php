<?php

namespace App\Http\Controllers;

use App\Http\Requests\MarcaFormRequest;
use App\Models\Marca;
use App\Repositories\MarcaRepoInterface;
use Illuminate\Http\Request;

class MarcaController extends Controller
{

    public function __construct(private MarcaRepoInterface $marcaRepo)
    {}

    public function index()
    {
        $mensagemSucesso = session('mensagem.sucesso');
        $marcas = $this->marcaRepo->all();
        return view('marca.index')
            ->with('marcas', $marcas)
            ->with('mensagemSucesso', $mensagemSucesso);
    }


    public function create()
    {
        return view('marca.create');
    }


    public function store(MarcaFormRequest $request)
    {
        $marca = $this->marcaRepo->add($request);
        return to_route('marcas.index')->with('mensagem.sucesso', "Marca '{$marca->nome}' cadastrada com sucesso");
    }

    public function edit(Marca $marca)
    {
        return view('marca.edit')->with('marca', $marca);
    }

    public function update(MarcaFormRequest $request, Marca $marca)
    {
        $marca->fill($request->all());
        $marca->save();
        return to_route('marcas.index')->with('mensagem.sucesso', "Marca '{$marca->nome}' atualizada com sucesso");
    }

    public function destroy(Marca $marca)
    {
        $marca->delete();
        return to_route('marcas.index')->with('mensagem.sucesso', "Marca '{$marca->nome}' removida com sucesso");
    }
}
