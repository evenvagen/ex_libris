<?php

namespace App\Console\Commands;

use App\Models\Book;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class getBooksByAuthorName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:books {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get books from Googles book API!';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->url = "https://www.googleapis.com/books/v1/volumes";

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $books = $this->getBooksFromAPI();

        $this->addBooksToDB($books);

        echo 'Books retreived!';
    }

    private function getBooksFromAPI(){


        $name = $this->argument('name');


        $books = Http::get($this->url, [
            'q' => "inauthor:$name"
        ]);

        $books = json_decode($books);

        return $books;
    }


    private function addBooksToDB($books){

        foreach($books->items as $book){
            Book::firstOrCreate([
                'author' => $book->volumeInfo->authors[0],
                'title' => $book->volumeInfo->title,
                'description' => $book->volumeInfo->description ?? 'no description available',
                'genre' => NULL,
            ]);
        }

    }

}
