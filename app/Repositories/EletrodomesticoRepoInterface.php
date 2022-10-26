<?php

namespace App\Repositories;

use App\Http\Requests\EletrodomesticoFormRequest;

interface EletrodomesticoRepoInterface
{
    public function add(EletrodomesticoFormRequest $request);

    public function all();
}
