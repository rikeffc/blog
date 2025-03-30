@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem - CREATE</div>

                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        <form action="{{ url('postagem')}}" method="POST">
            @csrf

                <select name="categoria_id" class="form-control">
                    @foreach ($categorias as $value)
                    <option value="{{$value->id}}">{{$value->nome}}</option>

                    @endforeach
                </select>
                <label>Título:</label>
                <input type="text" name="título" id="título"  class="form-control">

                  </select>

                <label>Descrição:</label>
                <textarea id="descricao" name="story" rows="5" cols="33" class="form-control">

                    </textarea>
            </div>
                <button type="submit" class="btn btn-success">Salvar</button>
                </select>
        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
