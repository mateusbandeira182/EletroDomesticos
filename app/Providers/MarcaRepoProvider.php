<?php

namespace App\Providers;

use App\Repositories\MarcaRepoEnlouquent;
use App\Repositories\MarcaRepoInterface;
use Illuminate\Support\ServiceProvider;

class MarcaRepoProvider extends ServiceProvider
{
    public array $bindings = [
        MarcaRepoInterface::class => MarcaRepoEnlouquent::class,
    ];
}
