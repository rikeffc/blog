@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria - CREATE</div>

                <div class="card-body">
        <form action="{{ url('categoria')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" id="nome"  class="form-control" >
            </div>
                <button type="submit" class="btn btn-success">Salvar</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
