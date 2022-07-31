<x-template>
    <div class="container">
        <div class="jumbotron">
            <h1>Editar Area</h1>
        </div>
        <div class="container-fluid">
            <form action="{{ route('area.update', $area->id)}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $area->id }}"/>
            <label for="nome_area" class="control-label">Nome</label>
            <input value="{{ $area->nome_area }}" type="text" class="form-control" placeholder="Nome da area" name="nome_area">

            <label for="descricao_area" class="mt-5 control-label">Descrição</label>
            <input value="{{ $area->descricao_area }}" type="text" class="form-control" placeholder="Uma breve descrição sobre a area" name="descricao_area">
            <button type="submit" class="mt-5 btn btn-primary">Editar</button>
        </form>
        </div>
    </div>
</x-template>