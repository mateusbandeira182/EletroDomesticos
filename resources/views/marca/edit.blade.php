<x-layout>
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="card p-4 rounded shadow">
                <div class="card-body">
                    <div class="box-title text-center">
                        <h2 class="fw-bold">Atualizar Marca {{ $marca->nome }}</h2>
                    </div>
                    <form action="{{ route('marcas.update', $marca->id) }}" id="formAtt" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" value="{{ $marca->nome }}">
                        </div>
                        <button class="btn btn-primary btn-lg">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
