<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    // PUBLISHERS ARRAY
    private $publishers = [
        [
            "id" => 1,
            "name" => "John Wiley & Sons",
            "country" => "United States",
            "founded" => 1807,
            "genere" => "Academic"
        ],
        [
            "id" => 2,
            "name" => "Pearson Education",
            "country" => "United Kingdom",
            "founded" => 1844,
            "genere" => "Education"
        ]
    ];

    // BOOKS ARRAY
    private $books = [
        [
            "id" => 1,
            "title" => "Operating System Concepts",
            "author_id" => 1,
            "publisher_id" => 1
        ],
        [
            "id" => 2,
            "title" => "Database System Concepts",
            "author_id" => 1,
            "publisher_id" => 1
        ],
        [
            "id" => 3,
            "title" => "Computer Networks",
            "author_id" => 2,
            "publisher_id" => 2
        ],
        [
            "id" => 4,
            "title" => "Modern Operating Systems",
            "author_id" => 2,
            "publisher_id" => 2
        ]
    ];

    // Publishers list
    public function index()
    {
        return view('publishers.index', [
            'publishers' => $this->publishers
        ]);
    }

    // Publisher details
    public function show($id)
    {
        $publisherFound = null;

        // Search publisher by id
        foreach ($this->publishers as $publisher) {

            if ($publisher["id"] == $id) {
                $publisherFound = $publisher;
                break;
            }

        }
        if (!$publisherFound) {
            return "Editorial no encontrada";
        }

        // Search for books by the publisher
        $booksByPublisher = [];

        foreach ($this->books as $book) {
            if ($book["publisher_id"] == $id) {
                $booksByPublisher[] = [
                    "id" => $book["id"],
                    "title" => $book["title"]
                ];
            }
        }

       return view('publishers.show', [
            'publisher' => $publisherFound,
            'books' => $booksByPublisher
    ]);
    }
}
