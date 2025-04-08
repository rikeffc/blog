@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem</div>
                <script>
                    function confirmDelete() {
                        return confirm('Tem certeza que deseja apagar esta postagem?');
                    }
                </script>



                <div class="card-body">

                    <a class="btn btn-success" href="{{ url('postagem/create')}}">CRIAR</a>

                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table">
                        <tr>
                          <th>ID</th>
                          <th>Categoria</th>
                          <th>título</th>
                          <th>Ações</th>
                        </tr>

                       @foreach ( $postagens as $value )
                       <tr>
                        <td>{{$value->id}}</td>
                        <td>{{($value->categoria)->nome}}</td>
                        <td>{{$value->titulo}}</td>

                        <td>
                            <a class="btn btn-info" href="{{ url('postagem/' . $value->id)}}">Visualizar</a>
                        <a class="btn btn-warning" href="{{ url('postagem/' . $value->id. '/edit') }}">Editar</a>
                        <form action="{{ url('postagem/' . $value->id) }}" method="POST" onsubmit='return confirmDelete()' style="display:inline;">

                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Apagar</button>
                        </form>

                        </td>
                      </tr>
                       @endforeach

                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
