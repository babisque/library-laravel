<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::query()->orderBy('nome')->get();

        $mensagem = $request->session()->get('mensagem');
        $request->session()->remove('mensagem');

        return view('books.index', [
            'books' => $books,
            'mensagem' => $mensagem
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
        $autor = $request->get('autor');
        $ano = $request->get('ano');
        $sinopse = $request->get('sinopse');

        $book = Book::create([
            'nome' => $nome,
            'img' => $img,
            'autor' => $autor,
            'ano' => $ano,
            'sinopse' => $sinopse,
        ]);

        $request
            ->session()
            ->flash('mensagem', "Livro {$book->nome} adiconado com sucesso.");

        return redirect()->route('listar_livros');
    }

    public function destroy(Request $request)
    {
        Book::destroy($request->id);

        $request
            ->session()
            ->flash('mensagem', "Livro deletado com sucesso");

        return redirect()->route('listar_livros');
    }
}
