<x-layout>
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="card p-4 rounded shadow">
                <div class="card-body">
                    <div class="box-title text-center">
                        <h2 class="fw-bold">Cadastro de Eletrodoméstico</h2>
                    </div>
                    <form action="{{ route('eletrodomesticos.store') }}" id="formCad" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}">
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea name="descricao" id="descricao" rows="5" class="form-control">{{ old('descricao') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tensao" class="form-label">Tensão</label>
                            <select name="tensao" id="tensao" class="form-select">
                                <option selected>Selecione uma opção</option>
                                <option value="110">110V</option>
                                <option value="220">220V</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="marca_id" class="form-label">Marca</label>
                            <select name="marca_id" id="marca_id" class="form-select">
                                <option selected>Selecione uma marca</option>
                                @foreach($marcas as $marca)
                                    <option value="{{ $marca->id }}">{{ $marca->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary btn-lg">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
