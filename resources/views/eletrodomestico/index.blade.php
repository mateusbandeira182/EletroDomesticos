<x-layout :mensagem-sucesso="$mensagemSucesso">
    <div class="row justify-content-center mt-5">
        <div class="col-10">
            <div class="box-title text-center mt-5">
                <h3 class="fw-bold">Todas os Eletrodomésticos</h3>
            </div>
        </div>
        @foreach($eletrodomesticos as $eletrodomestico)
            <div class="col-10">
                <div class="card p-4 rounded shadow">
                    <div class="card-body">
                        <h4 class="fw-bold mb-2"><a href="{{ route('eletrodomesticos.show', $eletrodomestico->id) }}">{{ $eletrodomestico->nome }}</a></h4>
                        <p class="mb-0">{{ $eletrodomestico->marca->nome }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
