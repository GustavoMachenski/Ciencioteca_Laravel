<x-template>
    <div class="container">
        <div class="jumbotron">
            <h1>Cadastrar Area</h1>
        </div>
        <div class="container-fluid">
            <form action="/area/salvar" method="post">
            @csrf
            <label for="nome_area" class="control-label">Nome</label>
            <input type="text" class="form-control" placeholder="Nome da area" name="nome_area">

            <label for="descricao_area" class="mt-5 control-label">Descrição</label>
            <input type="text" class="form-control" placeholder="Uma breve descrição sobre a area" name="descricao_area">
            <button type="submit" class="mt-5 btn btn-primary">Cadastrar</button>
        </form>
        </div>
    </div>
</x-template>