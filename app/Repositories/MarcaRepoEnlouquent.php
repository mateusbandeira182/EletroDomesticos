<?php

namespace App\Repositories;

use App\Http\Requests\MarcaFormRequest;
use App\Models\Marca;
use Illuminate\Support\Facades\DB;

class MarcaRepoEnlouquent implements MarcaRepoInterface
{

    public function add(MarcaFormRequest $request)
    {
        return DB::transaction(function() use ($request) {
            return Marca::create($request->all());
        });
    }

    public function all()
    {
        return DB::transaction(function () {
            return Marca::all();
        });
    }
}
