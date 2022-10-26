<?php

namespace App\Http\Controllers;

use App\Http\Requests\EletrodomesticoFormRequest;
use App\Models\Eletrodomestico;
use App\Repositories\EletrodomesticoRepoInterface;
use App\Repositories\MarcaRepoInterface;
use Illuminate\Http\Request;

class EletrodomesticoController extends Controller
{

    public function __construct(
        private EletrodomesticoRepoInterface $repository,
        private MarcaRepoInterface $marcaRepo
    )
    {}

    public function index()
    {
        $mensagemSucesso = session('mensagem.sucesso');
        $eletrodomesticos = $this->repository->all();
        return view('eletrodomestico.index')
            ->with('eletrodomesticos', $eletrodomesticos)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        $marcas = $this->marcaRepo->all();
        return view('eletrodomestico.create')
            ->with('marcas', $marcas);
    }

    public function store(EletrodomesticoFormRequest $request)
    {
        $eletrodomestico = $this->repository->add($request);
        return to_route('eletrodomesticos.index')
            ->with('mensagem.sucesso', "Eletrodoméstico '{$eletrodomestico->nome}' cadastrado com sucesso");
    }

    public function show(Eletrodomestico $eletrodomestico)
    {
        return view('eletrodomestico.show')->with('eletrodomestico', $eletrodomestico);
    }

    public function edit(Eletrodomestico $eletrodomestico)
    {
        $marcas = $this->marcaRepo->all();
        return view('eletrodomestico.edit')
            ->with('eletrodomestico', $eletrodomestico)
            ->with('marcas', $marcas);
    }

    public function update(EletrodomesticoFormRequest $request, Eletrodomestico $eletrodomestico)
    {
        $eletrodomestico->fill($request->all());
        $eletrodomestico->save();
        return to_route('eletrodomesticos.index')
            ->with('mensagem.sucesso', "Eletrodoméstico '{$eletrodomestico->nome}' atualizado com sucesso");
    }

    public function destroy(Eletrodomestico $eletrodomestico)
    {
        $eletrodomestico->delete();
        return to_route('eletrodomesticos.index')->with('mensagem.sucesso', "Eletrodoméstico '{$eletrodomestico->nome}' removido com sucesso");
    }
}
