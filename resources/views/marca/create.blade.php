<x-layout>
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="card p-4 rounded shadow">
                <div class="card-body">
                    <div class="box-title text-center">
                        <h2 class="fw-bold">Cadastro de Marcas</h2>
                    </div>
                    <form action="{{ route('marcas.store') }}" id="formCad" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}">
                        </div>
                        <button class="btn btn-primary btn-lg">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
