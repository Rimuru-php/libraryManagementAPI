class Loan {
    public $id;
    public $bookId;
    public $memberId;
    public $loanDate;
    public $returnDate;

    public function __construct($bookId, $memberId) {
        $this->bookId = $bookId;
        $this->memberId = $memberId;
        $this->loanDate = date('Y-m-d');
        $this->returnDate = null;
    }
}
