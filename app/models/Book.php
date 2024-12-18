class Book {
    public $id;
    public $title;
    public $author;
    public $isbn;

    public function __construct($title, $author, $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
    }
}
