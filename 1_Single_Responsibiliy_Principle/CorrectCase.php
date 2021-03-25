<?php

class Book
{
	public $title = "A great book";
    public $author = "John Doe";
    public $currentPage = "current page content";
}

interface Printer
{
	public function printPage(string $page);
}

class StandardOutputPrinter implements Printer
{
	public function printPage(string $page)
	{
		print_r($page);
	}
}

class StandardOutputHtmlPrinter implements Printer
{
	public function printPage(string $page)
	{
		print_r("<div>" . $page . "</div>");
	}
}

class Client
{
	public function __construct()
	{
		$book = new Book();
		$currentPage = $book->currentPage;
		$printer = new StandardOutputHtmlPrinter();
		$printer->printPage($currentPage);
	}
}

$client = new Client();