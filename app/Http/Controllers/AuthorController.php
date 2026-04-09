<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // AUTHORS ARRAY
    private $authors = [
        [
            "id" => 1,
            "name" => "Abraham Silberschatz",
            "nationality" => "Israelis / American",
            "birth_year" => 1952,
            "fields" => "Database Systems, Operating Systems"
        ],
        [
            "id" => 2,
            "name" => "Andrew S. Tanenbaum",
            "nationality" => "Dutch / American",
            "birth_year" => 1944,
            "fields" => "Distributed computing, Operating Systems"
        ]
    ];

    //BOOKS ARRAY
    private $books = [
        [
            "id" => 1,
            "title" => "Operating System Concepts",
            "author" => "Abraham Silberschatz",
            "author_id" => 1,

        ],
         [
            "id" => 2,
            "title" => "Database System Concepts",
            "author" => "Abraham Silberschatz",
            "author_id" => 1,

        ],
        [
            "id" => 3,
            "title" => "Computer Networks",
            "author" => "Andrew S. Tanenbaum",
            "author_id" => 2,
        ],
        [
            "id" => 4,
            "title" => "Modern Operating Systems",
            "author" => "Andrew S. Tanenbaum",
            "author_id" => 2,
        ]
    ];

    // Authors list
    public function index()
    {
       return view('authors.index', [
            'authors' => $this->authors
        ]);
    }
    // Author details
    public function show($id)
    {
        $authorFound = null;

        // Search for the author by ID
        foreach ($this->authors as $author) {

            if ($author["id"] == $id) {
                $authorFound = $author;
                break;
            }

        }
        if (!$authorFound) {
            return "Autor no encontrado";
        }

        // Search for books by the author
        $booksByAuthor = [];

        foreach ($this->books as $book) {

            if ($book["author_id"] == $id) {

                $booksByAuthor[] = [
                "id" => $book["id"],
                "title" => $book["title"]
                ];
            }
        }
        return view('authors.show', [
            'author' => $authorFound,
            'books' => $booksByAuthor
        ]);
    }

   
}
