@extends('layout')

@section('title')
    Catálogo
@endsection

@section('conteudo')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-1">
            @foreach ($books as $book => $desc)
                    <div class="col">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $book; ?></h5>
                                <p class="card-text"><?= $desc; ?></p>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
