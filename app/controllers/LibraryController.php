<?php
class LibraryController {
    private $books = [];
    private $members = [];
    private $loans = [];

    public function getBooks() {
        $books = $this->books; // Mock data or fetched from DB
        include __DIR__ . '/../views/library/books.php';
    }
    

    public function addBook() {
        $data = json_decode(file_get_contents("php://input"), true);
        $book = new Book($data['title'], $data['author'], $data['isbn']);
        $book->id = uniqid();
        $this->books[] = $book;
        echo json_encode(["message" => "Book added successfully"]);
    }

    public function getMembers() {
        $members = $this->members;
        include __DIR__ . '/../views/library/members.php';
    }

    public function addMember() {
        $data = json_decode(file_get_contents("php://input"), true);
        $member = new Member($data['name'], $data['email']);
        $member->id = uniqid();
        $this->members[] = $member;
        echo json_encode(["message" => "Member added successfully"]);
    }

    public function getLoans() {
        $loans = $this->loans;
        include __DIR__ . '/../views/library/loans.php';
    }

    public function issueLoan() {
        $data = json_decode(file_get_contents("php://input"), true);
        $loan = new Loan($data['bookId'], $data['memberId']);
        $loan->id = uniqid();
        $this->loans[] = $loan;
        echo json_encode(["message" => "Loan issued successfully"]);
    }
}
?>
