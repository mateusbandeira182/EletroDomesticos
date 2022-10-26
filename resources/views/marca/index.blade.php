<x-layout :mensagem-sucesso="$mensagemSucesso">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="box-title text-center mt-5">
                <h3 class="fw-bold">Todas as marcas</h3>
            </div>
        </div>
        @foreach($marcas as $marca)
            <div class="col-10">
                <div class="card p-2 rounded shadow mt-3">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <span id="title">
                            <h5 class="fw-bold mb-0">{{ $marca->nome }}</h5>
                        </span>
                        <span id="buttons" class="d-flex">
                            <a href="{{ route('marcas.edit', $marca->id) }}" class="btn btn-info me-2">Editar</a>
                            <form action="{{ route('marcas.destroy', $marca->id) }}" id="formdelete" method="post">
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
