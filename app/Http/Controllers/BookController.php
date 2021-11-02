<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::query()->orderBy('nome')->get();

        return view('books.index', [
            'books' => $books,
        ]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $nome = $request->get('titulo');
        $img = $request->get('img');
        $sinopse = $request->get('sinopse');

        $book = Book::create([
            'nome' => $nome,
            'img' => $img,
            'sinopse' => $sinopse,
        ]);

        return redirect('/livros');
    }
}
