<x-template>
    
    <div class="container">
        <div class="jumbotron">
            <h1>Gestão de Area</h1>
        </div>
        <div class="container-fluid">
            <a href="/area/cadastrar"><button class="btn btn-primary">Inserir nova Area</button></a>
            <div class="container-fluid">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome Área</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    @foreach ($areas as $area)
                    <tbody>
                        <tr>
                            <td>{{ $area->id }}</td>
                            <td>{{ $area->nome_area }}</td>
                            <td>{{ $area->descricao_area }}</td>
                            <td>
                                <span class="d-flex">
                                <a href="{{ route('area.edit', $area->id) }}" class="btn btn-default mx-3">EDITAR</a>
                                <form action="{{ route('area.delete', $area->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Tem certeza que quer excluir área?')">EXCLUIR</button>
                                </form>
                                </span>
                            </td>
                            
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-template>