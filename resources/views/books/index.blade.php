@extends('layout')

@section('title')
    Catálogo
@endsection

@section('conteudo')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4 my-1">
            @foreach ($books as $book)
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?= $book->img; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $book->nome; ?></h5>
                                <p class="card-text"><?= $book->sinopse; ?></p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
