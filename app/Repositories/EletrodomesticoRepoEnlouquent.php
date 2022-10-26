<?php

namespace App\Repositories;

use App\Http\Requests\EletrodomesticoFormRequest;
use App\Models\Eletrodomestico;
use Illuminate\Support\Facades\DB;

class EletrodomesticoRepoEnlouquent implements EletrodomesticoRepoInterface
{

    public function add(EletrodomesticoFormRequest $request)
    {
        return DB::transaction(function () use ($request) {
            $eletrodomestico = Eletrodomestico::create($request->all());
            return $eletrodomestico;
        });
    }

    public function all()
    {
        return DB::transaction(function() {
            return Eletrodomestico::all();
        });
    }
}
