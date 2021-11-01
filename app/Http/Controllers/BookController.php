<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = [
            'A menina que roubava Livros' => 'The Book Thief é um drama do escritor australiano Markus Zusak, publicado em 2005 pela editora Picador. No Brasil e em Portugal, foi lançado pela Intrínseca e a Presença, respetivamente. O livro é sobre Liesel Meminger, uma garota que encontra a Morte três vezes durante 1939–43 na Alemanha nazista.',
            'A cabana' => 'Um homem vive atormentado após perder a sua filha mais nova, cujo corpo nunca foi encontrado, mas sinais de que ela teria sido violentada e assassinada são encontrados em uma cabana nas montanhas. Anos depois da tragédia, ele recebe um chamado misterioso para retornar a esse local, onde ele vai receber uma lição de vida.',
            'Pais e Filhos' => 'Pais e Filhos é a obra-prima do escritor russo Ivan Turguêniev, publicada originalmente em 1862, uma época de grande perturbação social e política em seu país.'
        ];

        return view('books.index', [
            'books' => $books,
        ]);
    }

    public function create()
    {
        return view('books.create');
    }
}
