@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria - Show</div>

                <div class="card-body">
                  <p><strong>Id: </strong>{{ $categoria->id }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
