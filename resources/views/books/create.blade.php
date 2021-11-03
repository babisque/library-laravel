@extends('layout')

@section('title')
    Adicionar Livro
@endsection

@section('conteudo')
    <div class="container mt-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título do Livro">
            </div>
            @csrf
            <div class="mb-3">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" class="form-control" name="autor" id="autor" placeholder="Ivan Turguêniev">
            </div>
            @csrf
            <div class="mb-3">
                <label for="ano" class="form-label">Ano</label>
                <input type="text" class="form-control" name="ano" id="ano" placeholder="1883">
            </div>
            @csrf
            <div class="mb-3">
                <label for="img" class="form-label">Imagem</label>
                <input type="url" class="form-control" name="img" id="img" placeholder="https://images-na.ssl-images-amazon.com/images/I/91eXvRufnFL.jpg">
            </div>
            @csrf
            <div class="mb-3">
                <label for="sinopse" class="form-label">Sinopse</label>
                <textarea class="form-control" name="sinopse" id="sinopse" rows="3"></textarea>
            </div>

            <button class="btn btn-primary">Adicionar</button>
        </form>
    </div>
@endsection
