<x-layout>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card p-4 rounded shadow">
                <div class="card-body">
                    <div class="box-eletro">
                        <h4 class="fw-bold mb-3">{{ $eletrodomestico->nome }}</h4>
                        <p>{{ $eletrodomestico->descricao }}</p>
                        <p>{{ $eletrodomestico->tensao }} V</p>
                        <p>{{ $eletrodomestico->marca->nome }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
