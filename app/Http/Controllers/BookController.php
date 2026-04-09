<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //BOOKS ARRAY
    private $books = [
        [
            "id" => 1,
            "title" => "Operating System Concepts",
            "edition" => "9th",
            "copyright" => 2012,
            "language" => "ENGLISH",
            "pages" => 976,
            "author" => "Abraham Silberschatz",
            "author_id" => 1,
            "publisher" => "John Wiley & Sons",
            "publisher_id" => 1
        ],
         [
            "id" => 2,
            "title" => "Database System Concepts",
            "edition" => "6th",
            "copyright" => 2010,
            "language" => "ENGLISH",
            "pages" => 1376,
            "author" => "Abraham Silberschatz",
            "author_id" => 1,
            "publisher" => "John Wiley & Sons",
            "publisher_id" => 1
        ],
        [
            "id" => 3,
            "title" => "Computer Networks",
            "edition" => "5th",
            "copyright" => 2010,
            "language" => "ENGLISH",
            "pages" => 960,
            "author" => "Andrew S. Tanenbaum",
            "author_id" => 2,
            "publisher" => "Pearson Education",
            "publisher_id" => 2
        ],
        [
            "id" => 4,
            "title" => "Modern Operating Systems",
            "edition" => "4th",
            "copyright" => 2014,
            "language" => "ENGLISH",
            "pages" => 1136,
            "author" => "Andrew S. Tanenbaum",
            "author_id" => 2,
            "publisher" => "Pearson Education",
            "publisher_id" => 2
        ]
    ];
    // Books list
    public function index()
    {
        return view('books.index', [
            'books' => $this->books
        ]);
    }

    // Book details
    public function show($id)
    {
         foreach ($this->books as $book) {
            if ($book["id"] == $id) {
                return view('books.show', [
                    'book' => $book
                ]);
            }
        }
        return "Libro no encontrado";
    }
    
}