<x-layout>
    <div class="row justify-content-center mt-5">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="card p-4 rounded shadow">
                <div class="card-body">
                    <div class="box-title text-center">
                        <h2 class="fw-bold">Atualizar Eletrodoméstico {{ $eletrodomestico->nome  }}</h2>
                    </div>
                    <form action="{{ route('eletrodomesticos.update', $eletrodomestico->id) }}" id="formEdit" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" value="{{ $eletrodomestico->nome }}">
                        </div>
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea name="descricao" id="descricao" rows="5" class="form-control">{{ $eletrodomestico->descricao }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tensao" class="form-label">Tensão</label>
                            <select name="tensao" id="tensao" class="form-select">
                                @if($eletrodomestico->tensao === '220')
                                    <option value="110">110V</option>
                                    <option value="220" selected>220V</option>
                                @elseif($eletrodomestico->tensao === '100')
                                    <option value="110" selected>110V</option>
                                    <option value="220">220V</option>
                                @endif
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="marca_id" class="form-label">Marca</label>
                            <select name="marca_id" id="marca_id" class="form-select">
                                @foreach($marcas as $marca)
                                    @if($eletrodomestico->marca_id === $marca->id)
                                        <option value="{{ $marca->id }}" selected>{{ $marca->nome }}</option>
                                    @endif
                                    <option value="{{ $marca->id }}">{{ $marca->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary btn-lg">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
