<?php

namespace App\Repositories;

use App\Http\Requests\MarcaFormRequest;

interface MarcaRepoInterface
{
    public function add(MarcaFormRequest $request);

    public function all();
}
