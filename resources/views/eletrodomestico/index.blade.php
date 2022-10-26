<x-layout :mensagem-sucesso="$mensagemSucesso">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="box-title text-center mt-5">
                <h3 class="fw-bold">Todas os Eletrodomésticos</h3>
            </div>
        </div>
        @foreach($eletrodomesticos as $eletrodomestico)
            <div class="col-10">
                <div class="card p-4 rounded shadow mt-3">
                    <div class="card-body d-flex justify-content-between">
                        <span id="item">
                            <h4 class="fw-bold mb-2"><a href="{{ route('eletrodomesticos.show', $eletrodomestico->id) }}" class="text-decoration-none">{{ $eletrodomestico->nome }}</a></h4>
                            <p class="mb-0">{{ $eletrodomestico->marca->nome }}</p>
                        </span>
                        <span id="buttons" class="d-flex align-items-center">
                            <a href="{{ route('eletrodomesticos.edit', $eletrodomestico->id) }}" class="btn btn-secondary me-2">Editar</a>
                            <form action="{{ route('eletrodomesticos.destroy', $eletrodomestico->id) }}" id="formDel" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Excluir</button>
                            </form>
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
