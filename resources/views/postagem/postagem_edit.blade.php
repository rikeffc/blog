@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem - EDIT</div>

                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <div class="card-body">
        <form action="{{ url('postagem/' . $postagem->id)}}" method="POST">
            @method('PUT')
            @csrf

            <select name="categoria_id" class="form-control">
                @foreach ($categorias as $value)


                @if ($value->id == $postagem->categoria_id)
                <option selected value="{{$value->id}}">{{$value->nome}}</option>
                @else
                <option value="{{$value->id}}">{{$value->nome}}</option>
                @endif

                @endforeach
            </select>
            <label>Título:</label>
            <input type="text" value="{{ $postagem->titulo }}" name="título" id="título"  class="form-control">

              </select>

            <label>Descrição:</label>
            <textarea id="descricao" name="story" rows="5" cols="33" class="form-control">
                {{ $postagem->descricao }}

                </textarea>
        </div>
            <button type="submit" class="btn btn-success">Salvar</button>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
