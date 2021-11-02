@extends('layout')

@section('title')
    Adicionar Livro
@endsection

@section('conteudo')
    <div class="container mt-3">
        <form method="post">
            @csrf
            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título do Livro">
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
