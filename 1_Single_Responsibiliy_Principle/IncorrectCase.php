<?php

//Ejemplo de SRP no aplicado

class Book
{
	public $title = "A great book";
    public $author = "John Doe";

    public function printCurrentPage()
    { 
        print_r("current page content");
    }
}

class Client
{
    public function __construct()
    {
        $book = new Book();
        $book->printCurrentPage();
    }
}

$client = new Client();