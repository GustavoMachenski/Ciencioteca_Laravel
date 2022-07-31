<x-template>
    <div class="container">
        <div class="jumbotron">
            <h1>Editar Subarea</h1>
        </div>
        <div class="container-fluid">
            <form action="{{ route('subarea.update', $subarea->id)}}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $subarea->id }}"/>
            <label for="nome_subarea" class="control-label">Nome</label>
            <input value="{{ $subarea->nome_subarea }}" type="text" class="form-control" placeholder="Nome da subarea" name="nome_subarea">

            <label for="descricao_subarea" class="mt-5 control-label">Descrição</label>
            <input value="{{ $subarea->descricao_subarea }}" type="text" class="form-control" placeholder="Uma breve descrição sobre a subarea" name="descricao_subarea">
            
            <label for="area" class="mt-5 control-label">Selecione a area:</label>
            <select name="area_id" id="area_id" class="form-control">
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}" @if($subarea->area_id == $area->id) selected="selected" @endif>{{ $area->nome_area }}</option>               
                @endforeach
            </select> 

            <button type="submit" class="mt-5 btn btn-primary">Editar</button>

        </form>
        </div>
    </div>
</x-template>