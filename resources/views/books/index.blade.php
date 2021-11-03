@extends('layout')

@section('title')
    Catálogo
@endsection

@section('conteudo')
    <div class="container">
        @if(!empty($mensagem))
        <div class="alert alert-success mt-4">
            {{ $mensagem }}
        </div>
        @endif

        <div class="row row-cols-1 row-cols-md-4 g-4 my-1">
            @foreach ($books as $book)
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= $book->img; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $book->nome; ?></h5>
                                <p class="card-text"><?= $book->autor; ?></p>
                                <form method="post" action="/livros/{{ $book->id }}"
                                        onsubmit="return confirm('Tem certeza que deseja remover este livro?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
