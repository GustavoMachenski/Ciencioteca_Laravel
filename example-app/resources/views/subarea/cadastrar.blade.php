<x-template>
    <div class="container">
        <div class="jumbotron">
            <h1>Cadastrar Subarea</h1>
        </div>
        <div class="container-fluid">
            <form action="/subarea/salvar" method="post">
            @csrf
            <label for="nome_subarea" class="control-label">Nome</label>
            <input type="text" class="form-control" placeholder="Nome da subarea" name="nome_subarea">

            <label for="descricao_subarea" class="mt-5 control-label">Descrição</label>
            <input type="text" class="form-control" placeholder="Uma breve descrição sobre a subarea" name="descricao_subarea">
            
            <label class="mt-5" for="area">Selecione a area:</label>
            <select name="area_id" id="area_id" class="form-control">
                @foreach($areas as $area)
                    <option value="{{$area->id}}">{{$area->nome_area}}</option>
                @endforeach
            </select>

            <button type="submit" class="mt-5 btn btn-primary">Cadastrar</button>
        </form>
        </div>
    </div>
</x-template>