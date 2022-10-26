<?php

namespace App\Providers;

use App\Repositories\EletrodomesticoRepoEnlouquent;
use App\Repositories\EletrodomesticoRepoInterface;
use Illuminate\Support\ServiceProvider;

class EletrodomesticoRepoProvider extends ServiceProvider
{
    public array $bindings = [
        EletrodomesticoRepoInterface::class => EletrodomesticoRepoEnlouquent::class,
    ];
}
