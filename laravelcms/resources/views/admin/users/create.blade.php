@extends('adminlte::page')

@section('title', 'Novo Usuário')

@section('content_header')
    <h1>Novo Usuário</h1>
@endsection

@section('content')
    
    <div class="card card-info">
        @if($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5>
                <i class="icon fas fa-ban"></i>
                Alert !
            </h5>
            <ul>
            @foreach($errors->all() as $error)        
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
        @endif
        <form class="form-horizontal" action="{{route('users.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nome Completo:</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputEmail13" placeholder="Nome Completo" value="{{old('name')}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">E-mail:</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail13" placeholder="Email" value="{{old('email')}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Senha:</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="inputEmail13" placeholder="Senha">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Confirmar Senha:</label>
                    <div class="col-sm-10">
                        <input type="password" name="password_confirmation" class="form-control" id="inputEmail13" placeholder="Confirmar senha">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="submit" value="Cadastrar" class="btn btn-success">
                    </div>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </form>
    </div>

@endsection
