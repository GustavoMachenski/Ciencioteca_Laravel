<x-template>
    
    <div class="container">
        <div class="jumbotron">
            <h1>Gestão de Subarea</h1>
        </div>
        <div class="container-fluid">
            <a href="/subarea/cadastrar"><button class="btn btn-primary">Inserir nova Subarea</button></a>
            <div class="container-fluid">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome Subarea</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Área</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    
                    @foreach ($subareas as $subarea)

                    <tbody>
                        <tr>
                            <td>{{ $subarea->id }}</td>
                            <td>{{ $subarea->nome_subarea }}</td>
                            <td>{{ $subarea->descricao_subarea }}</td>
                            <td>{{ $subarea->nome_area }}</td>
                            <td>
                                <span class="d-flex">
                                <a href="{{ route('subarea.edit', $subarea->id) }}" class="btn btn-default mx-3">EDITAR</a>
                                <form action="{{ route('subarea.delete', $subarea->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Tem certeza que quer excluir subarea?')">EXCLUIR</button>
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